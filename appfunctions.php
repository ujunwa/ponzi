<?php 
include('../connection/connect.php');

date_default_timezone_set("Africa/Lagos");

if (!isset($_SESSION)) {
	session_start();
}
$mcg = "" ;



//*************************** HANDLE ALL INSERTS ********************************//

if(isset($_POST["INSERT"]) && $_POST["INSERT"]!="") {
  

  switch ($_POST["INSERT"]) {

    // Basic pledge donation
    case 1:

    $pledger = $_POST["user_id"];
    $date = date("Y-m-d");
    $name = AnyContent("name", "users", "id", $_POST["user_id"]);


      	$sql = "SELECT * FROM pledge_basic WHERE pledger_id = '".$pledger."' && pledge_date = '".$date."'  ";
      	$query = mysqli_query($con, $sql) or die("could not fetch records" . mysqli_error($con));
      	if (mysqli_num_rows($query) == 1) {
          
           $mcg= "<div class='alert alert-dismissable alert-danger'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Dear ".$name.", You have already made a donation for this plan today. Please try again tomorrow or make a donation for another plan.
           
          </div>";
     	}else{
	        $sql = "INSERT INTO pledge_basic SET 
                    
           			pledger_id = '".$pledger."',
           			pledge_date = '".$date."'

                    ";
      	mysqli_select_db($con, $db);
        $result = mysqli_query($con, $sql) or die("a problem occoured: could not insert record into pledge table" . mysqli_error($con));

        if(!$result)
        {
          $mcg= "<div class='alert alert-dismissable alert-danger'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Sorry! ".$name.", the donation was not successfully made, please retry!
           
          </div>";
        }
        else
        {
        	
          $mcg= "<div class='alert alert-success alert-dismissable'  >
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Thank you ".$name.", your donation was successful, you will be paired for payment soon!        
          </div>";
        }
      }

      break;

      // Standard pledge donation
    case 2:

    $pledger = $_POST["user_id"];
    $date = date("Y-m-d");
    $name = AnyContent("name", "users", "id", $_POST["user_id"]);


        $sql = "SELECT * FROM pledge_standard WHERE pledger_id = '".$pledger."' && pledge_date = '".$date."'  ";
        $query = mysqli_query($con, $sql) or die("could not fetch records" . mysqli_error($con));
        if (mysqli_num_rows($query) == 1) {
          
           $mcg= "<div class='alert alert-dismissable alert-danger'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Dear ".$name.", You have already made a donation for this plan today. Please try again tomorrow or make a donation for another plan.
           
          </div>";
      }else{
          $sql = "INSERT INTO pledge_standard SET 
                    
                pledger_id = '".$pledger."',
                pledge_date = '".$date."'

                    ";
        mysqli_select_db($con, $db);
        $result = mysqli_query($con, $sql) or die("a problem occoured: could not insert record into pledge table" . mysqli_error($con));

        if(!$result)
        {
          $mcg= "<div class='alert alert-dismissable alert-danger'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Sorry! ".$name.", the donation was not successfully made, please retry!
           
          </div>";
        }
        else
        {
          
          $mcg= "<div class='alert alert-success alert-dismissable'  >
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Thank you ".$name.", your donation was successful, you will be paired for payment soon!        
          </div>";
        }
      }

      break;

      // Advanced Pledge Plan
    case 3:

    $pledger = $_POST["user_id"];
    $date = date("Y-m-d");
    $name = AnyContent("name", "users", "id", $_POST["user_id"]);


        $sql = "SELECT * FROM pledge_advanced WHERE pledger_id = '".$pledger."' && pledge_date = '".$date."'  ";
        $query = mysqli_query($con, $sql) or die("could not fetch records" . mysqli_error($con));
        if (mysqli_num_rows($query) == 1) {
          
           $mcg= "<div class='alert alert-dismissable alert-danger'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Dear ".$name.", You have already made a donation for this plan today. Please try again tomorrow or make a donation for another plan.
           
          </div>";
      }else{
          $sql = "INSERT INTO pledge_advanced SET 
                    
                pledger_id = '".$pledger."',
                pledge_date = '".$date."'

                    ";
        mysqli_select_db($con, $db);
        $result = mysqli_query($con, $sql) or die("a problem occoured: could not insert record into pledge table" . mysqli_error($con));

        if(!$result)
        {
          $mcg= "<div class='alert alert-dismissable alert-danger'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Sorry! ".$name.", the donation was not successfully made, please retry!
           
          </div>";
        }
        else
        {
          
          $mcg= "<div class='alert alert-success alert-dismissable'  >
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Thank you ".$name.", your donation was successful, you will be paired for payment soon!        
          </div>";
        }
      }

      break;

      // Pro Pledge Plan
    case 4:

    $pledger = $_POST["user_id"];
    $date = date("Y-m-d");
    $name = AnyContent("name", "users", "id", $_POST["user_id"]);


        $sql = "SELECT * FROM pledge_pro WHERE pledger_id = '".$pledger."' && pledge_date = '".$date."'  ";
        $query = mysqli_query($con, $sql) or die("could not fetch records" . mysqli_error($con));
        if (mysqli_num_rows($query) == 1) {
          
           $mcg= "<div class='alert alert-dismissable alert-danger'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Dear ".$name.", You have already made a donation for this plan today. Please try again tomorrow or make a donation for another plan.
           
          </div>";
      }else{
          $sql = "INSERT INTO pledge_pro SET 
                    
                pledger_id = '".$pledger."',
                pledge_date = '".$date."'

                    ";
        mysqli_select_db($con, $db);
        $result = mysqli_query($con, $sql) or die("a problem occoured: could not insert record into pledge table" . mysqli_error($con));

        if(!$result)
        {
          $mcg= "<div class='alert alert-dismissable alert-danger'>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Sorry! ".$name.", the donation was not successfully made, please retry!
           
          </div>";
        }
        else
        {
          
          $mcg= "<div class='alert alert-success alert-dismissable'  >
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          Thank you ".$name.", your donation was successful, you will be paired for payment soon!        
          </div>";
        }
      }

      break;

    }
}



// fetch any subcontent
  function AnyContent($whatyouwant, $table, $tablecolumn, $supplyvalue )
  {

        global $con, $db;

        $data = array();

        $sql = "SELECT $whatyouwant as dresult from $table WHERE $tablecolumn = '".$supplyvalue."'";
        mysql_select_db($con, $db);
        $query = mysqli_query($con, $sql) or die("Oops, there is a problem ". mysqli_error($con));

        if(mysqli_num_rows($query) > 0)
        {
           $row = mysqli_fetch_assoc($query);
           return $row["dresult"];
        }
        else
        {
          return false;
        }
       
  }



?>