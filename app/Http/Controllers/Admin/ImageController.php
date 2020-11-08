<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = [];

        if($request->has("src")) {
            array_push($filter, [
                "Src", "like", "%".$request->get("src")."%"
            ]);
        }

        $img = Image::where($filter)->paginate(20);

        return view("admin.image.index")->with([
            "image" => $img
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.image.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        $img = Image::Create();

        $request->validated();
        $img->Src = $request->get("Src");
        $img->Alt = $request->get("Alt");
        $img->save();

        return redirect()->route("admin.image.index")->withErrors([
            "success" => "Tao thành công"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $img = Image::findOrFail($id);

        return view("admin.image.edit")->with([
            "image" => $img
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(ImageRequest $request, $id)
    {
        $img = Image::findOrFail($id);

        $request->validated();
        $img->Src = $request->get("Src");
        $img->Alt = $request->get("Alt");
        $img->save();

        return redirect()->route("admin.image.index")->withErrors([
            "success" => "Cập nhật thành công"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
