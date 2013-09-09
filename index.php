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
        <?php include('pages/' . $page . '.php'); ?>
	</div>
</body>
</html>