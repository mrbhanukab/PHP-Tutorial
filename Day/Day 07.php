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
    <title>Day 07</title>
</head>

<body>
    <h1>Day 07</h1>
    <h4>Summary:</h4>

    <blockquote class="summary">
        <ul>
            <li>String Functions
                <ul>
                    <li>strlen</li>
                    <li>str_word_count</li>
                    <li>strrev</li>
                    <li>strpos</li>
                    <li>str_replace</li>
                </ul>
            </li>
            <li>User Defined Functions
                <ul>
                    <li>No Parameters, No Return</li>
                    <li>With Parameters, No Return</li>
                    <li>No Parameters, With Return</li>
                    <li>With Parameters, With Return</li>
                </ul>
            </li>
        </ul>
    </blockquote>

    <h4>Code:</h4>
    <blockquote class="code">
        <pre><code>
    <h3>String Functions</h3>

    //strlen(String)
    echo "Count Me: ", strlen("Count Me");

    //str_word_count()
    echo "Count The Words, Actualy Word with spaces ",
    str_word_count("Count The Words, Actualy Word with spaces : ");

    //strrev
    echo "I am in reverse | ", strrev("I am in reverse")";

    //strpos
    echo "Lorem, ipsum dolor sit amet consectetur adipisicing elit.
    Consequuntur, voluptas cupiditate neque hic quis eligendi fuga quam nam blanditiis
    assumenda ipsa nemo magnam voluptatem sunt sequi enim, at amet dolor.String position
    of 'voluptas cupiditate' is ", strripos("Lorem, ipsum dolor sit amet consectetur 
    adipisicing elit. Consequuntur, voluptas cupiditate neque hic quis eligendi fuga 
    quam nam blanditiis assumenda ipsa nemo magnam voluptatem sunt sequi enim, at amet
    dolor.", "voluptas cupiditate");

    //str_replace()
    echo "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, 
    voluptas cupiditate neque hic quis eligendi fuga quam nam blanditiis assumenda ipsa
    nemo magnam voluptatem sunt sequi enim, at amet dolor. | "
    , str_replace("ipsum dolor sit amet consectetur adipisicing elit.
    Consequuntur"
    , "I'm replaced", "Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Consequuntur,voluptas cupiditate neque hic quis eligendi fuga quam nam blanditiis 
    assumenda ipsa nemo magnam voluptatem sunt sequi enim, at amet dolor.");

    <h3>User Defined Functions</h3>

    // No Parameters, No Return
    function hi()
    {
        $text = hello();
        frame($text);
        echo "$text";
        frame($text);
    }
    ;
    hi();

    // With Parameters, No Return
    function frame($text)
    {
        for ($i = 0; $i < strlen($text); $i++) {
            print "#";
        }
        ;
    }

    //No Parameters, With Return
    function hello()
    {
        return "Hi, How Are You?";
    }
    ;

    // With Parameters, With Return (Copied:https://www.w3schools.com/php/php_functions.asp)
    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }
    echo "5 + 10 = " . sum(5, 10);
    </code></pre>
    </blockquote>

    <h4>Output:</h4>
    <blockquote class="output">
        <div>
            <?php
            echo "<h3>String Functions</h3>";

            //strlen(String)
            echo "Count Me: ", strlen("Count Me"), "<br /> <br />";

            //str_word_count()
            echo "Count The Words, Actualy Word with spaces ", str_word_count("Count The Words, Actualy Word with spaces : "), "<br /> <br />";

            //strrev
            echo "I am in reverse | ", strrev("I am in reverse"), "<br /> <br />";

            //strpos
            echo "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, voluptas cupiditate neque hic quis eligendi fuga quam nam blanditiis assumenda ipsa nemo magnam voluptatem sunt sequi enim, at amet dolor. <br> <b>String position of 'voluptas cupiditate' is </b>", strripos("Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, voluptas cupiditate neque hic quis eligendi fuga quam nam blanditiis assumenda ipsa nemo magnam voluptatem sunt sequi enim, at amet dolor.", "voluptas cupiditate"), "<br /><br />";

            //str_replace()
            echo "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, voluptas cupiditate neque hic quis eligendi fuga quam nam blanditiis assumenda ipsa nemo magnam voluptatem sunt sequi enim, at amet dolor. | <b>", str_replace("ipsum dolor sit amet consectetur adipisicing elit. Consequuntur", "I'm replaced", "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, voluptas cupiditate neque hic quis eligendi fuga quam nam blanditiis assumenda ipsa nemo magnam voluptatem sunt sequi enim, at amet dolor."), "</b><br /><br />";

            echo "<br>", "<h3>User Defined Functions</h3>";
            // No Parameters, No Return
            function hi()
            {
                $text = hello();
                frame($text);
                echo "<br> $text <br>";
                frame($text);
            }
            ;
            hi();
            // With Parameters, No Return
            function frame($text)
            {
                for ($i = 0; $i < strlen($text); $i++) {
                    print "#";
                }
                ;
            }

            //No Parameters, With Return
            function hello()
            {
                return "Hi, How Are You?";
            }
            ;

            // With Parameters, With Return (Copied:https://www.w3schools.com/php/php_functions.asp)
            function sum($x, $y)
            {
                $z = $x + $y;
                return $z;
            }

            echo "<br><br> 5 + 10 = " . sum(5, 10) . "<br>";
            ?>
        </div>
    </blockquote>
    <div class="footer">
        <a href="/Day/Day 06.php"> Day 06</a>
        | <a href="/">Home</a> |
        <a href="/Day/Day 08.php"> Day 08</a>
    </div>
</body>

</html>