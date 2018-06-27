<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absensi;

class FrontendController extends Controller
{
	public function index()
    {
        $b = Absensi::with('siswa')->get();
        return view('welcome',compact('b'));
    }

}
    