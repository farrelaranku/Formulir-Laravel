<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller{
    public function index(){
        return view('form');
    }

    public function show(Request $request){
        $request->validate([
            
            'nama' => 'required|min:1',
            'nrp' => 'required|size:10',
            'departemen' => 'required',
            'angka_khusus' => 'required|numeric|between:2.50,99.99',
            'gambar' => 'required|max:2048|mimes:png,jpg,jpeg'

        ]);

        $request->gambar->storeAs('public/images', $request->gambar->getClientOriginalName());

        $results = [
            'Nama' => $request->nama,
            'NRP' => $request->nrp,
            'Departemen' => $request->departemen,
            'Angka Khusus' => $request->angka_khusus,
            'Gambar' => $request->gambar->getClientOriginalName()
        ];
        
        return redirect('/result')->with(['results' => $results, 'status' => 'SUBMITTED!']);
  
    }

    public function result()
    {
        $results = session()->get('results');

        return view('result', [
            'results' => $results
        ]);
    }

}