<!DOCTYPE html>
<html>
<head>
<?php include('assets/incl/head.php') ?>
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
	
	
	
	
	<section id="stemningsvideo">
		<video poster="" muted autoplay loop>
			<source src="" type="video/mp4">
			<source src="" type="video/webm">
		</video>
	<div id=""><?= $text->videoText ?></div>
	</section>
	<section id="oversigt">
		<div class="oversigt_wrapper">
			<br>
			<div id="oversigt_img_wrapper"
				<div class="container">
					<div class="row">
						<div class="col">
  						<img src="" alt="avatar" class="image">
							<h1>Sejlplan</h1>
							<p>Du kan opleve Odense Å fra vandet gennem hele sommeren. Fra maj til august er der mange daglige afgange - særplan i påsken, april, september og oktober.</p>
							<p>Turen med Odense Aafart varer 1 time og består af en skøn sejltur op og ned ad Odense Å.</p>
						</div>
						<div class="col">
  						<img src="" alt="avatar" class="image">
							<h1>Firmaarrangement</h1>
							<p>Prøv et anderledes og sjovt firmaarrangement med dine kolleger. I kommer til at opleve hinanden på en helt ny måde end i dagligdagen.
							<p>Dagen byder sejltur på smukke Odense Å, segway, teambuilding-aktiviteter og picnic i det grønne.</p>
						</div>
						<div class="row">
  						<img src="" alt="avatar" class="image">
							<h1>Priser</h1>
							<p>Pris for en sejltur med Odense Aafart:</p>
							<p>Kr. 90 for voksne</p>
							<p>Kr. 60 for børn (3-11 år)</p>
							<p>Vi byder på mange andre oplevelser ud over den klassiske sejltur på åen – både for børn og voksne.</p>
						</div>
					</div>
				</div>
			</div>
	</section>


<?php include('assets/incl/bottom.php') ?>
</body>
</html>