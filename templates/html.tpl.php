<!DOCTYPE html>
<head>
<?php print backdrop_get_html_head(); ?>
<title><?php print $head_title; ?></title>
<?php print backdrop_get_css; ?>
<?php print backdrop_get_js; ?>
<!--[if IE 8 ]>    <html class="ie8 ielt9"> <![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
