<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? $theTitle=wp_title(" - ", false); if($theTitle != "") { ?><title><?php echo wp_title("",false); ?> - <?php bloginfo('name'); ?></title>
<? } else { ?><title><?php bloginfo('name'); ?></title><? } ?>

<meta name="author" content="Cheah Chu Yeow" />
<meta name="Copyright" content="Copyright (c) 2003-<?php echo date('Y'); ?> Cheah Chu Yeow" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/code_highlighter.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/ruby.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/javascript.js"></script>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<link rel="shortcut icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>

<body>

<!-- Start BG -->
<div id="bg"><div id="bg-all">

<!-- Start Container -->
<div class="container">

<!-- Start Header -->
<div class="logo">
 <?php
  if ( get_option('evidens_header') == 'logo' ) 
  { include (TEMPLATEPATH . "/logo-img.php"); }
  else
  { include (TEMPLATEPATH . "/logo-txt.php"); }
  ?>
</div>
<!-- END Header -->

<div class="SL">