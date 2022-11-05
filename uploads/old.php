<?php
require_once('MysqliDb.php');
function magic_array_combine($arrayOne, $arrayTwo)
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
function todo()
{
    $files = glob("C:/wamp64/www/robert/data/*.csv");
    $db = new MysqliDb('localhost', 'root', '', 'robert');
    $header = ['first_name', 'last_name', 'address', 'city', 'state', 'zip', 'cell_phone', 'npx_carrier', 'email', 'dob', 'gender', 'home_owner', 'home_value', 'residence_length', 'credit_rating', 'year', 'make', 'model', 'vin', 'dnc'];
    foreach ($files as $filepath) {
        $file = fopen($filepath, 'r');
        $csv    = array();
        $firstLine = true;
        $totalRecords = 0;
        while (($row = fgetcsv($file)) !== FALSE) {
            if ($firstLine) {
                $firstLine = false;
                continue;
            }
            $csv[] = magic_array_combine($header, $row);
            if (count($csv) == 5000) {
                $db->insertMulti('main', $csv);
                $csv = [];
                // echo 'Insert 5000 records.<br>';
                $totalRecords += 5000;
                echo $db->getLastError();
            }
        }
        fclose($file);
        // print_r($csv);
        if (count($csv) > 0) {
            $db->insertMulti('main', $csv);
            $totalRecords += count($csv);
        }
        echo 'Insert ' . $totalRecords . ' records.<br>';
        echo $filepath . '<br>';
    }
    echo 'done';
}
todo();
