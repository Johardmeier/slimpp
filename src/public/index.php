<?php

/* @var Slim\App $app */
$app = require __DIR__ . '/../src/bootstrap.php';

// Start
$app->run();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $server_name; ?></title>
<style type="text/css">
body {
	height: 100vh;
	padding: 0;
	margin: 0;
	background-color: navy;
    color: mediumaquamarine;
	overflow: hidden;
}

</style>
</head>
<body>

    <h2>
        Nothing to see
        </h2>

</body>
</html>
