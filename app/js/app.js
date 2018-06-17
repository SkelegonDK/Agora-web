$(window).on("load", function() {
  console.log("window load");
  setTimeout(function(){
    $("body").removeClass("body-preloader-active");
    $("#preloader").css("top", "-100%");
    setTimeout(function(){
      $("#preloader").css("display", "none");
      $("#preload-logo").remove();
    }, 700);
  }, 2500);
});

(function() {
    "use strict";
    var app = {
        init: function() {
            // Remove no-js classes
            $('.no-js').removeClass('no-js');

            // Show cookie
            if (document.cookie.indexOf('jca=1') === -1) {
                $('#cookie').removeClass('hide-cookie');
            }

            // Accept Cookies
            $('#close-cookie').click(function(e) {
                e.preventDefault();

                var expires = new Date();
                expires.setTime(expires.getTime() + 31536000000);
                document.cookie = 'jca=1;expires=' + expires.toUTCString();

                $(this).parents('#cookie').addClass('hide-cookie');
            });
        },

        pageShift: function() {
            $("#bd").on("click", ".page-shift", function(e) {
                e.preventDefault();
                var pgUrl = $(this).attr("href");

                if(pgUrl != window.location) {
                    $("#cntnt").load(pgUrl + " #cntnt", function(responseText) {
                        chngTtleDsc(responseText);
                        window.history.pushState({path:pgUrl}, "", pgUrl);
                    });
                }
                return false;
            });

            $(window).on("popstate", function() {
                $("#cntnt").load(location.pathname + " #cntnt", function(responseText) {
                    chngTtleDsc(responseText);
                });
            });

            function chngTtleDsc(responseText) {
                var pgTtl = responseText.match(/<title>([^<]*)/)[1],
                    pgDsc = responseText.match(/<meta name="description" content="([^<]*)"/)[1];
                document.title = pgTtl;
                $('meta[name="description"]').attr("content", pgDsc);
            }
        },

        about: function() {
            $(".modal").modal();

              $(document).ready(function() {
                $('select').material_select();
              });
        },

        admin: function() {
            $("#bd").on("click", ".admin-link", function(e) {
                e.preventDefault();
                var pgCntnt = $(this).attr("data-admin"),
                    pgHtml = $("."+pgCntnt+"").html(),
                    admnCntnt = $(".admin-content");

                admnCntnt.html(pgHtml);
                $(".admin-menu").toggleClass("animate-admin-menu");
                $(".admin-menu-shade").toggleClass("animate-admin-shade");
            });

            $("#bd").on("click", ".admin-func-link", function(e) {
                e.preventDefault();
                var fcCntnt = $(this).attr("data-admin"),
                    fcHtml = $("."+fcCntnt+"").html(),
                    admnPgCntnt = $(".admin-page-content");

                admnPgCntnt.html(fcHtml);
                $('.datepicker').pickadate({
                  selectMonths: true, // Creates a dropdown to control month
                  selectYears: 15 // Creates a dropdown of 15 years to control year
                });

                $("select").material_select();
            });

            // Shitty code, need to make a fucntion for this, but CBA.
            $("#bd").on("click", ".admin-menu-btn", function() {
                $(".admin-menu").toggleClass("animate-admin-menu");
                $(".admin-menu-shade").toggleClass("animate-admin-shade");
            });

            $("#bd").on("click", ".admin-menu-shade", function() {
                $(".admin-menu").toggleClass("animate-admin-menu");
                $(".admin-menu-shade").toggleClass("animate-admin-shade");
            });

            $(".login").dropdown({
                    inDuration: 300,
                    outDuration: 225,
                    constrainWidth: false, // Does not change width of dropdown to that of the activator
                    hover: true, // Activate on hover
                    gutter: 0, // Spacing from edge
                    belowOrigin: true, // Displays dropdown below the button
                    alignment: 'right', // Displays dropdown with edge aligned to the left of button
                    stopPropagation: false // Stops event propagation
                }
            );



            $(".mobile-login").on("click", function() {
                $(".drag-target").click();
            });

            if (localStorage.getItem("login") === null) {
                $(".signed-out").css({
                    "display": "block"
                });
                $(".signed-in").css({
                    "display": "none"
                });
            } else {
                $(".signed-in").css({
                    "display": "block"
                });
                $(".signed-out").css({
                    "display": "none"
                });
                $(".login").text("{{name}}");
            }

            $("#lgInBtn").on("click", function() {
                localStorage.setItem("login", true);
                $(".signed-in").css({
                    "display": "none"
                });
                $(".login").text("{{name}}");
            });

            $("#logout").on("click", function() {
                localStorage.removeItem("login", true);
                $(".signed-in").css({
                    "display": "none"
                });
                $(".signed-out").css({
                    "display": "block"
                });
                window.location.href="/";
            });
        },
    };

    app.init();
    app.pageShift();
    app.about();
    app.admin();
})();
