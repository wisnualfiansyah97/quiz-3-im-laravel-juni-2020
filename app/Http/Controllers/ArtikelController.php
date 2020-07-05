<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;


class ArtikelController extends Controller
{
    public function index(){
        $article = ArtikelModel::get_all();
        return view('artikel',compact('article'));
    }

    public function form_create(){
        return view('create_artikel');
    }

    public function store(Request $request){
        $article = ArtikelModel::store($request->all());
        return redirect('/artikel');
    }

    public function show_by_id($article_id){
        $article = ArtikelModel::show_by_id($article_id);
        return view('artikel_id',compact('article'));
    }

    public function form_edit($article_id){
        $article = ArtikelModel::show_by_id($article_id);
        return view('edit_artikel',compact('article'));
    }

    public function update($article_id,Request $request){
        $article = ArtikelModel::update($request->all(),$article_id);
        return redirect('/artikel');
    }

    public function destroy($article_id){
        $article = ArtikelModel::destroy($article_id);
        return redirect('/artikel');
    }


}
