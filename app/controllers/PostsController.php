<?php

class PostsController extends BaseController{

	public function getIndex(){

		$posts = Post::with('Author')->orderBy('id','desc')->paginate(5);
		return View::make('index')->with('posts',$posts);
	}

	public function getAdmin(){
		return View::make('addpost');
	}

	public function postAdd(){

		Post::create(array(
			'title' => Input::get('title'),
			'content' => Input::get('content'),
			'author_id' => Auth::user()->id
		));
		return Redirect::route('index');
	}
}