<?php   defined('C5_EXECUTE') or die("Access Denied."); ?><!doctype html>
<?php 
	/* If this page has the attribute replace_link_with_first_in_nav then redirect to that page instead */
	if ($c->getCollectionAttributeValue('replace_link_with_first_in_nav')) {
			$subPage = $c->getFirstChild();
			if ($subPage instanceof Page) {
					$nh = Loader::helper('navigation');
					header ("HTTP/1.1 301 Moved Permanently");
					header ("Location: " . $nh->getLinkToCollection($subPage));
					exit();
			}
	}
	/*  If the multilingual add-on is installed then get home page, language and locale from there
	( see http://www.concrete5.org/marketplace/addons/internationalization/) */
	$lang = LANGUAGE;
	$locale = ACTIVE_LOCALE;
	$home = DIR_REL;
	if( Package::getByHandle('multilingual') ) {
		$ms = MultilingualSection::getCurrentSection();
		if (is_object($ms)) {
			$home = Loader::helper('navigation')->getLinkToCollection($ms, true);
			$lang = $ms->getLanguage();
			$locale = $lang . "_" . $ms->getIcon();
		}
 	} 
?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?php echo $lang?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php echo $lang?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php echo $lang?>"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $lang?>"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <?php  Loader::element('header_required'); ?>

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville|Linden+Hill' rel='stylesheet' type='text/css'>
  <!-- CSS: implied media=all -->
  <link rel="stylesheet" href="<?php echo $this->getThemePath()?>/style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php echo $this->getThemePath()?>/js/libs/modernizr-2.0.6.min.js"></script>

</head>

<body>

  <div id="container">
    <header>
    	
        <div id="header-area">
        	
        	<nav id="mobile_nav">
	        	<?php
				$nav = BlockType::getByHandle('autonav');
				$nav->controller->orderBy = 'display_asc';
				$nav->controller->displayPages = 'top';
				$nav->controller->displaySubPages = 'all';
				$nav->controller->displaySubPageLevels = 'custom';
				$nav->controller->displaySubPageLevelsNum = 0;
				$nav->render('view');
				?>
			</nav>
		</div>

        <h1 id="logo">
			<a href="<?=$this->url('');?>"><?php  
				$block = Block::getByName('My_Site_Name');  
				if( $block && $block->bID ) $block->display();   
				else echo SITE;
			?></a>
		</h1>

		<div id="gallery_selection">
			
		</div>

		<nav id="nav">
				<?php
				$nav = BlockType::getByHandle('autonav');
				$nav->controller->orderBy = 'display_asc';
				$nav->controller->displayPages = 'top';
				$nav->controller->displaySubPages = 'all';
				$nav->controller->displaySubPageLevels = 'custom';
				$nav->controller->displaySubPageLevelsNum = 0;
				$nav->render('view');
				?>
		</nav>

    </header>