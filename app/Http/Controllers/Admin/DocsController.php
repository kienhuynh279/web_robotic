<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocsRequest;
use App\Models\Docs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $filter = [];
        $title = $request->get("title");

        if($request->has("title")) {
            array_push($filter, [
                "Title", "like", "%".$request->get("title")."%"
            ]);
        }

        $docs = Docs::where($filter)->paginate(20);

        return view("admin.docs.index")->with([
            "docs" => $docs
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
        return view("admin.docs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocsRequest $request)
    {
        //
        $request->validated();

        Docs::create([
            "Title" => $request->get("Title"),
            "Image" => $request->get("Image"),
            "Description" => $request->get("Description"),
            "Status" => 1,
            "UserId" => Auth::user()->UserId
        ]);

        return redirect()->route("admin.docs.index")->withErrors([
            "success" => "Tạo tài liệu thành công"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docs  $docs
     * @return \Illuminate\Http\Response
     */
    public function show(Docs $docs)
    {
        //
        return abort($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docs  $docs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $docs = Docs::findOrFail($id);

        return view("admin.docs.edit")->with([
            "docs" => $docs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docs  $docs
     * @return \Illuminate\Http\Response
     */
    public function update(DocsRequest $request, $id)
    {
        //
        $news = Docs::findOrFail($id);

        $request->validated();

        $news->Title = $request->get("Title");
        $news->Image = $request->get("Image");
        $news->Description = $request->get("Description");
        $news->Status = 1;
        $news->save();

        return redirect()->route("admin.docs.index")->withErrors([
            "success" => "Chỉnh sửa tài liệu thành công"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docs  $docs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Docs::findOrFail($id)->delete();

        return redirect()->route("admin.docs.index")->withErrors([
            "success" => "Xóa tài liệu thành công"
        ]);
    }
}
