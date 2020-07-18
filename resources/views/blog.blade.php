@extends('layouts.app')
@section('title', 'Home | FOOD FOR LIFE')
@section('style')

.blog-pic{
	width:1350px;
    height:500px;
}

.post{
  margin:100px;
  display:grid;
  grid-template-columns:50% 50%;
  grid-column-gap:2em;
  grid-row-gap:2em;
}
 
.post-pic{

	width:525px;
	height:450px;
}
.text h2{
  float: left;
  width:500px;
  padding: 10px ;
  height: auto;
  font-size:25px;
}

.text1{
  float: left;
  width:600px;
  padding: 10px ;
  height: auto;	
  font-size:15px;
}
.text2{
	text-decoration:none;
	width:520px;
	padding:10px;
	height:auto;
	font-size:18px;
}
.blog-post h1{
	float:center;
	color:#000;
	font-size:60px;
	height:50px;
	margin:10px;
}

@endsection
@section('home')

<div class="text-center">
<img class="blog-pic" src="img/blog/b5.jpg">
</div>
<br>
<br>
<div class="blog-post"><h1>Our Blog</h1></div>
<div class="post">
<div class="text">
	<img class="post-pic" src="img/blog/b2.jpg">
	 <h2><a href="blogpage">What to donate and what to avoid</a></h2>
	 <div class="text1">by Ety <span >&bullet;</span> July 15, 2020 at 2:00 pm </div>
       <p class="text2">So,you're ready to donate food.That's great! There are a couple things you should know about what you can donate and what you won't.<a href="blogpage">See more</a></p>
</div>

<div class="text">
	<img class="post-pic" src="img/blog/b1.jpg">
	 <h2><a href="#">Want to help us during the pandemic? Here's how.</a></h2>
	 <div class="text1">by Jesi <span >&bullet;</span> July 16, 2020 at 2:00 pm</div>
       <p class="text2">So,you're stuck at home because of the COVID-19 pandemic. There are simple ways anyone can make a big difference. For example, becoming a virtual volunteer. Let me describe this.<a href="#">See more</a></p>
</div>
</div>

@endsection