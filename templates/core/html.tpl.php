<?php
/**
 * @file
 *   Basic HTML structure.
 *
 * @see preprocess/preprocess-html.inc
 * @see http://api.drupal.org/api/drupal/modules--system--html.tpl.php/7/source
 */
?>
<!DOCTYPE html>
<html lang="<?php echo $language->language; ?>">
<head>
  <title><?php echo $head_title; ?></title>
  <?php echo $head; ?>
  <?php echo $styles; ?>
  <?php echo $scripts; ?>
  <!--[if lte IE 8]>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body class="<?php echo $classes; ?>">
  <?php echo $page_top; ?>

  <?php echo $page; ?>

  <?php echo $page_bottom; ?>
</body>
</html>
