$(document).ready(function() {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function() {

        if (current > 0) {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);

        }

    });

    $(".previous").click(function() {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({
                    'opacity': opacity
                });
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    $(".buyAdd1").click(function() {
        $('.buyAdd1').removeClass("buyAdd1").addClass("buy1");
    });

    $(".buy2").click(function() {
        $('.buy2').removeClass("buy2").addClass("buyAdd2");
    });

    $(".buyAdd2").click(function() {
        $('.buyAdd2').removeClass("buyAdd2").addClass("buy2");
    });

    $(".buy3").click(function() {
        $('.buy3').removeClass("buy3").addClass("buyAdd3");
    });

    $(".buyAdd3").click(function() {
        $('.buyAdd3').removeClass("buyAdd3").addClass("buy3");
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }

    $(".submit").click(function() {
        return false;
    })

});

function cambiarBasic() {
    var inputNombre = document.getElementById("tipo");
    inputNombre.value = "1";
    document.getElementById("tipoText").style.display = "";
    document.getElementById("tipoText").innerHTML = "";
    document.getElementById("tipoText").innerHTML = "<h3>Tipo Elegido: BASIC</h3>";
    document.getElementById('next').style.display = "";
}

function cambiarPremium() {
    var inputNombre = document.getElementById("tipo");
    inputNombre.value = "2";
    document.getElementById("tipoText").style.display = "";
    document.getElementById("tipoText").innerHTML = "";
    document.getElementById("tipoText").innerHTML = "<h3>Tipo Elegido: PREMIUM</h3>";
    document.getElementById('next').style.display = "";
}

function cambiarPlus() {
    var inputNombre = document.getElementById("tipo");
    inputNombre.value = "3";
    document.getElementById("tipoText").style.display = "";
    document.getElementById("tipoText").innerHTML = "";
    document.getElementById("tipoText").innerHTML = "<h3>Tipo Elegido: PLUS</h3>";
    document.getElementById('next').style.display = "";
}