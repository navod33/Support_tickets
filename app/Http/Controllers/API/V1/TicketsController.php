<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;



class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'customer_name' => 'required|max:200',
            'email' => 'required|email',
            'description' => 'required',
        ]);

        $data = $request->only([
            'customer_name',
            'email',
            'phone',
            'description',
        ]);

        $data['ref'] = sha1(time());
        $data['status'] = 0;

        $ticket = Ticket::create($data);

        if ($ticket) {
            // dispatch the TicketCreated event
            \App\Events\TicketCreated::dispatch($ticket);

            return response()->json([
                'data' => $ticket,
                'message' => 'Your ticket is created successfully. Please write down the reference number to check the ticket status later.'
            ]);
        }

        return response()->json([
            'data' => null,
            'message' => 'Oops! Could not create your ticket. Please try later.'
        ], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
