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
      <img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" id="logo" />
    </a>
    <?php endif; ?>
    <?php if ($site_slogan) : ?><p><?php print $site_slogan ?></p><?php endif; ?>	 
      <?php if (isset($primary_links)) : ?><?php print theme('nice_menus_primary_links') ?><?php endif; ?>
      <div id="courtesy-bar">
      <?php if ($search_box) : echo $search_box; endif; ?>
      <?php if (isset($secondary_links)) : ?><?php print theme('links', $secondary_links, array('class' =>'links', 'id' => 'subnavlist')) ?><?php endif; ?>
      </div>
	</div>
    <div id="mission">
    ACH is <em>your</em> professional society for the digital humanities! We support computer-assisted research, teaching, and software and content development in humanistic disciplines like literature, history, and philosophy. <a href="membership" class="membership-link"><strong>Join today!</strong></a>
    </div>

	<div id="activities" class="column">
    <h1>Activities</h1>
    <div>
      <h2><a href="http://dh2013.unl.edu/">Digital Humanities 2013</a></h2>
      <p><a href="http://dh2013.unl.edu" class="image"><img src="<?php echo path_to_theme(); ?>/images/DH13_simplified.png"></a> Our annual conference, to be held at the University of Nebraska in Lincoln, Nebraska, July 16–19.</p>

			<h2><a href="outreach">Outreach</a></h2> 
      <p>We cultivate a broad DH community by supporting events and activities, providing mentoring services and help for job-seekers, and working on issues that matter to the digital humanities.</p>

			<h2><a href="grants-and-awards">Grants and Awards</a></h2> 
      <p>Awards such as the Busa Prize, Zampoli Award, and ACH student bursaries recognize outstanding achievements in the application of technology to humanities research.</p>
      <div class="other_links">
        <a href="mentoring">ACH Mentoring Service</a><br />
        <a href="http://digitalhumanities.org/answers">DH Answers: Friendly Q&A Board</a><br />
      </div>
    </div>
  </div>
	<div id="news" class="column">
    <h1>News</h1>
		<div>
			<?php
        /**
         * This php snippet displays content of a specified type, with teasers
         *
         * To change the type of content listed, change the $content_type.
         *
         * Works with drupal 4.6
         */
          $content_type = 'news';
          $result1 = db_query(db_rewrite_sql("SELECT n.nid, n.created FROM node n WHERE n.type = '$content_type' AND n.status = 1 ORDER BY n.created DESC LIMIT 2"));
          while ($node = db_fetch_object($result1)) {
            $output .= node_view(node_load(array('nid' => $node->nid)), 1);
          }
        print $output;
?>
      <div class="other_links">
          <a href="news">Older News Items</a>
      </div> 
    </div>
	</div>
	<div id="publications" class="column">
    <h1>Publications</h1>
    <div>
        <h2><a href="http://www.digitalhumanities.org/dhq/">Digital Humanities Quarterly</a></h2>
        <p><a href="http://www.digitalhumanities.org/dhq/" class="image"><img src="<?php echo path_to_theme(); ?>/images/dhqlogo.png" alt="DHQ" /></a>Our own open-access, peer-reviewed, online journal covering all aspects of digital media in the humanities.</p>

        <h2><a href="http://www.digitalhumanities.org/humanist/">Humanist</a></h2>
			<p>
      <a href="http://www.digitalhumanities.org/humanist/" class="image"><img src="<?php echo path_to_theme(); ?>/images/humanist.gif" alt="Humanist" /></a>An electronic seminar and forum on humanities computing and DH, continuously active since 1987. <!-- sites/all/themes/ach03/images/littlehumanist.gif old pic just in case --></p>
      
      <h2><a href="http://llc.oxfordjournals.org/">LLC</a></h2>
      <p>
        <a href="http://llc.oxfordjournals.org/" class="image"><img src="webfm_send/26" alt="LLC" /></a>
        The journal of digital scholarship in the humanities, which manages ACH membership subscriptions.</p>
    <div class="other_links">
			<a href="http://209.20.69.206:8080/dh-abstracts/search" target="_blank">ACH/ALLC Conference Abstracts</a><br /><a href="mla-pages">ACH at the MLA Convention</a>
    </div>

		</div>
	</div>
<div style="clear:both;"><!-- just clearfixin' --></div>
</div>
<div style="clear:both;"><!-- just clearfixin' --></div>
</body>
</html>
