<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>Stana Indonesia</h3>
        <p>Membantu bersama untuk Indonesia</p>
        <div class="social-links">
            <a href="https://twitter.com/StanaIndonesia" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://web.facebook.com/profile.php?id=100088559774325&is_tour_dismissed=true" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/stanaindonesia/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/Green'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/Green'); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url('assets/Green'); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/Green'); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url('assets/Green'); ?>/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/Green'); ?>/assets/js/main.js"></script>
<script>
    $(document).ready(function() {
        $('li').click(function() {
            var id = $(this).attr('id');
            $('.feed').remove();
            $.ajax({
                type: "POST",
                url: "<?= base_url('Dashboard/getDisaster'); ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(resp) {
                    var logo;
                    $.each(resp['disaster'], function(index, item) {
                        if (item['name'] == 'Flood') {
                            logo = "bx bx-water";
                        } else if (item['name'] == "Fire") {
                            logo = "bx bxs-hot";
                        } else if (item['name'] == "Landslide") {
                            logo = "bx bx-pulse";
                        } else if (item['name'] == "Earthquake") {
                            logo = "bx bx-bullseye";
                        } else if (item['name'] == "Volcano") {
                            logo = "bx bxs-landscape";
                        } else if (item['name'] == "Tornado") {
                            logo = "bx bxl-jquery";
                        }
                        $(".place").append(`<div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 feed" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <div class="icon">
                                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                                    </svg>
                                    <i class="` + logo + `"></i>
                                </div>
                                <h4>` + item['name'] + `</a></h4>
                                <p>Date: ` + item['date'] + `, Casualty: ` + item['casualty'] + `</p>
                            </div>
                        </div>`);
                    });
                    console.log(resp['disaster']);
                }
            });
        });
    });
</script>

</body>

</html>