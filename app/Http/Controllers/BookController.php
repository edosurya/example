<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() { 
    	return "Ini adalah index page Book";
    }

    public function parameter($judul = null) { 
    	return "Ini adalah index page Book".$judul;
    }

    public function detail($judul = null) { 

    	$data['judul'] = $judul;

	return view('book', $data);
    }

}
