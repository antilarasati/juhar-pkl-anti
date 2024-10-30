<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Dudi;
use App\Models\Admin\Guru;
use App\Models\Admin\Pembimbing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembimbingController extends Controller
{
    public function pembimbing()
    {
        $pembimbings = Pembimbing::with('guru','dudi')->get();
        return view('admin.pembimbing', compact('pembimbings'));
    }

   
    public function create()
    {
        $gurus = Guru::all();
        $dudis = Dudi::all();
        return view('admin.tambah_pembimbing', compact('gurus', 'dudis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_guru' => 'required',
            'id_dudi' => 'required',
        ]);

        Pembimbing::create([
            'id_guru' =>$request->id_guru,
            'id_dudi' =>$request->id_dudi,
        ]);

        return redirect()->route('admin.pembimbing')->with('success', 'Data Pembimbing Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

   
    public function edit($id)
    {
        $pembimbing = Pembimbing::find($id);

        if (!$pembimbing) {
            return back();
        }
        $gurus = Guru::with('pembimbingGuru')->get();
        $dudis = Dudi::with('pembimbingDudi')->get();
        return view('admin.edit_pembimbing', compact('pembimbing', 'gurus', 'dudis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pembimbing = Pembimbing::find($id);
        $request->validate([
           'id_guru' => 'required',
            'id_dudi' => 'required',
        ]);

        $pembimbing->update([
            'id_guru'=> $request->id_guru,
            'id_dudi'=> $request->id_dudi
        ]);

        return redirect()->route('admin.pembimbing')->with('success', 'Data Pembimbing Berhasil di Edit');
    }

    public function delete($id) 
    {
        $pembimbing = Pembimbing::find($id);

        $pembimbing->delete();

        return redirect()->back()->with('success', 'Data Pembimbing Berhasil di Hapus.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function pembimbingGuru() 
    {
        
        $id_guru = Auth::guard('guru')->user()->id_guru;
        $pembimbings = Pembimbing::where('id_guru', $id_guru)->get();
        return view('guru.pembimbing', compact('pembimbings'));
    }
}

