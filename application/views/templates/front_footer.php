<!-- Footer -->
<footer class="bg-info py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
                <small class="text-white">&copy; <?= date('Y'); ?> <a class="text-white" href="https://matiencostum.com">Matien</a>. All
                    Rights Reserved</small>
            </div>
            <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
                <small class="text-white">AMM Desa Margasari</small>
            </div>

            <div class="col-md-4 align-self-center">
                <ul class="list-inline text-center text-md-right mb-0">
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <a class="text-white" target="_blank" href="https://facebook.com/profile.php?id=100035467474417&ref=content_filter">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                        <a class="text-white" target="_blank" href="https://www.instagram.com/amm_margasari?igshid=1vj110u9933mc">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Youtube">
                        <a class="text-white" target="_blank" href="https://www.youtube.com/channel/UC_i4X4M4kOz8lO62UmqiSew">
                            <i class="fab fa-youtube"></i>
                        </a>

                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Call Us Modal Window -->
<!-- <div class="modal fade" id="callUsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login AMM Margasari</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" id="modalName" placeholder="Your Email">
                    </div>
                    <div class="form-group mb-4">
                        <input type="tel" class="form-control" id="modalPhone" placeholder="Password">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-danger">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->
<!-- End Call Us Modal Window -->

<!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- Global Vendor -->
<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/vendors/jquery.migrate.min.js"></script>
<script src="assets/vendors/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>

<!-- Components Vendor  -->
<script src="assets/vendors/jquery.parallax.js"></script>
<script src="assets/vendors/typedjs/typed.min.js"></script>
<script src="assets/vendors/slick-carousel/slick.min.js"></script>
<script src="assets/vendors/counters/waypoint.min.js"></script>
<script src="assets/vendors/counters/counterup.min.js"></script>

<!-- Theme Settings and Calls -->
<script src="assets/js/global.js"></script>

<!-- Theme Components and Settings -->
<script src="assets/js/vendors/parallax.js"></script>
<script src="assets/js/vendors/carousel.js"></script>
<script src="assets/js/vendors/counters.js"></script>
<!-- END JAVASCRIPTS -->

<script>
    $(document).on('ready', function() {
        // initialization of text animation (typing)
        $(".js-display-typing").typed({
            strings: [
                "Muhammadiyah",
                "Creative",
                "Innovative"
            ],
            typeSpeed: 60,
            loop: true,
            backDelay: 2500
        });
    });
</script>
</body>
<!-- End Body -->

</html>