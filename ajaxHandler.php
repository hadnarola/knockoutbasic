<?php

require_once 'ajax/methods.php';
if (count($_POST) == 0) {
    exit('POST NULL || ERROR');
}
if (isset($_POST['test'])) {
    $objMethods = new methods();
    $result = $objMethods->getName();
    echo $result;
}
if (isset($_POST['json_get'])) {
    $objMethods = new methods();
    $result = $objMethods->getJson();
    print_r($result);
}
