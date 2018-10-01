var loginForm = document.getElementById('loginForm');

loginForm.addEventListener('submit', function(e) {
    // Flag variables.
    var employeeID = false;
    var employeePassword = false;

    // Check if ID is present.
    if (!$('#employeeID').val()) {
        // Add a line when ID field is empty.
        if($('#employeeID').parent().next('.validation').length == 0) {
            $('#employeeID').parent().after('<div class="validation" style="color: red; margin-bottom: 20px;">Please enter your ID.</div>');
        }
        e.preventDefault();  // Prevent POST to server.
        // Focus on ID field if ID is not present.
        $('#employeeID').focus();
    }
    else {
        // If ID is added, then remove the warning line.
        $('#employeeID').parent().next('.validation').remove();
        employeeID = true;
    }

    // Perform the same checks for the password field.
    if (!$('#employeePassword').val()) {
        if($('#employeePassword').parent().next('.validation').length == 0) {
            $('#employeePassword').parent().after('<div class="validation" style="color: red; margin-bottom: 20px;">Please enter your password.</div>');
        }
        e.preventDefault();
        $('#employeePassword').focus();
    }
    else {
        $('#employeePassword').parent().next('.validation').remove();
        employeePassword = true;
    }

    // Call server side code to log the employee in.
    if (employeeID && employeePassword) {
        e.preventDefault();
        $.ajax({
            url: 'log-employee.php',
            type: 'POST',
            dataType: 'json',
            data: {functionname: 'login', arguments: [$('#employeeID').val(), $('#employeePassword').val()]},
        })
        .done(function(obj) {
            if (!('error' in obj)) {
                if (obj.response == 'success') {
                    // console.log(obj.response);
                    alert('Sign in successful! Redirecting in 2s..');
                    window.setTimeout(function() {
                        window.location.href = '../index.php';
                    }, 2000);
                }
                if (obj.response == 'failure') {
                    alert('Entered ID or password is incorrect!');
                }
                else if (obj.response == 'first_redirect') {
                    window.location.href = 'first-signup.php?type=first&id=' + $('#employeeID').val();
                }
                else if (obj.response == 'No rows returned') {
                    $('#employeeID').parent().after('<div class="validation" style="color: red; margin-bottom: 20px;">Entered ID does not exist.</div>');
                }
                else {
                    console.log(obj.response, obj.error);
                }
            }
            else {
                console.log(obj.error);
            }
        })
        .fail(function(obj) {
            alert('OOPS! Looks like something went wrong! Please try again..');
            console.log(obj.error, obj.response);
        }); 
    }
});