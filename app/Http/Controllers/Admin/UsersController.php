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

        $request->validate([
            "Password" => "required|min:8"
        ]);

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
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validated();

        // check change password and password confirm
        if ($request->input("Password") !== null || $request->input("Password_confirm") !== null) {
            $request->validate([
                "Password" => "required|min:8",
                "Password_confirm" => "required|min:8|same:Password",
            ]);

            $user->Password = Hash::make($request->input("Password"));
        }

        $user->Name = $request->get("Name");
        $user->Gender = intval($request->get("Gender"));
        $user->Birthday = $request->get("Birthday");
        $user->Image = $request->get("Image");
        $user->save();

        return redirect()->route("admin.users.index")->withErrors([
            "success" => "Cập nhật tài khoản thành công",
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
        User::findOrFail($id)->delete();
    
        return redirect()->route("admin.users.index")->withErrors([
            "success" => "Xóa tài khoản thành công",
        ]);
    }
}
