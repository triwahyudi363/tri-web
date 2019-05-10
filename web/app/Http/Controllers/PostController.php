<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    	$post = 'produk yang ada';
        return view('post/index', compact('post'));
    }

    public function look()
    {
    	$post =['website','applikasi','provider','internet'];
    	return view ('/post/look', compact('post'));
    }

        public function show()
    {
        $post =['website','applikasi','provider','internet'];
        return view ('post/show', compact('post'));
    }
public function content()
{
		$title = 'Harry Pooter'; 
		$content = 'harry potter and the deathly hallows: part 2';
		return view('content.halaman',compact('title','content')); 
	}
}