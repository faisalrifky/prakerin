<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use App\bahan;
use App\jenis;
use App\kategori;
use file;
use Session;
class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $produk = produk::with('bahan')->get();
        return view('produk.index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bahan = bahan::all();
        $jenis = jenis::all();
        $kategori = kategori::all();
        return view('produk.create',compact('bahan','jenis','kategori'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $this->validate($request,[
            'nama' => 'required|',
            'harga' => 'required|',
            'bahan_id' => 'required|',
            'jenis_id' => 'required|',
            'kategori_id' => 'required'
        ]);

        $produk = new produk;
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->bahan_id = $request->bahan_id;
        $produk->jenis_id = $request->jenis_id;
        $produk->kategori_id = $request->kategori_id;
        $produk->save();
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = produk::findOrFail($id);
        return view('produk.show',compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data pos berdasrkan id di halaman pos edit
        $produk = produk::findOrFail($id);
        $bahan = bahan::all();
        $selectedbahan = produk::findOrFail($id)->bahan_id;
        $jenis = jenis::all();
        $selectedjenis = produk::findOrFail($id)->jenis_id;
        $kategori = kategori::all();
        $selectedkategori = kategori::findOrFail($id)->kategori_id;
        return view('produk.edit',compact('produk','bahan','selectedjenis','selectedkategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // unique dihapus karena ketika update data produk tidak diubah juga tidak apa-apa
        $this->validate($request,[
           'nama' => 'required|',
            'harga' => 'required|',
           'bahan_id' => 'required|',
            'jenis_id' => 'required|',
            'kategori_id' => 'required'
        ]);

       $produk = new produk;
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->bahan_id = $request->bahan_id;
        $produk->jenis_id = $request->jenis_id;
        $produk->kategori_id = $request->kategori_id;
        $produk->save();
        Session::flash("flash_notification",["level"=>"success","message"=>"Data Berhasil Dihapus"]);
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
        $produk = produk::findOrFail($id);
        $produk->delete();
        Session::flash("flash_notification",["level"=>"success","message"=>"Data Berhasil Dihapus"]);
        return redirect()->route('produk.index');  
    }
}
