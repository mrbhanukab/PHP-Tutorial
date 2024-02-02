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
    <title>Day 06</title>
    <style>
        .spoiler:hover {
            color: black;
        }

        .spoiler {
            color: #cecece00;
        }
    </style>
</head>

<body>
    <h1>Day 06</h1>
    <h4>Summary:</h4>

    <blockquote class="summary">
        <ul>
            <li>Repetition Control Structures
                <ul>
                    <li>while</li>
                    <li>do..while</li>
                    <li>for</li>
                    <li>foreach</li>
                </ul>
            </li>
            <li>Break & Continue</li>
        </ul>
    </blockquote>

    <h4>Code:</h4>
    <blockquote class="code">
        <pre><code>
    //While Loop
    $n = 1;
    while ($n < 6) {
        echo "Hi! I am ", $n;
        $n += 1;
    }


    // Do While Loop (Copied From: https://www.w3schools.com/php/php_looping_do_while.asp)
    $i = 1;
    do {
        echo $i;
        $i++;
    } while ($i < 6);


    //for loop (Copied From: https://www.w3schools.com/php/php_looping_for.asp)
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x";
    }


    //for each loop (Copied From: https://www.w3schools.com/php/php_looping_foreach.asp)
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $x) {
        echo "$x";
    }

    //Break
    for ($p = 0; $p < 10; $p++) {
        if ($p == 5) {
            echo "Okay, I will Break Here; ", $p;
            break;
        }
        echo "HI, I am $p";
    }
    </code></pre>
    </blockquote>

    <h4>Output:</h4>
    <blockquote class="output">
        <div>
            <?php
            //While Loop
            $n = 1;
            while ($n < 6) {
                echo "Hi! I am ", $n, "<br />";
                $n += 1;
            }
            echo "<br />", "<br />";

            // Do While Loop (Copied From: https://www.w3schools.com/php/php_looping_do_while.asp)
            $i = 1;

            do {
                echo $i;
                $i++;
            } while ($i < 6);
            echo "<br />", "<br />";

            //for loop (Copied From: https://www.w3schools.com/php/php_looping_for.asp)
            for ($x = 0; $x <= 10; $x++) {
                echo "The number is: $x", "<br>";
            }
            echo "<br />", "<br />";

            //for each loop (Copied From: https://www.w3schools.com/php/php_looping_foreach.asp)
            $colors = array("red", "green", "blue", "yellow");

            foreach ($colors as $x) {
                echo "$x", " <br>";
            }
            echo "<br />", "<br />";

            //Break
            for ($p = 0; $p < 10; $p++) {
                if ($p == 5) {
                    echo "<b>", "Okay, I will Break Here; ", $p, "</b>";
                    break;
                }
                echo "HI, I am $p <br />";
            }
            echo "<br />", "<br />";

            //Continue
            for ($p = 0; $p < 10; $p++) {
                if ($p == 5 or $p == 6) {
                    echo "<span class='spoiler'>", "Okay, I will Be Not Display ", $p, "</span><br />";
                    continue;
                }
                echo "HI, I am $p <br />";
            }
            ?>
        </div>
    </blockquote>
    <div class="footer">
        <a href="/Day/Day 05.php"> Day 05</a>
        | <a href="/">Home</a> |
        <a href="/Day/Day 07.php"> Day 07</a>
    </div>
</body>

</html>