<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>eSIM</title>
	<!-- Stylesheets -->
    <link rel="icon" href="images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- Responsive -->
	<link href="css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	<script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
	
	<div class="main-wrapper">
		
        <header id="header">
			<div class="container">
			    <div class="logo-site">
			        <a href="index.html">
			            <img src="images/logo.svg" alt="" />
			        </a>
			    </div>
				<ul class="main_menu clearfix">
					<li class="active"><a class="page-scroll" href="index.html">Home</a></li>
					<li><a class="page-scroll" href="about.html">About Us</a></li>
					<li><a class="page-scroll" href="contact.html">Contact Us</a></li>
                    <ul class="menu">
						@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
							<li>
								<a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
									{{ $properties['native'] }}
								</a>
							</li>
						@endforeach
					</ul>
					<li class="get-started"><a href="get.html" class="page-scroll btn-site"><span>Get Started</span></a></li>
				</ul>
                <div class="opt-mobail">
                    <button type="button" class="hamburger">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                    </button>
                </div>
			</div>
		</header>