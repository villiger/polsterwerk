<?php
$navigation = array(
    'leistungen' => 'Leistungen',
    'galerie' => 'Galerie',
    'ueberuns' => 'Über uns',
    'kontakt' => 'Kontakt',
);

$ids = array_keys($navigation);
$default = $ids[0];
$page = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : $default;
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=600">
	<meta name="description" content="Wir polstern und beziehen ihre alten Möbel neu - Sofas, Sessel, Stühle etc.">
	<title>Polsterwerk &middot; <?= $navigation[$page] ?></title>
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
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-44731667-1']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</body>
</html>