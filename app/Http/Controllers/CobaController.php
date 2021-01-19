<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobacontroller extends Controller
{

    public function index()
    {
    $friends = friends::paginate(3);
            
    return view('indexd', compact ('friends');
    }
    public function create ()
    {     
    return view('create');
    } 
    public function store(request, $request)
    { 
        public function store(Request $request)
    {
        // Validate the request...

        $friendst = new friends ;

        $friends->name = $request->nama;
        $friends->name = $request->no_telp;
        $friends->name = $request->alamat;

        $friends->save();
  
    }    
}
