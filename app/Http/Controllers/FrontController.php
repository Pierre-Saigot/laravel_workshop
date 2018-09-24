<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

// Importation de l'alias de la classe
use App\Post; 

class FrontController extends Controller{

	private $paginate = 5;

	public function index(){
		$post = Post::published()->orderBy('created_at', 'asc')->take(2)->get();
		return view('front.index', ['posts' => $post]);
	}

	public function search(Request $request){
		$el = $request->q;
		$posts = Post::published()->where('title', 'LIKE', '%'.$el.'%')->paginate($this->paginate);
    	return view('front.stage', compact('posts'));
	}

	public function show(int $id){
        	$post = Post::find($id);
        	return view('front.post', ['posts' => $post]);
   	}

   	public function stage(){
		$posts = Post::published()->where('post_type', 'stage')->paginate($this->paginate);
		return view('front.stage', ['posts' => $posts]);
	}

	public function formation(){
		$posts = Post::published()->where('post_type', 'formation')->paginate($this->paginate);
		return view('front.formation', ['posts' => $posts]);
	}

   	public function contact(){
        	return view('front.contact');
   	} 

   	public function sendmail(Request $request){
   		$this->validate($request, [
			'email' => 'required|email',
			'message' => 'required|string'
       		]);
	 	Mail::to('admin@contact.fr')->send(new SendMail($request));
	 	return redirect()->route('sendmail')->with('success', ['Success']);
	}	 
}
