	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/materialize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript">
	    (function() {
	        var path = '//easy.myfonts.net/v2/js?sid=229610(font-family=Aracne)&sid=229612(font-family=Aracne+Light)&sid=264533(font-family=Aracne+Stamp)&key=JIldsgJFxr',
	            protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
	            trial = document.createElement('script');
	        trial.type = 'text/javascript';
	        trial.async = true;
	        trial.src = protocol + path;
	        var head = document.getElementsByTagName("head")[0];
	        head.appendChild(trial);
	    })();
	</script>
	<?php wp_head() ?>
</head>

<body>
	<div id="back-to-top-container" title="Back to Top">
		<h1><i class="fa fa-chevron-circle-up"></i></h1>
	</div>
	<header>
		<nav class="hide-on-med-and-down">
			<div class="nav-wrapper">
				<div class="left brand">
			      	<a href="<?= get_home_url(); ?>">
			      		<img src="<?php bloginfo('template_url'); ?>/images/candc4.png">
			      	</a>
		      	</div>
		      	<div class="right">
		      		<div id="nav-search" class="right input-field">
			    		<form role="search" method="get" id="searchform" class="searchform" action="<?= get_home_url(); ?>/">
			          		<input id="s" name="s" type="search" required placeholder="search this site...">
			          		<label for="s"><i class="mdi-action-search"></i></label>
			          		<i id="nav-search-close" class="mdi-navigation-close"></i>
			    		</form>
			    	</div>
			      	<ul class="right" id="main-nav-links">
			        	<li><a href="<?= get_home_url(); ?>">Home</a></li>
			        	<li><a class="dropdown-button" data-activates="dropdown1" href="#">Categories&nbsp;<i class="fa fa-caret-down"></i></a></li>
			        	<li><a href="<?= get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
			        	<li><a href="<?= get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
			        	<li id="nav-search-link"><a href="#"><i class="mdi-action-search"></i></a></li>
			      	</ul>
			      	<ul id="dropdown1" class="dropdown-content">
					  	<li>
			              	<a href="#!">Camping with Kids</a>
		              	</li>
			            <li>
			            	<a href="#!">Local Day Trips</a>
			            </li>
			            <li>
			              	<a href="#!">Destinations</a>
			            </li>
			            <li>
			              	<a href="#!">Adventure Mom Life</a>
			            </li>
			            <li>
			              	<a href="#!">Projects, Recipes, &amp; Products</a>
			            </li>
					</ul>
		      	</div>
			</div>
		</nav>

		<!-- Mobile Navigation -->
		<nav id="mobile-nav" class="hide-on-large-only">
			<div class="nav-wrapper">
				<div class="brand left">
					<a href="<?= get_home_url(); ?>">
						Crayons&thinsp;<span class="amp">&amp;</span>&thinsp;Cairns
					</a>
		      	</div>
		      	<a href="#" data-activates="mobile-nav-links" class="button-collapse orange-text text-darken-2">
					<i class="mdi-navigation-menu"></i>
				</a>
				<ul class="side-nav" id="mobile-nav-links">
					<li><a href="<?= get_home_url(); ?>">Home</a></li>
					<li class="divider"></li>
					<li class="no-padding">
				      <ul class="collapsible collapsible-accordion">
				        <li>
				          <a id="cat-link" class="collapsible-header account-actions">Categories&nbsp;<i class="fa fa-caret-down"></i></a></a>
				          <div class="collapsible-body">
				            <ul>
				              	<li>
					              	<a href="#!">Camping with Kids</a>
				              	</li>
					            <li>
					            	<a href="#!">Local Day Trips</a>
					            </li>
					            <li>
					              	<a href="#!">Destinations</a>
					            </li>
					            <li>
					              	<a href="#!">Adventure Mom Life</a>
					            </li>
					            <li>
					              	<a href="#!">Projects, Recipes, &amp; Products</a>
					            </li>
				            </ul>
				          </div>
				        </li>
				      </ul>
				    </li>
				    <li class="divider"></li>
				    <li><a href="<?= get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
				    <li class="divider"></li>
				    <li><a href="<?= get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
		      	</ul>
			</div>
		</nav><!--
		<div class="landing-header center-align">
	    	<h1 class="white-text">Crayons &amp; Cairns</h1>
	    </div>-->
	</header>
	<div id="welcome-modal" class="modal">
	    <div class="modal-content">
	    	<div class="center-align">
		    	<img src="<?php bloginfo('template_url'); ?>/images/teal-cairn.png">
		    	<h4>Welcome to Crayons &amp; Cairns!</h4>
		    </div>
	    	<p>
	      		Thanks for joining us for our site launch! To celebrate our launch, 
	      		we're doing an awesome giveaway! Be sure to click <a href="">here</a> 
	      		for all the details.
	    	</p>
	    </div>
	    <div class="modal-footer">
	    	<button class=" modal-action modal-close waves-effect waves-green btn-flat">Got it!</button>
	    </div>
  	</div>