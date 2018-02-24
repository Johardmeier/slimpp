<?php
/**
 * Created by IntelliJ IDEA.
 * User: Johannes
 * Date: 24.02.2018
 * Time: 16:17
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

//Settings
$paths=[];
$paths['root'] = dirname(__DIR__);
$paths['temp'] = $settings['root'] . '/tmp';
$paths['public'] = $settings['root'] . '/public';

$env = Yaml::parseFile(dirname(__DIR__).'/config/env.yaml');
$settings = $paths + $env + Yaml::parseFile(dirname(__DIR__).'/config/app.yaml');

//App
$app = new \Slim\App(['settings' => $settings]);

// Set up dependencies
require  __DIR__ . '/container.php';

// Register middleware
require __DIR__ . '/middleware.php';

// Register routes
require __DIR__ . '/routes.php';

return $app;