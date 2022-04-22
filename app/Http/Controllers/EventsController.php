<?php

namespace App\Http\Controllers;
use Flashy;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function store(EventFormRequest $request)
    {
        Event::create(['title' => $request->title, 'description' => $request->description]);
        Flashy::message('Welcome Aboard!', 'http://your-awesome-link.com');
        return redirect()->route('index');

        /*

    Flashy::info('Message', 'http://your-awesome-link.com')
    Flashy::success('Message', 'http://your-awesome-link.com')
    Flashy::error('Message', 'http://your-awesome-link.com')
    Flashy::warning('Message', 'http://your-awesome-link.com')
    Flashy::primary('Message', 'http://your-awesome-link.com')
    Flashy::primaryDark('Message', 'http://your-awesome-link.com')
    Flashy::muted('Message', 'http://your-awesome-link.com')
    Flashy::mutedDark('Message', 'http://your-awesome-link.com')

    */
    }


}
