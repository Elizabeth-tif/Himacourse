<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class CRUDController extends Controller
{
    
    public function form_dosen()
    {
        return view('add_dosen');
    }

    
    public function add_dosen(Request $request)
    {
        
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:dosens,nip',
            'alamat' => 'required|string|max:255',
            'mata_kuliah' => 'required|string|max:255',
        ]);

        
        $dosen = new Dosen;
        $dosen->nama = $validatedData['nama'];
        $dosen->nip = $validatedData['nip'];
        $dosen->alamat = $validatedData['alamat'];
        $dosen->mata_kuliah = $validatedData['mata_kuliah'];
        $dosen->save();

        return redirect('/main')->with('success', 'Dosen added successfully!');
    }

    
    public function edit_dosen($id)
    {
        $dosen = Dosen::find($id);
        return view('edit_dosen', compact('dosen'));
    }

    
    public function update_dosen(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:dosens,nip,' . $id, 
            'alamat' => 'required|string|max:255',
            'mata_kuliah' => 'required|string|max:255',
        ]);

        
        $dosen = Dosen::find($id);
        $dosen->nama = $validatedData['nama'];
        $dosen->nip = $validatedData['nip'];
        $dosen->alamat = $validatedData['alamat'];
        $dosen->mata_kuliah = $validatedData['mata_kuliah'];
        $dosen->save();

        return redirect('/main')->with('success', 'Dosen updated successfully!');
    }
    
    
    public function delete_dosen($id)
    {
        $dosen = Dosen::find($id);
        if ($dosen) {
            $dosen->delete();
            return redirect('/main')->with('success', 'Dosen deleted successfully!');
        } else {
            return redirect('/')->with('error', 'Dosen not found.');
        }
    }
}
