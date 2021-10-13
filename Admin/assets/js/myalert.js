window.setTimeout(function() {
    $(".alert-danger").fadeOut(4000, function() {
        $(this).remove();
    });
    
    $(".alert-success").fadeOut(4000, function() {
        $(this).remove();
    });

});