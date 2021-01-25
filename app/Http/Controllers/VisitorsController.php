<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VisitorsController extends Controller
{
    function index(){
        return view('visitors.index');
    }
    function create(){
        return view('visitors.create');
    }
    function add(Request $request){
       

        $request->validate([
            'nama'=>'required',
            'NIK'=>'required|size:16',
            'email'=>'required',
            'tujuan'=>'required',
            'orang'=>'required',
            'divisi'=>'required'
        ]);
        $resorce = $request->file('image');
        $name   = $resorce->getClientOriginalName();
        $resorce->move(\base_path() ."/public/images", $name);
        
        $query = DB::table('visitor')->insert([
            'nama'=>$request->input('nama'),
            'NIK'=>$request->input('NIK'),
            'email'=>$request->input('email'),
            'tujuan'=>$request->input('tujuan'),
            'orang'=>$request->input('orang'),
            'divisi'=>$request->input('divisi'),
            'image' => $name
        ]);
           

        if($query){
            return back()->with('success','Terima Kasih sudah mengisi data ini !!');
        }else{
            return back()->with('fail','Maaf data yang anda input belum lengkap !!');
        }
    }
}
