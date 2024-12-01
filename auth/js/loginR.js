$(document).ready(function () {
    // Start The Login Request
$(document).on('submit','#LoginForm',function(e)
{
    e.preventDefault();
//    Store The Form Data
let formData=new FormData(this);
// Action
formData.append('action','LoginF');
// Login F Password
formData.append('LoginF','JIDF3SSI0@');
// Changing The SignUp Button Into Loading Gif
$("#BtnLog").html("<img width='30px' src='../admin/assets/images/loading.gif'>")
setTimeout(function(){
    $.ajax({
        type: "POST",
        url: "apis/auth_api.php",
        processData:false,
        contentType:false,
        data: formData,
        dataType: "json",
        success: function (response) 
        {
            if(response.status=="success")
            {

                window.location.href=response.last_link;
                
                $("#BtnLog").html('<i class="mdi mdi-login"></i> Log In Now');
                // alert(response.last_link);
            }
            else if(response.status=="error")
            {
                $("#alert").show();
                $("#alert").removeClass("alert-success").addClass("alert-danger");
                $("#alert").html(response.message);
                $("#BtnLog").html('<i class="mdi mdi-login"></i> Log In Now')
            }
        }
    });
},500)
})
// End The Login Request
});