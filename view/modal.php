<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

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
  .modal-header{

    color: #ffffff;
  }
  table tr td input{

    border: none;
  }
  table tr th{

      font-size: 80%;
  }

</style>
<body>

  <div class='container'>
        <!-- The Modal -->
        <div class='modal' id='myModal' style='display: block; width: 100%; overflow-y:  scroll;'>
          <div class='modal-dialog'>
            <div class='modal-content'>
            
              <!-- Modal Header -->

                    <div class='modal-header bg-primary'>
                      <h4 class='modal-title'>FAMILY BACKGROUND</h4>
                      <button type='button' class='close' data-dismiss='modal' style='color: #fff;'>&times;</button>
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
</div>
</body>
</html>

/*  
  $sql = "SELECT * FROM micp_attendace_table WHERE aid=2";
  $result = mysqli_query($conn,$sql);
  $ResultCheck = mysqli_num_rows($result);

  if ($ResultCheck > 0) {
      if ($row = mysqli_fetch_assoc($result)) {

          if ($row['Present'] != null) {
            echo "AlreadyTimeIn";
          }else{

            $sql = "INSERT INTO micp_attendace_table(Present,year,month,day,StudentId) VALUES('p','2020','feb','05','1001')";
            mysqli_query($conn,$sql);

            echo "df";
          }
      }
  }else{

    echo "hehehehe";
  }*/