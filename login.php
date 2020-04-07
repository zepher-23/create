<?php

// Initialize the session
session_start();
 require_once "config.php";
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: action.php");
    exit;
}
 


 
// Define variables and initialize with empty values
$email = $psw = "";
$email_err = $psw_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter Email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if psw is empty
    if(empty(trim($_POST["psw"]))){
        $psw_err = "Please enter your psw.";
    } else{
        $psw = trim($_POST["psw"]);
    }

    // Validate credentials
    if(empty($email_err) && empty($psw_err)){
        // Prepare a select statement
        $sql = "SELECT id,firstname, email, password FROM userinfo WHERE email = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s",$param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify psw
                if(mysqli_stmt_num_rows($stmt) == 1){          

                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id,$firstname,$email, $password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($psw, $password)){
                                                 
                            // psw is correct, so start a new session
                            session_start();
                            echo "welcome!";
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                        
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                    $_SESSION["username"]=$firstname;        
                            // Redirect user to welcome page
                            header("location: action.php");
                        } else{
                            // Display an error message if psw is not valid
                            echo "The psw you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if email doesn't exist
                    echo "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }


            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}

?>


