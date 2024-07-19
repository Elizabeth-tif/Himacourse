<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\identitas;

class ShowController extends Controller
{
    public function show()
    {
        $data = identitas::all();
        $dosens = Dosen::all();
        return view('home', compact('data', 'dosens'));
    }
}
