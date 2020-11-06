<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Http\Requests\TypeRequest;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = [];

        if($request->has("title")) {
            array_push($filter, [
                "Title", "like", "%".$request->get("title")."%"
            ]);
        }

        $type = Type::where($filter)->paginate(20);

        return view("admin.type.index")->with([
            "type" => $type
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeRequest $request)
    {
        $request->validated();

        Type::create([
            "Title" => $request->get("Title")
        ]);

        return redirect()->route("admin.type.index")->withErrors([
            "success" => "Tạo thành công loại dịch vụ"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::findOrFail($id);

        return view("admin.type.edit")->with([
            "type" => $type
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(TypeRequest $request, $id)
    {
        $type = Type::findOrFail($id);

        $request->validated();

        $type->Title = $request->get("Title");
        $type->save();

        return redirect()->route("admin.type.index")->withErrors([
            "success" => "Cập nhật thể loại thành công"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Type::findOrFail($id)->delete();

        return redirect()->route("admin.type.index")->withErrors([
            "success" => "Xóa loại dịch vụ thành công"
        ]);
    }
}
