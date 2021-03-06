<?php get_header() ?>
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">         
	    <div class="container">
	        <div class="navbar-header">
	            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a href="index.html" class="navbar-brand"><h1>
			<a href="<?php echo site_url(); ?>">AngularJS Demo Theme</a>
		</h1></a>
	        </div>
	        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
	            <form class="navbar-form navbar-right" role="search">
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Search">
	              </div>
	              <button type="submit" class="btn btn-default">Submit</button>
	            </form>
	            <ul class="nav navbar-nav">
	                <li class="active"><a href="index.html">Home</a></li>
	                <li><a href="contact.html">Contact</a></li>
	                <li><a href="about.html">About</a></li>
	            </ul>
	        </nav>
	    </div>
	</header>
 
	<div class="content-holder" ng-view></div>

	<?php get_footer() ?>
