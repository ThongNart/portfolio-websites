<!doctype html>

<html>
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title>Samir Dave</title>
        
        <?php wp_head() ;?>
       
    </head>
        
    
    <body class="w3-black" id="top">
    
        <div class="w3-container">
            
	<!-- Side Menu -->
	<div class="w3-sidenav w3-center w3-small w3-black w3-hide-small">
	
	  	<a href="http://samirdave.net/" class="w3-black"><img src="http://bit.ly/2iVERFm" style="width:100%; margin-left:-12px"></a>
	  	
		<div id="samir-nav">
	  	
			<?php 
		            wp_nav_menu(array(
		                'theme_location'=>'primary',
		                'container' => '',
		                )
		            );
		        ?>
		</div>
	</div> <!-- Side Menu close -->
        

	
	 <!--Dynamic Navbar (sit on top) -->
	<div class="w3-top w3-hide-medium w3-hide-large" >
	  <ul class="w3-navbar" id="myNavbar">
	    <li class="w3-hide-medium w3-hide-large w3-opennav ">
	      <a class="w3-hover-blue w3-white" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
	        <i class="fa fa-bars"></i>
	      </a>
	    </li>
	    
	    <li>
	    	<a href="#top" class="w3-hover-blue ps2id">
	        Samir Dave
	      </a>
	    </li>
	    
	  </ul>
	
	  <!-- Navbar on small screens -->
	  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium"> 
	    <ul class="w3-navbar w3-right-align w3-white">
	      
	      <?php 
	            wp_nav_menu(array(
	                'theme_location'=>'primary',
	                'container' => '',
	                'menu_class' => 'w3-navbar',
	                )
	            );
	     ?>
	      
	    </ul>
	  </div>
	  
	</div> <!--dynamic navbar close -->
        
        
        
        <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width;?>" alt=""/>
        
        
        
        
        
        
        
        
        