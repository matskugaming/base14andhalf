<html>
    <head>
        <title>Base14½ example</title>
    </head>
    <body>
<?php
//first import the functions
require('base15.php');
//then define variables
$original = "Hello World!";
$encoded = base15_encode($original);
$decoded = base15_decode($encoded);
//finally print results
echo "Original: $original <br>";
echo "Encoded: $encoded <br>";
echo "Decoded: $decoded";
?>
    </body>
</html>
