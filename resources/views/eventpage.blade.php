@extends('layouts.app')
@section('title', 'Home | FOOD FOR LIFE')
@section('style')

.event-pic{
	width:1200px;
    height:500px;
}

.page-text{
	text-decoration:none;
	padding:5px;
	height:55px;
	font-size:17px;
	margin:60px;
}

.event h1{
	float:center;
	color:#34495E ;
	font-size:50px;
	height:35px;
	margin:30px;
}
.text6{
  text-decoration:none;
  padding:10px;
  height:auto;	
  font-size:18px;
  margin:10px;
  margin-left:60px;
}

@endsection
@section('home')
<div class="event"><h1>Stop Hunger Now</h1></div>
<div class="text6">Posted by 25 July 2020,Khulshi,Chattogram </div>
<div class="text-center">
<img class="event-pic" src="img/event/21.jpg">
</div>

<div>
	<p class="page-text">Stop Hunger Now 2020 will be held on Saturday,July 25 at Khulshi in Chattogram.It is the first event of Food for Life.Food is one of the basic human rights of people.Nearly 40% of the food produced in the world is wasted.Even though Bangladesh is a developing country,food is always wanted here in different ways.For example in social events,restaurants etc.On the other hand,many people are deprived of basic human rights such as food due to lack of financial security and suffering from lack of nutrients.The goal of this event is to aware people about the food wastage and encourage them to become a donor by donating their excess food to the nearest organization and also hilight our mission to them.</p>
</div>

@endsection