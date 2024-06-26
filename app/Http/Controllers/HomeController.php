<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\collegeModel;

class HomeController extends Controller
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
    public function index()
    {
        // dd(collegeModel::all());
        $colleges = collegeModel::all();
        return view('home', compact('colleges'));
    }

    public function vueindex(){
        return view("app");
    }
}
