<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArticleController extends Controller
{
    public function index() {
        $rows = ArtikelModel::get_all();
        return view('layouts.artikel.index', ['rows' => $rows]);
    }

    public function create() {
        return view('layouts.artikel.form');
    }

    public function store(Request $request) {
        $data = request()->except(['_token']);
        $new_article = ArtikelModel::save($data);
        return redirect('/artikel');
    }

    public function show($id) {
        $pertanyaan = ArtikelModel::getOne($id);
       
        //dd($jawaban);
        $today = date('Y-m-d H:i:s');
        return view('pertanyaan.detail', ['rows' => $pertanyaan, 'today' => $today]);
    }

    public function edit($id) {
        $pertanyaan = ArtikelModel::getOne($id);
        $today = date('Y-m-d H:i:s');
        return view('pertanyaan.form', ['today' => $today, 'row' => $pertanyaan]);
    }

    public function update($id) {
        
    }
}
