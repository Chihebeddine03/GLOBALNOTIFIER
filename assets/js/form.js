$(document).ready(function(){
    $("form").submit(function(event){
        // Stop form from submitting normally
        event.preventDefault();
        
        /* Serialize the submitted form control values to be sent to the web server with the request */
        var formValues = $(this).serialize();
        
        // Send the form data using post
        $.post("sendmail.php", formValues, function(data){
            // Display the returned data in browser
            $("#result").html(data);
        });
    });
});
