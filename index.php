<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.carouFredSel-6.2.1.js"></script>
    <style>
		.list_carousel {
			padding: 15px 0 15px 40px;
			width:250px;
		}
		.list_carousel ul {
			margin: 0;
			padding: 0;
			list-style: none;
			display: block;
		}
		.list_carousel li {
			font-size: 30px;
			color: #666;
			text-align: center;
			background-color: #f0f0f0;
			border: 5px solid #ccc;
			width: 50px;
			height: 50px;
			padding: 0;
			margin: 6px;
			display: block;
			float: left;
		}
		.clearfix {
			float: none;
			clear: both;
		}    
	</style>

  </head>
  <body>
    <h1>Prueba Caroufredsel 2</h1>
	<div class="list_carousel">
	    <ul id="foo3">
	        <li> a </li>
	        <li> b </li>
	        <li> c </li>
	        <li> d </li>
	        <li> e </li>
	        <li> f </li>
	        <li> g </li>
	        <li> h </li>
	        <li> a </li>
	        <li> b </li>
	        <li> c </li>
	        <li> d </li>
	        <li> e </li>
	        <li> f </li>
	        <li> g </li>
	        <li> h </li>
	    </ul>
	    <ul id="fooX">
	        <li> a </li>
	        <li> b </li>
	        <li> c </li>
	        <li> d </li>
	        <li> e </li>
	        <li> f </li>
	        <li> g </li>
	        <li> h </li>
	        <li> a </li>
	        <li> b </li>
	        <li> c </li>
	        <li> d </li>
	        <li> e </li>
	        <li> f </li>
	        <li> g </li>
	        <li> h </li>
	    </ul>
	    <div class="clearfix"></div>
	</div>
	<script type="text/javascript">
		
		$("#foo3").carouFredSel({
			synchronise	: "#fooX",
			scroll		: 3,
			scroll : { fx : "crossfade" }
		});
		$("#fooX").carouFredSel({
			auto		: false,
			scroll : { fx : "crossfade" }
		});		
	</script>

  </body>
</html>