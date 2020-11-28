<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filter = [];

        // if($request->has("q")) {
        //     array_push($filter, [
        //         "Title", "like", "%".$request->get("q")."%"
        //     ]);
        // }

        $about = About::where($filter)->paginate(20);

        return view("admin.about.index")->with([
            "about" => $about
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        About::create([
            "Description" => $request->get("Description"),
        ]);

        return redirect()->route("admin.about.index")->withErrors([
            "success" => "Tạo ứng dụng thành công"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = About::findOrFail($id);

        return view("admin.about.edit")->with([
            "about" => $application
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $application = About::findOrFail($id);

      
       
        $application->Description = $request->get("Description");
   
        $application->save();

        return redirect()->route("admin.about.index")->withErrors([
            "success" => "Chỉnh sửa ứng dụng thành công"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::findOrFail($id)->delete();

        return redirect()->route("admin.about.index")->withErrors([
            "success" => "Xóa ứng dụng thành công"
        ]);
    }
}
