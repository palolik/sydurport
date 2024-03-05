<!doctype html>
<html class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="w-svw bg-gradient-to-r to-[#011092] from-[#160040]">
    <!-- home page starts here -->
<div class="w-16 h-60 bg-gradient-to-r to-[#011092] from-[#160040] z-30 fixed mt-72 rounded-r-[40px] pl-2 md:flex lg:flex flex-col justify-evenly hidden ">
 <?php
            include("database.php");
                if ($conn) {$sql = "SELECT * FROM media where mtype ='orcid'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a href=" . $row['link'] . "><img class='h-12 w-12 hover:h-14 hover:w-14' src='images/id.png'></a>" ;} }
                if ($conn) {$sql = "SELECT * FROM media where mtype ='linkedin'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a href=" . $row['link'] . "><img class='h-12 w-12 hover:h-14 hover:w-14' src='images/in.png'></a>" ;} }
                if ($conn) {$sql = "SELECT * FROM media where mtype ='gmail'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a href=" . $row['link'] . "><img class='h-12 w-12 hover:h-14 hover:w-14' src='images/mail.png'></a>" ;} }
                if ($conn) {$sql = "SELECT * FROM media where mtype ='researchgate'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a href=" . $row['link'] . "><img class='h-12 w-12 hover:h-14 hover:w-14' src='images/rg.png'></a>" ;} } ?>

 


    </div>
    <div class="navbar bg-gradient-to-r to-[#011092] from-[#160040] ">
        <div class="flex-1">
            <a class="lg:text-4xl text-2xl font-bold md:text-4xl text-blue-400">Sydur Rahman</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 hidden lg:flex md:flex text-xl text-blue-400">
                <li><a>Home</a></li>
                <li><a>About Me</a></li>
                <li><a>Research</a></li>
                <li><a>Projects</a></li>
                <li><a id="nextButton" onclick="floatingBox()">Log in</a>
                </li>

            </ul>
            <ul class="menu menu-horizontal px-1 flex lg:hidden md:hidden">

                <li>
                    <details>
                        <summary class="lg:text-4xl text-xl md:text-4xl text-blue-400">
                            Menu
                        </summary>
                        <ul
                            class="right-1 p-0 bg-gradient-to-r to-[#011092] from-[#160040] lg:text-4xl text-xl md:text-4xl text-blue-400">
                            <li  ><a >Home</a></li>
                            <li><a>About Me</a></li>
                            <li><a>Research</a></li>
                            <li><a>Projects</a></li>
                            <li><a id="nextButton" onclick="floatingBox()">Log in</a>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
    <sector class="w-screen h-screen flex lg:flex-row md:flex-row flex-col">

        <div class="mx-2 w-full md:w-1/2 lg:w-1/2 lg:ml-24 lg:mt-24 md:ml-12 md:mt-12">
            <div class="text-4xl md:text-6xl lg:text-8xl text-cyan-500 font-extrabold">Resercher and Author</div>
            <div class="text-lg md:text-lg  lg:text-xl text-cyan-200 font-semibold">Research experience in
                metamaterials,
                microring resonators, and photonics. Skilled in CST microwave studio, COMSOL multiphysics, Lumerical,
                etc. photonics simulator software. Further skilled in MATLAB and programming languages like C, Python,
                PHP, etc. Currently doing Masters in Electrical and Electronic Engineering at Bangladesh University of
                Engineering and Technology (BUET). </div>
            <div class="flex flex-row justify-center md:justify-start lg:justify-start">
                <div class="flex flex-row lg:ml-24 md:ml-12 justify-between text-white w-2/3 md:w-1/2 lg:w-1/2">
                    <div class="flex flex-col  items-center">
                        <div class="text-2xl md:text-6xl lg:text-8xl"><?php include("database.php");
                if ($conn) {$sql = "SELECT COUNT(*) AS total_entries FROM papers";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { 
                    echo " ". $row['total_entries'] . " " ; }} ?></div>
                        <div class="text-xl">papers</div>
                    </div>
                    <div class="flex flex-col  items-center">
                        <div class="text-2xl md:text-6xl lg:text-8xl"><?php include("database.php");
                if ($conn) {$sql = "SELECT COUNT(*) AS total_entries FROM projects";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { 
                    echo " ". $row['total_entries'] . " " ; }} ?></div>
                        <div class="text-xl">Projects</div>
                    </div>
                    <div class="flex flex-col  items-center">
                        <div class="text-2xl md:text-6xl lg:text-8xl"><?php include("database.php");
                if ($conn) {$sql = "SELECT COUNT(*) AS total_entries FROM gallery";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { 
                    echo " ". $row['total_entries'] . " " ; }} ?></div>
                        <div class="text-xl">Gallery</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 md:w-2/3 w-full flex lg:ml-40 md:ml-10">
            <img class="w-screen h-1/2 lg:h-full lg:w-fit" src="images/test.png" alt="">
        </div>


    </sector>
    <sector class=" lg:h-screen flex flex-col items-center lg:justify-start mb-5">
        <div class="text-4xl text-cyan-300 mb-8 lg:m-20 lg:text-6xl">Research</div>
        <div class="flex  w-11/12 h-5/6 flex-col items-center lg:flex-col lg:justify-center md:flex-row ">
            <div class="carousel w-full h-5/6">
            <?php
            include("database.php");
                if ($conn) {$sql = "SELECT * FROM papers";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { 
                    echo "<div id='item".$row['id']."' class='carousel-item w-full'>
                    <div class='flex flex-col lg:flex-row md:flex-row'>
                        <div class=' lg:w-1/3 md:w-1/3 '><img
                                class=' h-[300px] lg:rounded-r-[50px] md:rounded-r-[50px] lg:h-full md:h-full md:w-full'
                                src='./images/papers/". $row['image'] ."'></div>
                        <div class='lg:w-2/3 text-white m-1 lg:mx-10 md:mx-5 md:w-2/3'>
                            <p class='font-bold text-xl mb-1 lg:text-3xl md:text-3xl md:mb-5 lg:mb-5'>" . $row['title'] . "</p>
                            <p class='text-sm lg:text-lg md:text-lg'>" . $row['abstract'] . "</p>
                            <p>Published on: <span>" . $row['date'] . "</span></p>
                            
                            <a href='". $row['link'] ."' >go to site</a>
                        </div>
                    </div>
                </div>"; } } ?>

                 
            </div>
            <!-- <div class="flex justify-center w-full py-2 gap-2">
                <a href="#item1" class="btn btn-xs">1</a> 
                <a href="#item2" class="btn btn-xs">2</a> 
                <a href="#item3" class="btn btn-xs">3</a> 
                <a href="#item4" class="btn btn-xs">4</a>
              </div> -->
        </div>
    </sector>
    <sector class=" lg:h-screen flex flex-col items-center lg:justify-start ">
        <div class="text-4xl text-cyan-300 mb-8 lg:m-20 lg:text-6xl">Skills and Qualities</div>
        <div class="flex w-full p-10 flex-col justify-center items-center lg:flex-row md:flex-row">
            <div
                class="card  w-full mb-4 md:w-1/5  lg:w-1/5 lg:h-[400px] lg:m-5 bg-gradient-to-r to-[#011092] from-[#160040] shadow-xl border-2 border-cyan-500 text-white">
                <div class="card-body md:px-2 lg:px-6">
                    <img class="w-16 h-16" src="https://cdn-icons-png.flaticon.com/512/4228/4228953.png">

                    <h2 class="card-title">1Design & Simulation Software</h2>
                    <ul>
                        <li>COMSOL Multiphysics</li>
                        <li>CST Microwave Studio</li>
                        <li>ANSYS HFSS</li>
                        <li>MATLAB</li>
                        <li>Fritzing</li>
                    </ul>

                </div>
            </div>
            <div class="card md:m-2 w-full mb-4 md:w-1/5 lg:w-1/5 lg:h-[400px] lg:m-5 md:mt-16 lg:mt-32  bg-gradient-to-r to-[#011092] from-[#160040] shadow-xl border-2 border-cyan-500 text-white">
                <div class="card-body md:px-2 lg:px-6">
                    <img class="w-16 h-16" src="https://cdn-icons-png.flaticon.com/512/4228/4228953.png">

                    <h2 class="card-title">2Design & Simulation Software</h2>
                    <ul>
                        <li>COMSOL Multiphysics</li>
                        <li>CST Microwave Studio</li>
                        <li>ANSYS HFSS</li>
                        <li>MATLAB</li>
                        <li>Fritzing</li>
                    </ul>

                </div>
            </div>
            <div class="card md:m-2 w-full mb-4 md:w-1/5 lg:w-1/5 lg:h-[400px] lg:m-5 bg-gradient-to-r to-[#011092] from-[#160040] shadow-xl border-2 border-cyan-500 text-white">
                <div class="card-body md:px-2 lg:px-6">
                    <img class="w-16 h-16" src="https://cdn-icons-png.flaticon.com/512/4228/4228953.png">

                    <h2 class="card-title">Design & Simulation Software</h2>
                    <ul>
                        <li>COMSOL Multiphysics</li>
                        <li>CST Microwave Studio</li>
                        <li>ANSYS HFSS</li>
                        <li>MATLAB</li>
                        <li>Fritzing</li>
                    </ul>

                </div>
            </div>
            <div
                class="card md:m-2 w-full mb-4 md:w-1/5 lg:w-1/5 lg:h-[400px] lg:m-5 md:mt-16 lg:mt-32 bg-gradient-to-r to-[#011092] from-[#160040] shadow-xl border-2 border-cyan-500 text-white">
                <div class="card-body md:px-2 lg:px-6">
                    <img class="w-16 h-16" src="https://cdn-icons-png.flaticon.com/512/4228/4228953.png">

                    <h2 class="card-title">Design & Simulation Software</h2>
                    <ul>
                        <li>COMSOL Multiphysics</li>
                        <li>CST Microwave Studio</li>
                        <li>ANSYS HFSS</li>
                        <li>MATLAB</li>
                        <li>Fritzing</li>
                    </ul>

                </div>
            </div>
        </div>
    </sector>
    <sector class=" lg:h-screen flex flex-col items-center lg:justify-start ">
        <div class="text-4xl text-cyan-300 mb-8 lg:m-20 lg:text-6xl">Projects</div>
        <div class="flex  w-11/12 flex-col justify-center items-center lg:flex-row lg:justify-center md:flex-row">
            <div class="carousel carousel-center w-11/12 lg:w-2/3 md:w-2/3 p-4 space-x-4 ">
            <?php
            include("database.php");
                if ($conn) {$sql = "SELECT * FROM projects";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { 
                    echo "
                <div id=".$row['id']." class='carousel-item w-11/12 lg:w-1/3'>
                    <div class='card  lg:w-96 lg:h-[500px] text-white bg-gradient-to-r to-[#011092] from-[#160040]  shadow-xl'>
                        <figure class='h-1/2'><img  src = './images/projects/". $row['image'] ."' alt='Shoes' ></figure>
                        <div class='card-body'>
                            <h2 class='card-title'>".$row['title']."</h2>
                            <p>".$row['details']."</p>
                            <p>".$row['date']."</p>

                        </div>
                    </div>
                </div>" ; } } ?>




            </div>
        </div>


    </sector>

    <sector class=" lg:h-screen flex flex-col items-center lg:justify-start ">
        <div class="text-4xl text-cyan-300 mb-8 lg:m-20 lg:text-6xl">Gallery</div>
        <div class="flex flex-wrap flex-col items-center w-full lg:flex-col lg:h-4/6 md:h-4/6 h-[500px] md:flex-col ">
            <div class="carousel carousel-center w-5/6 rounded-box h-[480px] lg:h-full md:h-[520px]">
            <?php
            include("database.php");
                if ($conn) {$sql = "SELECT * FROM gallery";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { 
                    echo "
            <div id=".$row['id']." class='carousel-item lg:w-3/6 md:w-4/5 w-full'>
                    <div
                        class='w-full flex flex-col-reverse  bg-no-repeat bg-cover bg-[url(./images/gallery/". $row['image'] .")] '>
                        <div class='h-32 bg-opacity-10 bg-black text-white pl-5 '>
                            <p>vanue: " . $row['venue'] . "</p>
                            <p>Date: " . $row['date'] . "</p>
                        </div>
                    </div>
                </div> " ; } } ?>

             
            </div>
        </div>
    </sector>
    <sector class="">
        <div class="flex lg:flex-row md:flex-row flex-col-reverse w-screen  lg:p-10 md:p-10 p-4 bg-gradient-to-r from-[#011092] to-[#160040]  text-white">
            <div class="lg:w-2/4 md:w-2/4 flex lg:flex-row md:flex-row flex-col justify-evenly ">
                <div class="flex flex-col items-center mb-2">
                    <h6 class="text-lg font-bold">Important Links</h6>
                    <a class="link link-hover">Alpha Science lab</a>
                    <a class="link link-hover">University of Dhaka</a>
                    <a class="link link-hover">DhumketuX</a>
                    <a class="link link-hover">Alpha Xcience lab</a>
                </div>
                <div class="flex flex-col items-center mb-2">
                    <h6 class="text-lg font-bold">Contacts</h6>
                    <a class="link link-hover">North Jatrabari, Dhaka, Bangladesh </a>
                    <a class="link link-hover">+880 1991680118 </a>
                    <a class="link link-hover">0421062382@eee.buet.ac.bd</a>
                </div>
                <div  class="flex flex-col items-center mb-2">
                    <h6 class="text-lg font-bold">Social media</h6>
                    <div class="flex flex-row ">
                    <?php
            include("database.php");
            if ($conn) {$sql = "SELECT * FROM media where mtype ='orcid'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a class='link link-hover p-1' href=" . $row['link'] . "><img class='h-8 w-8 hover:h-9 hover:w-9' src='images/fb.png'></a>" ;} }
            if ($conn) {$sql = "SELECT * FROM media where mtype ='orcid'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a class='link link-hover p-1' href=" . $row['link'] . "><img class='h-8 w-8 hover:h-9 hover:w-9' src='images/insta.png'></a>" ;} }
            if ($conn) {$sql = "SELECT * FROM media where mtype ='orcid'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a class='link link-hover p-1' href=" . $row['link'] . "><img class='h-8 w-8 hover:h-9 hover:w-9' src='images/x.png'></a>" ;} }
            if ($conn) {$sql = "SELECT * FROM media where mtype ='orcid'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a class='link link-hover p-1' href=" . $row['link'] . "><img class='h-8 w-8 hover:h-9 hover:w-9' src='images/yt.png'></a>" ;} } ?>
                    </div> <div class="flex flex-row lg:hidden md:hidden">
                    <?php
            include("database.php");
                if ($conn) {$sql = "SELECT * FROM media where mtype ='orcid'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a class='link link-hover p-1' href=" . $row['link'] . "><img class='h-8 w-8 hover:h-9 hover:w-9' src='images/id.png'></a>" ;} }
                if ($conn) {$sql = "SELECT * FROM media where mtype ='linkedin'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a class='link link-hover p-1' href=" . $row['link'] . "><img class='h-8 w-8 hover:h-9 hover:w-9' src='images/in.png'></a>" ;} }
                if ($conn) {$sql = "SELECT * FROM media where mtype ='gmail'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a class='link link-hover p-1' href=" . $row['link'] . "><img class='h-8 w-8 hover:h-9 hover:w-9' src='images/mail.png'></a>" ;} }
                if ($conn) {$sql = "SELECT * FROM media where mtype ='researchgate'";$result = mysqli_query($conn, $sql);while ($row = mysqli_fetch_array($result)) { echo "<a class='link link-hover p-1' href=" . $row['link'] . "><img class='h-8 w-8 hover:h-9 hover:w-9' src='images/rg.png'></a>" ;} } ?>

 
                </div>
                </div>
            </div>
            <div class="lg:w-2/4 md:w-2/4  flex flex-col">
                <div class="lg:mx-3 md:mx-3 footer-title text-lg">Need to contuct me</div>
                <div class="flex lg:flex-row md:flex-row flex-col">
                    <div class="lg:w-1/3 md:w-1/3 h-60  flex flex-col ">
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="flex flex-col items-start w-full lg:mx-3 md:mx-3 h-20 ">
                            
                                <label for="name" class=" text-lg">Name</label>
                                <div class=" w-full">
                                    <input type="text" placeholder="Enter your name" name="name"   class=" w-full opacity-60  rounded-md h-12 p-1.5 bg-gray-900 text-gray-100 ring-1 ring-inset ring-blue-900 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-blue-900 ">
                                </div>
                            </div>
                            <div class="flex flex-col items-start w-full lg:mx-3 md:mx-3 h-20 ">
                                <label for="email" class=" text-lg  ">Email</label>
                                <div class=" w-full">
                                    <input type="text" placeholder="Enter your email" name="email" id="email" class=" w-full opacity-60 rounded-md h-12 p-1.5 bg-gray-900 text-gray-100 ring-1 ring-inset ring-blue-900 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-blue-900 ">
                                </div>
                            </div>
                            <div class="flex flex-col items-start w-full lg:mx-3 md:mx-3 h-20 ">
                                <label for="phone" class="text-lg">Phone</label>
                                <div class=" w-full">
                                    <input type="text" placeholder="Enter your phone" name="phone" id="phone" class=" w-full opacity-60 rounded-md h-12 p-1.5 bg-gray-900 text-gray-100 ring-1 ring-inset ring-blue-900 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-blue-900 ">
                                </div>
                            </div>
                      
                    </div>
                    <div class="flex flex-col lg:mx-6 lg:w-2/3 md:w-2/3 h-60 lg:mb-0 md:mb-0 mb-4">
                        <label for="message" class="text-lg">Message</label>
                        <div class="w-full">
                            <textarea placeholder="write your message here" id="about" name="message" rows="6"
                                class="block resize-none w-full rounded-md h-42 p-1.5 opacity-60 bg-gray-900 text-gray-100 ring-1 ring-inset ring-blue-900 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-blue-900 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <div class="lg:mt-2 w-full md:mt-2 mt-2 ">
                            <input class="btn btn-error text-white w-full bg-blue-950 border-blue-700" type="submit" name="submitmsg" value="send Massage">
                                
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
        </div>


        </div>
    </sector>
</body>
<script>
    function closeFloatingBox() {
        const elementId = "floatingDiv";
        setDivViscById(elementId);
        removeDivViscById(elementId);
    };
    function floatingBox() {
        const elementId = "floatingDiv";
        setDivVisById(elementId);
        removeDivVisById(elementId);
    };
    function setDivViscById(elementId) {
        const element = document.getElementById(elementId);
        element.classList.add('hidden');
    }

    function removeDivViscById(elementId) {
        const element = document.getElementById(elementId);
        element.classList.remove('block');
    }
    function setDivVisById(elementId) {
        const element = document.getElementById(elementId);
        element.classList.add('block');
    }

    function removeDivVisById(elementId) {
        const element = document.getElementById(elementId);
        element.classList.remove('hidden');
    }
</script>

<div id="floatingDiv"
    class="fixed hidden rounded-xl z-40 bg-gradient-to-r to-[#011092] from-[#160040] h-96 p-10 w-auto left-1/2 top-1/4 -translate-x-1/2">
    <div class="flex flex-col content-center items-center ">
        <p class="text-2xl font-bold text-blue-600 mb-4 ">Log In</p>
        <input type="email" placeholder="input Email here.."
            class="form-input w-full px-4 py-3 mb-2 bg-cyan-100 border-blue-900 border-2 rounded-xl">
        <input type="password" placeholder="input password here.."
            class="form-input px-4 py-3 mb-2 border-blue-900 rounded-xl">


        <button onclick="closeFloatingBox()"
            class="btn btn-primary mt-5 w-48 bg-green-600 hover:bg-green-700 border-none rounded-full text-white">Continue</button>
    </div>
</div>

</html>