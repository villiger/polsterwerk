<?php
$navigation = array(
    'leistungen' => '',
    'galerie' => 'Galerie',
    'ueberuns' => 'Über uns',
    'kontakt' => 'Kontakt',
);

$ids = array_keys($navigation);
$default = $ids[0];
$page = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : $default;
$pageTitle = $navigation[$page];
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=600">
	<meta name="description" content="Wir polstern und beziehen ihre alten Möbel neu - Sofas, Sessel, Stühle etc.">
	<title>Polsterwerk<?php if (!empty($pageTitle)): ?> &middot; <?= $pageTitle ?><?php endif; ?></title>
	<link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" href="/css/lightbox.css" type="text/css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script src="/js/jquery.js"></script>
    <script src="/js/lightbox.js"></script>
</head>
<body>
	<div class="main">
		<div class="header">
			<div class="logo"></div>
		</div>
		<nav>
			<ul class="navigation">
				<?php foreach($navigation as $id => $title): ?>
					<li class="<?= $id ?><?php if ($id === $page): ?> selected<?php endif; ?>">
						<a href="/<?= $id ?>"><?= $title ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</nav>
        <?php include('pages/' . $page . '.php'); ?>
	</div>
	<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-44731667-1', 'polsterwerk.ch');
        ga('send', 'pageview');
    </script>
</body>
</html>
