<?php
require_once '39-hanshufengzhuang.php';
$fileInfo = $_FILES['myFile'];
var_dump(upload_file($fileInfo));