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
    <title>Day 05</title>
</head>

<body>
    <h1>Day 05</h1>
    <h4>Summary:</h4>

    <blockquote class="summary">
        <ul>
            <li>Conditonal Statements
                <ul>
                    <li>if</li>
                    <li>if else</li>
                    <li>if elseif else</li>
                    <li>switch</li>
                </ul>
            </li>
            <li>PHP Comparison Operators [==, ===, !=, <>, !==, >, <,>=, <=]</li>
            <li>Spaceship; A New PHP Comparison Operators [<=>]</li>
        </ul>
    </blockquote>

    <h4>Code:</h4>
    <blockquote class="code">
        <pre><code>
        // If Statement
        $t = 5;
        if ($t == 5) {
            echo "Hi! I am if.";
        }
        
        // If elseif else statement
        $y = 6;
        if ($y == 5) {
            echo "Hi! I am if.";
        } elseif ($y == 6) {
            echo "Hi! elseif.";
        } else {
            echo "Hi! I am else";
        }


        //switch case statement
        //Copied from: https://www.w3schools.com/php/phptryit.asp?filename=tryphp_switch
        $favcolor = "red";
        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }

        // PHP Comparison Operators
        $x = 9;
        $y = "9";
        echo "Equal; ", var_dump($x == $y);
        echo "Identical; ", var_dump($x === $y)";
        echo "Not equal(!=); ", var_dump($x != $y);
        echo "Not equal(<>); ", var_dump($x <> $y);
        echo "Not Identical; ", var_dump($x !== $y);
        echo "Greater than or equal to; ", var_dump($x >= $y);

        // Spaceship; A New PHP Comparison Operators
        $x = 51;
        $y = 101;
        echo ($x <=> $y);

        $x = 101;
        $y = 101;
        echo ($x <=> $y);

        $x = 151;
        $y = 101;
        echo ($x <=> $y);
    </code></pre>
    </blockquote>

    <h4>Output:</h4>
    <blockquote class="output">
        <div>
            <?php
            // If Statement
            $t = 5;
            if ($t == 5) {
                echo "Hi! I am if.";
            }
            echo "<br />";

            // If elseif else statement
            $y = 6;
            if ($y == 5) {
                echo "Hi! I am if.";
            } elseif ($y == 6) {
                echo "Hi! elseif.";
            } else {
                echo "Hi! I am else";
            }
            echo "<br />";
            //switch case statement
            //Copied from: https://www.w3schools.com/php/phptryit.asp?filename=tryphp_switch
            $favcolor = "red";

            switch ($favcolor) {
                case "red":
                    echo "Your favorite color is red!";
                    break;
                case "blue":
                    echo "Your favorite color is blue!";
                    break;
                case "green":
                    echo "Your favorite color is green!";
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }

            echo "<br />", "<br />";

            // PHP Comparison Operators
            $x = 9;
            $y = "9";
            echo "Equal; ", var_dump($x == $y), "<br />";
            echo "Identical; ", var_dump($x === $y), "<br />";
            echo "Not equal(!=); ", var_dump($x != $y), "<br />";
            echo "Not equal(<>); ", var_dump($x <> $y), "<br />";
            echo "Not Identical; ", var_dump($x !== $y), "<br />";
            echo "Greater than or equal to; ", var_dump($x >= $y), "<br />";
            echo "<br />", "<br />";

            // Spaceship; A New PHP Comparison Operators
            $x = 51;
            $y = 101;
            echo ($x <=> $y);
            echo "<br>";
            $x = 101;
            $y = 101;
            echo ($x <=> $y);
            echo "<br>";
            $x = 151;
            $y = 101;
            echo ($x <=> $y);
            ?>
        </div>
    </blockquote>
    <div class="footer">
        <a href="/Day/Day 04.php"> Day 04</a>
        | <a href="/">Home</a> |
        <a href="/Day/Day 06.php"> Day 06</a>
    </div>
</body>

</html>