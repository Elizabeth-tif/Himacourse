<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class DosenController extends Controller
{
    public function display()
    {
        $dosens = Dosen::all();
        return view('home', compact('dosens'));
    } 
}