<?php
require 'class/DbConnection.php';

$db = DbConnection::getConnection();

$sql = 'SELECT * FROM offer';
$ars = [];

