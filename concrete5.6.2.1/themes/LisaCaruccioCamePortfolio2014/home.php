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

		<div id="links" class="clearfix">
			<a href="http://www.imdb.com/name/nm6233234/" target="_blank"><img id="imdb" src="<?php echo $this->getThemePath();?>/img/imdb.jpg" /></a>
			<a href="http://www.spotlight.com/9132-8970-6080" target="_blank"><img id="spotlight" src="<?php echo $this->getThemePath();?>/img/spotlight.jpg" />
		</div>
        
    </div>

<?php   $this->inc('elements/footer.php'); ?>