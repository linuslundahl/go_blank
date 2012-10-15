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
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title><?php echo $head_title; ?></title>
  <?php echo $head; ?>
  <?php echo $styles; ?>
  <?php echo $scripts; ?>
</head>
<body class="<?php echo $classes; ?>">
  <?php echo $page_top; ?>

  <?php echo $page; ?>

  <?php echo $page_bottom; ?>
</body>
</html>