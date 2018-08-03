$('#alert').slideUp();
$('#signButton').click(function () {
    $("#alert").removeClass('alert-success').removeClass('alert-danger');
    var firstSign = $('#firstSign').val();
    var lastSign = $('#lastSign').val();
    var emailSign = $('#emailSign').val();
    var passSign = $('#passSign').val();

    function validateEmail($emailSign) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test($emailSign);
    }

    if (firstSign == "") {
        $("#alert").addClass('alert-danger');
        $("#alert").html("Your first name is required!!!");
        $("#alert").slideDown(500).delay(1000).slideUp(500);
    } else if (lastSign == "") {
        $("#alert").addClass('alert-danger');
        $("#alert").html("Your last name is required!!!");
        $("#alert").fadeIn(500).delay(1000).fadeOut(500);
    } else if (emailSign == "") {
        $("#alert").addClass('alert-danger');
        $("#alert").html("Email field is required!!!");
        $("#alert").fadeIn(500).delay(1000).fadeOut(500);
    } else if (!validateEmail(emailSign)) {
        $("#alert").addClass('alert-danger');
        $("#alert").html('Please enter validated email address.');
        $("#alert").slideDown(500).delay(1000).slideUp(500);
    } else if (passSign == "") {
        $("#alert").addClass('alert-danger');
        $("#alert").html("Password is required!!!");
        $("#alert").fadeIn(500).delay(1000).fadeOut(500);
    } else {
        $.ajax({
            url: "dbSend/indexSent.php?task=register&firstSign=" + firstSign + "&lastSign=" + lastSign + "&emailSign=" + emailSign + "&passSign=" + passSign,
            success: function (data) {
                if (data.indexOf('sent') > -1) {
                    $("#alert").addClass('alert-success');
                    $("#alert").html('Your account created successfully. Now you can login with your information');
                    $("#alert").slideDown(500).delay(2000).slideUp(500);
                    $('#firstSign').val("");
                    $('#lastSign').val("");
                    $('#emailSign').val("");
                    $('#passSign').val("");
                } else {
                    $("#alert").addClass('alert-danger');
                    $("#alert").html('The email is already exists.');
                    $("#alert").slideDown(500).delay(1000).slideUp(500);
                }
            },
            error: function (data, err) {
                $("#alert").addClass('alert-danger');
                $("#alert").html('Some problem occured. We are sorry.');
                $("#alert").slideDown(500).delay(1000).slideUp(500);
            }
        })
    }
});
$('#eye').click(function () {
    /* var elementType = $('#passSign').prev().prop('pass'); */
    var elementType = $('#passSign').attr('type');
    console.log(elementType);
    if (elementType == "text") {
        $('#passSign').attr('type', 'password');
    } else if (elementType == "password") {
        $('#passSign').attr('type', 'text');
    }
});