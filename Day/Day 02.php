<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main.css">
    <title>Day 02</title>
</head>

<body>
    <h1>Day 02</h1>
    <h4>Summary:</h4>

    <blockquote class="summary">
        <ul>
            <li><code>#this is a Comment</code> and <code>//this is a Comment</code> are used to create single-line
                comments.</li>
            <li><code>/* this is a multi-line Comment */</code> is used for multi-line comments.</li>
            <li><code>echo</code> allows multiple parameters to be displayed and has no return value (e.g.,
                <code>echo "this", "is", "an output";</code>).
            </li>
            <li><code>print</code> allows only one parameter and returns "1" (e.g., <code>print "HI!";</code>,
                <code>print "Hi";</code>).
            </li>
            <li>PHP is a dynamic language, so there's no need to declare variable types.</li>
            <li>Variables in PHP start with a <code>$</code> sign.</li>
            <li><a href="https://www.w3schools.com/php/php_variables.asp">PHP Variables Rules</a></li>
        </ul>
    </blockquote>

    <h4>Code:</h4>
    <blockquote class="code">
        <pre><code>
    # This is a Comment
    // This is Also A Comment

    /*
    This is a multiline
    comment
    */

    echo "this ", "is ", "an output", "<br>";

    print "HI!";
    // print "Hi", "This is not gonna work";

    $_txt = "PHP";
    echo "I love $_txt!";
    </code></pre>
    </blockquote>
    <h4>Output:</h4>
    <blockquote class="output">
        <div>
            <?php
            # This is a Comment
            // This is Also A Comment
            
            /*
            This is a multiline
            comment
            */

            echo "this ", "is ", "an output", "<br>";

            print "HI!";
            // print "Hi", "This is not gonna work";
            
            $_txt = "PHP";
            echo "I love $_txt!";
            ?>
        </div>
    </blockquote>
    <div class="footer">
        <a href="/Day/Day 01.html"> Day 01</a>
         | <a href="/">Home</a> | 
        <a href="/Day/Day 03.php"> Day 03</a>
    </div>
</body>

</html>