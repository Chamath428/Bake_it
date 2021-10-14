function nameFunction() {
        $("#firstname").prop("readonly", false);
        $("#lastname").prop("readonly", false);
}

function addressFunction() {
        $("#address1").prop("readonly", false);
        $("#address2").prop("readonly", false);
        $("#address3").prop("readonly", false);
}

function phoneFunction() {
        $("#phonenumber").prop("readonly", false);
}

$(document).ready(function() {
     $(':input[type="submit"]').prop('disabled', true);
     $('input[type="text"]').keyup(function() {
        if($(this).val() != '') {
           $(':input[type="submit"]').prop('disabled', false);
        }
     });
 });

 $(document).ready(function() {
     $(':input[type="submit"]').prop('disabled', true);
     $('input[type="password"]').keyup(function() {
        if($(this).val() != '') {
           $(':input[type="submit"]').prop('disabled', false);
        }
     });
 });