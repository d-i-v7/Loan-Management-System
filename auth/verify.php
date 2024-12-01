<?php
// Calling The Connection File
include("../admin/config/conn.php");
if(isset($_GET['token']))
{
    $token=$_GET['token'];
    $readData=mysqli_query($conn,"SELECT * FROM users WHERE user_token='$token'");
    if($readData && mysqli_num_rows($readData)>0)
    {
        $row=mysqli_fetch_assoc($readData);
        $update=mysqli_query($conn,"UPDATE users SET user_token='verified' WHERE user_token='$token'");
        if($update)
        {
            ?>
<!DOCTYPE html>
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
            <div class='icon'>&#128525;</div>
            <h1>Hey <?php echo $row['user_name'] ; ?> Welcome To L-M-S</h1>
            <p>Thanks For Your Verifying Your Email Please Wat A Few Hours To Accept Your Registration Request!</p>
            <a href='https://wa.link/tr6m60' target= '_blank ' class='verify-btn'>&#128222;&nbsp; Contact Us</a>
            <div class='footer'>
                If You Dont Order This Rquest Don't Verify It. If You Verify This You Can Accept Our Privacy Policy.
            </div>
            <div class='copyright'>
                &copy; 2010 - <?php echo Date("Y"); ?>  Affan Academy All Rights Are Reserved!.
            </div>
        </div>
    </div>
</body>
</html>


<?php
        }
    }
    else
    {
        ?>
<!DOCTYPE html>
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
            background: linear-gradient(90deg,  darkred 0%,  darkred 35%, #BAA0F0 100%);
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
            color:  darkred;
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
            background-color:  darkred;
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
            color:  darkred;
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
            <div class='icon'>&#128546;</div>
            <h1>I Am Sorry</h1>
            <p>Token Is Expaired And New Token Is Required</p>
            <a href='https://wa.link/tr6m60' target= '_blank ' class='verify-btn'>&#128222;&nbsp; Contact Us</a>
          
            <div class='copyright'>
                &copy; 2010 - <?php echo Date("Y"); ?>  Affan Academy All Rights Are Reserved!.
            </div>
        </div>
    </div>
</body>
</html>

        <?php
    }
}
else
{
    header("location:./");
}
?>