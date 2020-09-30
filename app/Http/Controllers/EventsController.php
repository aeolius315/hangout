<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $events = Event::orderBy('created_At','asc')->get();
        $events = Event::orderBy('created_At','asc')->take(5)->get();
        // $events = Event::orderBy('created_At','asc')->paginate(5);
        return view('events.index')->with('events', $events);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    
    public function search(Request $request) 
    {
        $event = new Event;
        // $event->date = $request->input('date');
        $event->city = $request->input('city');
        $events = Event::where('event_city', $event)->orderBy('created_At','asc')->take(5)->get();
        return view('events.index')->wth('event', $events);
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
            'title' => 'required',
            'body' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'event_address' => 'required',
            'event_city' => 'required'
        ]);

        // Create Event
        $event = new Event;
        $event->title = $request->input('title');
        $event->body = $request->input('body');
        $event->event_date = $request->input('event_date');
        $event->event_time = $request->input('event_time');
        $event->event_address = $request->input('event_address');
        $event->event_city = $request->input('event_city');

        // For Uploading an Image
        // $file = $request->file('event_image');
    
        // //Display File Name
        // echo 'File Name: '.$file->getClientOriginalName();
        // echo '<br>';
    
        // //Display File Extension
        // echo 'File Extension: '.$file->getClientOriginalExtension();
        // echo '<br>';
    
        // //Display File Real Path
        // echo 'File Real Path: '.$file->getRealPath();
        // echo '<br>';
    
        // //Display File Size
        // echo 'File Size: '.$file->getSize();
        // echo '<br>';
    
        // //Display File Mime Type
        // echo 'File Mime Type: '.$file->getMimeType();
    
        // //Move Uploaded File
        // $destinationPath = 'uploads';
        // $file->move($destinationPath,$file->getClientOriginalName());

            
        $event->event_image = $request->input('event_image');
        $event->user_id = auth()->user()->id;

        $event->save();

        return redirect('/events')->with('success', 'Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);

        //Check for correct User
        if(auth()->user()->id !== $event->user_id){
            return redirect('/events')->with('error', 'Unauthorized Page');
        }
        return view('events.edit')->with('event', $event);
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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'event_address' => 'required',
            'event_city' => 'required'
        ]);

        // Update Event
        $event = Event::find($id);
        $event->title = $request->input('title');
        $event->body = $request->input('body');
        $event->event_date = $request->input('event_date');
        $event->event_time = $request->input('event_time');
        $event->event_address = $request->input('event_address');
        $event->event_city = $request->input('event_city');
        $event->event_image = $request->input('event_image');

        $event->save();

        return redirect('/events')->with('success', 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        //Check for correct User
        if(auth()->user()->id !== $event->user_id){
            return redirect('/events')->with('error', 'Unauthorized Page');
        }
        
        $event->delete();
        
        return redirect('/events')->with('success', 'Event Deleted');
    }
}
