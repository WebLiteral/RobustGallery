<?php

namespace App\Http\Controllers;

use App\Models\Fanart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Drivers\Gd\Driver;



class FanartController extends Controller
{
    public function index(Request $request)
    {


        $query = $request->input('year');
        if ($query) {
            $allFanart = Fanart::whereYear('creation_date', $query)->orderByDesc('creation_date')->get();
        } else {
            $allFanart = Fanart::orderByDesc('creation_date')->get();
        }

        return view('fanart.index', compact('allFanart'));
    }



    public function store(Request $request)
    {
        try {
            $request->merge([
                'artist_name' => (string) Str::of($request->input('artist_name'))
                    ->lower()
                    ->replaceMatches('/[^a-z0-9]/', ''),
            ]);

            $request->validate([
                'artist_name' => ['string', 'required'],
                'creation_date' => ['date', 'required'],
            ]);

            $file = $request->file('artworkFile');

            $image = Image::read($file);
            $image->scaleDown(height: 1024);
            $webpImage = (string) $image->toWebp(75);

            $randomDigits = rand(1000, 9999);

            $fileName = request('artist_name') . '_' . request('creation_date') . '_' . $randomDigits;

            $fanart = Fanart::create([
                'artist_name' => request('artist_name'),
                'creation_date' => Carbon::parse(request('creation_date'))->format('Y-m-d'),
                'slug' =>  $fileName
            ]);


            if (!$fanart) {
                throw new Exception('Failed to upload artwork to database');
            }

            Storage::disk('s3')->put('test/' . $fileName . '.webp', $webpImage);
            return redirect()->route('fanart.submitted')
                ->with('success', 'File uploaded successfully!');
        } catch (Exception $e) {
            // Handle the error and return an appropriate response
            return response()->json(['error' => 'File upload failed: ' . $e->getMessage()], 500);
        }
    }

    public function submitted()
    {

        return view('fanart.submitted');
    }
}
