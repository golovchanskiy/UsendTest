<?php

include_once('./src/ad/AdFactory.php');

$adFactory = new AdFactory($_GET['from'] ?? 'Mysql');
$model = $adFactory->getAd((int)$_GET['id'] ?? 1);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UsendTest</title>
</head>
<body>

<h1><?= $model->id ?></h1>
<p><?= $model->name ?></p>
<p>стоимость: <?= $model->getPrice('rur') ?> руб</p>

</body>
</html>