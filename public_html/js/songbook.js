$(function() {
    $("body").show();

    $(".delete").click(function (e) {
        e.preventDefault();
        var name = this.name;

        if(confirm("Vil du virkelig slette denne " + name + "?")) {
            $.ajax({
                url: this.href,
                type: 'POST',  // song.destroy
                data: {_method: "delete", _token : $(this).data("token")},
                success: function(result) {
                    window.location.href = "/public/songbook/" + name;
                }
            });
        }
    });

    $(".cancel").click( function() {
       window.history.back();
    });
});