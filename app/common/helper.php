<?php

use App\components\CategoriesRecursive;
use App\NewsCategories;


const BASE_URL = "http://localhost/small/public/";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getCategory($parent_id): string
{
    $data = NewsCategories::all();
    $recursive = new CategoriesRecursive($data);
    return $recursive->categoriesRecursive($parent_id);
}

function checkPrivilege($uri = false){
    $uri = $uri != false ? $uri : $_SERVER['REQUEST_URI'];

    if(empty($_SESSION['user']['privileges'])){
        return false;
    }


    $privileges = $_SESSION['user']['privileges'];
    $privileges = implode("|", $privileges);

    preg_match('/dashboard\.php|' . $privileges . '/', $uri, $matches);

    return !empty($matches);

}




