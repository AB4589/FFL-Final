@extends('layouts.app')
@section('title', 'Home | FOOD FOR LIFE')
@section('style')

.event-pic{
	width:1350px;
    height:500px;
}

.event-text{
	margin:100px;
	display:grid;
	grid-template-columns:50% 50%;
}
.post-pic{

	width:500px;
	height:250px;
}

.text1{
  float: left;
  width:600px;
  padding: 10px ;
  height:auto;	
  font:bold;
  font-size:18px;
}
.text4 h2{
  float: left;
  width:600px;
  padding: 10px ;
  height: auto;
  font-size:25px;
}
.text2{
	text-decoration:none;
	width:600px;
	padding:10px;
	height:auto;
	font-size:15px;
}
.event h1{
	float:center;
	color:#000;
	font-size:50px;
	height:50px;
	margin:10px;
}

@endsection
@section('home')

<div class="text-center">
<img class="event-pic" src="img/event/20.jpg">
</div>
<br>
<br>
<div class="event"><h1>Events</h1></div>
<div class="event-post">
<div class="event-text">
	<div class="event-grid1">
	<img class="post-pic" src="img/event/21.jpg">
	</div>
	<div class="event-grid2">
	 <div class="text1">25 July 2020,Khulshi,Chattogram </div>
	  <div class="text4"><h2><a href="eventpage">Stop Hunger Now</a></h2></div>
      <p class="text2">Stop Hunger Now 2020 will be held on Saturday,July 25 at Khulshi in Chattogram.It is the first event of Food for Life.Food is one of the basic human rights of people.Nearly 40% of the food produced in the world is wasted.<a href="eventpage">See more</a></p>
      </div>
</div>
</div>
@endsection