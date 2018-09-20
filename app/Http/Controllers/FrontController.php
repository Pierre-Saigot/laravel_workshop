<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importation de l'alias de la classe
use App\Post; 

class FrontController extends Controller{

	private $paginate = 5;

	public function index(){
		$post = Post::orderBy('created_at', 'asc')->take(2)->get();
		return view('front.index', ['posts' => $post]);
	}

	public function searchHome(Request $request){
		$el = $request->search;
		$posts = Post::where('title', 'LIKE', '%'.$el.'%')->paginate($this->paginate);
    	return view('front.index', compact('posts', 'el'));
	}

	public function searchStage(Request $request){
		$el = $request->search;
		$posts = Post::where('title', 'LIKE', '%'.$el.'%')->where('post_type', 'stage')->paginate($this->paginate);
    	return view('front.index', compact('posts', 'el'));
	}

	public function searchFormation(Request $request){
		$el = $request->search;
		$posts = Post::where('title', 'LIKE', '%'.$el.'%')->where('post_type', 'formation')->paginate($this->paginate);
    	return view('front.index', compact('posts', 'el'));
	}

	public function show(int $id){
        	$post = Post::find($id);
        	return view('front.post', ['posts' => $post]);
   	}

   	public function stage(){
		$posts = Post::where('post_type', 'stage')->paginate($this->paginate);
		return view('front.stage', ['posts' => $posts]);
	}

	public function formation(){
		$posts = Post::where('post_type', 'formation')->paginate($this->paginate);
		return view('front.formation', ['posts' => $posts]);
	}

   	public function contact(){
        	return view('front.contact');
   	} 

}
