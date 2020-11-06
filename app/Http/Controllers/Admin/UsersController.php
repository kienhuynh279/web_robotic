<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
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
        $qname = $request->get("qname");
        $qemail = $request->get("qemail");

        if($qname !== null) {
            array_push($filter, [
                "Name", "like", "%".$qname."%"
            ]);
        }
        
        if($qemail !== null) {
            array_push($filter, [
                "Email", "like", "%".$qemail."%"
            ]);
        }

        $users = User::where($filter)->paginate(20);

        return view("admin.users.index")->with([
            "users" => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $request->validated();

        // return $request->all();

        $user = User::create([
            "Name" => $request->get("Name"),
            "Email" => $request->get("Email"),
            "Birthday" => $request->get("Birthday"),
            "Password" => Hash::make($request->get("Password")),
            "Gender" => intval($request->get("Gender"))
        ]);

        return redirect()->route("admin.users.index")->withErrors([
            "success" => "Cấp tài khoản thành công",
            "user" => $user
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view("admin.users.edit")->with([
            "user" => $user
        ]);
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