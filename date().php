<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="date.css">
</head>

<body>

  <div class="div">
    <h1>string and date function in php</h1>
    <?php

echo "<p>";
echo date("Y-m-d")  . "<br>"; // Output: Current date in format "YYYY-MM-DD"
echo date("Y-m-d H:i:s"); // Output: Current date and time in format "YYYY-MM-DD HH:MM:SS"

$date = new DateTime('2024-03-28'); 
echo $date->format('Y-m-d') . "<br>";  // Output: 2024-03-28

// You can also modify dates
$date->modify('+1 day');
echo $date->format('Y-m-d') . "<br>";  
echo "</p>";// Output: 2024-03-29
?>


  </div>

</body>

</html>