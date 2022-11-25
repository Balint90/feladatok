$(function() {
    $('#fibSubmit').on('click', function(e) { 
        e.preventDefault();
        $val = $("#fibNum").val();
        $.post("fibonacci.php", { fib_n: $val})
        .done(function( msg ) {
            // alert( msg );
            $('#fibonacciResult').html(msg);
        });
    })
    $('#HOTSubmit').on('click', function(e) { 
        e.preventDefault();
        $val = $("#HOTNum").val();
        $.post("heads_or_tails.php", { HOT_n: $val})
        .done(function( msg ) {
            // alert( msg );
            $('#headandtailsResult').html(msg);
        });
    })
});