<?php
header('Content-Type: application/json');
// Calling The Connecton File
include("../../admin/config/conn.php");
// Starting The Session
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';
// Send Email Function Start Here
function SEND_EMAIL($userName,$token,$email)
{
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'affanacademy0@gmail.com';                     //SMTP username
    $mail->Password   = 'momr fdbs ihez upme';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('affanacademy0@gmail.com', 'Affan Academy');
    $mail->addAddress($email, $userName);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email Verification From Affan Academy!';
    $mail->Body    = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Email Verification</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg, #6D31E8 0%, #6D31E8 35%, #BAA0F0 100%);
        }
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box {
            width: 90vh;
            max-width: 500px;
            padding: 20px;
            border-radius: 20px;
            background-color: #f5f5f5;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.28);
            text-align: center;
        }
        .box h1 {
            color: #6D31E8;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }
        .box p {
            color: #333;
            font-size: 16px;
            margin-bottom: 30px;
            font-weight: 400;
        }
        .box .verify-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6D31E8;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .box .verify-btn:hover {
            background-color: #BAA0F0;
        }
        .box .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
            font-weight: 400;
        }
        .box .icon {
            font-size: 50px;
            color: #6D31E8;
            margin-bottom: 20px;
        }
        .box .copyright {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
            font-weight: 400;
        }
    </style>
</head>
<body>
    <div class='container'>
        <div class='box'>
            <div class='icon'>&#128276;</div>
            <h1>Verify Your Email</h1>
            <p>Please Verify Your Email To Complate Your Registration!</p>
            <a href='http://localhost/loan/auth/verify.php?token=$token' class='verify-btn'>&#128275;&nbsp; Verify Now</a>
            <div class='footer'>
                If You Dont Order This Rquest Don't Verify It. If You Verify This You Can Accept Our Privacy Policy.
            </div>
            <div class='copyright'>
                &copy; 2010 - ".Date("Y")."  Affan Academy All Rights Are Reserved!.
            </div>
        </div>
    </div>
</body>
</html>
";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo json_encode([
        'status'=>'success','message'=>'Successfully Registered To Complate Your Registration Please Verify Your Email We Send Email Into This ('.$email.')'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status'=>'error',"message"=> "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"
    ]);
}
}
// Send Email Function End Here

// Action Start here
if(isset($_POST['action']))
{
    $action=$_POST['action'];
    if(function_exists($action))
    {
        $action($conn);
    }
    else
    {
        echo json_encode(['status' => 'error','message'=>'Action Is Not Valid! And Action is Required!']);
    }
}
else
{
    echo json_encode(['status' => 'error',"message"=>'Action is Required!']); 
}
// Action End here

// Registeration Function Start Here
function RegF($conn)
{
    if(isset($_POST['RegF'])&& $_POST['RegF']=="Shdfie32!")
{
// Extract All Post Methods
extract($_POST);
// Form Validation
if($userName == Null || $email == Null || $password == Null || $cpassword == Null)
{
    echo json_encode(['status' => 'error',"message"=>'All Feilds Are Required!']); 
}
else if(!empty($Accept))
{
    $read_old=mysqli_query($conn , "SELECT * FROM users WHERE user_email = '$email' AND user_token = 'verified'");
    if($read_old && mysqli_num_rows($read_old)>0)
    {
        echo json_encode(['status' => 'error',"message"=>"($email)-Already Taken!"]);   
    }
    else
    {
    $read_old_2=mysqli_query($conn,"SELECT * FROM users WHERE user_email='$email' AND user_token!='verified'");
    if($read_old_2 && mysqli_num_rows($read_old_2)>0)
        {
            $row_old_2=mysqli_fetch_assoc($read_old_2);
            echo json_encode(['status' => 'error',"message"=>"Hey $row_old_2[user_name] You Are All Ready Registred Please Verify Your Email To Complate Your Registration Process!"]);   
        }
        else if($password == $cpassword)
        {
            // Gen User Id
            $read_user=mysqli_query($conn,"SELECT user_id FROM users ORDER BY user_id DESC  LIMIT 1 ");
            if($read_user && mysqli_num_rows($read_user)>0)
            {
                foreach($read_user as $row_user)
                {
          
                }
                $row_user['user_id'];
                $CurrenUserId=++$row_user['user_id'];
            }
            else
            {
                echo json_encode(['status' => 'error',"message"=>"User Id Is Not Generated"]);    
            }
            $token=md5(rand());
            $hashPassword=password_hash($password,PASSWORD_DEFAULT);
            // Insert Query
            $insert=mysqli_query($conn,"INSERT INTO users (user_id,user_name,user_email,user_password,user_token,user_image)  VALUES('$CurrenUserId','$userName','$email','$hashPassword','$token','assets/images/user.png')");
            if($insert)
            {
                SEND_EMAIL($userName,$token,$email);
            }
            else
            {
                echo json_encode(['status' => 'error',"message"=>"Something Went Wrong When You Making Insert!"]);    
            }
        }
        else
        {
            echo json_encode(['status' => 'error',"message"=>"Password Are Not Match!"]);    
        }
    }
    
}
else
{
    echo json_encode(['status' => 'error',"message"=>'Please Accept Our Terms and Conditions']); 
}
}
else
{
    echo json_encode( ['status' => 'error',"message"=>'Reg Is Required Or Need Reg Password!']); 
}
}
// Registeration Function End Here


// Login Fucntion Start Here
function LoginF($conn)
{
    if(isset($_POST['LoginF'])&& $_POST['LoginF']=="JIDF3SSI0@")
    {
        // Extracting The Post  Method
        extract($_POST);
        if($email == NULL || $password == NULL)
        {
            echo json_encode(value: ['status' => 'error',"message"=>'All Fields Are Required!']); 
        }
        else
        {
            $read=mysqli_query($conn,"SELECT * FROM users WHERE user_email='$email'" );
            if($read && mysqli_num_rows($read)>0)
            {
                $read_password=mysqli_query($conn,"SELECT * FROM users WHERE user_password='$password'" );
            if($read_password && mysqli_num_rows($read_password)>0)
            {
                $row=mysqli_fetch_assoc($read);
                $OldPassword=$row['user_password'];
                if(password_verify($password,$OldPassword))
                {
                  if($row['user_token']=="verified")
                  {
                if(isset($_POST['remember']))
                {
                    $_SESSION['user_id']=$row['user_id'];
                    $_SESSION['activeUser']=true;
                    setcookie("email",$email,time()+60*60*24*7,"/");
                    setcookie("password",$OldPassword,time()+60*60*24*7,"/");
                    if(isset($_POST['last_link']))
                    {
                        $last_link=urldecode($_POST['last_link']);
                    echo json_encode( ['status' =>'success','last_link'=>"$last_link"]);
                }
                else
                {
                    echo json_encode( ['status' =>'success','last_link'=>"../admin"]);
                }
            
            }
                else
                {
                    $_SESSION['user_id']=$row['user_id'];
                    $_SESSION['activeUser']=true;
                    setcookie("email","",time()-60*60*24*7,"/");
                    setcookie("password","",time()-60*60*24*7,"/"); 
                    if(isset($_POST['last_link']))
                    {
                        $last_link=urldecode($_POST['last_link']);
                        // echo "$last_link";
                    echo json_encode( ['status' =>'success','last_link'=>"$last_link"]);
                }
                else
                {
                    echo json_encode( ['status' =>'success','last_link'=>"../admin"]);
                }
                }
            }
            else
            {
                echo json_encode(['status' => 'error',"message"=>'You Did Not Login Your Account B/c You Account Is Not Verified Please']); 
            }
           
            }
            else
            {
                echo json_encode(value: ['status' => 'error',"message"=>'Password Is Not Verified!']); 
            }
            }
            else
            {
                echo json_encode(value: ['status' => 'error',"message"=>'The Password Is Invalid! Please Try Again Or <a href="forget.php">Reset</a> Your Password']); 
            }
            }
            else
            {
                echo json_encode(value: ['status' => 'error',"message"=>'The Email Is Invalid! Please Try Again Or <a href="register.php">SigUp</a> New Account!']); 
            }
        }
    }
    else
    {
        echo json_encode(['status' => 'error',"message"=>'LoginF Is Required Or Need LoginF Password!']); 
    }
}
// Login Fucntion End Here
?>
