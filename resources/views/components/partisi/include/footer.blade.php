<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="{{ asset('landing/img/ht.png') }}" alt="">
                    <span class="sitename">Psht - Rayon Kedu</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Jln. Jelaprang - Gua wareh RT.04 RW.05 Dukuh Kedu, Kedumulyo</p>
                    <p>Dk. Kedu - Ds. Kedumulyo</p>
                    <p class="mt-3"><strong>Telepon:</strong> <span>085866090206</span></p>
                    <p><strong>Email:</strong> <span>pshtrayonkedumulyo@gmail.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Pendaftaran</a></li>
                    <li><a href="#">Galeri</a></li>
                    <li><a href="#">Keangotaan</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Event dan Kegiatan</h4>
                <ul>
                    <li><a href="#">Sarasehan Halal Bi Halal</a></li>
                    <li><a href="#">Sedekah Bumi (Apitan)</a></li>
                    <li><a href="#">Hari Kemerdekaan 17 Agustus</a></li>
                    <li><a href="#">Latihan Bersama</a></li>
                    <li><a href="#">Rutinan Bulanan</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4>Kritik dan Saran</h4>
                <p>Persaudaraan Setia Hati Terate - Rayon Kedumulyo</p>
                <form action="forms/newsletter.php" method="post" class="php-email-form">
                    <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                            value="Kirim"></div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Thank you!</div>
                </form>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright <?= date('Y') ?></span> <strong class="px-1 sitename">Psht - Rayon Kedu</strong> <span>All
                Rights
                Reserved</span></p>
    </div>

</footer>
