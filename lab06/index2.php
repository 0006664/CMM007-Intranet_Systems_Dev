<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php lab06</title>
</head>
<body>
<p>
    <?php
    $myname = "Nicol";
    $myage = 1;
    $specs = 16;
    $mugs = 18;
    $rolls = 21;

    if($myage >= $rolls) {
        print $myname . ", you can buy specs, mugs and sausage rolls!";
    }
    else if ($myage >= $mugs) {
        print $myname . ", you can buy specs and mugs!";
    }
    else if($myage >= $specs) {
        print $myname . ", you can only buy specs!";
    }
    else {
        print $myname . ", Ha Ha no specs, mugs or sausage rolls for you kid!";
    }

    ?>
</p>

</body>
</html>