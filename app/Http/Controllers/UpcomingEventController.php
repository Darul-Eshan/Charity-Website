<?php

namespace App\Http\Controllers;

use App\Models\UpcomingEvent;
use Illuminate\Http\Request;

class UpcomingEventController extends Controller
{
    public function eventAdd()
    {
        return view('admin.UpcomingEvent.event-add');
    }
    public function eventSave(Request $request)
    {
        UpcomingEvent::eventSave($request);
        return redirect(route('upcoming.event.add'))->with('message', 'Event saved successfully');
    }
}
