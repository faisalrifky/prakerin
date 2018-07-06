<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\produk;
use App\bahan;
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
        return view('produk.index',compact('produks'));
    }
    public function produk()
    {
        $produk = produk::all();
        return view('produk.index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = produk::all();
        $bahan = bahan::all();
        return view('produk.create',compact('bahan'));
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
            'jenis' => 'required|',
            'harga' => 'required|',
            'bahan' => 'required|',
            'kategori' => 'required'
        ]);

        $produk = new produk;
        $produk->nama = $request->nama;
        $produk->jenis = $request->jenis;
        $produk->harga = $request->harga;
        $produk->bahan = $request->bahan;
        $produk->kategori = $request->kategori;
       
    if($Request->hasfile('foto')){
        $file = $Request->file('foto');
        $destinationPath = public_path() .DIRECTORY_SEPARATOR . '/assets/img/produk';
        $filename = src_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath,$filename);
    }
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
        return view('produk.show',compact('produks'));
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
        return view('produk.edit',compact('produks','bahan','selectedbahan'));
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
            'jenis' => 'required|',
            'harga' => 'required|',
            'bahan' => 'required|',
            'kategori' => 'required'
        ]);

       $produk = new produk;
        $produk->nama = $request->nama;
        $produk->jenis = $request->jenis;
        $produk->harga = $request->harga;
        $produk->bahan = $request->bahan;
        $produk->kategori = $request->kategori;
        
        if($Request->hasfile('foto')){
        $file = $Request->file('foto');
        $destinationPath = public_path() .DIRECTORY_SEPARATOR . '/assets/img/produk';
        $filename = src_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath,$filename);
    }

        if ($produk->foto) {
            $old_foto = $produk->foto;
            $file_path = public_path() . DIRECTORY_SEPARATOR . '/assets/img/produk' . DIRECTORY_SEPARATOR . $produk->foto
            
            try {
                file::delete($filepath);
            } catch (FileNotFoundException $e) {
                
            }
            # code...
        }
        $produk->foto = $filename;
    }
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

        if($produk->file_gambar){
            $old_foto = $produk->foto;
            $file_path = public_path() . DIRECTORY_SEPARATOR . '/assets/img/produk' . DIRECTORY_SEPARATOR . $produk->foto
            try {
                file::delete($filepath);
            } catch (FileNotFoundException $e) {
                
            }
        $produk->delete();
        Session::flash("flash_notification",["level"=>"success","message"=>"Data Berhasil Dihapus"]);
        return redirect()->route('produk.index');  
    }
}
