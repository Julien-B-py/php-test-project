<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>First PHP website</title>
</head>

<body>

  <?php include "header.php"; ?>

  <content>

    <?php

    // Personal API url returning an array of images
    $url = "https://silver-le-maine-coon.herokuapp.com/api/photos";
    // Read url into a string
    $result = file_get_contents($url);
    // Turn above string to an array
    $array = json_decode($result);
    // Determine a random number between 0 and array length -1 to pick a random item from the array
    $randomIndex = rand(0, count($array) - 1);
    // Store the random image in a variable
    $randomImg = $array[$randomIndex];
    // Resize the image by replacing width and height values
    $editedImgUrl = str_replace("w-300,h-300", "w-900,h-900", $randomImg);
    // Render the image in the html
    echo "<img src=$editedImgUrl>";

    // Refresh current page after 5 seconds
    header("Refresh:5");

    ?>

  </content>
  <?php include "footer.php";  ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="/app.js"></script>

</body>

</html>