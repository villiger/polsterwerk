<?php
$page = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : 'ueberuns';

$navigation = array(
	'ueberuns' => 'Über uns',
	'leistungen' => 'Leistungen',
	'gallerie' => 'Gallerie',
	'kontakt' => 'Kontakt'
);

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Polsterwerk</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="main">
		<div class="header">
			<div class="logo"></div>
		</div>
		<ul class="navigation">
			<?php foreach($navigation as $id => $title): ?>
				<li class="<?= $id ?><?php if ($id === $page): ?> selected<?php endif; ?>">
					<a href="/<?= $id ?>"><?= $title ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
		<div class="content">
			<?php include('pages/' . $page . '.php'); ?>
		</div>
	</div>
	<div class="bg"></div>
</body>
</html>