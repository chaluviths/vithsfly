<?php session_start(); ?>
<?php include('inc/connection.php'); ?>
<?php
if(isset($_POST['submit'])){

    $acre = mysqli_real_escape_string($connection,$_POST['acre']);

    $uria1= $acre*30;
    $pospate1= $acre*75;
    $potash1= $acre*25;

    $uria2= $acre*30;
    $pospate2= 0;
    $potash2= $acre*25;

    $uria3= $acre*30;
    $pospate3= 0;
    $potash3= $acre*25;

    $sql1= "INSERT INTO fertilizer1(fertilizer_info,amount) VALUES ('Urea (Kg)','$uria1')";
    $sql2= "INSERT INTO fertilizer1(fertilizer_info,amount) VALUES ('Triple Super Pospate (Kg)','$pospate1')";
    $sql3= "INSERT INTO fertilizer1(fertilizer_info,amount) VALUES ('Miuriate of Potash (Kg)','$potash1')";

    $sql4= "INSERT INTO fertilizer2(fertilizer_info2,amount2) VALUES ('Urea (Kg)','$uria2')";
    $sql5= "INSERT INTO fertilizer2(fertilizer_info2,amount2) VALUES ('Triple Super Pospate (Kg)','$pospate2')";
    $sql6= "INSERT INTO fertilizer2(fertilizer_info2,amount2) VALUES ('Miuriate of Potash (Kg)','$potash2')";

    $sql7= "INSERT INTO fertilizer3(fertilizer_info3,amount3) VALUES ('Urea (Kg)','$uria3')";
    $sql8= "INSERT INTO fertilizer3(fertilizer_info3,amount3) VALUES ('Triple Super Pospate (Kg)','$pospate3')";
    $sql9= "INSERT INTO fertilizer3(fertilizer_info3,amount3) VALUES ('Miuriate of Potash (Kg)','$potash3')";
    
    mysqli_query($connection,$sql1);
    mysqli_query($connection,$sql2);
    mysqli_query($connection,$sql3);

    mysqli_query($connection,$sql4);
    mysqli_query($connection,$sql5);
    mysqli_query($connection,$sql6);

    mysqli_query($connection,$sql7);
    mysqli_query($connection,$sql8);
    mysqli_query($connection,$sql9);


    header("location: ../fertilizer/fertilizer_analysing.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <title>Fertilizer Recommendations</title>
    
    <script>
        function validateLand(){
            document.getElementById("crop_error").innerHTML="";
            var output=true;
            if(document.getElementById("crop_acre").value== ""){
                document.getElementById("crop_acre").focus();
                document.getElementById("crop_error").innerHTML="*This field cannot be empty!";
                output=false;
            }
            if(isNaN(document.getElementById("crop_acre").value)){
                document.getElementById("crop_acre").focus();
                document.getElementById("crop_error").innerHTML="*Please input land size in numbers!";
                output=false;
            }
            return output;
        }

    </script>
     <style>
        body {
            background-image: url('new3.jpg');
        }
    </style> 
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img src="home.jpg" width="30" height="30" class="d-inline-block align-top" alt="">&nbsp;Home</a>
        <a class="btn btn-lg btn-success text-white pull-right" href="../signup/signupselect.php" role="button">Register</a>
    </nav>
    <div class="container">
        <br><br>
        <div class="row mt-5">  
            <div class="col-md-12">  
                <p class="display-3 text-light font-weight-bold">Fertilizer Recommendations For Watermelon </p>
            </div>
        </div><br><br>
        <div class="col-md-6 offset-md-7">
        <form action="fertilizerinfo.php" method="post" enctype="multipart/form-data" onsubmit="return validateLand()">
            <div class="row mt-5">
                    <div class="form-group">
                        <label class="bg-danger text-white"> <h5> Please insert acres of your crop (in numbers)</h5> </label>
                        <input type="text" class="form-control" id="crop_acre" name="acre">
                        <p class="text-white" id="crop_error"></p>
                    </div>
            </div>
<!--  row1   -->
            <div class="row">
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-lg btn-block" name="submit" id="">Check Fertilizer</button>
                    </div>
            </div>
<!--  row2   -->
        </form>
        </div>
    </div>
</body>
</html>