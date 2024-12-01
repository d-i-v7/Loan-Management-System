$(document).ready(function () {
// Start The Registration Request
    $(document).on("submit","#RegForm",function(e)
    {
        e.preventDefault();
        // Storing The Form Data
        let formData=new FormData(this);
        // Telling The Action
        formData.append("action","RegF");
        // RegF Password
        formData.append("RegF","Shdfie32!");
        // Changing The SignUp Button Into Loading Gif
        $("#BtnSave").html("<img width='30px' src='../admin/assets/images/loading.gif'>")
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
                        $("#alert").show();
                        $("#alert").removeClass("alert-danger").addClass("alert-success");
                        $("#alert").html(response.message);
                        $("#BtnSave").html('<i class="mdi mdi-account-circle"></i> Sign Up')
                    }
                    else if(response.status=="error")
                    {
                        $("#alert").show();
                        $("#alert").removeClass("alert-success").addClass("alert-danger");
                        $("#alert").html(response.message);
                        $("#BtnSave").html('<i class="mdi mdi-account-circle"></i> Sign Up')
                    }
                }
            });
        },500)
    }) ;
// End The Registration Request 

});
