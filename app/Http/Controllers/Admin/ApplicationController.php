<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $applications = Application::paginate(20);

        return view("admin.application.index")->with([
            "applications" => $applications
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.application.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationRequest $request)
    {
        $request->validated();

        Application::create([
            "Title" => $request->get("Title"),
            "Image" => $request->get("Image"),
            "Description" => $request->get("Description"),
            "Status" => 1,
        ]);

        return redirect()->route("admin.application.index")->withErrors([
            "success" => "Tạo ứng dụng thành công"
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
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::findOrFail($id);

        return view("admin.application.edit")->with([
            "application" => $application
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApplicationRequest $request, $id)
    {
        $application = Application::findOrFail($id);

        $request->validated();

        $application->Title = $request->get("Title");
        $application->Image = $request->get("Image");
        $application->Description = $request->get("Description");
        $application->Status = 1;
        $application->save();

        return redirect()->route("admin.application.index")->withErrors([
            "success" => "Chỉnh sửa ứng dụng thành công"
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
        Application::findOrFail($id)->delete();

        return redirect()->route("admin.application.index")->withErrors([
            "success" => "Xóa ứng dụng thành công"
        ]);
    }
}
