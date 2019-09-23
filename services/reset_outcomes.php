<?php
//Authored by Alex Clark, Metatheria, LLC. 2019. Released under GNU GPLv3

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

chdir("..");
require_once('pika-danio.php');
pika_init();

$safe_case_id = DB::escapeString($_GET['case_id']);

if ($safe_case_id == '') {
exit('no case id');
}

$sql = "DELETE FROM outcomes WHERE case_id = {$safe_case_id}";
DB::query($sql) or trigger_error("SQL: " . $sql . " Error: " . DB::error());

?>
