<?php

namespace App\Http\Controllers;

use App\Equipament;
use Illuminate\Http\Request;

class EquipamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('auditor'); //Autoriza el acceso a todos los usuarios que tengan como rol especificado.
        $equipaments = Equipament::all(); //Consulta todos los viajes registrados y nos lo devuelve.
        return view('equipaments/index', compact('equipaments')); //Compact genera un array con información que le asignemos.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipaments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            $equipament = new Equipament();

            $equipament->type = $request->type;
            $equipament->description = $request->description;
            $equipament->model = $request->model;
            $equipament->status = $request->status;

            $equipament->save();
            return response()->json([
                "message" => "Registro con exito!",
                "equipament" => $equipament,
            ], 200);
        }
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
        //
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
