<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/glightbox/js/glightbox.min.js"></script>

<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script>
    // init Isotope
    var $grid = $('.item-details').isotope({
    // options
    });
    // filter items on button click
    $('.item-menu').on( 'click', 'li', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
    });

    $('.item-menu').on( 'click', 'li', function() {
        $(this).siblings(".active").removeClass('active');
        $(this).addClass("active");
    });
    </script>
<script src="js/main.js"></script>