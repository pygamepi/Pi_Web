<!DOCTYPE html>
<html>
    <head>
    	<title>GP | Servers</title>
	<?php include('../../core/inc/headtag.php'); ?>
	<?php include_once 'minecraftquerry.php'; ?>
    </head>

    <body onload="load()">

	<?php include('../../core/inc/navbar.php'); ?>
	<?php include('../../core/inc/menuPop.php'); ?>

	<div class="container">
	    <div class="row">
		<center><div class="blockLength9 block">
		    <h1>Server<h1>
		</div><!--block-->
		<div class="blockLength9 block servers">
                    <h1>Minecraft Vanilla</h1>
		    <img src="http://pygamepi.com/core/img/vanilla.png"/>
		    <?php include('vanilla.php'); ?>
                </div><!--block--></center>
	    </div><!--row-->
	</div><!--container-->

	<?php include('../../core/inc/footer.php'); ?>

    </body>

</html>
