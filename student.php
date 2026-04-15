<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Marksheet</title>
</head>
<body>
    <form action="" method="post">
        <!-- <p>Enroll No <input type="text" name="enrno"></p> -->
        <p>Student Name <input type="text" name="sname"></p>
        <p>Hindi <input type="text" name="hindi"></p>
        <p>English <input type="text" name="english"></p>
        <p>Mathmetics <input type="text" name="maths"></p>
        <p>Science <input type="text" name="science"></p>
        <p>Economics <input type="text" name="eco"></p>
        <p><input type="submit" name="submit" value="Submit"></p>
    </form>

    <?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="school_db";

    $conn=mysqli_connect($host, $user, $pass, $db);
    if($conn){
        if(isset($_POST['submit'])){
            // $enr=$_POST['enrno'];
            $sname=$_POST['sname'];
            $hindi=$_POST['hindi'];
            $eng=$_POST['english'];
            $maths=$_POST['maths'];
            $sci=$_POST['science'];
            $eco=$_POST['eco'];

            $query="insert into students (name, hindi, eng, maths, science, eco) values('$sname', '$hindi','$eng','$maths','$sci','$eco')";

           if(mysqli_query($conn, $query)){
            echo"Data Pushed Successfully";
           }
           else{echo "Error!";}


        }
        else{
        echo"No Submit Button!";
    }
    }
    else{
        echo"Connection Failed!";
    }

    ?>

</body>
</html>