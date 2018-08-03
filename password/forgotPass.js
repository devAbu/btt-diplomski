 $('#alertLog').slideUp();
 //$('#alertLog').removeClass('alert-success').removeClass('alert-danger');
 $('#logButton').click(function () {
     $("#alertLog").removeClass('alert-success').removeClass('alert-danger');
     var emailLog = $('#emailLog').val();
     var passLog = $('#passLog').val();

     function validateEmail($emailLog) {
         var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
         return emailReg.test($emailLog);
     }

     if (emailLog == "") {
         $("#alertLog").addClass('alert-danger');
         $("#alertLog").html("Email field is required!!!");
         $("#alertLog").fadeIn(500).delay(1000).fadeOut(500);
     } else if (!validateEmail(emailLog)) {
         $("#alertLog").addClass('alert-danger');
         $("#alertLog").html('Please enter validated email address.');
         $("#alertLog").slideDown(500).delay(1000).slideUp(500);
     } else if (passLog == "") {
         $("#alertLog").addClass('alert-danger');
         $("#alertLog").html("Please enter your password!!!");
         $("#alertLog").fadeIn(500).delay(1000).fadeOut(500);
     } else {
         $.ajax({
             url: "dbSend/changePass.php?task=login&emailLog=" + emailLog + "&passLog=" + passLog,
             success: function (data) {
                 if (data.indexOf('sent') > -1) {
                     $("#alertLog").addClass('alert-success');
                     $("#alertLog").html('Password changed');
                     $("#alertLog").slideDown(500).delay(1000).slideUp(500);
                     $('#emailLog').val("");
                     $('#passLog').val("");
                 } else {
                     $("#alertLog").addClass('alert-danger');
                     $("#alertLog").html('Email is incorrect');
                     $("#alertLog").slideDown(500).delay(1000).slideUp(500);
                 }
             },
             error: function (data, err) {
                 $("#alertLog").addClass('alert-danger');
                 $("#alertLog").html('Some problem occured. We are sorry.');
                 $("#alertLog").slideDown(500).delay(1000).slideUp(500);
             }
         })
     }
 });

 $('#eyeLog').click(function () {
     /* var elementType = $('#passSign').prev().prop('pass'); */
     var elementType = $('#passLog').attr('type');
     console.log(elementType);
     if (elementType == "text") {
         $('#passLog').attr('type', 'password');
     } else if (elementType == "password") {
         $('#passLog').attr('type', 'text');
     }
 });