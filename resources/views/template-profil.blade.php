<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>

<!-- Bootstrap Core CSS -->
{!! Html::style('css/bootstrap.min.css') !!}
{!! Html::style('css/cover.css') !!}

<!-- MetisMenu CSS -->
{!! Html::style('css/metisMenu.min.css') !!}

<!-- Timeline CSS -->
{!! Html::style('css/timeline.css') !!}

<!-- Custom CSS -->
{!! Html::style('css/styles.css') !!}
{!! Html::style('css/custom.css') !!}

<!-- Magic-Check CSS -->
<link href="css/magic-check.css" rel="stylesheet">
{!! Html::style('css/magic-check.css') !!}

<!-- Custom Fonts -->
{!! Html::style('css/font-awesome.min.css') !!}

<!-- DatePicker CSS -->
{!! Html::style('css/bootstrap-datepicker3.min.css') !!}


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>


</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Mobility</a>
				<ul class="user-menu">
					<li class=" pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Utilisateur <span class="caret"></span></a>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><!-- <use xlink:href="#stroked-dashboard-dial"></use></svg> --> Mes données</a></li>
			<li><a href="widgets.html"><svg class="glyph stroked calendar"><!-- <use xlink:href="#stroked-calendar"></use></svg> -->Mes réservations</a></li>
			<li><a href="charts.html"><svg class="glyph stroked line-graph"><!-- <use xlink:href="#stroked-line-graph"></use></svg> --> Mes annonces</a></li>
			<li><a href="tables.html"><svg class="glyph stroked table"><!-- <use xlink:href="#stroked-table"></use></svg> --> Mes préferences</a></li>
			<li><a href="forms.html"><svg class="glyph stroked pencil"><!-- <use xlink:href="#stroked-pencil"></use></svg>  -->Vérification numéro</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">@yield('header-title')</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			@yield('head-box-info')
		</div><!--/.row-->
		
		<div class="row">
			@yield('page-menu')
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
				@yield('content')
			</div>
		</div>
		
								
		<div class="row">
			<div class="col-md-8">
				@yield('footer-sidebar-left')
			</div><!--/.col-->
			
			<div class="col-md-4">
				@yield('footer-sidebar-right')			
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->

	<!-- jQuery -->
	{!! HTML::script('js/jquery-1.12.3.js') !!}
	
	<!-- Bootstrap Core JavaScript -->
	{!! HTML::script('js/bootstrap.min.js') !!}

	<!-- Metis Menu Plugin JavaScript -->
	{!! HTML::script('js/metisMenu.min.js') !!}

	<!-- Custom Theme JavaScript -->
	{!! HTML::script('js/sb-admin-2.js') !!}

	<!-- ChartsJS Javascript -->
	{!! HTML::script('js/Chart.min.js') !!}

	<!-- AngularJS core JavaScript
	================================================== -->
	{!! HTML::script('js/angular.min.js') !!}
	{!! HTML::script('js/app.js') !!}
	{!! HTML::script('js/bootstrap-datepicker.min.js') !!}
	{!! HTML::script('js//locales/bootstrap-datepicker.fr.min.js') !!}
	{!! HTML::script('js/custom-function.js') !!}
	
	{!! HTML::script('js/easypiechart.js') !!}

	
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
