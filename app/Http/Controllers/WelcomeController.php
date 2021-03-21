<?php


namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', ['data' => Application::all()]);
    }

    public function otvet()
    {
        $st = Status::where('name', 'Решена')->first()->id;
        $appl_count = Application::where('status_id', $st)->count();
        $user = User::all();
        $user_count = $user->count();
        return response()->json([
            'data' => $user_count,
            'appl_count' => $appl_count,
        ]);
    }

}
