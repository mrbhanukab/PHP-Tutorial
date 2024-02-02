<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
    <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">
    <link rel="stylesheet" href="/main.css">
    <title>Day 08</title>
</head>

<body>
    <h1>Day 08</h1>
    <h4>Summary:</h4>

    <blockquote class="summary">
        <ul>
            <li>Variable Scope
                <ul>
                    <li>Global Scope</li>
                    <li>Local Scope</li>
                    <li>Static Scope</li>
                </ul>
            </li>
            <li>Global Keywords</li>
        </ul>
    </blockquote>

    <h4>Code:</h4>
    <blockquote class="code">
        <pre><code>

    //Global Scope
    $var = "Variable Of Global Scope.";
    function testFun()
    {
        // Local Scope
        $var = "Variable Of Local Scope.";
        echo "I Am A " . $var;
        //Global Variable Keyword
        global $var;
        echo "But I can Access Global Varaiables With The 'Global Keyword'. Look I'm $var";
        echo "Or I can Get Global Var With $ GLOBALS[index]; Look, I am still $GLOBALS[var];
    }
    testFun();
    echo "Look even though Varaiable changed in testFun, I never changed, cause I'm $var";
    //The Static Keyword (Copied)
    function add1()
    {
        static $number = 0; // Try Removing 'static' keyword
        $number++;
        return $number;
    }
    echo add1();
    echo add1();
    echo add1();
    </code></pre>
    </blockquote>

    <h4>Output:</h4>
    <blockquote class="output">
        <div>
            <?php

            //Global Scope
            $var = "Variable Of Global Scope.";

            function testFun()
            {
                // Local Scope
                $var = "Variable Of Local Scope.";
                echo "I Am A " . $var . "<br >";

                //Global Variable Keyword
                global $var;
                echo "But I can Access Global Varaiables With The 'Global Keyword'. Look I'm $var <br><br>";
                echo "Or I can Get Global Var With $ GLOBALS[index]; Look, I am still $GLOBALS[var] <br>";
            }
            testFun();
            echo "<br>Look even though Varaiable changed in testFun, I never changed, cause I'm $var <br><br>";

            //The Static Keyword (Copied)
            function add1()
            {
                static $number = 0; // Try Removing 'static' keyword
                $number++;
                return $number;
            }

            echo add1();
            echo "<br>";
            echo add1();
            echo "<br>";
            echo add1();
            ?>
        </div>
    </blockquote>
    <div class="footer">
        <a href="/Day/Day 07.php"> Day 07</a>
        | <a href="/">Home</a> |
        <a href="/Day/Day 09.php"> Day 09</a>
    </div>
</body>

</html>