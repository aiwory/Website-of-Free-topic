/**
 * Created by Aigars on 15.06.2016.
 */
$("button[id$=user]").each(function() {
    $(this).click(function(){
        var modalButtonId = $(this).attr("id");

        var modalUsername;
        var modalEmail;
        var modalPwd;
        var modalFname;
        var modalLname;
        var modalSex;
        //alert(modalButtonId);
        if($(this).attr("id")=="reguser"){
            modalUsername=$("#reg-usr").val();
            modalEmail=$("#reg-email").val();
            modalPwd=$("#reg-pwd").val();
            modalFname=$("#reg-name").val();
            modalLname=$("#reg-surname").val();
            modalSex=$("input[name=reg-sex]:checked", "#register-form").val();

            $.ajax({
                type: "POST",
                url: "./class/Modal_Handler.php",
                data: {modalButtonId: modalButtonId,
                    modalUsername: modalUsername,
                    modalEmail: modalEmail,
                    modalPwd: modalPwd,
                    modalFname: modalFname,
                    modalLname: modalLname,
                    modalSex: modalSex},
                success:function(data) {
                    //location.reload();
                    alert("Reģistrācija veiksmīga!");
                }
            });
        }
        else if ($(this).attr("id") == "loguser") {
            modalEmail = $("#log-email").val();
            modalPwd = $("#log-pwd").val();
            $.ajax({
                type: "POST",
                url: "./class/Modal_Handler.php",
                data: {modalButtonId: modalButtonId, modalEmail: modalEmail, modalPwd: modalPwd},
                success: function (data) {
                    location.reload();
                    //alert("Pieslēgšanās veiksmīga!");
                }
            });
        }

    });
});

$("li[id=exit-button]").click(function(){
    var modalButtonId=$(this).attr('id');


    $.ajax({
        type: "POST",
        url: "./class/Modal_Handler.php",
        data: {modalButtonId: modalButtonId},
        success:function(data) {
            location.reload();

        }
    });




});
