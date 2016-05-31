jQuery(function($) {
$("#btn-confirm").on("click", function() {
    krajeeDialog.confirm("Are you sure you want to proceed?", function (result) {
        if (result) {
            alert('Great! You accepted!');
        } else {
            alert('Oops! You declined!');
        }
    });
});
});
