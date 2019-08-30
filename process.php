<?php

session_start();
require_once('database.php');
$database= new Database();

if (isset($_POST) && !empty($_POST)){
    if(isset($_POST['action'])){
        switch ($_POST['action']){
            case'add':
                if (isset($_POST['quatity']) && isset($_POST['id'])){
                    $sql="SELECT * FROM products WHERE id=".(int)$_POST['product_id'];
                    $product = $database->runQuery($sql);
                }
                break;
            default:
                echo ' action không tồn tại';
                die;
        }
    }
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

die;

