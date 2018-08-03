$('#alertFeedback').slideUp();
$('#feedbackButton').click(function () {
    $('#alertFeedback').removeClass('alert-danger').removeClass('alert-success');
    var feedback = $('#feedback').val();
    var session = $('#session').val();
    if (feedback == "") {
        $("#alertFeedback").addClass('alert-danger');
        $("#alertFeedback").html("Please write your opinion!!!");
        $("#alertFeedback").fadeIn(500).delay(1000).fadeOut(500);
    } else {
        $.ajax({
            url: "dbSend/feedbackSend?task=feedback&feedback=" + feedback + "&session=" + session,
            success: function (data) {
                if (data == 'sent') {
                    $("#alertFeedback").addClass('alert-success');
                    $("#alertFeedback").html('Thanks for your feedback.');
                    $("#alertFeedback").slideDown(500).delay(1000).slideUp(500);
                    $('#feedback').val("");
                } else {
                    $("#alertFeedback").addClass('alert-danger');
                    $("#alertFeedback").html('There is some problem. Please try later');
                    $("#alertFeedback").slideDown(500).delay(1000).slideUp(500);
                }
            },
            error: function (data, err) {
                $("#alertFeedback").addClass('alert-danger');
                $("#alertFeedback").html('Some problem occured. We are sorry.');
                $("#alertFeedback").slideDown(500).delay(1000).slideUp(500);
            }
        });

    }
});