<html>

<head>
    <title>PHP Tutorial</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Comfortaa&family=Fira+Code&family=Orbitron&family=Poppins&display=swap");

    body {
        background-color: #e0e0e0;
        margin: 5em;
    }

    h1 {
        font-family: "Orbitron", sans-serif;
        font-size: 2em;
    }

    a {
        font-family: "Comfortaa", sans-serif;
        color: black;
        text-decoration: none;
        font-size: 2em;
        padding: 0.5em;
    }
    p {
        font-family: "Comfortaa", sans-serif;
        font-size: 1.5em;
    }
    li{
        padding: 0.5em;
    }
    ul{
        padding: 1em;
    }
</style>

<body>
    <h1>PHP Tutorial | Lessons Dashboard</h1>
    <p>In this tutorial, you will learn the basics of PHP, specifically tailored for Sri Lankan A/L students. Click on the lesson you want to continue.</p>
    <ul>
        <li><a href='/Day/Day 01.html'>Day 01.html</a></li>
        <?php
        // Specify the path to the "Day" folder
        $folderPath = "Day/";

        // Open the directory
        $dir = opendir($folderPath);

        // Check if the directory exists
        if ($dir === false) {
            echo "Error: Directory not found.";
            exit;
        }

        while (($file = readdir($dir)) !== false) {
            // Check if the file is a PHP file
            if (strpos($file, ".php") !== false) {
                // Create the link using the correct path
                $link = $folderPath . $file;
                echo "<li><a href='$link'>$file</a></li>";
            }
        }

        // Close the directory
        closedir($dir);
        ?>
    </ul>

</body>

</html>