<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baru;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function baru()
    {
        $baru = Baru::all();
        return view ('home', ['baru' => $baru]);

        $value = Cache::remember('barus', $seconds, function () {
            return DB::table('barus')->get();
        });
    }
}
