<?php 
    session_start();

    if(isset($_POST['Rsubmit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $conPass = $_POST['confirmPass'];
        if (empty($_POST['gender'])) {
            echo "Gender is not selected.". "<br>";
            $gender=null;
        }else{
            $gender = $_POST['gender'];
        }

        $date = $_POST['dob'];

        if($name != null && $email != null && $username != null && $password != null && $conPass != null && $date != null && $gender !=null){
            if ($password == $conPass)
             {
                $user = "\n".$name."|".$username."|".$email."|".$password."|".$gender."|".$date;
                $file = fopen('RegData.txt', 'a');//file a ,r,w;
                fwrite($file, $user);
                fclose($file);
                header('location: rlogin.php');
            }else{
                echo "Please check your password again";
            }

        }else{
            echo "Please fill up all the information!";
        }
        

    }

    else{
        echo "Invalid";
    }