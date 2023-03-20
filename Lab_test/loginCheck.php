<?php 
    session_start();

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username != null && $password != null){

            $file = fopen('RegData.txt', 'r');
            while(!feof($file)){

                $user = fgets($file);
                $userArry = explode('|', $user);

                if(trim($userArry[1]) == $username && trim($userArry[3]) == $password){
                    $_SESSION['status'] = true;
                    $_SESSION['current_user'] = $userArry;
                    setcookie('status', trim($userArry[1]), time()+2000, '/');

                    header('location:UserDashboard.php ');
                }
            }

            echo "INCORRECT!Check your username or password again";

        }else{
            echo "Please fill up all the informations";
        }
    }
?>