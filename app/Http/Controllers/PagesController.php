<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function index(){
    	$title = 'Welcome to Mediocrity u fuckers!';
    	//return view('pages.index', compact('title'));
    	return view('pages.index')->with('title', $title);
    }

    public function about(){
    	return view('pages.about');
    }

    public function services(){
    	$data = array(
    		'title' => 'PUTANG INA',
    		'services' => ['gago', 'tarantado', 'inutil']
    	);
    	return view('pages.services')->with($data);
    }
}
