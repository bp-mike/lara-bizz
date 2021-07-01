<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Listing;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Listing $listing)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard', ['listing' => $listing])->with('listings', $user->listings);
    }
}
