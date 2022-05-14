<?php
require '../../database/rb.php';
$apartments = R::findOne('apartments', 'id = ?', [$_GET['id']]);
R::trash( $apartments );
header("Location: /views/admin.php");