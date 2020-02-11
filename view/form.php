  <!DOCTYPE html>
<html>
<head>
	<title>Personal Information</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/personal info.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="../assets/js/jquery.js"></script>
</head>


<style type="text/css">
	

	  * input{
    text-align: center;
    border: none;
    border-bottom: 1px solid lightgrey;
  }
  .StudentName input{
    border: none;
    border-bottom: 1px solid lightgrey;
  }
  .ASSR-container input{
    border: none;
    border-bottom: 1px solid lightgrey;
    width: 35%;
  }
  .DPN-container input{
    border: none;
    border-bottom: 1px solid lightgrey;
    width: 25%;
  }
  *.modal-header{

      color: #fff;
  }
    table tr td input{

    border: none;
  }
  table tr th{

      font-size: 80%;
  }
</style>
<body >
	
  <div style="width: 100%; height: 100vh; background-color: rgba(0,0,0, 0.5); position:absolute; top: 0%;" class="form-container">
  	 <?php

    // if ($_GET['btn'] == "Clicked") {

  
     
 
		$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		if (strpos($fullUrl, "pinfo=success")) {
			
			echo "   <div class='container'>
        <!-- The Modal -->
        <div class='modal' id='myModal' style='display: block; width: 100%; overflow-y:  scroll;'>
          <div class='modal-dialog'>
            <div class='modal-content'>
            
              <!-- Modal Header -->

                    <div class='modal-header bg-primary'>
                      <h4 class='modal-title'>FAMILY BACKGROUND</h4>
                      
                    </div>
                    
                    <!-- Modal body -->
                    <div class='modal-body'>
                        
                    
              <form action='../model/familyBackground.php' method='POST'>
                    <div style='float: right; margin-bottom: 2%; width: 95%; ' class='fathersInfo-container'>
                      <label>Father's Name:</label>
                      <input class='Fname' type='text' name='fathers_name' style='width: 68%;'>
                      <label>Occupation:</label>
                      <input class='F-occup' type='text' name='F_occupation' style='width: 73%;'>
                      <label>Ave.Monthly Income:</label>
                      <input class='F-income' type='number' name='F_income' style='width: 59%;'>
                    </div>

                    <div style='float: right; margin-bottom: 2%; width: 95%; ' class='mothersInfo-container'>
                      <label>Mother's Name:</label>
                      <input class='Fname' type='text' name='mothers_name' style='width: 67%;'>
                      <label>Occupation:</label>
                      <input class='F-occup' type='text' name='M_occupation' style='width: 73%;'>
                      <label>Ave.Monthly Income:</label>
                      <input class='F-income' type='number' name='M_income' style='width: 59%;'>
                    </div>
                    <div style='float: right; margin-bottom: 4%; width: 95%;' class='Other-fIncome-container'>
                      <label>Other Sources of Family Income:</label>
                      <input type='text' name='othr_src_fam_income' placeholder='Not Required' style='width: 40%;'>
                      <label>Average Total Monthly Family Income:</label>
                      <input class='total-income' type='number' placeholder='Not Required' name='total_monthly_fam_income' style='width: 32%;'>
                    </div>

                    <p class='text-center'>No. of children/dependent in the family (including yourself)</p>
                    <div style='float: right; margin-bottom: 2%; width: 95%; ' class='table1-container'>
                      <table border='1px solid black' style='width: 95%;' class='text-center'>
                        <tr class='row1'>
                          <td>Name</td>
                          <td>Age</td>
                        </tr>
                        <tr>
                          <td><input class='input-name' type='text' name='Frst_name'></td>
                          <td><input class='input-age' type='text' name='Frst_age'></td>
                        </tr>
                        <tr>
                          <td><input class='input-name' type='text' name='scnd_name'></td>
                          <td><input class='input-age' type='text' name='scnd_age'></td>
                        </tr>
                        <tr>
                          <td><input class='input-name' type='text' name='thrd_name'></td>
                          <td><input class='input-age' type='text' name='thrd_age'></td>
                        </tr>
                        <tr>
                          <td><input class='input-name' type='text' name='frth_name'></td>
                          <td><input class='input-age' type='text' name='frth_age'></td>
                        </tr>
                        <tr>
                          <td><input class='input-name' type='text' name='fth_name'></td>
                          <td><input class='input-age'type='text' name='fth_age'></td>
                        </tr>
                        <tr>

                          <td style='boder:none;'> <input class='input-name' type='hidden' name='studentId' value='".$_GET['id']."'></td>
                          
                        </tr>
                      </table>
                    </div>
                     
                   
                    </div>
                    
                    <!-- Modal footer -->
                    <div class='modal-footer bg-primary'>
                      <button type='submit' name='save-familyBg-btn' class='btn' style='border: 1px solid #fff; color: #ffffff;'>Save & Next</button>
                    </div>
                </form>
                    
          </div>
        </div>
   </div>
</div>";
		}else if(strpos($fullUrl, "family_Background=success")){

          echo " <div class='container'>
       
        <!-- The Modal -->
        <div class='modal' id='myModal' style='display: block; width: 100%;'>
          <div class='modal-dialog'>
            <div class='modal-content'>
            
              <!-- Modal Header -->

                    <div class='modal-header bg-primary'>
                      <h4 class='modal-title'>ACADEMIC BACKGROUND</h4>
                     
                    </div>
                    
                    <!-- Modal body -->
                    <div class='modal-body'>
                        
                    
                      <form action='../model/academicBackground.php' method='POST'>
                            
                          <div style='float: right; margin-bottom: 2%; width: 95%;' class='AcaBack-container'>
                                <label>High School:</label>
                                <input class='highschool' type='text' name='highschool' style='width: 73%; '>
                                <label>Year Graduated:</label>
                                <input class='year-grad' type='number' name='year_graduated' style='width: 67%; '>
                                <label>Gen.ave</label>
                                <input class='gen-ave' type='number' name='genAve' style='width: 80%; '>
                          </div>

                          <p style='margin-top: 1%;' class='text-center'>CHOICE OF SCHOOL/COURSE</p>
                          <p class='text-center'>Name three school(s)/course you wish to enroll of priority.</p><br>
                          
                          <div style='margin-bottom: 2%; width: 95%; ' class='table2-container'>
                            <table border='1px solid black' class='text-center'>
                              <tr>
                                <th>Priority</th>
                                <th>Name of Private Technical Vocational School & Address</th>
                                <th>Course</th>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td><input class='name-school' type='text' name='first_school'></td>
                                <td><input type='text' name='first_course'></td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td><input class='name-school' type='text' name='second_school'></td>
                                <td><input type='text' name='second_course'></td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td><input class='name-school'type='text' name='third_school'></td>
                                <td><input type='text' name='third_course'></td>
                              </tr>
                              <tr>
                                  <td style='boder:none;'> <input class='input-name' type='hidden' name='studentId' value='".$_GET['id']."'></td>
                              </tr>
                            </table>
                        </div>
                 </div>   
                    <!-- Modal footer -->
                  <div class='modal-footer bg-primary'>
                      <button type='submit' name='save-academicBg-btn' class='btn' style='border: 1px solid #fff; color: #ffffff;'>Save & Next</button>
                  </div>
                    
                  
                     </form>
          </div>
        </div>
      </div>
</div>
";
    }elseif(strpos($fullUrl, "academic_Background=success")){

           echo " <div class='container'>
       
        <!-- The Modal -->
        <div class='modal' id='myModal' style='display: block; width: 100%; overflow-y:scroll;'>
          <div class='modal-dialog'>
            <div class='modal-content'>
            
              <!-- Modal Header -->

                    <div class='modal-header bg-primary'>
                      <h4 class='modal-title'>OTHER INFORMATIONS</h4>
                     
                    </div>
                    
                    <!-- Modal body -->
                    <div class='modal-body''>
                        
                    
                      <form action='../model/saveOtherInformation.php' method='POST'>
                            
                          <div style='float: right; margin-bottom: 2%; width: 95%;' class='AcaBack-container'>
                                <p>Do You Have Any Pending:</p>
                                <label>Administrative Case: </label>
                                <select name='AdminCase' class='text-center' style='margin-left:1%; width: 60%; background:none; border:none; border:1px solid lightgrey;'><option>Yes</option><option>No</option></select><br>
                                <label>Criminal Case:</label>
                                 <select name='CrimCase' class='text-center' style='margin-left:1%; width: 70%; background:none; border:none; border:1px solid lightgrey;'><option>Yes</option><option>No</option></select><br><br>
                                <label>If You have Any Give Details Of The Offense</label>
                                <input class='' type='text' name='OtherPendingOffense' style='width: 95%; '><br><br>
                                <label>Have You ever been convicted of any crime or violation of any law?</label><br>
                                 <label>If yes Give Details</label>
                                 <input class='gen-ave' type='text' name='convictedCrime' style='width: 68%; '><br><br>
                                <label>Have You ever been convicted of any administrative offense?</label><br>
                                <label>If yes Give Details</label>
                                 <input class='gen-ave' type='text' name='administrativeOffense' style='width: 68%; '><br><br>
                                 <label>Do you have any pending application for scholarship in the TESDA program</label><br>
                                <label>If yes Give Details</label>
                                 <input class='gen-ave' type='text' name='pendingShcolarship' style='width: 68%; '><br><br>

                                 <input class='input-name' type='hidden' name='studentId' value='".$_GET['id']."' style='border:none;'>
                          </div>

                        
                 </div>   
                    <!-- Modal footer -->
                  <div class='modal-footer bg-primary'>
                      <button type='submit' name='save-otherInfo-btn' class='btn' style='border: 1px solid #fff; color: #ffffff;'>Save & Exit</button>
                  </div>
                    
                  
                     </form>
          </div>
        </div>
      </div>
</div>
";


    }else{

			echo "
	  <div class='container'>

  <!-- The Modal -->
  <div class='modal' id='myModal' style='display: block; overflow-y: scroll;'>
    <div class='modal-dialog'>
      <div class='modal-content'>
      
        <!-- Modal Header -->
        <div class='modal-header bg-primary' >
          <h4 class='modal-title'>PERSONAL INFORMATION</h4>
        <a href='User_Page.php' class='close' data-dismiss='modal' style='color: #fff;' id='close-form'>&times;</a>
        </div>
        

        <!-- Modal body -->
        <div class='modal-body'>

            <form action='../model/Pinfo.php' method='POST' enctype='multipart/form-data'>

              <div class='profile-container' style='border: 1px solid black; width: 25%; height: 110px; overflow: hidden; margin-bottom: 3%; float: right; '>
        
                    <img src='../assets/img/uploads/default_profile_pic.png' style='width: 100%; '>

              </div>

              <div style='float: right; width: auto; margin-top: 15%;'>
                
                <input type='file' name='profile' style='margin-bottom: 3%; border: none; background: none; width: 70%;float: right;'>
              </div>
                

                <div style='width: 95%; float: right;' class='StudentName'>

                      <label>Surname: </label>
                      <input class='Surname' type='text' name='surname'  style='width: 79%;'>
                      
                      <label>First name: </label>
                      <input class='firstname' type='text' name='firstname' style='width: 76%;'>
                      
                       <label>Middle name: </label>
                      <input class='Mname' type='text' name='middlename'  style='width: 73%;'> 
                </div>

                <div style='width: 95%; float: right; margin-bottom: 2%;' class='ASSR-container'>
              
                      <label>Age:</label>
                      <input class='age' type='number' name='age'>&nbsp;   
                      <label>Sex:</label>
                        <select name='sex'  style='width: 41%; background:none; border:none; border-bottom: 1px solid lightgrey;'>
                      		<option>MALE</option>
                      		<option>FEMALE</option>

                      </select>     
                      <label>Status:</label>
                      <input class='status' type='text' name='status'>&nbsp;
                      <label>Religion:</label>
                      <input class='religion' type='text' name='religion' style='width: 31%;'>
                </div>

                <div style='width: 95%; float: right; margin-bottom: 2%;' class='DPN-container' >
                      <label>Date of Birth:</label>
                      <input class='birthdate' type='text' name='bdate' style='width: 27%;'>&nbsp;            

                      <label>Nationality:</label> 
                      <input class='nationality' type='text' name='nationality'>

                      <label>Place of Birth:</label>
                      <input class='place of birth' type='text' name='pbirth' style='width: 72%;'>
              </div>

              <div style='float: right; margin-bottom: 2%; width: 95%;' class='mail-address-container'>
                    <label>Complete mailing address:</label>
                    <input class='mailing-address' type='text' name='address' style='width: 52%;'>
              </div>

              <div style='float: right; margin-bottom: 2%; width: 95%;' class='MZTM-container'> 
                    <label>Municipality:</label>
                    <input class='municipality' type='text' name='municipality' style='width: 72%;'>&nbsp;&nbsp;
                    <label>Zip Code:</label>
                    <input class='zipcode' type='number' name='zipcode' style='width: 32%;'>
                    <label>Tel.No:</label>
                    <input class='tel-no' type='number' name='tel_no' style='width: 32%;'>
                    <label>Mobile No:</label>
                    <input class='mobile' type='number' name='mobile_no' style='width: 32%;'>
                    <label>Daily Fare:</label>
                    <input class='dailyFare' type='number' name='dailyFare' style='width: 25%;'>
            </div>

               
         
        </div>
        
            <!-- Modal footer -->
            <div class='modal-footer bg-primary'>
                   <button type='submit' name='save-Pinfo-btn' class='btn' style='border: 1px solid #fff; color: #ffffff;'>Save & Next</button>
            </div>
         </form>
      </div>
    </div>
  </div>
  
</div>
";
		}
 // }else{

 //    header("Location: User_Page.php");
 // } 

	?> 


</div>




  


</body>
</html>
