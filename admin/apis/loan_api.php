<?php
// Calling Auth File
include("../../auth/auth.php");
header('Content-Type: application/json');
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


// Read Function Start Here
function ReadF($conn)
{
    $data=[];
    if(isset($_POST['ReadF'])&& $_POST['ReadF']=="#duifhsi344S")
    {
        $read=mysqli_query($conn,"SELECT * FROM loans WHERE user_id='test_user1'");
        if($read && mysqli_num_rows($read)>0)
        {
          foreach($read as $row)
          {
            $data[]="
            <tr>
    <td>$row[loan_id]</td>
    <td>$row[name]</td>
    <td>$row[phone]</td>
    <td><button class='btn btn-primary'><i class='fas fa-eye'></i></button></td>
    <td><button class='btn btn-dark'><i class='fas fa-edit'></i></button></td>
    <td><button class='btn btn-danger'><i class='fas fa-trash'></i></button></td>
</tr>
            ";
          }
          echo json_encode(['status'=>'success','message'=>$data]);
        }
    }
    else
    {
        echo json_encode(['status' => 'error','The Read Password is invalid! Or Read Is Required!']); 
    }
}   

// Read Function End Here
?>

