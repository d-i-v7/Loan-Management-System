$(document).ready(function () 
{
    // Loans Read Request Start here
    // Reload The Fucntion
    readRequest();
    function readRequest()
    {
        $.ajax({
            type: "POST",
            url: "http://localhost/loan/admin/apis/loan_api.php",
            data:{
                "action":"ReadF",
                "ReadF":"#duifhsi344S"
            },
            dataType: "json",
            success: function (response) {
                console.log(response);
                $("#loansListTbody").html(response.message);
            },
            error:function (error)
            {
                console.log(error);
            }
        });
    }
    // Loans Read Request End here
});