<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

    <div id="central" role="main" class="clearfix">
		<div id="body">	
			<?php  
			$a = new Area('Main');
			$a->display($c);
			?>
		</div> <!-- end of #body -->

		<div id="links">
			<img id="imdb" src="img/imdb.jpg" />
			<img id="spotlight" src="img/spotlight.jpg" />
		</div>
        
    </div>

<?php   $this->inc('elements/footer.php'); ?>