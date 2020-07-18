@extends('layouts.app')
@section('title', 'Donor | Food For Life')

@section('style')
.light{
	background-color: #C6F6D7;
	height: 850px;
	position: relative;
	margin-top:90px;
}

.middle{
	background-color: #9BEAB6;
	position: absolute;
	top: 90px;
	margin-left:100px;
	margin-right:100px;
	padding-left:50px;
	padding-right:50px;
	padding-bottom:10px;
	font-size:18px;
}

.where{
	background-color: #9BEAB6;
	position: absolute;
	top: 410px;
	margin-left:100px;
	margin-right:100px;
	padding-left:50px;
	padding-right:50px;
	padding-bottom:10px;
	font-size:18px;
}

.click{
	position: absolute;
	top: 740px;
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
        <img src="images/donor/donor1.png" class="d-block w-100" alt="..."  width="640" height="500">
		
    </div>
    <div class="carousel-item " data-interval="5000">
      <img src="images/donor/donor4.jpg" class="d-block w-100" alt="..."  width="640" height="500">
    </div>
     <div class="carousel-item " data-interval="5000">
      <img src="images/donor/donor7.jpg" class="d-block w-100" alt="..."  width="640" height="500">
    </div>
  </div>
</div>


<div class="text-center">
<div class="text-block " style="">
	<p  class="h2"; style="background-color:black; opacity:60%"  >Remove Hunger, Save Lives </p>
    <a href="/register" type="button" role="button" class="btn btn-primary btn-5">
        Become a Donor{{--<div> Become a Donor</div><div> Become a Donor</div>--}}
    </a>
	</div>
</div>


<div class="light">

	<div class="middle"> 
         <div class="position"> Why Donate? </div>

         <div>
			<p>
				Donation helps to break the cycle of poverty.One of the easiest and most obvious ways of helping the poor and needy people in through donation.Food is one of the basic requirements of the people.Nearly 40% of the food produced in the world is wasted.The poor and needy people can not even afford the basic requirements of living and are fighting each day of life.These poor people can not improve their standard of life of their own,we have to help them for making their life comfortable.Every donations matters-especially to those who need it the most.Helping the poor and needy pople is a good deed and a noble aim.
			</p>
		</div>
	</div>

	<div class="where">
		<div class="position"> Where will my donation go? </div>
		Food for Life is more than happy to receive donations of food,you can donate food to the nearest organizations who are dealing to the help the needy people through our application. These donations can brighten the day of poor people.
		<br><br>
		Here's how it works: as a food donor you can give the donation information such as the amount of excess food you have available and the time required to pick the food up by filling up the donation form.We inform the nearest organizations to collect the food.Afterwards,the organization will be held responsible for picking up the food in a seamless and efficient manner.  
	</p>
    </div>

	 <div class="click"> 
		If you want to be a donor, <a href="/register" type="button" role="button" class="btn btn-primary btn-5">click</a> here.
	</div>
</div>
@endsection