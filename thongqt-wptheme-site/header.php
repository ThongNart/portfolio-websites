<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Thongqt test theme</title>
        <p>This is my header</p>
        <!-- This is to specify to wordpress using php of where and what to print out -->
        <?php wp_head() ;?>
    </head>
        
    <!-- This php code below is to ensure that certain body class is applied to certain page video part 4 -->
    <?php 
        if ( is_front_page() ):
            $freedom_classes = array ('freedom-class','my-class');
        else:
            $freedom_classes = array ('no-freedom-class');
        endif;
    ?>
    
    <!-- This body_class below is for 'futher' customization of the page in respect to different content video part4-->
    <body <?php body_class( $freedom_classes);?> >
        
        <div class="container">
            
        <div class="row">
        
            <div class="col-xs-12">            
                
                <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Freedom Theme by Nart</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <!-- from the function, print the 'Main Menu' to the location 'Primary Header Navigation' -->
                      
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php 
                            wp_nav_menu(array(
                                'theme_location'=>'primary',
                                'container' => false,
                                'menu_class' => 'nav navbar-nav navbar-right',
                                )
                            );
                        ?>

                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
                
            </div> <!-- col close-->
            
        </div>    <!-- row close-->
        
        <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width;?>" alt=""/>
        
        
        
        
        
        
        
        
        