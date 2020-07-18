@extends('layouts.app')
@section('title', 'Volunteer | Food For Life')

@section('style')
.light{
	background-color: #C6F6D7;
	height: 900px;
	position: relative;
	margin-top:90px;
}

.middle{
	background-color:  #9BEAB6;
	position: absolute;
	top: 90px;
	margin-left:100px;
	margin-right:100px;
	padding-left:50px;
	padding-right:50px;
	padding-bottom:10px;
	font-size: 18px;
}

.requirements{
	background-color:  #9BEAB6;
	position: absolute;
	top: 415px;
	margin-left:100px;
	margin-right:100px;
	padding-left:50px;
	padding-right:50px;
	padding-bottom:25px;
	font-size: 18px;
}

.click{
	position: absolute;
	top: 790px;
	margin-left:470px;
	margin-right:100px;
	font-size:18px;
}

.position{
	text-align: center;
	background-color: #76BCD1;
	margin-bottom:30px;
	font: bold;
	font-size: 35px;
}

@endsection

@section('content')
@section('home')

<div id="carouselExampleSlidesOnly container" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner parent position-relative">
    <div class="carousel-item active  " data-interval="5000">
        <img src="images/volunteer/volunteer1.png" class="d-block w-100" alt="..."  width="640" height="500">
		
    </div>
    <div class="carousel-item " data-interval="5000">
      <img src="images/volunteer/volunteer3.jpg" class="d-block w-100" alt="..."  width="640" height="500">
    </div>
    <div class="carousel-item " data-interval="5000">
      <img src="images/volunteer/volunteer2.jpg" class="d-block w-100" alt="..."  width="640" height="500">
    </div>
  </div>
</div>


<div class="text-center">
<div class="text-block " style="">
	<p  class="h2"; style="background-color:black; opacity:60%"  >Remove Hunger, Save Lives </p>
    <a href="/register" type="button" role="button" class="btn btn-primary btn-5">
        Become a Volunteer{{--<div>  Become a Volunteer</div><div>  Become a Volunteer</div>--}}
    </a>
	</div>
</div>


<div class="light">

	<div class="middle"> 
         <div class="position"> Why Would You work as a Volunteer with us? </div>

         <div>
			<p>
				Food for Life has the ambitious goal of eliminating food waste and helping to feed everyone in the country who is hungry.This can only be accomplished with the help from volunteers.There are various ways that you can help us. When the organizations that do not have enough volunteers or unable to send volunteer in time,then the volunteers who are occupied by us will deliver and transport the food to the needy people.That's it! An hour of your time to feel the love from our donor and organization partners,help the planet and serve people in need.
			</p>
		</div>
	</div>

	<div class="requirements">
		<div class="position"> Requirements </div>

       Our only requirements are:<br><br>

       <ul>
       	 <li> Volunteers must be 18 years or older. </li>

       	 <li> Volunteers must complete the volunteer application and are required to have a valid NID card. </li>

       <li> You may volunteer one time or you may volunteer weekly.And there are no fixed shift time,volunteers can choose their suitable time in any shift. </li>

       <li> Volunteers have to coordinate communication between other volunteers. </li>
       </ul>
    </div>

	 <div class="click"> 
		If you want to be a volunteer, <a href="/register" type="button" role="button" class="btn btn-primary btn-5">click</a> here.
	</div>
</div>
@endsection