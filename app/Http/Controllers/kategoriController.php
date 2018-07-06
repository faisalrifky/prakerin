<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
           $kategori = kategori::all();
        return view('kategori.index',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
            'nasi' => 'required|',
            'ayam' => 'required',
            'minuman' => 'required',
            'ice_cream' => 'required',
            'dessert' => 'required'
        ]);

        $kategori = new kategori;
        $kategori->nasi = $request->nasi;
        $kategori->ayam = $request->ayam;
        $kategori->minuman = $request->minuman;
        $kategori->ice_cream = $request->ice_cream;
        $kategori->dessert = $request->dessert;
        $kategori->save();
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = kategori::findOrFail($id);
        return view('kategori.show',compact('kategori'));
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
        $kategori = kategori::findOrFail($id);
        return view('kategori.edit',compact('kategori'));
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
        // unique dihapus karena ketika update data kategori tidak diubah juga tidak apa-apa
        $this->validate($request,[
           'nasi' => 'required|',
            'ayam' => 'required',
            'minuman' => 'required|',
            'ice_cream' => 'required|',
            'dessert' => 'required'
        ]);

        $kategori = kategori::findOrFail($id);
        $kategori->nasi = $request->nasi;
        $kategori->ayam = $request->ayam;
        $kategori->minuman = $request->minuman;
        $kategori->ice_cream = $request->ice_cream;
        $kategori->dessert = $request->dessert;
        $kategori->save();
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index');  
    }
}
