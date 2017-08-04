<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //array of data
        $galleries = Gallery::all();
        return view('/gallery/gallery', compact('galleries')); //compact receive array of data
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

    protected function addGallery(Request $request)
    {
//        if (Auth::guest()){
//            return redirect('/login');
//        }



        $this->validate($request, [
            'title' =>'required'
        ]);

        $input = $request->all();
        $input['price']= 27.00;
        if ($file = $request->file('photo_name')){
            $name = time() . $file->getClientOriginalName();
            $file->move('post_owner_images', $name);
            $input['photo_name'] = $name;
        }

       Gallery::create($input);

      return redirect('/gallery');

    }

    protected function deleteGallery($id)
    {
        $gallery = Gallery::findOrFail($id);

        unlink(public_path($gallery->photo_name));

        $gallery->delete();
        return redirect('/gallery');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    protected function edit_post($id)
    {



        $editGalleries = Gallery::findOrFail($id);
        return view('/gallery/edit_gallery', compact('editGalleries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    protected function update_post(Request $request, $id)
    {

        $input = $request->all();
        $input['price']= 27.00;
        if ($file = $request->file('photo_name')){
            $name = time() . $file->getClientOriginalName();
            $file->move('post_owner_images', $name);
            $input['photo_name'] = $name;
        }

        Gallery::whereId($id)->first()->update($input);

        return redirect('/gallery');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
