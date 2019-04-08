<?php

namespace App\Http\Controllers;

use App\Travel;
use App\User;
use Illuminate\Http\Request;
//use App\Http\Requests\StoreTravelRequest;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('employee'); //Autoriza el acceso a todos los usuarios que tengan como rol 'admin'.
        //$request->user()->authorizeRoles('employee');
        $travels = Travel::all(); //Consulta todos los viajes registrados y nos lo devuelve.
        return view('travels/index', compact('travels')); //Compact genera un array con información que le asignemos.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('travels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //public function store(Request $request)
    public function store(Request $request)
    {
        //dd($request->all());
        //Return $request->all();
        //Vue js
        if($request->ajax()){
            $travel = new Travel();
            /*$travel->origin = $request->input('input-origin');
            $travel->destination = $request->input('input-destination');
            $travel->datetime = $request->input('input-datetime');
            $travel->price = $request->input('input-price');
            $travel->slug = ($request->input('input-origin')). ($request->input('input-destination')) . time();
            $travel->save(); //Almacenar*/
            $travel->user_id = auth()->user()->id;
            $travel->origin = $request->origin;
            $travel->destination = $request->destination;
            $travel->datetime = $request->datetime;
            $travel->price = $request->price;
            $travel->slug = $request->origin . $request->destination . time();
            $travel->save();
            return response()->json([
                "message" => "Viaje agregado correctamente!",
                "travel" => $travel,
            ], 200);
        }
        //return $request->all(); //Obtener datos que son enviados por nuestro usuario
        /*$travel = new Travel();
        $travel->origin = $request->input('input-origin');
        $travel->destination = $request->input('input-destination');
        $travel->price = $request->input('input-price');
        $travel->datetime = $request->input('input-datetime');
        //$travel->time = $request->input('input-time');
        $travel->slug = ($request->input('input-origin')). ($request->input('input-destination')) . time();
        //$travel->slug = $travel->origin->getClientOriginalName();
        $travel->save(); //Almacenar
        //return 'Saved';
        return redirect()->route('travels.index')->with('status', 'Viaje agregado correctamente!');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Travel $travel)
    {

        return view('travels.show', compact('travel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel $travel)
    {
        //return $travel;
        return view('travels.edit', compact('travel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel $travel)
    {
        //return $request->all(); //Obtener datos que son enviados por nuestro usuario
        $travel->fill($request->all()); // fill se encarga de actualizar los datos se reciben.
        $travel->save();
        return redirect()->route('travels.show', [$travel])->with('status', 'Actualización exitosa!');
        //return 'updated';
    }

    public function reserve()
    {
        $travels = Travel::all();
        return view('travels.reserve', compact('travels'));
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

    public function auditor()
    {
        $travels = travel::all();
        return view('travels.auditor', compact('travels'));
    }
}
