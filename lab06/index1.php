<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php lab06</title>
</head>
<body>
<p>
    <?php
    echo "Hello, world! ";
    echo "Hello," . " cruel " . "world" . "! ";
    echo 5 * 7;
    echo "If you view the page source \r\n you will find a newline in this string.";
    echo "<br>";
    echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");
    $myname = "Frodo Baggins";
    $myage = 111;
    echo "My name is" . $myname . "and I am " . $myage;
    echo "I get printed!";
    // I don't! I'm a comment.

    /* I don’t get printed either
    and neither do I */
    $name="Simon";
    if($name == "Simon") {
        print "I know you!";
    }
    else {
        print "Who are you?";
    }
    ?>
</p>

</body>
</html>