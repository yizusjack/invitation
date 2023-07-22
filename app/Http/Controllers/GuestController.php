<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Event $event)
    {
        return view('guests.createGuest', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Event $event, Request $request)
    {
        $request->validate([
            'name_g' => ['required', 'max:255'],
            'tickets_g' => ['required', 'integer', 'min:1'],
        ]);
        $request['events_id'] = $event->id;
        //dd($event);
        Guest::create($request->all()); 

        return redirect()->route('event.show', $event);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event, Guest $guest)
    {
        //$event = Event::where('id', '=', $guest->events_id)->with('places')->get();
        //$event= Event::find($guest->events_id);
        //$hoy=getdate();
        //dd($hoy[0]);
        return view('guests.invitation', compact('guest', 'event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event, Guest $guest)
    {
        return view('guests.editGuest', compact('event', 'guest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Event $event, Request $request, Guest $guest)
    {
        $request->validate([
            'name_g' => ['required', 'max:255'],
            'tickets_g' => ['required', 'integer', 'min:1'],
            'confirmed_g' => ['required', 'boolean'],
        ]);
        $request['table_g'] = $guest->tickets_g;
        $request['events_id'] = $guest->events_id;

        //dd($request);

        Guest::where('id', $guest->id)->update($request->except('_token', '_method'));
        //return redirect()->route('guest.show', $guest) . '/#confirmation';
        return redirect()->route('event.show', $event);
    }

    public function confirm(Request $request, Guest $guest)
    {
        $request->validate([
            'confirmed_g' => ['required', 'boolean'],
        ]);
        $request['name_g'] = $guest->name_g;
        $request['tickets_g'] = $guest->tickets_g;
        $request['table_g'] = $guest->tickets_g;
        $request['events_id'] = $guest->events_id;

        //dd($request);

        Guest::where('id', $guest->id)->update($request->except('_token', '_method'));
        //return redirect()->route('guest.show', $guest) . '/#confirmation';
        return redirect(route('guest.show', [$guest->events_id, $guest]) . '/#confirmation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event, Guest $guest)
    {
        $guest->delete();
        return redirect()->route('event.show', $event);
    }
}
