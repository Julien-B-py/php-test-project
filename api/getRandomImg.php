
  <?php

  // Returns a random image url to the client
  function getRandomImg()
  {
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
    // Return an array containing the image url, the image position and the total amount of images
    return json_encode([$editedImgUrl, $randomIndex + 1, count($array)]);
  }

  echo getRandomImg();

  ?>