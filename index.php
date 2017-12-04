<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo( 'title' ) ?></title>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" media="all">
</head>
<body>

<h1></h1>



	
	
	
	
	
	<header>
	<div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="#"><img src="assets/img/logo.png"></a>
                    
                </div>
                
                
                <div class="collapse navbar-collapse" id="navcol-1">
                   <?php
						wp_page_menu()
					?>
                </div>
            </div>
        </nav>
    </div>
	<div>
	
	</div>
	</header>

</body>
</html>