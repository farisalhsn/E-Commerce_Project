<!DOCTYPE html>
<html lang="zxx">

<!-- HEAD HTML -->
<?php include('plugins/header.php'); ?>
<!-- HEAD HTML END -->

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- HEADER HTML -->
    <?php include('plugins/navbar.php'); ?>
    <!-- HEADER HTML END -->

    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111551.9926412813!2d-90.27317134641879!3d38.606612219170856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1597926938024!5m2!1sen!2sbd" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Informasi</span>
                            <h2>Kontak Kami</h2>
                            <p>Tetaplah terhubung dengan kami agar kamu terus mendapatkan update berita!</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Indonesia</h4>
                                <p>Depok, Kampus A Nurul Fikri <br />+62 123-123-123</p>
                            </li>
                            <li>
                                <h4>Indonesia</h4>
                                <p>Depok, Kampus B Nurul Fikri <br />+62 123-123-123</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Nama">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Pesan"></textarea>
                                    <button type="submit" class="site-btn">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- FOOTER -->
    <?php include('plugins/footer.php');?>
    <!-- FOOTER END -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

</body>

</html>