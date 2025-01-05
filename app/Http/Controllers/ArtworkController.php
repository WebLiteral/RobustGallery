<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Collection;

use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query == "sortbylatest") {
            $allArtworks = Artwork::orderByDesc('created_at')->get();
        }  elseif ($query) {
            $allArtworks = Artwork::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description','LIKE', "%{$query}%")
            ->orderByDesc('creation_date')
            ->orderByDesc('id')
            ->get();
        } else {
            $allArtworks = Artwork::orderByDesc('creation_date')->orderByDesc('id')->get();
        }

        return view('artworks.index', compact('allArtworks', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    public function random()
    {
        $artworkCount = Artwork::count();
        $currentArtwork = Artwork::inRandomOrder()->first();
        return $this->renderArtworkView($currentArtwork, $artworkCount);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    public function latest()
    {
        $artworkCount = Artwork::count();
        $currentArtwork = Artwork::orderByDesc('creation_date')->orderByDesc('id')->first();

        return $this->renderArtworkView($currentArtwork, $artworkCount);
    }

    public function show($slug)
    {
        $artworkCount = Artwork::count();
        $currentArtwork = Artwork::where('slug', $slug)->first();

        return $this->renderArtworkView($currentArtwork, $artworkCount);
        }

    private function renderArtworkView($currentArtwork, $artworkCount)
    {
        $position = Artwork::where('creation_date', '<', $currentArtwork->creation_date)
            ->orWhere(function ($query) use ($currentArtwork) {
                $query->where('creation_date', $currentArtwork->creation_date)
                    ->where('id', '<', $currentArtwork->id);
            })
            ->count() + 1;

        $prevArtwork = Artwork::where('creation_date', '<', $currentArtwork->creation_date)
            ->orWhere(function ($query) use ($currentArtwork) {
                $query->where('creation_date', '=', $currentArtwork->creation_date)
                    ->where('id', '<', $currentArtwork->id);
            })
            ->orderBy('creation_date', 'desc')
            ->orderBy('id', 'desc')
            ->first();

        $nextArtwork = Artwork::where('creation_date', '>', $currentArtwork->creation_date)
            ->orWhere(function ($query) use ($currentArtwork) {
                $query->where('creation_date', '=', $currentArtwork->creation_date)
                    ->where('id', '>', $currentArtwork->id);
            })
            ->orderBy('creation_date')
            ->orderBy('id')
            ->first();

        return view('artworks.show', [
            'artwork' => $currentArtwork,
            'position' => $position,
            'artworkCount' => $artworkCount,
            'prevArtwork' => $prevArtwork ? $prevArtwork->slug : '',
            'nextArtwork' => $nextArtwork ? $nextArtwork->slug : '',
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

}
