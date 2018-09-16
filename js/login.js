var loginForm = document.getElementById('loginForm');

loginForm.addEventListener('submit', function(e) {
    // Flag variables.
    var employeeID = false;
    var employeePassword = false;

    // Check if ID is present.
    if (!$('#employeeID').val()) {
        // Add a line when ID field is empty.
        if($('#employeeID').parent().next('.validation').length == 0) {
            $('#employeeID').parent().after('<div class="validation" style="color: red; margin-bottom: 20px;">Please enter your ID</div>');
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
            $('#employeePassword').parent().after('<div class="validation" style="color: red; margin-bottom: 20px;">Please enter your password</div>');
        }
        e.preventDefault();
        $('#employeePassword').focus();
    }
    else {
        $('#employeePassword').parent().next('.validation').remove();
        employeePassword = true;
    }

    // Call server side code to log the employee in.
    // 'log-employee.php' yet to be created.
    if (employeeID && employeePassword) {
        e.preventDefault();
        $.ajax({
            url: '/log-employee.php',
            type: 'POST',
            dataType: 'json',
            data: {functionname: 'login', arguments: [$('#employeeID').val(), $('#employeePassword').val()]},
        })
        .done(function(obj) {
            res = JSON.parse(obj);

            if (res['response']) {
                alert('Sign in successful!');
                console.log('Ya YEET!');
            }
            else {
                alert('OOPS! Something went wrong!');
                console.log(obj.error);
            }
        })
        .fail(function() {
            alert('error!');
        });

        // $.ajax({
        //     url: 'log-employee.php',
        //     type: 'POST',
        //     dataType: 'json',
        //     data: {functionname: 'login', arguments: [$('#employeeID').val(), $('#employeePassword').val()]},
        //     async: false,
        //     success: function(obj, textstatus) {
        //         if (!('error' in obj)) {
        //             alert('Sign in successful!');
        //             console.log('Ya YEET!')
        //         }
        //         else {
        //             alert('OOPS! Something went wrong!')
        //             console.log(obj.error);
        //         }
        //     }
        // });  
    }
});