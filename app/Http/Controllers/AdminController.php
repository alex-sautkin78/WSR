<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Status;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        return view('admin.index', ['data' => Application::all()]);
    }
    public function all($id){
        return view('all', ['data' => Application::find($id), 'st'=>Status::all()]);
    }
}
