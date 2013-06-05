<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib.php';
require_once __DIR__ . '/markdown.php';

if (!file_exists(__DIR__. '/cache/README.md')) {
  cache_all();
}

$readme = file_get_contents(__DIR__. '/cache/README.md');
$instructions = file_get_contents(__DIR__. '/cache/INSTRUCTIONS.md');
$piece = file_get_contents(__DIR__. '/cache/PIECE');
$contributors = file_get_contents(__DIR__. '/cache/CONTRIBUTORS');
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Révisable 1</title>
	<meta name="description" content="Révisable 1 is a physical sculptures based on Git and initiated by Raphaël Bastide">
	<link rel="stylesheet" media="all" href="css/main.css">
	<link rel="shortcut icon" href="css/img/favicon.gif" type="image/x-icon" />
	<link href="https://github.com/imalorg/revisable-1/commits/master.atom" rel="alternate" title="Recent commits for Révisable 1" type="application/atom+xml" />
</head>
	<body>
	<header>
		<div class="titles">
			<h1>Réviasble 1</h1>
			<h2>Versioned physical sculpture exposed at iMAL, Brussels</h2>
			<nav role="navigation" class="menu">
				<ul>
					<li class="H1"><a href="#versions">Versions</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="main-content">
	<div id="versions" class="contentbox">
		<div class="inner">
			<div class="vbox" id="v0_9_3">
				<img width="800" height="533" title="Révisable 1 v0.1" src="img/0_1.jpg" />
				<ul class="caption">
					<li class="version">version: 0.1</li>
					<li class="date">date: 2013-06-5</li>
					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v0.1/PIECE">on GitHub</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="textboxes" class="contentbox">
		<div class="readme textbox">
			<?php echo markdown($readme); ?>
		</div>
		<div class="piece textbox">
			<h2>Current state of the PIECE file</h2>
			<pre><?php echo markdown($piece); ?></pre>
		</div>
		<div class="calendar">
			<h2>Calendar</h2>
			<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=550&amp;wkst=2&amp;hl=en_GB&amp;bgcolor=%23ffffff&amp;src=6t1d3866v675jhfkhhoeo5l4u0%40group.calendar.google.com&amp;color=%23711616&amp;ctz=Europe%2FParis" style=" border-width:0 " width="550" height="550" frameborder="0" scrolling="no"></iframe>
		</div>
		<div class="instructions textbox">
			<?php echo markdown($instructions); ?>
		</div>
		<div class="contributors textbox">
			<h2>Contributors</h2>
			<pre><?php echo $contributors ?></pre>
		</div>
	</div>
	<div class="frame"></div>
	<script src="js/libs/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/script.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-26267672-3']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>
