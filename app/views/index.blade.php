<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>My Awesome Blog</title>
	{{HTML::style('assest/css/styles.css')}}
	{{HTML::style('css/bootstrap.min.css')}}
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<div id="wrapper" class="container">
		<header>
			<h1><a href="/">My Awesome Blog</a></h1>
			<p>Welcome to my awesome blog</p>
			<p><button><b>{{link_to_route('admin_area','Entrar')}}</b></button></p>
		</header>
		<section id="main">
		<section id="content">
			@foreach($posts as $post)
			<article>
				<h2>{{$post->title}}</h2>
				<p>{{$post->content}}</p>
				<p><small>Posted by <b>{{$post->Author->name}}</b> at <b>{{$post->created_at}}</b></small></p>
			</article>
			@endforeach
		</section>
		</section>
		<footer>
			<section id="footer-area">
			<section id="footer-outer-block">
				<aside class="footer-segment">
					<h4>My Awesome Blog</h4>
				</aside>
			</section>
			{{$posts->links()}}
			</section>
		</footer>
	</div>
</body>
</html>