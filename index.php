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
			<h1>Révisable 1</h1>
			<h2>Versioned physical sculpture at iMAL, Brussels</h2>
			<nav role="navigation" class="menu">
				<ul>
					<li class="h1"><a href="#about">About</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="main-content">
    <div id="about" class="readme textbox">
      <?php echo markdown($readme); ?>
    </div>
  	<div id="versions" class="contentbox">
  		<div class="inner">
  			<div class="vbox" id="v11.0">
  				<img width="800" height="533" title="Révisable 1 v11.0" src="img/11_0.jpg" />
  				<ul class="caption">
  					<li class="version">version: 11.0</li>
  					<li class="contributor">contributor: Yhancik</li>
  					<li class="date">date: 2013-08-20</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v11.0/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v10.0">
  				<img width="800" height="533" title="Révisable 1 v10.0" src="img/10_0.jpg" />
  				<ul class="caption">
  					<li class="version">version: 10.0</li>
  					<li class="contributor">contributor: Minnie Fractale</li>
  					<li class="date">date: 2013-08-13</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v10.0/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v9.0">
  				<img width="800" height="533" title="Révisable 1 v9.0" src="img/9_0.jpg" />
  				<ul class="caption">
  					<li class="version">version: 9.0</li>
  					<li class="contributor">contributor: Pierre Bertet</li>
  					<li class="date">date: 2013-08-06</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v9.0/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v8.0">
  				<img width="800" height="533" title="Révisable 1 v8.0" src="img/8_0.jpg" />
  				<ul class="caption">
  					<li class="version">version: 8.0</li>
  					<li class="contributor">contributor: Raphaël</li>
  					<li class="date">date: 2013-07-30</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v8.0/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v7.0">
  				<img width="800" height="533" title="Révisable 1 v7.0" src="img/7_0.jpg" />
  				<ul class="caption">
  					<li class="version">version: 7.0</li>
  					<li class="contributor">contributor: Tigre Radio</li>
  					<li class="date">date: 2013-07-24</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v7.0/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v6.1">
  				<img width="800" height="533" title="Révisable 1 v6.1" src="img/6_1.jpg" />
  				<ul class="caption">
  					<li class="version">version: 6.1 (bug fix)</li>
  					<li class="contributor">contributor: Alice</li>
  					<li class="date">date: 2013-07-16</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v6.1/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v6.0">
  				<img width="800" height="533" title="Révisable 1 v6.0" src="img/6_0.jpg" />
  				<ul class="caption">
  					<li class="version">version: 6.0</li>
  					<li class="contributor">contributor: Alice</li>
  					<li class="date">date: 2013-07-10</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v6.0/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v5.0">
  				<img width="800" height="533" title="Révisable 1 v5.0" src="img/5_0.jpg" />
  				<ul class="caption">
  					<li class="version">version: 5.0</li>
  					<li class="contributor">contributor: Vincent Evrard</li>
  					<li class="date">date: 2013-07-02</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v5.0/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v4.0">
  				<img width="800" height="533" title="Révisable 1 v4.0" src="img/4_0.jpg" />
  				<ul class="caption">
  					<li class="version">version: 4.0</li>
  					<li class="contributor">contributor: Galhac</li>
  					<li class="date">date: 2013-06-25</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v4.0/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v3.0">
  				<img width="800" height="533" title="Révisable 1 v3.0" src="img/3_0.jpg" />
  				<ul class="caption">
  					<li class="version">version: 3.0</li>
  					<li class="contributor">contributor: Collectif Sin ~</li>
  					<li class="date">date: 2013-06-18</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v3.0/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v2.0">
  				<img width="800" height="533" title="Révisable 1 v2.0" src="img/2_0.jpg" />
  				<ul class="caption">
  					<li class="version">version: 2.0</li>
  					<li class="contributor">contributor: Romain Poirier</li>
  					<li class="date">date: 2013-06-11</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v2.0/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v1.0">
  				<img width="800" height="533" title="Révisable 1 v1.0" src="img/1_0.jpg" />
  				<ul class="caption">
  					<li class="version">version: 1.0</li>
  					<li class="contributor">contributor: Raphaël Bastide</li>
  					<li class="date">date: 2013-06-05</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v1.0/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v0.2">
  				<img width="800" height="533" title="Révisable 1 v0.2" src="img/0_2.jpg" />
  				<ul class="caption">
  					<li class="version">version: 0.2 (beta)</li>
  					<li class="contributor">contributor: Raphaël Bastide</li>
  					<li class="date">date: 2013-06-05</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v0.2/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  			<div class="vbox" id="v0_1">
  				<img width="800" height="533" title="Révisable 1 v0.1" src="img/0_1.jpg" />
  				<ul class="caption">
  					<li class="version">version: 0.1 (beta)</li>
  					<li class="contributor">contributor: Raphaël Bastide</li>
  					<li class="date">date: 2013-06-05</li>
  					<li class="code">code: <a href="https://github.com/imalorg/revisable-1/blob/v0.1/PIECE">on GitHub</a></li>
  				</ul>
  			</div>
  		</div>
  	</div>
  	<div id="textboxes" class="contentbox">
  		<div class="piece textbox">
  			<h2>Last code</h2>
  			<pre><?php echo markdown($piece); ?></pre>
  		</div>
  		<div class="instructions textbox">
  			<?php echo markdown($instructions); ?>
  		</div>
  		<div class="contributors textbox">
  			<h2>Contributors</h2>
  			<pre><?php echo $contributors ?></pre>
  		</div>
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
