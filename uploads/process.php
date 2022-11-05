<?php
require_once 'functions.php';
function process()
{
    import_file($_POST['filepath']);
}
process();
