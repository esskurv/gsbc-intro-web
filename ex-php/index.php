<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">

        <title>PHP Test</title>
    </head>

    <body>
        <h1>PHP Test</h1>

<?php
echo "<p>This came from PHP.</p>"
?>

<h2>SQLite3 Info</h2>
<?php
$ver = SQLite3::version();

echo $ver['versionString'] . "\n";
echo $ver['versionNumber'] . "\n";

var_dump($ver);
?>

    <h2>Php Info</h2>

<?php
phpinfo()
?>

</body>
</html>
