<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title(':', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
<!--[if gte IE 7]><!-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" charset="utf-8" />
<!-- <![endif]-->

<!--[if IE 7]>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style_ie.css" type="text/css" media="screen" charset="utf-8" />
<![endif]-->

<!--[if IE 6]>
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_directory'); ?>/styles_ie6.css" />
<![endif]-->



<link href='http://fonts.googleapis.com/css?family=Denk+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'> 
<link href='http://fonts.googleapis.com/css?family=Rambla:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Englebert' rel='stylesheet' type='text/css'>



  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.3.2.min.js" charset="utf-8"> </script>

	



<?php #################################### Includes for banner ################################ 
?>


						
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold" />
							


<link rel='stylesheet' id='slideshow-css'  href='<?php bloginfo('stylesheet_directory'); ?>/banner/flexslider.css' type='text/css' media='all' />

<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/banner/jquery.js'></script>

<meta name="generator" content="WordPress 3.3.1" />

<meta name="generator" content=" " />

<style type="text/css" media="screen">


	#bannerText { top: 250px; }

	blockquote, address {
		border-left: 5px solid #ccb676;
	}	
	#filterNav .selected, #filterNav a.selected:hover, #content .project.small .inside {
		background-color: #ccb676;
	}	

#mainNav ul a, #mainNav ul li.sfHover ul a { color: #8f8f8f !important;	}
	#mainNav ul li.current a,
	#mainNav ul li.current-cat a,
	#mainNav ul li.current_page_item a,
	#mainNav ul li.current-menu-item a,
	#mainNav ul li.current-post-ancestor a,	
	.single-post #mainNav ul li.current_page_parent a,
	#mainNav ul li.current-category-parent a,
	#mainNav ul li.current-category-ancestor a,
	#mainNav ul li.current-portfolio-ancestor a,
	#mainNav ul li.current-projects-ancestor a {
		color: #2e2e2e !important;		
	}
	#mainNav ul li.sfHover a,
	#mainNav ul li a:hover,
	#mainNav ul li:hover {
		color: #2e2e2e !important;	
	}
	#mainNav ul li.sfHover ul a:hover { color: #2e2e2e !important;}	

a { color: #ccb676;}
a:hover {color: #aa9862;}
.button, #searchsubmit, input[type="submit"] {background-color: #757575 !important;}
.button:hover, #searchsubmit:hover, input[type="submit"]:hover {background-color: #595959 !important;}

	#homeBanner {
		background-color: #132b2b;
	}	

	#homeBanner {
		background-image: url(http://www.panks.me/images/heroBack.jpg);		
		background-repeat:no-repeat;
		background-attachment:fixed;
		background-position:center top;			
	}

@media only screen and (max-width: 768px) {	
#text-2 img {float: left !important;}
}

</style>	
			
	
	
		
<?php ################################# Includes for banner over ################################## 
?>		




  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>



<?php #################################### body starts ################################### 
?>



<body <?php body_class(); ?>>



<?php if (is_front_page()==true) { ?> 
<div id="siteWrapper10">
<?php } else { ?>
<div id="siteWrapper0">
<?php } ?>



  <h1 class="vcard author"><a href="<?php echo get_option('home'); ?>/" title="Home" class="fn"><?php  bloginfo('name');?></a></h1> 

</div>




<?php ############################ the portion below set the banner.########################## 
?>


<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/banner/jflickrfeed.js?ver=0.8'></script>
<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/banner/theme_trust.js?ver=1.0'></script>

<?php if (is_front_page()==true) { ?>

<div id="container2">	
<div id="header2">


		<div id="homeBanner">			
			<div id="bannerText">
				 	<div id="inside1">
						I'm <div id="inside2">Pankaj Kumar</div>,<br> Engg Student &amp; Developer<br>From 
						<font color="#843D95">INDIA</font>
					</div>

			</div>		
		</div>				
			</div>		
		</div>
<?php } else { ?>
<div id="tmpdiv">
</div>
	
<?php } ?>



<?php ############################ code for main navigation bar and rest of body.########################## 
?>


  <div id="mainNav">
    <ul>
      <?php wp_list_pages('title_li=&depth=1'); ?>
    </ul>
  </div>

<div id="siteWrapper">
    <?php
      if($post->post_parent)
      $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
      else
      $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
      if ($children) { ?>
      <div id="subNav">
      <ul>
      <?php echo $children; ?>
      </ul>
      </div>
      <?php } ?>
  
  <div id="siteDescription">
    <?php  bloginfo('description'); ?>
  </div>