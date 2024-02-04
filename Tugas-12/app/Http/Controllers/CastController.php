<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    //
    public function index() {
        $cast = DB::table('casts')->get();
        return view('cast.index', compact('cast'));
    }

    public function create() {
        return view('cast.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);
        $query = DB::table('casts')->insert([
            "nama" => $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
        ]);
        return redirect('/cast');
    }

    public function show($id) {
        $CastById = DB::table('casts')->find($id);
        return view('cast.detail', ['CastById' => $CastById]);
    }

    public function edit($id) {
        $CastById = DB::table('casts')->find($id);
        return view('cast.edit', ['CastById' => $CastById]);
    }

    public function Update($id, Request $request) {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        DB::table('casts')->where('id', $id)->update([
            "nama" => $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
        ]);
        return redirect('/cast');
    }

    public function destroy($id)
    {
        $query = DB::table('casts')->where('id', $id)->delete();
        return redirect('/cast');
    }
}
