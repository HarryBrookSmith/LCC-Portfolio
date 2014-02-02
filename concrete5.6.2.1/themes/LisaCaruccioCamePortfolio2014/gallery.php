<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_gallery.php'); ?>

    <div id="central" role="main" class="clearfix">

		<div id="body">	

					
			<div id="headshots">
				<?php  
				$a = new Area('Headshots');
				$a->display($c);
				?>
			</div>

			<div id="production_skills">
				<?php  
				$a = new Area('Production Skills');
				$a->display($c);
				?>
			</div>
		</div> <!-- end of #body -->
        
    </div>

<?php   $this->inc('elements/footer.php'); ?>