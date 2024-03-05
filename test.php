<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="toggleDivs()">asdads</button>

    <div id="div1">dassad 1111</div>
    <div id="div2">dassad 2222</div>
</body>
<script>
    function toggleDivs() {
  // Get the divs you want to toggle
  const divToHide = document.getElementById("div1");
  const divToShow = document.getElementById("div2");

  // Toggle the visibility of the divs
  if (divToHide.style.display === "none") {
    divToHide.style.display = "block";
    divToShow.style.display = "none";
  } else {
    divToHide.style.display = "none";
    divToShow.style.display = "block";
  }
}
</script>
</html>