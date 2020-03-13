<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name" => "required|string|min:3",
            "email" => "required|unique:users",
            "password" => "required|same:confirm_password"
        ],[
            "required" => "El campo es obligatorio.",
            "unique" => "Este email ya existe.",
            "string" => "El nombre debe ser texto.",
            "same" => "Las contraseñas no coinciden."
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = password_hash($request->password,PASSWORD_DEFAULT);
    
        $nuevoUsuario->save();

        return redirect("/");
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
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('users.edit',compact('usuario'));
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
        $this->validate($request,[
            "name" => "required|string|min:3",
            "email" => "required|unique:users",
            "password" => "required|same:confirm_password"
        ],[
            "required" => "El campo es obligatorio.",
            "unique" => "Este email ya existe.",
            "string" => "El nombre debe ser texto.",
            "same" => "Las contraseñas no coinciden."
        ]);

        $usuarioAEditar = User::find($id);
        $usuarioAEditar->name = $request->name;
        $usuarioAEditar->email = $request->email;
        $usuarioAEditar->password = $request->password;
        $usuarioAEditar->save();

        return redirect('/');
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

    public function miPerfil(){
        $usuario = Auth::user();
        return view('usuario',compact('usuario'));

    }
}
