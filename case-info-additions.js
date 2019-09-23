//append this snippet to the end of case-info.js

$('[name="update_case"]').click(function(e){
    var idClicked = e.target.id;
    if ($("#prior_problem").val() != $("#problem").val()) {
    $.get('./services/reset_outcomes.php',
        { case_id: $('[name="case_id"]').val()}, function(responseText){
        });
    }
});
