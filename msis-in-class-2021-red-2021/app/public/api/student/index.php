<?php
require 'class/DbConnection.php';

$db = DbConnection::getConnection();

$sql = 'SELECT * FROM student';
$ars = [];

