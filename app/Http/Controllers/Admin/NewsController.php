<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(20);

        return view("admin.news.index")->with([
            "news" => $news
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
        return view("admin.news.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $request->validated();

        News::create([
            "Title" => $request->get("Title"),
            "Image" => $request->get("Image"),
            "Description" => $request->get("Description"),
            "Status" => 1,
            "UserId" => Auth::user()->UserId
        ]);

        return redirect()->route("admin.news.index")->withErrors([
            "success" => "Tạo tin tức thành công"
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
        $news = News::findOrFail($id);

        return view("admin.news.edit")->with([
            "news" => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $news = News::findOrFail($id);

        $request->validated();

        $news->Title = $request->get("Title");
        $news->Image = $request->get("Image");
        $news->Description = $request->get("Description");
        $news->Status = 1;
        $news->save();

        return redirect()->route("admin.news.index")->withErrors([
            "success" => "Chỉnh sửa tin tức thành công"
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
        News::findOrFail($id)->delete();

        return redirect()->route("admin.news.index")->withErrors([
            "success" => "Xóa tin tức thành công"
        ]);
    }
}
