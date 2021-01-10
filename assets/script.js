$(function() {

    $('.ted').click(function() {

        $('.tr_mezmun1').css({
            display: 'block'
        })
        $('.tr_mezmun').css({
            display: 'none'
        })
        $('.register').css({
            display: 'none'
        })
    })
    $('.haq').click(function() {

        $('.tr_mezmun').css({
            display: 'block',

        })

        $('.tr_mezmun1').css({
            display: 'none'
        })
        $('.register').css({
            display: 'none'
        })
    })
    $('.login').click(function() {

        $('.tr_mezmun').css({
            display: 'none',

        })
        $('.tr_mezmun1').css({
            display: 'none'
        })
        $('.register').css({
            display: 'block'
        })
    })
})
$(document).ready(function() {
    $(".training_details li").click(function() {
        $(".training_details li").removeClass("active");
        // $(".training_details li").addClass("active"); // instead of this do the below 
        $(this).addClass("active");
    });
    $(".home").slice(3).hide();

    //portfolio
    var containerEl = document.querySelector('.category');

    var mixer = mixitup(containerEl);
    $(".project-gallery-menu li").click(function() {
        $(".project-gallery-menu li").removeClass("active");
        $(this).addClass("active");
    });
    //təlim
    $(".training li").click(function() {
        $(".training li").removeClass("active");
        $(this).addClass("active");
    });

});
$(function() {
    $(".blogs").slice(0, 3).show();

    $("#loadlees").css({
        display: 'none'
    });
    if ($(".blogs:hidden").length == 0) {
        $("#loadMore").css({
            display: 'none'
        });
    } else {
        $("#loadMore").css({
            display: 'block'
        });
    }
    $("#loadMore").on('click', function(e) {
        e.preventDefault();
        $(".blogs:hidden").slice(0, 3).slideDown("slow");

        if ($(".blogs:hidden").length == 0) {
            $("#loadMore").css({
                display: 'none'
            });
            $("#loadlees").css({
                display: 'block'
            })
        }

    });
    $("#loadlees").on('click', function(e) {
        e.preventDefault();
        $(".blogs").slice(-1).slideUp("slow");
        if ($(".blogs:hidden").length == 0) {
            $("#loadMore").css({
                display: 'block'
            });
            $("#loadlees").css({
                display: 'none'
            });

        }

    });
});


mybutton = document.getElementById("mybtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        mybutton.style.display = "block";

    } else {
        mybutton.style.display = "none";
    }
}
$(document).on('click', '.fa-arrow-circle-up', function() {
    $("html,body").animate({
        scrollTop: 0
    }, 1000);
});

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera


}

$(function() {
    $('#adsoyad ').on('input', function() {
        this.value = this.value.replace(/[^a-zA-Z Öö Ğğ üÜ Əə Iı Çç Şş ;',.  ]/g,
            '');
    });
});
$(document).ready(function() {

    $('#tel').mask("(999) - 999 - 99 - 99", {
        placeholder: ""
    });;

});
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()