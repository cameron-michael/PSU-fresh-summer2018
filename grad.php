<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<?php // Spit out the requested name ?>
		<title>Fresh Summer 2018 - PSU.GD Senior Showcase - <?php echo ( $_GET["name"] ? ucfirst($_GET["name"]) : "Not Found" ); ?></title>
		<?php include 'header.php' ?>
	</head>
  
	<body class="grid wfull biobg">
  
    <!-- This is the design that goes at the top of each profile page and single archive page. Replace these with your designs for current term -->
    <img class="design-bio-left" src="src/img/summer1018/logo-bios.png" alt="leafy green design">
    
    <div class="logo-grad"> <!-- contains the logo -->
      <a href="http://psu.gd/fresh/">

          <!-- start of FRESH logo -->
   
          <!-- copy and past the following into your svg code:
          style="max-width: 100%"
          width="2in" height="2.014in"
          -->
  
      <img src="src/img/summer2018/logo-bios.png">


  <!-- end of FRESH logo -->

      </a>
    </div>

		<!-- Nav Slides -->
			<!-- Class "cbp-spmenu-open" gets applied to menu -->
		<?php include 'sidebar-location.php' ?>
		<?php include 'sidebar-grads.php' ?>

		<div class="row biosection">

		<?php

    $name = $_GET["name"];
	if ( $name && file_exists('students/summer18/'.$_GET["name"]) ) {
        // Include the correct index file
        include 'students/summer18/'.$name . '/index.php';
      } 
	
       
	else if ( $name && file_exists('students/winter18/'.$_GET["name"]) ) {
        // Include the correct index file
        include 'students/spring18/'.$name . '/index.php';
      }
      else if ( $name && file_exists('students/fall17/'.$_GET["name"]) ) {
        // Include the correct index file
        include 'students/fall17/'.$name . '/index.php';
      }
			else if ( $name && file_exists('students/sm17/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/sm17/'.$name . '/index.php';
				}
			else if ( $name && file_exists('students/sp17/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/sp17/'.$name . '/index.php';
				}
            else if ( $name && file_exists('students/fall16/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/fall16/'.$name . '/index.php';
				}
            else if ( $name && file_exists('students/summer16/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/summer16/'.$name . '/index.php';
				}
			else if ( $name && file_exists('students/spring16/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/spring16/'.$name . '/index.php';
				}
			else if ( $name && file_exists('students/summer15/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/summer15/'.$name . '/index.php';
				}
			else if ( $name && file_exists('students/spring15/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/spring15/'.$name . '/index.php';
				}

			else if ( $name && file_exists('students/fall14/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/fall14/'.$name . '/index.php';
				}

			else if ( $name && file_exists('students/spring14/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/spring14/'.$name . '/index.php';
				}

			else if ( $name && file_exists('students/summer14/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/summer14/'.$name . '/index.php';
				}
			else if ( $name && file_exists('students/fall13/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/fall13/'.$name . '/index.php';
				}

			else if ( $name && file_exists('students/spring13/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/spring13/'.$name . '/index.php';
				}

			else if ( $name && file_exists('students/summer13/'.$_GET["name"]) ) {
				// Include the correct index file
				include 'students/summer13/'.$name . '/index.php';
				}
				 else { ?>
			<div style="margin-top:10em;text-align:center;color:black;">
				Sorry, couldn't find anyone by that name. :(
			</div>
		<?php } ?>
		</div>
		<?php include 'scripts.php'; ?>
	</body>
</html>
