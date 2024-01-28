<html>

<head>
  <title>PHP Tutorial</title>
</head>

<body>
    <h1>PHP Lessons list</h1>
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

  // Iterate through the files in the directory
  while (($file = readdir($dir)) !== false) {
    echo "<ul>";
    // Check if the file is a PHP file
    if (strpos($file, ".php") !== false) {
      // Create the link using the correct path
      $link = $folderPath . $file;
      echo "<li><a href='$link'>$file</a></li>";
    }
    echo "</ul>";
  }

  // Close the directory
  closedir($dir);
  ?>

</body>

</html>