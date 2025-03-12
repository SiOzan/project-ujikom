<?php
namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::latest()->get();
        return view('admin.kontak.index', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'      => 'required',
            'email'     => 'required',
            'judul'     => 'required',
            'deskripsi' => 'required',
        ], [
            'nama.required'      => 'Nama harus diisi',
            'email.required'     => 'Email harus diisi',
            'judul.required'     => 'Judul laporan harus diisi',
            'deskripsi.required' => 'Deskripsi laporan harus diisi',
        ]);

        $kontak            = new Kontak();
        $kontak->nama      = $request->nama;
        $kontak->email     = $request->email;
        $kontak->judul     = $request->judul;
        $kontak->deskripsi = $request->deskripsi;
        $kontak->save();

        return redirect()->route('admin.kontak.index')->with('success', 'Data Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();
        return redirect()->route('admin.kontak.index')->with('success', 'Data berhasil dihapus!');
    }
}
