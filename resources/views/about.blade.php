@extends('layouts.app')
@section('title', 'About | Food For Life')
@section('content')

<head> 
<style>
	h3{
		text-align: center;
		margin: 20px;
		background-color: lightblue;
		font: bold;
		font-size: 35px;
	}

	h4{
		color: #991626;
	}

	div.aboutDetails{
		padding-top: 10px;
		margin-left: 35px;
		margin-right: 25px;
		margin-bottom: 25px;
	}

	td.image{
		padding-left: 25px;
	}

	tr.info td{
		padding-left: 110px;
		padding-top: 40px;
	}

	#background{
		background-color: #C4F7F4;
		margin-top: 80px;
		margin-bottom: 70px;
		font-size: 18px;
	}

	#imagePosition img{
		padding-left: 40px;
		padding-bottom: 10px;
	}

	#imagePosition p{
		padding-left: 30px;
	}

	p#diffPara{
		padding-left: 44px;
	}
</style>
</head>

<section id="background">
	<h3> About Us </h3>
	<table >
		<tr>
			<td class="image">
				<img src="images/about/1.png" height="auto" width="500px" height="600px" alt="food_donation">
			</td>

			<td>
				<div class="aboutDetails">
			        <h4> Mission </h4>
					Our mission is to help end hunger and food wastage by
					<ul>
						<li>creating an easy way of communication between donors and organizations.</li>
						<li>ensuring a balanced distribution of food among the starving people.</li>
					</ul><br>

					<h4> Connection & Collaboration </h4>
					Food for Life works as a platform to coordinate between donor and humanitarian organizations.Restaurants,grocery stores,entertainment venues can donate their excess food by accessing our platform or by calling our Food Recovery line - +8801841720995. After that, we inform the nearest organization and then donated food is collected by the volunteers where it will feed the most needed people in our community. <br><br>

					 <h4> Fun </h4>
					 We enjoy and celebrate our work,our successes and our bonds with each other.
	    </div>
			</td>
		</tr>
	</table>
</section>

<section id="background">
	<h3> Meet the Team </h3>

	<table>
		<tr class="info">
			<td>
				<div id="imagePosition"> <img src="images/about/2.jpg" height="130px" width="157px"><br>
					<p>Abdur Rahat Tarek</p>
				</div>

				<p>
					<img src="images/about/3.png" height="15px" width="15px"> <a href="tarekrahat4@gmail.com">tarekrahat4@gmail.com</a> <br>

					<img src="images/about/4.png" width="15px" height="15px"> <a href="https://www.facebook.com/abdurrahattarek"> facebook.com/abdurrahattarek </a> <br>

					<img src="images/about/about6.jpg" width="15px" height="17px"> +880 1841-720995 <br>
				</p>
			</td>

			<td >
				<div id="imagePosition"> <img src="images/about/5.jpg" height="130px" width="157px"> <br>
					<p id="diffPara"> Ety Biswangri </p>
				</div>

				<p> 
				   <img src="images/about/3.png" height="15px" width="15px"> <a href="etybgc02@gmail.com">etybgc02@gmail.com</a> <br>

				   <img src="images/about/4.png" width="15px" height="15px"> <a href="https://www.facebook.com/ety.biswangri.1"> facebook.com/ety.biswangri.1 </a> <br>

				   <img src="images/about/about6.jpg" width="15px" height="17px"> +880 1796-305712 <br>
				</p>
			</td>

			<td>
				<div id="imagePosition"> <img src="images/about/6.jpg" height="130px" width="157px"> <br>
					<p id="diffPara">Jinnat Ara Jesi</p>
				</div>

				<p> 
				    <img src="images/about/3.png" height="15px" width="15px"> <a href="jinnat.ara.bgc@gmail.com">jinnat.ara.bgc@gmail.com</a> <br>

				    <img src="images/about/4.png" width="15px" height="15px"> <a href="https://www.facebook.com/profile.php?id=100009102314240"> facebook.com/jinnat.ara</a> <br>

				    <img src="images/about/about6.jpg" width="15px" height="17px"> +880 1831-477230 <br>
				</p>
			</td>
		</tr>

	</table>
</section>

@endsection