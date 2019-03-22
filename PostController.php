<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    	$posts = [
    	['id' => '1', 'title' => 'Post 1', 'body' => 'body post in ID 1'],
    	['id' => '2', 'title' => 'Post 2', 'body' => 'body post in ID 2'],
    	['id' => '3', 'title' => 'Post 3', 'body' => 'body post in ID 3'],
    	['id' => '4', 'title' => 'Post 4', 'body' => 'body post in ID 4'],
    	];

    	echo '<ul>';
        foreach ($posts as $post ) {
            echo '<li><a href="'.route('post.detail',$post['id']).'">'.$post['title'].'</a></li>';
        }
        echo '</ul>';
    }
}
