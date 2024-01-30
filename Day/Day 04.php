<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/main.css">
    <title>Day 04</title>
</head>

<body>
    <h1>Day 03</h1>
    <h4>Summary:</h4>

    <blockquote class="summary">
        <ul>
            <li>Data Types</li>
            <li>var_dump function used to display data type and the data of a variable</li>
        </ul>
    </blockquote>

    <h4>Code:</h4>
    <blockquote class="code">
        <pre><code>
        /* String (Removed Text Formmating)
        A combinations of Unicode
        Use Single or Double Quotes*/
        $String = "Hi, I am String; I can be Anything.
        බලන්න, මට ඕනෑම දෙයක් විය හැකිය!
        ほら、私は何にでもなれるよ！
        Δείτε, μπορώ να είμαι οτιδήποτε!
        பார், நான் எதுவும் ஆக முடியும்!";
        var_dump($String);


        /*Integer (Removed Text Formmating)
        A combinations of Whole Numbers (0-9)*/
        $Integer = -4540356805;
        var_dump($Integer);


        /*Float (Removed Text Formmating)
        A number with a decimal point or a number in exponential form*/
        $Float = -45403.56805;
        var_dump($Float);

        /*Boolean (Removed Text Formmating)
        True or False*/
        $Boolean = true;
        var_dump($Boolean);
        $Boolean = false;
        var_dump($Boolean);


        /*Arrays
        Combinations of Anything*/
        $Array = [3,3.1415,"π",true,["The number π is a mathematical constant that ... approximately equal to 3.14159.", "https://en.wikipedia.org/wiki/Pi", [3.141507816406286, "http://www.geom.uiuc.edu/~huberty/math5337/groupe/digits.html"]]];
        var_dump($Array);  
        echo $Array[4][2][0];
        $Array[4][2][0] = 3.1415;
        echo $Array[4][2][0];
    </code></pre>
    </blockquote>

    <h4>Output:</h4>
    <blockquote class="output">
        <div>
            <?php
            /*
            String
            A combinations of Unicode
            Use Single or Double Quotes
            */
            $String = "Hi, I am String; I can be Anything.<br />බලන්න, මට ඕනෑම දෙයක් විය හැකිය! <br /> ほら、私は何にでもなれるよ！ <br /> Δείτε, μπορώ να είμαι οτιδήποτε! <br /> பார், நான் எதுவும் ஆக முடியும்!";
            var_dump($String);
            echo "<br /> <br />";


            /*
            Integer
            A combinations of Whole Numbers (0-9)
            */
            $Integer = -4540356805;
            var_dump($Integer);
            echo "<br /> <br />";


            /*
            Float
            A number with a decimal point or a number in exponential form
            */
            $Float = -45403.56805;
            var_dump($Float);
            echo "<br /> <br />";


            /*
            Boolean
            True or False
            */
            $Boolean = true;
            var_dump($Boolean);
            print "<br />";
            $Boolean = false;
            var_dump($Boolean);       
            echo "<br /> <br />";


            /*
            Arrays
            Combinations of Anything
            */
            $Array = [3,3.1415,"π",true,["The number π is a mathematical constant that ... approximately equal to 3.14159.", "https://en.wikipedia.org/wiki/Pi", [3.141507816406286, "http://www.geom.uiuc.edu/~huberty/math5337/groupe/digits.html"]]];
            var_dump($Array);  
            print("<br />");
            echo $Array[4][2][0], "<br />";
            $Array[4][2][0] = 3.1415;
            echo $Array[4][2][0];
            ?>
        </div>
    </blockquote>
    <div class="footer">
        <a href="/Day/Day 03.php"> Day 03</a>
        | <a href="/">Home</a> |
        <a href="/Day/Day 05.php"> Day 05</a>
    </div>
</body>

</html>