<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE ]>
<link rel="stylesheet" href="<?=bloginfo('template_url')?>/style-ie.css" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 6]>
<link rel="stylesheet" href="<?=bloginfo('template_url')?>/style-ie6.css" type="text/css" media="screen" />
<style type="text/css">
#header_rss img, .post-top h4, #footer{
	behavior:expression((this.runtimeStyle.behavior="none")&&(this.pngSet?this.pngSet=true:(this.nodeName == "IMG" && this.src.toLowerCase().indexOf('.png')>-1?(this.runtimeStyle.backgroundImage = "none",
	this.runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + this.src + "', sizingMethod='image')",
	this.src = "<?=bloginfo('template_url')?>/images/transparent.gif"):(this.origBg = this.origBg? this.origBg :this.currentStyle.backgroundImage.toString().replace('url("','').replace('")',''),
	this.runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + this.origBg + "', sizingMethod='crop')",
	this.runtimeStyle.backgroundImage = "none")),this.pngSet=true)
	);
}
</style>
<![endif]-->

<?php if(is_single()) : ?>
<script type="application/javascript" src="<?=bloginfo('template_url')?>/js/comment-reply.js"></script>
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body>
<div id="page">

<div id="header">
	<div id="header_title">
        <h1>
            <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
        </h1>
    </div>
	<div id="header_rss">
    	<img style="display: none" src="<?php bloginfo('template_directory'); ?>/images/phone-idol.png" />
    </div>
</div>

<div id="menu">
	<ul>
	 <li><a href="<?php bloginfo('siteurl'); ?>">Home</a></li>
	 <li><a href="<?php bloginfo('siteurl'); ?>/about">About</a></li>
	 <li><a href="<?php bloginfo('siteurl'); ?>/top-tracks">Top Tracks</a></li>
	 <li><a href="<?php bloginfo('siteurl'); ?>/faq">FAQ</a></li>
	 <li><a href="<?php bloginfo('siteurl'); ?>/suggestions">Suggestions</a></li>

		<?php//wp_list_pages('title_li=&sort_column=menu_order'); ?>
	</ul>
</div>

<div id="body">
<div id="body_top">
  <div id="intro">
    It's simple.  Just dial <span class="dial">(718) 775-3384 and sing your heart out.  <br />Then, America votes and the best singer becomes the <i>Phone Idol!</i></span>
  </div>
	<div id="body_left">
    	<div id="body_left_content">