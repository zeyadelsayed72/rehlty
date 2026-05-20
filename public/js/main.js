//intialization plugins
$(document).ready(function () {
    //loading
    $(".loading-page").fadeOut();
    // filter_butn
    $(`.filter_butn`).click(function() {
        $(this).toggleClass(`active`);
        $('.filter_inner').toggleClass(`active`);
    });
    //fav butn 
    // $(`.tour_card .fav_butn`).click(function() {
    //     $(this).toggleClass(`active`);
    // });
    
    //animation icon toggler of navbar
    $(`.navbar-toggler`).click(function() {
        $(`.navbar-toggler`).toggleClass(`active`);
    });
    //Wow intit
    wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 200,
        mobile: true,
        live: false
    });
    wow.init();
    //fancybox
    $("[data-fancybox]").fancybox({
        selector: '[data-fancybox="images"]',
        // loop: true
    });
    //tooltip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    /*Loading page */
    // $(window).on("load", function(){
    //     $(".loading-page")
    //     .fadeOut(2000 , function(){
    //         // $("body").css("overflow" , "none");
    //         $("this").fadeOut(1500 , function(){
    //             $(this).remove();
    //         });
    //     });
    // }); 
    

});


// ------------ Upload image ----------
$(document).ready(function() {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
});

//Swiper 
$(document).ready(function() {
    var swiper = new Swiper('.header .header-swiper', {
        // loop: true,
        speed: 900,
        slidesPerView: 1,
        spaceBetween: 15,
        effect: 'fade',
        // autoplay: {
        //     delay: 2500,
        // },
        navigation: {
            nextEl: '.header .swiper-button-next',
            prevEl: '.header .swiper-button-prev',
        },
        pagination: {
            el: '.header .swiper-pagination',
            clickable: true
        },
    });
});

$(document).ready(function() {
    var swiper = new Swiper('.tours-swiper', {
        // loop: true,
        speed: 900,
        slidesPerView: 1,
        spaceBetween: 20,
        // autoplay: {
        //     delay: 2500,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
});

$(document).ready(function() {
    var swiper = new Swiper('.categ-pg-swiper', {
        // loop: true,
        speed: 900,
        slidesPerView: 1,
        spaceBetween: 20,
        // autoplay: {
        //     delay: 2500,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 5,
            },
        }
    });
});

$(document).ready(function() {
    var swiper = new Swiper('.banks-swiper', {
        // loop: true,
        speed: 900,
        slidesPerView: 1,
        spaceBetween: 20,
        // autoplay: {
        //     delay: 2500,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
});


$(document).ready(function() {
    var swiper = new Swiper('.categ2-swiper', {
        // loop: true,
        speed: 900,
        slidesPerView: 1,
        spaceBetween: 20,
        // autoplay: {
        //     delay: 2500,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        }
    });
});

$(document).ready(function() {
    var swiper = new Swiper('.nautical-swiper', {
        // loop: true,
        speed: 900,
        slidesPerView: 1,
        spaceBetween: 20,
        // autoplay: {
        //     delay: 2500,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        }
    });
});

$(document).ready(function() {
    var swiper = new Swiper('.boats-swiper', {
        // loop: true,
        speed: 900,
        slidesPerView: 1,
        spaceBetween: 20,
        // autoplay: {
        //     delay: 2500,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
        }
    });
});


$(document).ready(function() {
    var swiper = new Swiper('.feedback-swiper', {
        // loop: true,
        speed: 900,
        slidesPerView: 1,
        spaceBetween: 20,
        // autoplay: {
        //     delay: 2500,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
            },
        }
    });
});

$(document).ready(function() {
    var swiper = new Swiper('.ad-det-swiper', {
        // loop: true,
        speed: 900,
        slidesPerView: 1,
        spaceBetween: 20,
        effect: 'fade',
        // autoplay: {
        //     delay: 2500,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
    });
});


$(document).ready(function() {
    var swiper = new Swiper('.categ-sec .categ-swiper', {
        // loop: true,
        speed: 900,
        slidesPerView: 2,
        spaceBetween: 20,
        // autoplay: {
        //     delay: 2500,
        // },
        navigation: {
            nextEl: '.categ-sec .swiper-button-next',
            prevEl: '.categ-sec .swiper-button-prev',
        },
        pagination: {
            el: '.categ-sec .swiper-pagination',
            clickable: true
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 6,
            },
        }
    });
});

$(document).ready(function() {
    var swiper = new Swiper('.rates-ad-swiper', {
        // loop: true,
        speed: 900,
        slidesPerView: 1,
        spaceBetween: 20,
        observer: true,
        observeParents: true,
        // autoplay: {
        //     delay: 2500,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
            },
        }
    });
});
// Rate emotions
$(function() {
	
	$(document).on({
		mouseover: function(event) {
			$(this).find('.far').addClass('star-over');
			$(this).prevAll().find('.far').addClass('star-over');
		},
		mouseleave: function(event) {
			$(this).find('.far').removeClass('star-over');
			$(this).prevAll().find('.far').removeClass('star-over');
		}
	}, '.rate');


	$(document).on('click', '.rate', function() {
		if ( !$(this).find('.star').hasClass('rate-active') ) {
			$(this).siblings().find('.star').addClass('far').removeClass('fas rate-active');
			$(this).find('.star').addClass('rate-active fas').removeClass('far star-over');
			$(this).prevAll().find('.star').addClass('fas').removeClass('far star-over');
		} else {
			console.log('has');
		}
	});
	
});

// $(function() {
//     //show password
//     const togglePassword = document.querySelector('#togglePassword');
//     const password = document.querySelector('#password');

//     togglePassword.addEventListener('click', function (e) {
//         // toggle the type attribute
//         const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
//         password.setAttribute('type', type);
//         // toggle the eye slash icon
//         this.classList.toggle('fa-eye-slash');
//     });
// });

//Nice select






//show password
$(document).ready(function() {
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    
    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
});

// ------------ SHOW HED PASS ----------
$(document).ready(function() {
    $(".show_hide_password .").on('click', function(event) {
        event.preventDefault();
        if($(this).siblings("input").attr("type") == "text"){
            $(this).siblings("input").attr('type', 'password');
            $(this).addClass( "fa-eye-slash" );
            $(this).removeClass( "fa-eye" );
        }else if($(this).siblings("input").attr("type") == "password"){
            $(this).siblings("input").attr('type', 'text');
            $(this).removeClass( "fa-eye-slash" );
            $(this).addClass( "fa-eye" );
        }
    });
});


    
    
// imageUploader
// $(document).ready(function() {
//     $('.input-images').imageUploader({});
// });

// var swiper = new Swiper(' .swiper-container', {
//     loop: true,
//     speed: 900,
//     slidesPerView: 1,
//     spaceBetween: 15,
//     // autoplay: {
//     //     delay: 2500,
//     // },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true
//     },
//     breakpoints: {
//         640: {
//             slidesPerView: 2,
//             spaceBetween: 20,
//         },
//         768: {
//             slidesPerView: 3,
//             spaceBetween: 20,
//         },
//         1024: {
//             slidesPerView: 5,
//             spaceBetween: 20,
//         },
//     }
// });

