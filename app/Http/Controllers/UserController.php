<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
class UserController extends Controller
{
    public function logout(){
        Auth::logout();
        return view('home.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
        return view('home.index');
    }
	  public function profils()
    {
		$users = User::where('id', '=', Auth::user()->id)->get();
        return view('users.index', ['user' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function dashboard($id)
    {
        $user = User::findOrFail($id);
        return view('users.index' ,['user' => $user]);
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
         // validation des données
        $this->validate($request, [
            'name' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|string',
        ]);
        $user = User::findOrFail($id);
        if ($user->update($request->all())) {
            Session::flash('success', 'Utilisateur mis à jour');
            return redirect()->route('profils' , ['id' => auth()->user()->id ]);
        } else {
           Session::flash('error', 'Error');
            return redirect()->route('profils');
        }
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
