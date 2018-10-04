// Calculate the age of the customer.

$(document).ready(function(){
    $('#customerDOB').change(function() {
        var dob = $("#customerDOB").val();

        dob = new Date(dob);
        var today = new Date();

        var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
        console.log(age, typeof age);

        $('#customerAge').attr('value', age);
    });

    $('#submitButton').click(function() {
        var image_name = $('#customerPhoto').val();

        if (image_name == '') {
            alert("Please select an image");
            return false;
        }
        else {
            var extension = $('#customerPhoto').val().split('.').pop().toLowerCase();

            if ($.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                alert('Invalid Image File.');
                $('#customerPhoto').val('');
                return false;
            }
        }
    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#customerPhotoDisp')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
