<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>


<body>
 
    
<div class="head2" style="background-image: url(<?php header_image(); ?>);"> 
	<!-- Fixed navbar -->
	<div class="navbar navbar-fixed-top " >
		<div class="container">
		<br>
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="<?php echo home_url(); ?>"> <?php echo get_custom_logo();?>
    </a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					
					 <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
                   
				</ul>
			</div>
		    </div> 
		 </div> 
		 <div class="header_d"> 
		 <h1 class="desc"><?  ?> We are </h1>
		 <div class="line"> </div>
		 <h1 class="desc"><?  ?> designing </h1>
		 <p class="tagline"> And We Are Doing It</p>
		 </div>	
		 <div class="scroll">∨</div>
	
	<!-- /.navbar -->
	</div>