passwordForm = document.getElementById('passwordForm');

passwordForm.addEventListener('submit', function(e) {
    // Flag variables.
    var passwordField = false;
    var confPasswordField = false;

    let urlParams = new URLSearchParams(window.location.search);
    let emp_id = urlParams.get('id');

    // Check if ID is present.
    if (!$('#password').val()) {
        // Add a line when ID field is empty.
        if($('#password').parent().next('.validation').length == 0) {
            $('#password').parent().after('<div class="validation" style="color: red; margin-bottom: 20px;">Please enter your password.</div>');
        }
        e.preventDefault();  // Prevent POST to server.
        // Focus on ID field if ID is not present.
        $('#password').focus();
    }
    else {
        // If ID is added, then remove the warning line.
        $('#password').parent().next('.validation').remove();
        passwordField = true;
    }

    // Perform the same checks for the password field.
    if (!$('#confirmPassword').val()) {
        if($('#confirmPassword').parent().next('.validation').length == 0) {
            $('#confirmPassword').parent().after('<div class="validation" style="color: red; margin-bottom: 20px;">Please confirm your password.</div>');
        }
        e.preventDefault();
        $('#confirmPassword').focus();
    }
    else {
        $('#confirmPassword').parent().next('.validation').remove();
        confPasswordField = true;
    }

    if ((passwordField && confPasswordField) && ($('#password').val() == $('#confirmPassword').val())) {
        e.preventDefault();

        $.ajax({
            url: 'log-employee.php?id=' + emp_id,
            type: 'POST',
            dataType: 'json',
            data: {functionname: 'set-password', arguments: [$('#employeeID').val(), $('#password').val()]},
        })
        .done(function(obj) {
            if (!('error' in obj)) {
                if (obj.response == 'success') {
                    console.log(obj.response, obj.emp_id);
                    alert('Sign in successful! Redirecting in 2s..');
                    window.setTimeout(function() {
                        window.location.href = '../index.php?login=success';
                    }, 2000);
                }
            }
            else {
                console.log(obj.error);
            }
        })
        .fail(function(obj) {
            console.log(obj.response, obj.error);
            alert('OOPS! Looks like something went wrong! Please try again..');

        });   
    }
    else {
        alert("The passwords entered do not match!");
    }
});