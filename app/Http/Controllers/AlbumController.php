<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Album;
// use App\User;
use App\Tag;
use Carbon\Carbon;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Album $album)
     {
         // $users = User::all();
         $tags = Tag::all();

         return view('albums.edit', [
           'album' => $album,
           // 'users' => $users,
           'tags' => $tags,
         ]);
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Album $album)
     {
         $data = $request->all();

         if (isset($data['tags'])) {
           $album->tags()->sync($data['tags']);
         } else {
           $album->tags()->detach();
         }

         // Salvo la data e ora attuale in updated_at
         $album->updated_at = Carbon::now();
         $album->update($data);

        return redirect()->route('albums.show', $album);
     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Album $album)
     {
         $album->tags()->detach();
         $album->delete();

        return redirect()->route('albums.index');
     }

}
