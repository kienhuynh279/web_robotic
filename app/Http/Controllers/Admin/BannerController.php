<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = [];

        if($request->has("q")) {
            array_push($filter, [
                "Title", "like", "%".$request->get("q")."%"
            ]);
        }

        $banners = Banner::where($filter)->paginate(20);

        return view("admin.banners.index")->with([
            "banners" => $banners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.banners.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        $request->validated();

        Banner::create([
            "Title" => $request->get("Title"),
            "Description" => $request->get("Description"),
            "Link" => $request->get("Link"),
            "Background" => $request->get("Background"),
            "Object" => $request->get("Object")
        ]);

        return redirect()->route("admin.banners.index")->withErrors([
            "success" => "Tạo banner thành công"
        ]);
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
        return abort($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);

        return view("admin.banners.edit")->with([
            "banner" => $banner 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $request->validated();

        $banner->Title = $request->get("Title");
        $banner->Description = $request->get("Description");
        $banner->Link = $request->get("Link");
        $banner->Background = $request->get("Background");
        $banner->Object = $request->get("Object");

        $banner->save();

        return redirect()->route("admin.banners.index")->withErrors([
            "success" => "Chỉnh sửa banner thành công"
        ]);
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
        Banner::findOrFail($id)->delete();

        return redirect()->route("admin.banners.index")->withErrors([
            "success" => "Xóa banner thành công"
        ]);
    }
}
