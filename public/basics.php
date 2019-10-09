<?php
   echo "Running PHP";
   echo "<hr>";
   // phpinfo();
 

    define("GREETING", "Hello");
    const SECOND = "How are you doing?";
   $a = 22;
   $b = 3.14;
   $myname = "Valids";

   $b = "Foo";

   echo GREETING . $myname;
   echo "<hr>";
   echo SECOND , "<hr>";

   echo 'Just some text <hr>';
   echo "Some text with string inrerpolation $a <hr>";

   $name = "Riga";
   $string = <<<MYLONGSTR
   I'm a heredoc
   I parse variables. ( I love $name)
   \t \\t adds a tab space. That means i accept escape sequences
   MYLONGSTR;

    echo '<pre>' . $string . '</pre>';


    $string2 = <<<'MYLONGSTR'
   I'm a heredoc
   I parse variables. ( I love $name)
   \t \\t adds a tab space. That means i accept escape sequences
   I can even use quotes "text"..
   MYLONGSTR;

    echo '<pre>' . $string2 . '</pre>';


    $longhtml = "<div class = 'my-class' id ='c1'" ;
    $longhtml .= "<p class='my-text'>Lorem</p>";
    $longhtml .= "<p class='my-text'>Lorem</p>";
    $longhtml .= "<p class='my-text'>Lorem</p>";
    $longhtml .= "<p class='my-text'>Lorem</p>";
    $longhtml .= "</div>";

    echo $longhtml;


    //example 1

    $pizza = "piece1 piece2 piece3 piece4 piece5 piece6 ";
    $pieces = explode(" ",$pizza);
    echo $pieces[0];
    echo "<br>";
    echo $pieces[1];
    echo "<hr>";


