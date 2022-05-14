<?php
require '../../database/rb.php';
$apartments = R::findOne('apartments','id = ?',[$_POST['id']]);

$apartments->name = $_POST['name'];
$apartments->address = $_POST['address'];
$apartments->prise = $_POST['prise'];
$apartments->square = $_POST['square'];
$apartments->count = $_POST['count'];

R::store($apartments);

header("Location: /views/admin.php");