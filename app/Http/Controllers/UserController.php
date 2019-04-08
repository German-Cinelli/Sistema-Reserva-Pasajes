<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('employee'); //Autoriza el acceso a todos los usuarios que tengan como rol 'admin'.
        $users = User::all(); //Consulta todos los usuarios registrados y nos lo devuelve.
        return view('users/index', compact('users')); //Compact genera un array con información que le asignemos.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        return $request->all(); //Obtener datos que son enviados por nuestro usuario
        $user = new User();
        $user->name = $request->input('input-name');
        $user->lastname = $request->input('input-lastname');
        $user->dni = $request->input('input-dni');
        $user->departament = $request->input('input-departament');
        $user->location = $request->input('input-location');
        $user->address = $request->input('input-address');
        $user->number = $request->input('input-number');
        $user->apartament = $request->input('input-apartament');
        $user->email = $request->input('input-email');
        $user->slug = ($request->input('input-name')). ($request->input('input-lastname')) . time();
        $user->save(); //Almacenar
        //return 'Saved';
        return redirect()->route('users.index')->with('status', 'Usuario agregado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //return $request->all(); //Obtener datos que son enviados por nuestro usuario
        $user->fill($request->all()); // fill se encarga de actualizar los datos se reciben.
        $user->save();
        return redirect()->route('users.show', [$user])->with('status', 'Actualización exitosa!');
        //return 'updated';
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
