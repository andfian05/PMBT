<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;


use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('backend.admin.manage-users.index')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = ['Administrator', 'Panitia A', 'Panitia B', 'Panitia C'];
        
        return view('backend.admin.manage-users.create-users')->with([
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();

        $photoName = $data['photo']->getClientOriginalName() . '-' . time(). '.' . $data['photo']->extension();
        $data['photo']->move(public_path('foto/profile'), $photoName);

        User::create([
            'nama' => $data['nama'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'photo' => $photoName,
        ]);

        return redirect()->route('manage-user.index')->with('success', 'Data User Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('backend.admin.manage-users.detail')->with([
            'user' => $user
        ]);
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
        $roles = ['Administrator', 'Panitia A', 'Panitia B', 'Panitia C'];

        return view('backend.admin.manage-users.edit-users')->with([
            'user' => $user,
            'roles' => $roles
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
        $data = $request->all();

        $user = User::findOrFail($id);

        if($request->photo == ""){
            $photoName = $user->photo;
        }else{
            $photoName = $data['photo']->getClientOriginalName() . '-' . time(). '.' . $data['photo']->extension();
            $data['photo']->move(public_path('foto/profile'), $photoName);
            if($user->photo == NULL){

            }else{
                unlink(public_path('foto')."/profile/".$user->photo);
            }
        }

        if($request->password == ""){
            $password = $user->password;
        }else{
            $password = Hash::make($data['password']);
        }

        User::where('id', $user->id)
        ->update([
          'nama' => $data['nama'],
          'username' => $data['username'],
          'email' => $data['email'],
          'password' => $password,
          'role' => $data['role'],
          'photo' => $photoName,
        ]);

        return redirect()->route('manage-user.index')->with('success', 'Data User Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if(!empty($user->photo)) unlink(public_path('foto')."/profile/".$user->photo);
        $user->delete();

        return redirect()->route('manage-user.index')->with('success', 'Data User Berhasil Dihapus!');
    }
}
