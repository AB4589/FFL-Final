@extends('layouts.app')
@section('title', 'Home | FOOD FOR LIFE')
@section('style')

.blog-pic{
	width:1350px;
    height:500px;
}
.b-text h2{
  width:400px;
  padding:5px ;
  height: 25px;
  font-size:25px;
  margin-left:10px;
}
.blog-text{
	height:220px;
}

.blog-text1{
	text-decoration:none;
	padding:5px;
	height:40px;
	font-size:17px;
	margin:8px;
}
.b1-text{
  text-decoration:none;
  padding:5px; 
  font-size:18px;
  margin-left:10px; 
}

.blog-text2{
	text-decoration:none;
	padding:5px;
	height:70px;
	font-size:17px;
	margin:10px;
}

.blog-text3{
	text-decoration:none;
	padding:5px;
	height:70px;
	font-size:17px;
	margin:10px;
}

@endsection
@section('home')

<div class="text-center">
<img class="blog-pic" src="img/blog/b2.jpg">
</div>
<div class="b-text"><h2>What to donate and what to avoid</h2></div>
<div class="b1-text">by Ety <span >&bullet;</span> July 15, 2020 at 2:00 pm </div>
<div class="blog-text">
	<p class="blog-text1">So, you're ready to donate food.That's great! There are a couple things you should know about what you can donate and what you won't.</p>
	<div class="b-text"><h2>What food you can donate:</h2></div>
	<p class="blog-text2">We accept dry and canned food donations. Basically, any food that is "Shelf-stable" or nonperishable. Specifically, we often need items like: grocery item, dry fruits, rice etc. Additionally,we also prefer household items, since may families struggle to afford these items. Families Struggling with hunger often can't afford the staples that we normally have stocked at home. Even specially foods like olive oil, dressing or marinades can be helpful if they don't need to be refrigerated.</p>
	<div class="b-text"><h2>What not to donate:</h2></div>
	<p class="blog-text3">If your donation is perishable, i,e. It's something that has a limited shelf life if not refrigerated. But there are other categories of food that you can't donate. The list is here: Items needing refrigeration, Expired food, Food with packaging concerns.</p>
</div>

@endsection