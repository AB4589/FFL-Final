@extends('layouts.app')
@section('title', 'Organisations | Food For Life')
@section('style')
.light{
	background-color: #C6F6D7;
	height: 930px;
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
	font-size:18px;
}

.requirements{
	background-color:  #9BEAB6;
	position: absolute;
	top: 440px;
	margin-left:100px;
	margin-right:100px;
	padding-left:50px;
	padding-right:50px;
	padding-bottom:10px;
	font-size:18px;
}

.click{
	position: absolute;
	top: 820px;
	margin-left:440px;
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
        <img src="images/organization/org2.png" class="d-block w-100" alt="..."  width="640" height="500">
		
    </div>
    <div class="carousel-item " data-interval="5000">
      <img src="images/organization/org5.jpeg" class="d-block w-100" alt="..."  width="640" height="500">
    </div>
    <div class="carousel-item " data-interval="5000">
      <img src="images/organization/org4.jpeg" class="d-block w-100" alt="..."  width="640" height="500">
    </div>
  </div>
</div>


<div class="text-center">
<div class="text-block " style="">
	<p  class="h2"; style="background-color:black; opacity:60%"  >Remove Hunger, Save Lives </p>
    <a href="/register" type="button" role="button" class="btn btn-primary btn-5">
        Become a Organisation Partner{{--<div>Become a Organisation Partner</div><div>Become a Organisation Partner</div>--}}
    </a>
	</div>
</div>


<div class="light">

	<div class="middle"> 
         <div class="position"> Why Would You Join With Us? </div>

         <div>
			<p>
				Food for Life work with the mission of helping to end hunger and food wastage.We wish to work with the organizations,provide food to those in our society who struggle with hunger.We believe that every person has the right to nutritious food regardless of their economic or political situation.This belief drives us to provide hunger relief to those in need around the community.<br>
				If your organization share this belief,join us in the fight against hunger.Many donors do not find reliable organizations, so many are deprived of the great work such as donating.So,if you join with us,then we inform you about the nearest donors to collect their donations to stand by the starving people.
			</p>
		</div>
	</div>

	<div class="requirements">
		<div class="position"> Requirements </div>

        Our only requirements are:<br><br>

        <ul>
        	<li> Your organization is a nonprofit. </li>
            <li> You are educated about all food-safety guidelines and follow those guidelines in serving/distributing food. </li>
            <li> Your organization use the food only to serve food-insecure people, free of charge. </li>
            <li> You have a volunteer onsite to receive donated food (optional). </li>
            <li> Your organization's volunteers must complete the volunteer application and also follow the requirements of our volunteer option. </li>
       </ul>
    </div>

	 <div class="click"> 
		If you want to be a organisation partner, <a href="/register" type="button" role="button" class="btn btn-primary btn-5">click</a> here.
	</div>
</div>
@endsection