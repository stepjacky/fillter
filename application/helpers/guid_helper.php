<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 饭
 * Date: 12-12-6
 * Time: 下午9:30
 * To change this template use File | Settings | File Templates.
 */
function getGUID(){

    mt_srand((double)microtime()*10000);
    //optional for php 4.2.0 and up.
    $charid = strtoupper(md5(uniqid(rand(), true)));
    $hyphen = chr(45);// "-"
    $uuid =substr($charid, 0, 8).$hyphen
        .substr($charid, 8, 4).$hyphen
        .substr($charid,12, 4).$hyphen
        .substr($charid,16, 4).$hyphen
        .substr($charid,20,12);
    return $uuid;
}

function getGuidId(){
   return getGUID();
}