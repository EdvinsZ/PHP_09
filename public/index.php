<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>PHP examples</h1>
<?php
   const MYSECRET ="foobar";
    $myname = "Valids";
    $mynum = 25;

    echo "<div> Hello $myname 
    this is your number $mynum.
    Your secret is " . MYSECRET . 
     "</div>";

?>

<main>More content</main>
<footer> Created by <?php echo $myname;?> </footer>
</body>
</html>