<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('admin.barang.index', compact('barang'));
    }

    public function welcome()
    {
        $barang = Barang::all();
        return view('welcome', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        return view('admin.barang.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|max:2048',
            'nama_barang' => 'required',
            'warna' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        $barang = new Barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->warna = $request->warna;
        $barang->stok = $request->stok;
        $barang->harga = $request->harga;
        // upload image / foto
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/beautycase/', $name);
            $barang->gambar = $name;
        }
        $barang->save();
            Alert::success('Berhasil', 'Data Barang Berhasil Di Tambahkan');
        return redirect('admin/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('admin.barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('admin.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required|image|max:2048',
            'nama_barang' => 'required',
            'warna' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->warna = $request->warna;
        $barang->stok = $request->stok;
        $barang->harga = $request->harga;
        // upload image / foto
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/beautycase/', $name);
            $barang->gambar = $name;
        }
        $barang->save();
        Alert::success('Berhasil', 'Data Barang Berhasil Di Edit');
        return redirect('admin/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Barang::destroy($id)) {
            return redirect()->back();
            Alert::success('Berhasil', 'Data berhasil di hapus');
        }
        return redirect()->route('barang.index');
    }
}
