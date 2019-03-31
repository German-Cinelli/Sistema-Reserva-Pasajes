<?php

namespace App\Http\Controllers;

use App\Bus;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBusRequest;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('admin'); //Autoriza el acceso a todos los usuarios que tengan como rol 'admin'.
        $buses = Bus::all(); //Consulta todos los viajes registrados y nos lo devuelve.
        return view('buses/index', compact('buses')); //Compact genera un array con información que le asignemos.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusRequest $request)
    {
        //return $request->all(); //Obtener datos que son enviados por nuestro usuario

        $bus = new Bus();
        $bus->plate = $request->input('input-plate');
        $bus->model = $request->input('input-model');
        $bus->year = $request->input('input-year');
        $bus->capacity = $request->input('input-capacity');
        $bus->slug = ($request->input('input-plate')). time();
        $bus->save(); //Almacenar
        //return 'Saved';
        return redirect()->route('buses.index')->with('status', 'Transporte agregado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $bus)
    {
        return view('buses.show', compact('bus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $bus)
    {
        //return $bus;
        return view('buses.edit', compact('bus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $bus)
    {
        //return $request->all(); //Obtener datos que son enviados por nuestro usuario
        $bus->fill($request->all()); // fill se encarga de actualizar los datos se reciben.
        $bus->save();
        return redirect()->route('buses.show', [$bus])->with('status', 'Actualización exitosa!');
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
