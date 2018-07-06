<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bahan;
class Controller_bahan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahan = bahan::all();
        return view('bahan.index',compact('bahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bahan.create');
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
            'bahan' => 'required|',
            'harga' => 'required'
        ]);

        $bahan = new bahan;
        $bahan->bahan = $request->bahan;
        $bahan->harga = $request->harga;
        $bahan->save();
        return redirect()->route('bahan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bahan = bahan::findOrFail($id);
        return view('bahan.show',compact('bahan'));
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
        $bahan = bahan::findOrFail($id);
        return view('bahan.edit',compact('bahan'));
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
        // unique dihapus karena ketika update data bahan tidak diubah juga tidak apa-apa
        $this->validate($request,[
        'bahan' => 'required|',
        'harga' => 'required'
        ]);

        $bahan = bahan::findOrFail($id);
        $bahan->bahan = $request->bahan;
        $bahan->harga = $request->harga;
        $bahan->save();
        return redirect()->route('bahan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bahan = bahan::findOrFail($id);
        $bahan->delete();
        return redirect()->route('bahan.index');  
    }
}
