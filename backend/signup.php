<?php
session_start();

    //getting form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];  
    $user_name = $_POST['user_name'];  
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];  
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];   
    
   
    //including database connection
    include_once "../helpers/db.php";

    //validations for testing api calls(POSTMAN) 
    if(empty($first_name) || empty($last_name) || empty($user_name) ||empty($email) || empty($contact_number) || empty($address) || empty($password) || empty($confirm_password)  ){
         echo "System Error!";
    }else{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL )){
            echo "System Error!"; 
        }else{
            if(!is_numeric($contact_number)){
                echo "System Error!";
            }else{
                if(strlen($password) < 5){
                    echo "System Error!";
                }else{
                    if($password != $confirm_password){
                        echo "System Error!";
                    }else{
                        
                        $qurey = "SELECT * FROM users WHERE email = '$email' ";
                        $results = mysqli_query($conn, $qurey);
                        $count = mysqli_num_rows($results);
                        if($count > 0){
                             header("Location: ../layouts/welcome.php?signup=unique");
                             exit();
                        }else{
                           
                            $sql = "INSERT INTO users(first_name,last_name,user_name,contact_number,email,address,password) VALUES(?,?,?,?,?,?,?)";
                            $stmt = mysqli_stmt_init($conn);
                            mysqli_stmt_prepare($stmt, $sql);
                            $hashed_password = password_hash($confirm_password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt,"sssisss",$first_name,$last_name,$user_name,$contact_number,$email,$address,$hashed_password);
                            mysqli_stmt_execute($stmt);
                           
                            $_SESSION['user_name'] = $user_name;   
                        
                            header("Location: ../layouts/welcome.php?signup=success");
                            exit();
                        }

                    }
                }
            }
            
        }
    }   

?>