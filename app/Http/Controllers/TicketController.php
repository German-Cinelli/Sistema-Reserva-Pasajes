<?php

namespace App\Http\Controllers;

use App\Travel;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;
//use App\Http\Requests\StoreTicketRequest;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->user()->authorizeRoles('admin'); //Autoriza el acceso a todos los usuarios que tengan como rol 'admin'.
        $travels = Travel::all(); //Consulta todos los viajes registrados y nos lo devuelve.
        return view('tickets/index', compact('travels')); //Compact genera un array con información que le asignemos.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
        $request->user()->authorizeRoles('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Travel $id)
    {
        //dd($request->all());
        $ticket = new Ticket();
        $ticket->travel_id = $request->travel_id;
        $ticket->user_id = auth()->user()->id;
        $ticket->status = "Reservado";
        $ticket->save(); //Almacenar
        //return 'Saved';
        return redirect()->route('tickets.index')->with('status', 'Ticket reservado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        $tickets = Ticket::all();
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $tickets = Ticket::all();
        return view('tickets.edit', compact('tickets'));
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
        //dd($id);
        Ticket::where('id', $id)->update(array('status' => 'Pago'));
        //$ticket->save();
        //return redirect()->route('tickets.show', [$ticket])->with('status', 'Actualización exitosa!');
        //return 'updated';
        return redirect()->route('ticket')->with('status', 'Compra concretada con éxito!');
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
        $tickets = Ticket::all();
        return view('tickets.auditor', compact('tickets'));
    }

}
