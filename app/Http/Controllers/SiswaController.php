<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = M_Siswa::all();
        return view('index')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required|unique:siswa|max:255',
            'nis' => 'required|unique:siswa|max:255',
            'alamat' => 'required|unique:siswa|max:255',
        ];
        $message = [
            'nama.required' => 'Nama blom di isi',
            'nis.required' => 'Nis blom di isi',
            'alamat.required' => 'Alamat blom di isi',

            'nama.unique' => 'Nama Stelah dipakai',
            'nis.unique' => 'Nis Stelah dipakai',

        ];
        $validated = $request->validate($rules,$message);
        $data = $request->except(['_token']);
        M_Siswa::insert($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Siswa::findOrfail($id);
        return view('show')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $item = M_Siswa::findOrfail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Siswa::findOrfail($id);
        $item->delete();
        return redirect('/');
    }
}
