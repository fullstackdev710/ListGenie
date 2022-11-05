<?php
require_once('MysqliDb.php');
function get_files()
{
    return glob("/home/robert/public_html/data/*.csv");
}
function magic_array_combine($arrayOne, $arrayTwo, $filepath)
{
    $result = [];
    foreach ($arrayOne as $index => $key) {
        if (isset($arrayTwo[$index])) {
            $result[$key] = $arrayTwo[$index];
        } else {
            $result[$key] = '';
        }
    }
    return $result;
}
function import_file($filepath)
{
    $db = new MysqliDb('localhost', 'robert_robert', 'GU!;l}Ob?QY8', 'robert_list_portal');
    $tableName = 'area_' . substr($filepath, -7, -4);
    $db->rawQuery('
    CREATE TABLE `' . $tableName . '` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `first_name` varchar(64) NOT NULL,
      `last_name` varchar(64) NOT NULL,
      `address` varchar(128) NOT NULL,
      `city` varchar(64) NOT NULL,
      `state` varchar(16) NOT NULL,
      `zip` varchar(16) NOT NULL,
      `cell_phone` varchar(16) NOT NULL,
      `npx_carrier` varchar(64) NOT NULL,
      `email` varchar(128) NOT NULL,
      `dob` varchar(128) NOT NULL,
      `gender` varchar(64) NOT NULL,
      `home_owner` varchar(64) NOT NULL,
      `home_value` varchar(64) NOT NULL,
      `residence_length` varchar(64) NOT NULL,
      `credit_rating` varchar(64) NOT NULL,
      `year` varchar(4) NOT NULL,
      `make` varchar(64) NOT NULL,
      `model` varchar(64) NOT NULL,
      `vin` varchar(64) NOT NULL,
      `dnc` varchar(32) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;');
    $header = ['first_name', 'last_name', 'address', 'city', 'state', 'zip', 'cell_phone', 'npx_carrier', 'email', 'dob', 'gender', 'home_owner', 'home_value', 'residence_length', 'credit_rating', 'year', 'make', 'model', 'vin', 'dnc'];
    $file = fopen($filepath, 'r');
    $csv    = array();
    $firstLine = true;
    $totalRecords = 0;
    while (($row = fgetcsv($file)) !== FALSE) {
        if ($firstLine) {
            $firstLine = false;
            continue;
        }
        $csv[] = magic_array_combine($header, $row, $filepath);
        if (count($csv) == 5000) {
            $db->insertMulti($tableName, $csv);
            $csv = [];
            // echo 'Insert 5000 records.<br>';
            $totalRecords += 5000;
            echo $db->getLastError();
        }
    }
    fclose($file);
    // print_r($csv);
    if (count($csv) > 0) {
        $db->insertMulti($tableName, $csv);
        echo $db->getLastError();
        $totalRecords += count($csv);
    }
    echo 'Insert ' . $totalRecords . ' records.' . PHP_EOL;
    echo $filepath . PHP_EOL;
}
