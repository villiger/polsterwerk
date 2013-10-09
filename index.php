<?php
$navigation = array(
    'leistungen' => 'Leistungen',
    //'gallerie' => 'Gallerie',
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
	<title>Polsterwerk</title>
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
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
</body>
</html>