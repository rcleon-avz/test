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
  </head>
  <body>
    <h1>Prueba de Masonry con Bootstrap</h1>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.masonry.min.js"></script>
    
    <style>
		.tipo0 {
			height: 200px; background:#f00; border:1px solid #000;
		}
		.tipo1 {
			height: 420px; background:#0f0; border:1px solid #000;
		}
		.tipo2 {
			height: 200px; background:#00f; border:1px solid #000;
		}
		.item {
			margin-bottom: 20px;
		}
		#container {
			margin:0 auto; width:1000px;
		}
    </style>
    
    <div class="row" id="container">
    <?php
    	for ($i = 0; $i < 16; $i++) {
	    	$tipo = rand(0, 2);
		    if (($tipo == 2) && (($i % 3) != 2)) {
		    	echo '<div class="col-md-8 item">';
		    	echo '<div class="tipo'.$tipo.'"></div>';
		    	echo '</div>';
		    } else {
		    	echo '<div class="col-md-4 item">';
		    	echo '<div class="tipo'.$tipo.'"></div>';
		    	echo '</div>';
		    }
    	}
    ?>
    </div>
    <script type="text/javascript">
	    $(window).load(function (event) {
		    var width = $('#container').width() / 3;
			$('#container').masonry({
			  itemSelector: '.item',
			  // set columnWidth a fraction of the container width
			  columnWidth: width,
			});
	    })
	</script>
  </body>
</html>