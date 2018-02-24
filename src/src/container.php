<?php
/**
 * Created by IntelliJ IDEA.
 * User: Johannes
 * Date: 24.02.2018
 * Time: 16:34
 */
use Slim\Container;

/* @var \Slim\App $app */
$container = $app->getContainer();

// Activating routes in a subfolder
$container['environment'] = function () {
    $scriptName = $_SERVER['SCRIPT_NAME'];
    $_SERVER['SCRIPT_NAME'] = dirname(dirname($scriptName)) . '/' . basename($scriptName);
    return new Slim\Http\Environment($_SERVER);
};