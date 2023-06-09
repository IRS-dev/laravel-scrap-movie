<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{

    public function userExport()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   return view('admin.user.index',[
       'users' => User::all()
   ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'email' => ['required','max:255','unique:users'],
            'password' => ['required',],
            'role' => ['required','boolean'],
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/dashboard/user')->with('success','New User has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        return view('admin.user.show',[
            'user' => User::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.user.edit',[
            'user' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,User $user)
    {
        $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'email' => ['required','max:255','unique:users'],
            'role' => ['required','boolean'],
        ]);
        User::where('id',$user->id)->update($validatedData);
        return redirect('/dashboard/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/dashboard/user')->with('success','movie had been deleted');
    }
}