<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\Type;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = [];

        if ($request->has("title")) {
            array_push($filter, [
                "Title", "like", "%".$request->get("title")."%"
            ]);
        }

        $service = Service::where($filter)->paginate(20);

        return view("admin.service.index")->with([
            "service" => $service,
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.service.create", [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $request->validated();

        Service::create([
            "Title" => $request->get("Title"),
            "TypeId" => $request->get("TypeId"),
            "Image" => $request->get("Image"),
            "Description" => $request->get("Description"),
            "Status" => 1,
        ]);

        return redirect()->route("admin.service.index")->withErrors([
            "success" => "Tạo ứng dụng thành công"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view("admin.service.edit")->with([
            "service" => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validated();

        $service->Title = $request->get("Title");
        $service->Image = $request->get("Image");
        $service->TypeId = $request->get("TypeId");
        $service->Description = $request->get("Description");
        $service->Status = 1;
        $service->save();

        return redirect()->route("admin.service.index")->withErrors([
            "success" => "Chỉnh sửa dịch vụ thành công"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::findOrFail($id)->delete();

        return redirect()->route("admin.service.index")->withErrors([
            "success" => "Xóa dịch vụ thành công"
        ]);
    }
}
