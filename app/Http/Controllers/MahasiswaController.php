<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa', [
            'mahasiswa' => Mahasiswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-mahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama' => ['required'],
            'nim' => ['required'],
            'email' => ['required', 'unique:mahasiswas'],
            'domisili' => ['required'],
            'jurusan' => ['required'],
        ]);
        Mahasiswa::create($validatedData);
        return redirect('/mahasiswa')->with(
            'Success',
            'Mahasiswa Baru berhasil ditambahkan!'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('update-mahasiswa', [
            'mahasiswa' => $mahasiswa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
        $rules = [
            'nama' => ['required'],
            'nim' => ['required'],
            'domisili' => ['required'],
            'jurusan' => ['required'],
        ];
        if ($request->email != $mahasiswa->email) {
            $rules['email'] = ['required', 'unique:mahasiswas'];
        }
        $validatedData = $request->validate($rules);
        Mahasiswa::where('id', $mahasiswa->id)->update($validatedData);
        return redirect('/mahasiswa')->with(
            'Success',
            'Mahasiswa berhasil diedit!'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswa')->with(
            'Success',
            'Mahasiswa berhasil dihapus!'
        );
    }
}
