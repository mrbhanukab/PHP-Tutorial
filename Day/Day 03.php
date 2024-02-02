<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main.css">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">
    <title>Day 03</title>
</head>

<body>
    <h1>Day 03</h1>
    <h4>Summary:</h4>

    <blockquote class="summary">
        <ul>
            <li>Arithmetic Operators [*,-,*,/,%,**]</li>
            <li>Assignment Operators [=, +=, -=, *=, /=, %=]</li>
            <li>Constant</li>
            <li>The ability to define case-insensitive constants in PHP was deprecated in version 7.3 and completely
                removed in version 8.0. </li>
            <li>Array</li>
        </ul>
    </blockquote>

    <h4>Code:</h4>
    <blockquote class="code">
        <pre><code>
    // Arithmetic Operators [*,-,*,/,%,**] (Removed Text Formating)
    echo "This is Addition of 22 & 23:- ",22+23;
    echo "This is Subtraction of 22 & 23:- ",22-23;
    echo "This is Multiplication of 22 & 23:- ",22*23;
    echo "This is Division of 22 & 23:- ",22/23;
    echo "This is Modulus of 22 & 23:- ",22%23;
    echo "This is Exponentiation of 22 & 23:- ",22**23;
    echo "This is Integer Division of 22 & 23", intdiv(22,26);

    // Assignment Operators [=, +=, -=, *=, /=, %=] (Removed Text Formating)
    $x = 10; echo "x = ", $x;
    $x += 5; echo "x+=5 = ", $x;
    $x -= 5; echo "x-=5 = ", $x;
    $x *= 5; echo "x*=5 = ", $x;
    $x /= 5; echo "x/=5 = ", $x;
    $x %= 5; echo "x%=5 = ", $x;
    $x **= 5; echo "x**=5 = ", $x;

    //Constant (Case Sensitive)
    define("CC","HI! I'm Constent. I Can Be A Integer or String or Anything");

    //Array
    define("ImArray", ["Hi!, ","I am ", "a Array."]);
    echo ImArray[0], ImArray[1], ImArray[2];
    </code></pre>
    </blockquote>

    <h4>Output:</h4>
    <blockquote class="output">
        <div>
            <?php
            // Arithmetic Operators [*,-,*,/,%,**]
            echo "This is Addition of 22 & 23:- <b>", 22 + 23, "</b><br />";
            echo "This is Subtraction of 22 & 23:- <b>", 22 - 23, "</b><br />";
            echo "This is Multiplication of 22 & 23:- <b>", 22 * 23, "</b><br />";
            echo "This is Division of 22 & 23:- <b>", 22 / 23, "</b><br />";
            echo "This is Modulus of 22 & 23:- <b>", 22 % 23, "</b><br />";
            echo "This is Exponentiation of 22 & 23:- <b>", 22 ** 23, "</b><br />";
            echo "This is Integer Division of 22 & 23:- <b>", intdiv(22, 23), "</b><br />";
            echo "<br />";

            // Assignment Operators [=, +=, -=, *=, /=, %=]
            $x = 10;
            echo "x = <b>", $x, "</b><br />";
            $x += 5;
            echo "x+=5 = <b>", $x, "</b><br />";
            $x -= 5;
            echo "x-=5 = <b>", $x, "</b><br />";
            $x *= 5;
            echo "x*=5 = <b>", $x, "</b><br />";
            $x /= 5;
            echo "x/=5 = <b>", $x, "</b><br />";
            $x %= 5;
            echo "x%=5 = <b>", $x, "</b><br />";
            $x **= 5;
            echo "x**=5 = <b>", $x, "</b><br />";
            echo "<br />";

            //Constant (Case Sensitive)
            define("CC", "HI! I'm Constent. I Can Be A Integer or String or Anything");
            echo CC, "<br />";
            echo "<br />";

            //Array
            define("ImArray", ["Hi!, ", "I am ", "a Array."]);
            echo ImArray[0], ImArray[1], ImArray[2];
            ?>
        </div>
    </blockquote>
    <div class="footer">
        <a href="/Day/Day 02.php"> Day 02</a>
        | <a href="/">Home</a> |
        <a href="/Day/Day 04.php"> Day 04</a>
    </div>
</body>

</html>