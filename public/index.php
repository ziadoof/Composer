<?php
/**
 * Created by PhpStorm.
 * User: ziadoof
 * Date: 09/04/18
 * Time: 14:47
 */
require __DIR__ .'/../vendor/autoload.php';
require "../src/Wcs/Hello.php";

$hello_quette = new Hello();
echo $hello_quette->talk();
$hello_composer = new HelloWorld\SayHello();
echo $hello_composer->world();

