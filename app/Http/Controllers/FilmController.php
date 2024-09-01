<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'About Fortress Studios';
        $pageName = 'About Us';
        $pageMetaDescription = 'About Fortress Studios';
        return view('pages.projects', [
            'pageTitle' => $pageTitle,
            'pageName' => $pageName,
            'pageMetaDescription' => $pageMetaDescription,
        ]);
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
    public function store(StoreFilmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        $pageTitle = "Fortress Studios Presents: " . $film->name;
        $pageName = $film->title;
        $pageMetaDescription = $film->description;
        return view('pages.project_detail', [
            'film' => $film,
            'pageTitle' => $pageTitle,
            'pageName' => $pageName,
            'pageMetaDescription' => $pageMetaDescription,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }
}
