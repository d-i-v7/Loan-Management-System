$(document).ready(function () {

    // Reloading The Read Request Function
    ProfileReadRequest();
    // Reading Profile Request
    function ProfileReadRequest()
    {
        $.ajax({
            type: "POST",
            url: "http://localhost/loan/admin/apis/profile_api.php",
            data: {"action":"Myprofile"
                ,  "Myprofile":"uehfuehU88d"
            },
            dataType: "json",
            success: function (response) {
                if(response.status=="success")
                {
                    // console.log(response);
                    // console.log(response.user_name)
                    $(".userName").html(response.user_name);
                    $(".userEmail").html(response.user_email);
                    $(".userRole").html(response.user_role);
                    $(".image-parent").html(`<img src='${response.user_image}' alt='user-image' class='rounded-circle'>`);
                    $(".image-parent2").html(`<img src='${response.user_image}' alt='user-image' class='rounded-circle img-thumbnail'>`);
                }
                else if(response.status=="error")
                {
                    console.log(response.message);
                }
            }
        });
    }


        // Lock Screen Logic Start Here

        $("#lockBtn").click(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "apis/profile_api.php",
                data: {
                    "action":"LockScreen",
                    "screen_status":true
                },
                dataType: "json",
                success: function (response) 
                {
                    if(response.status == "success")
                    {
                        $(".lockScreenP").css("display", "block");
                        let Data=document.querySelector(".GetLscreen").innerHTML;
                        $(".lockScreenP").html(Data);
                    }
                    else
                    {
                        console.log(response.message);
                    }
                }
            });
        });
        // Lock Screen Logic End Here


});
