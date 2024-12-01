<?php 
header('Content-Type: application/json');
// session Start
// session_start();
// Calling Auth File
include("../../auth/auth.php");
// Calling The Connecton File
include("../config/conn.php");
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
    echo json_encode(['status' => 'error','Action is Required!']); 
}
// Action End here


// Profile Reading Function
function Myprofile($conn)
{
    if(isset($_POST['Myprofile'])&&$_POST['Myprofile']=="uehfuehU88d")
    {
$readUserData=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$_SESSION[user_id]'");
if($readUserData && mysqli_num_rows($readUserData)>0)
{
    $rowofUserData=mysqli_fetch_assoc($readUserData);
     echo json_encode(['status'=>'success',
     'user_id'=>$rowofUserData['user_id'],
     'user_name'=>$rowofUserData['user_name'],
     'user_email'=>$rowofUserData['user_email'],
     'user_password'=>$rowofUserData['user_password'],
     'user_image'=>$rowofUserData['user_image'],
     'user_role'=>$rowofUserData['user_role']
   ]);
}
}
else
{
    echo json_encode(['status'=>'error','message'=>'Myprofile Password Is Invalid Or Rquired!']);
}
}


// Lock Screen Function
function LockScreen($conn)
{
    $userId=$_SESSION['user_id'];
    if(isset($_POST['screen_status']))
    {
        $screen_status=$_POST['screen_status'];
        $updateStatus = mysqli_query($conn , "UPDATE users SET screen_status = $screen_status WHERE user_id='$userId'");
        if($updateStatus)
        {
            echo json_encode(['status'=>'success','message'=>'success']);
        }
        else
        {
            echo json_encode(['status'=>'error','message'=>'Error! From Lock Screen!']);
        }
    }
}
?>