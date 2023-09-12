<?php 
session_start();
error_reporting(0);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Report</title>
</head>
<body>

<section class="text-gray-400 bg-gray-900 body-font relative">
  <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-900 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <!-- <iframe width="100%" height="100%" title="map" class="absolute inset-0" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.8295941953925!2d74.5012763751316!3d15.865551084784897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbf66af0adb3b49%3A0x30ebdcb5abc91e3f!2sBK%20College!5e0!3m2!1sen!2sin!4v1692539845444!5m2!1sen!2sin" style="filter: grayscale(1) contrast(1.2) opacity(0.16);"></iframe> -->
        <img width="100%" height="100%" title="map" class="absolute inset-0" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="/hero4.jpg" >
       
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.8295941953925!2d74.5012763751316!3d15.865551084784897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbf66af0adb3b49%3A0x30ebdcb5abc91e3f!2sBK%20College!5e0!3m2!1sen!2sin!4v1692539845444!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
      
      
      
        <!-- <div class="bg-gray-900 relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-white tracking-widest text-xs">ADDRESS</h2>
          <p class="mt-1">DMS BCA College, Club Road, Belagavi, Karnataka 590001</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-white tracking-widest text-xs">EMAIL</h2>
          <a class="text-indigo-400 leading-relaxed">ctc@email.com</a>
          <h2 class="title-font font-semibold text-white tracking-widest text-xs mt-4">PHONE</h2>
          <p class="leading-relaxed">6361723454</p>
        </div>
      </div> -->
    </div>
    
    <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
    <form action="" id="complaint-frm" method="post" enctype="multipart/form-data">
    <center>  <h2 class="text-white text-lg mb-1 font-medium title-font" style="font-size:20pt;">Report The Crime</h2></center>

      <div class="top-w3-agile" style="color: gray"><pre>      </pre></div>
      <!-- <p class="leading-relaxed mb-5">Post-ironic portland shabby chic echo park, banjo fashion axe</p> -->
      <div class="top-w3-agile" style="color: white; font-size:15pt;">Type of Crime :
					<select class="form-control" name="type" style="color: black;"> 
                        <!-- <option>Theft</option> -->
                        <option>Robbery</option>
                        <option>Pick Pocket</option>
                        <option>Murder</option>
                        <option>College Ragging</option>
                        <!-- <option>Molestation</option> -->
                        <option>Kidnapping</option>
                        <option>Missing Person</option>
                        <option>Other</option>
				    </select>
				</div>

        <div class="top-w3-agile" style="color: gray"><pre>      </pre></div>

      <div class="relative mb-4">
            <label for="" class="leading-7 text-sm text-gray-400" style="color: white;font-size:15pt;">Report Message</label>
			<textarea  name="message" required="" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        
        
            <!-- <label for="name" class="leading-7 text-sm text-gray-400">Name</label> -->
        <!-- <input type="text" id="name" name="name" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> -->
      </div>
      <!-- <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div> -->
      <div class="relative mb-4">
      <label for="" class="leading-7 text-sm text-gray-400" style="color: white;font-size:15pt;">Incident Address</label>
			<textarea cols="30" rows="3" name="address" required="" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>



        <!-- <label for="message" class="leading-7 text-sm text-gray-400">Message</label> -->
        <!-- <textarea id="message" name="message" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 h-32 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea> -->
      </div>
      


      <div class="relative mb-4">
      <label for="" class="leading-7 text-sm text-gray-400" style="color: white;font-size:15pt;">Incident Proof :</label>
			<input type="file" name="proof" style="color: white;"  >
        <!-- <label for="email" class="leading-7 text-sm text-gray-400">Email</label> -->
        <!-- <input type="email" id="email" name="email" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> -->
      </div>



      <center><input type="submit" value="Submit" name="Create"  class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
      </center><a href="index.php" >
        
      </a>
      <!-- <p class="text-xs text-gray-400 text-opacity-90 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p> -->
    
    </form>
</div>
  </div>

      </br>
      </br>
      
</section>
    
</body>
</html>






<?php

$link = mysqli_connect("localhost","root","","crms_db");
if(!$link)
die(mysqli_connect_error());


if(isset($_POST['Create']))
{


	$message = $_POST['message'];
	$address = $_POST['address'];
	$type = $_POST['type'];


	$filename = $_FILES["proof"]["name"];

	$tempname = $_FILES["proof"]["tmp_name"];

	$folder = "proof/".$filename;

	move_uploaded_file($tempname, $folder);
 $lala = $_SESSION['login_id'];
  $query = "INSERT INTO `complaints` (`complainant_id`, `message`, `address`,`type`, `proof`, `date_created`, `status`) VALUES ('$lala', '$message', '$address', '$type', '$folder', current_timestamp(), '1')";




	mysqli_query($link, $query);
		if(mysqli_affected_rows($link) > 0){
			echo '<script>';
			echo'alert("Crime Reported Successfully!!!");';
			echo 'window.location="http://localhost:3000/";';
			echo '</script>';
		}
		else
		{
			echo mysqli_error($link);
		}

}



?>


















































































































