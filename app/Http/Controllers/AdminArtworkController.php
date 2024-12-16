<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Drivers\Gd\Driver;

class AdminArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allArtworks = Artwork::orderByDesc('creation_date')->orderByDesc('id')->get();

        return view('admin.artworks.index')->with('allArtworks', $allArtworks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.artworks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //check if they are the right data type
            $request->validate([
                'title' => ['string'],
                'description' => ['nullable', 'string'],
                'creation_date' => ['date'],
                'slug' => ['string']
            ]);

            //this handles the file stuff
            $file = $request->file('artworkFile');
            $fileName = request('slug');

            $image = Image::read($file);
            $image->scaleDown(height: 800);
            $webpImage = (string) $image->toWebp(75);

            Storage::disk('s3')->put('artwork/literalhat-' . $fileName . '.webp', $webpImage);

            $artwork = Artwork::create([
                'title' => request('title'),
                'description' => request('description'),
                'creation_date' => Carbon::parse(request('creation_date'))->format('Y-m-d'),
                'slug' =>  request('slug'),
            ]);

            if (!$artwork) {
                throw new Exception('Failed to upload artwork to database');
            }

            return redirect()->route('admin.artworks')
                ->with('success', 'File uploaded successfully!');

        } catch (Exception $e) {
            // Handle the error and return an appropriate response
            return response()->json(['error' => 'File upload failed: ' . $e->getMessage()], 500);
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $artwork = Artwork::where('slug', $slug)->first();
        return view('admin.artworks.edit', ['artwork' => $artwork]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($slug)
{
    $artwork = Artwork::where('slug', $slug)->firstOrFail();
    
    request()->validate([
        'title' => ['nullable', 'string'], // Use 'nullable' if fields are optional
        'description' => ['nullable', 'string'],
        'creation_date' => ['nullable', 'date'],
    ]);

    $artwork->update([
        'title' => request('title'),
        'description' => request('description'),
        'creation_date' => request('creation_date') ? Carbon::parse(request('creation_date'))->format('Y-m-d') : null,
    ]);

    return redirect('/dashboard/artworks'); // Use redirect instead of view for updates
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $artwork = Artwork::where('slug', $slug)->firstOrFail();
        
        $fileName = "artwork/" . $slug . ".webp";

        if (Storage::disk('s3')->exists($fileName)) {
            Storage::disk('s3')->delete($fileName);
        }

        $artwork->delete();

        return redirect('/dashboard/artworks');
    }
}
