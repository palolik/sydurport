<!-- <!DOCTYPE html>
<html>
<head>
  <title>Upload Project</title>
</head>
<body>
  <h1>Upload Project</h1>
  <form action="action.php" method="post" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required><br><br>
    <label for="details">Details:</label>
    <textarea name="details" id="details" required></textarea><br><br>
    <label for="date">Data:</label>
    <textarea name="date" id="date"></textarea><br><br>
    <label for="image">Image:</label>
    <input type="file" name="image" id="image" required><br><br>
    <input type="submit" name="submitproject" value="Submit Project">
  </form>
</body>
</html> -->
<?php

// Database connection details (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted and data exists
if (isset($_POST['submitproject']) && !empty($_FILES['image']['name'])) {

  // Escape user input to prevent SQL injection
  $title = mysqli_real_escape_string($conn, $_POST["title"]);
  $details = mysqli_real_escape_string($conn, $_POST["details"]);
  $date = mysqli_real_escape_string($conn, $_POST["date"]);

  // Get image details
  $image_name = basename($_FILES["image"]["name"]);
  $target = "images/projects/" . $image_name;

  // Check if image upload is successful and handle errors
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {

    // Build the SQL query
    $sql = "INSERT INTO projects (title, details, date, image)
            VALUES ('$title', '$details', '$date', '$image_name')";

    // Execute the query and handle results
    if (mysqli_query($conn, $sql)) {
      
      header("Location: admin.php");
      
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  } else {
    echo "Sorry, there was an error uploading your image.";
  }
}

if (isset($_POST['submitpaper']) && !empty($_FILES['image']['name'])) {

  // Escape user input to prevent SQL injection
  $title = mysqli_real_escape_string($conn, $_POST["title"]);
  $abstract = mysqli_real_escape_string($conn, $_POST["abstract"]);
  $date = mysqli_real_escape_string($conn, $_POST["date"]);
  $link = mysqli_real_escape_string($conn, $_POST["link"]);

  // Get image details
  $image_name = basename($_FILES["image"]["name"]);
  $target = "images/papers/" . $image_name;

  // Check if image upload is successful and handle errors
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {

    // Build the SQL query
    $sql = "INSERT INTO papers (title, abstract, date, link, image)
            VALUES ('$title', '$abstract', '$date', '$link', '$image_name')";

    // Execute the query and handle results
    if (mysqli_query($conn, $sql)) {
      
      header("Location: admin.php#paper");
      
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  } else {
    echo "Sorry, there was an error uploading your image.";
  }
}
if (isset($_POST['submitimage']) && !empty($_FILES['image']['name'])) {


  $venue = mysqli_real_escape_string($conn, $_POST["venue"]);
  $date = mysqli_real_escape_string($conn, $_POST["date"]);
  $image_name = basename($_FILES["image"]["name"]);
  $target = "images/gallery/" . $image_name;

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {


    $sql = "INSERT INTO gallery (venue, date, image)
            VALUES ('$venue', '$date', '$image_name')";

    // Execute the query and handle results
    if (mysqli_query($conn, $sql)) {
      
      header("Location: admin.php#gellery");
      
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  } else {
    echo "Sorry, there was an error uploading your image.";
  }
}
if (isset($_POST['submitmedia'])) {


  $mtype = mysqli_real_escape_string($conn, $_POST["mtype"]);
  $link = mysqli_real_escape_string($conn, $_POST["link"]);

  $sql = "INSERT INTO media ( mtype, link) VALUES ('$mtype', '$link')";
  
  if (mysqli_query($conn, $sql)) {
    header("Location: admin.php#Links");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }   
  
}
if (isset($_POST['submitmsg'])) {


  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
  $message = mysqli_real_escape_string($conn, $_POST["message"]);

  $sql = "INSERT INTO msgs ( name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
  
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }   
  
}

mysqli_close($conn);
?>