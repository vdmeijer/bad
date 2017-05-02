<?php

namespace App\Http\Controllers;

use App\Event;
use App\Member;
use DB;

class PagesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home')
            ->with('content', DB::table('pages')->where('slug', __FUNCTION__)->first());
    }

    public function events()
    {
        return view('events')
            ->with('content', DB::table('pages')->where('slug', __FUNCTION__)->first())
            ->with('events', Event::orderBy('date', 'DESC')->get());
    }

    public function members()
    {
        return view('members')
            ->with('content', DB::table('pages')->where('slug', __FUNCTION__)->first())
            ->with('members', Member::get());
    }

    public function contact()
    {
        return view('contact')
            ->with('content', DB::table('pages')->where('slug', __FUNCTION__)->first());
    }
}
