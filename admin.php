<!doctype html>
<html class="">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="w-svw bg-gradient-to-tl to-[#011092] from-[#080617] h-screen ">
  <div class="flex flex-row w-full border">
    <div class="w-40 bg-slate-900 flex justify-center  h-screen text-white">
      <ul>
        <li class="text-white border-blue-300 w-40 h-11 flex justify-center items-center bg-[#080617] cursor-pointer hover:bg-[#160547]">
          <div onclick="toggleProject()">Projects</div>
        </li>
        <li class="text-white border-blue-300 w-40 h-11 flex justify-center items-center bg-[#080617] cursor-pointer hover:bg-[#160547]">
          <div onclick="togglePaper()">Research papers</div>
        </li>
        <li class="text-white border-blue-300 w-40 h-11 flex justify-center items-center bg-[#080617] cursor-pointer hover:bg-[#160547]">
          <div onclick="toggleGallery()">gallery</div>
        </li>
        <li class="text-white border-blue-300 w-40 h-11 flex justify-center items-center bg-[#080617] cursor-pointer hover:bg-[#160547]">
          <div onclick="toggleLinks()">Social Links</div>
        </li>
        <li class="text-white border-blue-300 w-40 h-11 flex justify-center items-center bg-[#080617] cursor-pointer hover:bg-[#160547]">
          <div onclick="toggleMsg()">Messeges</div>
        </li>
        
      </ul>
    </div>
    <div class="w-full">
      <div id="projects" style="display:block" class="w-full bg-gradient-to-tl to-[#011092] from-[#080617] ">
        <div class="text-3xl m-3 text-white">Project Manager</div>
        <div class="flex flex-row h-full text-white">
          <div class=" w-auto">
            <div class="flex lg:flex-row md:flex-row flex-col ">
              <div class="flex flex-col w-full m-10 ">
                <form action="action.php" method="post" enctype="multipart/form-data">
                  <label for="title">Title:</label><br>
                  <textarea type="text" name="title" id="title" placeholder="Bio"
                    class="bg-black resize-none textarea textarea-bordered textarea-xs w-full max-w-xs"
                    required></textarea>
                  <br><label for="details">Details:</label><br>
                  <textarea name="details" id="details" rows="4" placeholder="Bio"
                    class="bg-black resize-none textarea textarea-bordered textarea-xs w-full max-w-xs"
                    required></textarea>
                  <br><label for="date">Data:</label><br>
                  <input class="bg-black resize-none textarea textarea-bordered textarea-xs w-full max-w-xs" type="date"
                    name="date" id="date"></textarea>
                  <br>
                  <label for="image">Image:</label>
                  <br><input class="file-input file-input-bordered w-full max-w-xs bg-black" type="file" name="image"
                    id="image" required>
                  <br><br>
                  <div class="flex flex-row justify-center ">
                    <input class="btn text-white bg-black" type="submit" name="submitproject" value="Submit Project">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="w-2/3">
            <div class="overflow-x-auto">
              <table class="table">

                <thead class="text-white">
                  <tr>
                    <th>si.</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Date</th>
                    <th>image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
           $servername = "localhost";
           $username = "root";
           $password = "";
           $dbname = "portfolio";
           
           // Create connection
              $conn = mysqli_connect($servername, $username, $password, $dbname);
                if ($conn) {
                    $sql = "SELECT * FROM projects";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['details'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td><a target = _blank><img style='height:50px;width:50px;' src = './images/projects/" . $row['image'] . "' alt='There is no image to show'></a></td>";
                        echo "<td><a href=\"deletep.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    print("There was an error while connecting to database.");
                }

                ?>

                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
      <div id="papers" style="display:none" class="w-full bg-gradient-to-tl to-[#011092] from-[#080617] ">
        <div class="text-3xl m-3 text-white">Research Paper Manager</div>
        <div class="flex flex-row h-full text-white">
          <div class=" w-auto">
            <div class="flex lg:flex-row md:flex-row flex-col ">
              <div class="flex flex-col w-full m-10 ">
                <form action="action.php" method="post" enctype="multipart/form-data">
                  <label for="title">Title:</label><br>
                  <textarea type="text" name="title" id="title" placeholder="enter the title here"
                    class="bg-black resize-none textarea textarea-bordered textarea-xs w-full max-w-xs"
                    required></textarea>
                  <br><label for="abstract">Abstract</label><br>
                  <textarea name="abstract" id="abstract" rows="20" placeholder="abstract"
                    class="bg-black resize-none textarea textarea-bordered textarea-xs w-full max-w-xs"
                    required></textarea>
                  <br><label for="date">Data:</label><br>
                  <input class="bg-black resize-none textarea textarea-bordered textarea-xs w-full max-w-xs" type="date"
                    name="date" id="date">
                  <br>
                  <label>Link:</label><br>
                  <input class="bg-black resize-none textarea textarea-bordered textarea-xs w-full max-w-xs" type="text"
                    name="link" id="link">
                  <br>
                  <label for="image">Image:</label>
                  <br><input class="file-input file-input-bordered w-full max-w-xs bg-black" type="file" name="image"
                    id="image" required>
                  <br><br>
                  <div class="flex flex-row justify-center ">
                    <input class="btn text-white bg-black" type="submit" name="submitpaper" value="Submit Paper">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="w-2/3">
            <div class="overflow-x-auto">
              <table class="table">

                <thead class="text-white">
                  <tr>
                    <th>si.</th>
                    <th>Title</th>
                    <th>Abstrack</th>
                    <th>Date</th>
                    <th>link</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
           $servername = "localhost";
           $username = "root";
           $password = "";
           $dbname = "portfolio";
           
           // Create connection
              $conn = mysqli_connect($servername, $username, $password, $dbname);
                if ($conn) {
                    $sql = "SELECT * FROM papers";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['abstract'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td>" . $row['link'] . "</td>";
                        echo "<td><a target = _blank><img style='height:50px;width:50px;' src = './images/papers/" . $row['image'] . "'. alt='There is no image to show'></a></td>";
                        echo "<td><a href=\"deletep.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    print("There was an error while connecting to database.");
                }

                ?>

                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
      <div id="gallery" style="display:none" class="w-full bg-gradient-to-tl to-[#011092] from-[#080617] ">
      <div class="text-3xl m-3 text-white">Gallery</div>
        <div class="flex flex-row h-full text-white">
          <div class=" w-auto">
            <div class="flex lg:flex-row md:flex-row flex-col ">
              <div class="flex flex-col w-full m-10 ">
                <form action="action.php" method="post" enctype="multipart/form-data">
                  <label for="venue">venue:</label><br>
                  <textarea type="text" name="venue" id="venue" placeholder="enter the venue here"
                    class="bg-black resize-none textarea textarea-bordered textarea-xs w-full max-w-xs"
                    required></textarea>
                 
                  <br><label for="date">Data:</label><br>
                  <input class="bg-black resize-none textarea textarea-bordered textarea-xs w-full max-w-xs" type="date"
                    name="date" id="date">
                  <br>
                 
                  <label for="image">Image:</label>
                  <br><input class="file-input file-input-bordered w-full max-w-xs bg-black" type="file" name="image"
                    id="image" required>
                  <br><br>
                  <div class="flex flex-row justify-center ">
                    <input class="btn text-white bg-black" type="submit" name="submitimage" value="Submit Image">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="w-2/3">
            <div class="overflow-x-auto">
              <table class="table">

                <thead class="text-white">
                  <tr>
                    <th>si.</th>
                    <th>Venue</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "portfolio";
                        
                          // Create connection
                              $conn = mysqli_connect($servername, $username, $password, $dbname);
                          if ($conn) {
                          $sql = "SELECT * FROM gallery";
                          $result = mysqli_query($conn, $sql);
                          while ($row = mysqli_fetch_array($result)) {
                              echo "<tr>";
                              echo "<td>" . $row['id'] . "</td>";
                              echo "<td>" . $row['venue'] . "</td>";
                              echo "<td>" . $row['date'] . "</td>";
                              echo "<td><a target = _blank><img style='height:50px;width:50px;' src = './images/gallery/" . $row['image'] . "'. alt='There is no image to show'></a></td>";
                              echo "<td><a href=\"deletep.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
                              echo "</td>";
                              echo "</tr>";
                          }
                      } else {
                          print("There was an error while connecting to database.");
                      }

                      ?>

                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
      <div id="Links" style="display:none" class="w-full bg-gradient-to-tl to-[#011092] from-[#080617] ">
        <div class="text-3xl m-3 text-white">Social Links</div>
        <div class="flex flex-row h-full text-white">
          <div class=" w-1/3">
            <div class="flex lg:flex-row md:flex-row flex-col ">
              <div class="flex flex-col w-full m-10 ">
                <form action="action.php" method="post" enctype="multipart/form-data">
                  <label for="venue">venue:</label><br>
                  <select name="mtype" class="select select-bordered bg-black resize-none textarea textarea-bordered textarea-xs w-full max-w-xs">
                    <option disabled selected>Choose Media Type?</option>
                    <option >researchgate</option>
                    <option>orcid</option>
                    <option>gmail</option>
                    <option>linkedin</option>
                    <option>facebook</option>
                    <option>instagram</option>
                    <option>twitter</option>
                    <option>youtube</option>
                  </select>
                  <br>
                  <label for="Link">Link:</label><br>
                  <textarea type="text" name="link" id="link" placeholder="paste profile link here"
                    class="bg-black resize-none textarea textarea-bordered textarea-xs w-full max-w-xs"
                    required></textarea>
                  <br>
                  <div class="flex flex-row justify-center ">
                    <input class="btn text-white bg-black" type="submit" name="submitmedia" value="Submit Image">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="w-2/3">
            <div class="overflow-x-auto">
              <table class="table">

                <thead class="text-white">
                  <tr>
                    <th>si.</th>
                  
                    <th>Media type</th>
                    <th>link</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
           $servername = "localhost";
           $username = "root";
           $password = "";
           $dbname = "portfolio";
           
           // Create connection
              $conn = mysqli_connect($servername, $username, $password, $dbname);
                if ($conn) {
                    $sql = "SELECT * FROM media";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['mtype'] . "</td>";
                        echo "<td>" . $row['link'] . "</td>";
                        echo "<td><a href=\"deletep.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    print("There was an error while connecting to database.");
                }

                ?>

                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
      <div id="msg" style="display:none" class="w-full bg-gradient-to-tl to-[#011092] from-[#080617] ">
        <div class="text-3xl m-3 text-white">Messeges</div>
        <div class="flex flex-row h-full text-white">
          <div class=" w-full mx-5">
            
            <div class="overflow-x-auto">
              <table class="table">

                <thead class="text-white">
                  <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>message</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
           include("database.php");
                if ($conn) {
                    $sql = "SELECT * FROM msgs";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "<td><a href=\"deletep.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    print("There was an error while connecting to database.");
                }

                ?>

                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>

    <script>
      const divProjects = document.getElementById("projects");
      const divPapers = document.getElementById("papers");
      const divGallery = document.getElementById("gallery");
      const divLinks = document.getElementById("Links");
      const divMsg = document.getElementById("msg");
      function toggleProject() {
        if (divProjects.style.display === "none") {
          divProjects.style.display = "block";
          divPapers.style.display = "none";
          divGallery.style.display = "none";
          divLinks.style.display = "none";
          divMsg.style.display = "none";
        }
      }
      function togglePaper() {
        if (divPapers.style.display === "none") {
          divPapers.style.display = "block";
          divProjects.style.display = "none";
          divGallery.style.display = "none";
          divLinks.style.display = "none";
          divMsg.style.display = "none";
        }
      }
      function toggleGallery() {
        if (divGallery.style.display === "none") {
          divGallery.style.display = "block";
          divProjects.style.display = "none";
          divPapers.style.display = "none";
          divLinks.style.display = "none";
          divMsg.style.display = "none";
        }
      }
      function toggleLinks(){
        {
        if (divGallery.style.display === "none") {
          divLinks.style.display = "block";
          divGallery.style.display = "none";
          divProjects.style.display = "none";
          divPapers.style.display = "none";
          divMsg.style.display = "none";
        }
      }
      }
      function toggleMsg(){
        {
        if ( divMsg.style.display === "none") {
          divLinks.style.display = "none";
          divGallery.style.display = "none";
          divProjects.style.display = "none";
          divPapers.style.display = "none";
          divMsg.style.display = "block";
        }
      }
      }
    </script>
</body>