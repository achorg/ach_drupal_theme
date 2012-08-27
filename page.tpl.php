<!DOCTYPE html>
<html lang="<?php print $language->language ?>">
  <head>
    <meta charset="utf-8">
    <title><?php print $head_title ?></title>
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
  </head>
<body>
<div id="container">
	<div id="header">
    <?php if ($site_name): ?>
    <h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>
    <?php endif; ?>
    <?php if ($logo): ?>
    <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>">
      <img src="<?php print $logo ?>" alt="The Association for Computers and the Humanities" id="logo" />
    </a>
    <?php endif; ?>
      <?php if (isset($primary_links)) : ?><?php print theme('nice_menus_primary_links') ?><?php endif; ?>
      <div id="courtesy-bar">
      <?php if ($search_box) : echo $search_box; endif; ?>
      <?php if (isset($secondary_links)) : ?><?php print theme('links', $secondary_links, array('class' =>'links', 'id' => 'subnavlist')) ?><?php endif; ?>
      </div>
	</div>

  <div id="sidebar-left">
    <?php if ($left) : ?>
        <?php print $left; ?>
    <?php endif; ?>
  </div>

 	<div id="content"<?php if (burnt_is_admin()) : ?> class="admin"<?php endif; ?>>
    <?php print $breadcrumb ?>
    <?php print $help ?>
    <?php print $messages ?>
    <h1 class="title"><?php print $title ?></h1>
    <div class="tabs"><?php print $tabs ?></div>
    <?php print $content; ?>
  </div>

  <?php if (($right) && (!burnt_is_admin())) : ?>
	  <div id="sidebar-right">
      <?php print $right ?>
    </div>
  <?php endif; ?>
 
	<div id="footer">
    <p>
      <?php print $footer_message ?>
      <?php print $closure ?>
    </p>
	</div>

</div>

</body>
</html>

