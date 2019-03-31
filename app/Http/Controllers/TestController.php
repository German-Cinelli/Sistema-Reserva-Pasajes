<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('auditor'); //Autoriza el acceso a todos los usuarios que tengan como rol especificado.
        $tests = Test::all(); //Consulta todos los viajes registrados y nos lo devuelve.
        return view('tests/index', compact('tests')); //Compact genera un array con información que le asignemos.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tests.create');
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
            $test = new Test();
            /*$travel->origin = $request->input('input-origin');
            $travel->destination = $request->input('input-destination');
            $travel->datetime = $request->input('input-datetime');
            $travel->price = $request->input('input-price');
            $travel->slug = ($request->input('input-origin')). ($request->input('input-destination')) . time();
            $travel->save(); //Almacenar*/
            $test->date = $request->date;
            $test->description = $request->description;
            $test->dmg = $request->dmg;
            $test->threat = $request->threat;
            $test->risk = $request->dmg*$request->threat;

            $test->save();
            return response()->json([
                "message" => "Registro con exito!",
                "test" => $test,
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
        $tests = Test::all();
        $view = view ('tests.show', compact('tests'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('tests');
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

    public function pdf()
    {
        $tests = Test::all();
        $pdf = PDF::loadView('pdf.tests', compact('tests'));

        return $pdf->download('listado.pdf');
    }
}
