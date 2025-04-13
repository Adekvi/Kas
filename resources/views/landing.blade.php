<x-partisi.layout.home title="Landing Page">

    {{-- Tambahan CSS jika perlu --}}
    <x-slot:css>
        @push('css')
            {{-- Tambahan CSS khusus landing page --}}
        @endpush
    </x-slot:css>

    {{-- Konten utama --}}
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="{{ asset('landing/img/bg-2.png') }}" alt="" class="hero-bg">

        <div class="container">
            <div class="row gy-4 justify-content-between">
                <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('landing/img/Logo-Psht.jpg') }}" class="img-fluid animated" alt=""
                        style="border-radius: 5px">
                </div>

                <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
                    <h1>Website Resmi <br> <span>Psht Rayon Kedumulyo</span></h1>
                    <p>Persaudaraan Setia Hati Terate - Ranting Sukolilo</p>
                    <div class="d-flex">
                        <a href="{{ url('user/login') }}" class="btn-get-started">
                            <i class="bi bi-door-open-fill"></i> Login</a>
                        {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                    </div>
                </div>

            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                </path>
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3"></use>
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0"></use>
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9"></use>
            </g>
        </svg>

    </section><!-- /Hero Section -->



    <!-- Details Section -->
    <section id="details" class="details section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Sejarah Singkat</h2>
            <div><span class="description-title">Persaudaraan Setia Hati Terate</span></div>
            <p>
                <li>Asal Usul Setia Hati
                    Sebelum PSHT berdiri, telah ada ajaran spiritual dan bela diri yang dikenal sebagai aliran Setia
                    Hati. Ajaran ini mengajarkan keselarasan antara olahraga, spiritualitas, dan akhlak luhur.</li>
            </p>
            <h3>
                <span class="description-title">
                    <li><strong>Tokoh Pendiri</strong></li>
                </span>
            </h3>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('landing/img/details-1.png') }}" class="img-fluid" alt=""
                        style="border-radius: 15px">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Ki Ngabehi Soerodiwiryo</h3>
                    <p style="text-align: justify;">
                        Ki Ngabehi Soerodiwiryo adalah sosok pendiri awal dari ajaran Setia Hati, yang menjadi fondasi
                        utama lahirnya Persaudaraan Setia Hati Terate (PSHT). Ia merupakan tokoh spiritual dan pendekar
                        silat yang hidup pada masa awal abad ke-20, dikenal memiliki kepribadian yang kuat, berwibawa,
                        dan sangat mendalami ilmu kanuragan serta kebatinan.

                        Pada sekitar tahun 1903, Ki Ngabehi Soerodiwiryo mulai mengembangkan ajaran Setia Hati di daerah
                        Winongo, Madiun. Ia mendirikan sebuah komunitas spiritual yang bernama “Sedulur Tunggal Kecer”,
                        yang kemudian berkembang menjadi Persaudaraan Setia Hati (PSH). Ajaran ini tidak hanya
                        mengajarkan teknik bela diri, tetapi juga mengedepankan nilai-nilai moral, pengendalian diri,
                        dan pencapaian kesempurnaan batin. Tujuannya bukan semata-mata untuk menjadi kuat, tetapi agar
                        seseorang mampu menaklukkan hawa nafsunya sendiri dan menjadi manusia yang mulia.

                        Ciri khas dari ajaran Ki Soerodiwiryo adalah sistem pembelajarannya yang tertutup dan bersifat
                        khusus, hanya diberikan kepada murid-murid yang dianggap siap secara lahir dan batin. Beliau
                        menekankan pentingnya persaudaraan sejati, kejujuran, dan keteguhan hati dalam menghadapi
                        kehidupan. Ajarannya kemudian menyebar secara terbatas, namun sangat berpengaruh kepada
                        murid-muridnya yang memiliki semangat luhur, salah satunya adalah Ki Hadjar Hardjo Oetomo.
                    </p>
                    {{-- <ul>
                        <li><i class="bi bi-check"></i><span> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</span></li>
                        <li><i class="bi bi-check"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                                velit.</span></li>
                        <li><i class="bi bi-check"></i> <span>Ullam est qui quos consequatur eos accusamus.</span>
                        </li>
                    </ul> --}}
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                    data-aos-delay="200">
                    <img src="{{ asset('landing/img/details-2.png') }}" class="img-fluid" alt=""
                        style="border-radius: 15px">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Ki Hadjar Harjo Oetomo</h3>
                    <p style="text-align: justify;">
                        Ki Hadjar Hardjo Oetomo adalah murid langsung dari Ki Ngabehi Soerodiwiryo yang memiliki
                        pandangan visioner dan semangat besar untuk mengembangkan ajaran Setia Hati ke dalam bentuk
                        organisasi yang lebih terbuka dan sistematis. Ia adalah seorang pejuang kemerdekaan yang juga
                        dikenal sebagai guru silat yang arif dan bijaksana.

                        Menyadari bahwa ajaran Setia Hati memiliki nilai luhur yang harus diwariskan secara luas, Ki
                        Hadjar merasa perlu mendirikan wadah pendidikan bela diri yang tidak hanya terbatas pada
                        kalangan tertentu. Maka, pada tahun 1922 di Pilangkenceng, Kabupaten Madiun, beliau mendirikan
                        sebuah organisasi pencak silat dengan nama:

                        Persaudaraan Setia Hati Terate (PSHT)

                        Nama “Terate” (teratai) dipilih sebagai simbol filosofi luhur: walau hidup di air keruh, bunga
                        teratai tetap tumbuh indah dan harum. Ini melambangkan harapan agar setiap warga PSHT bisa
                        menjadi pribadi yang kuat dan berbudi luhur di tengah tantangan kehidupan.

                        Berbeda dengan gurunya, Ki Hadjar mengembangkan ajaran Setia Hati secara terbuka dan
                        terstruktur, menyusun kurikulum, latihan jasmani dan rohani, serta sistem pengesahan yang jelas.
                        Tujuan utama PSHT yang ia tanamkan adalah:

                        “Mendidik manusia yang berbudi luhur, tahu benar dan salah, dan bertakwa kepada Tuhan Yang Maha
                        Esa.”

                        Di bawah bimbingan Ki Hadjar, PSHT berkembang dari sebuah perguruan lokal menjadi organisasi
                        besar yang tersebar ke berbagai daerah. Beliau meletakkan dasar-dasar organisasi modern yang
                        kelak menjadi pondasi utama pertumbuhan PSHT di masa-masa berikutnya.
                    </p>
                </div>
            </div><!-- Features Item -->

            <div class="container section-title mt-5" data-aos="fade-up">
                <h3>
                    <span class="description-title">
                        <li><strong>Perkembangan dan Kepemimpinan Organisasi</strong></li>
                    </span>
                </h3>
                <p>Dalam perjalanan sejarah Persaudaraan Setia Hati Terate (PSHT), dua tokoh besar memiliki peran
                    penting dalam menjaga eksistensi dan kelangsungan organisasi ini di era modern, yaitu Imam
                    Koesoepangat dan Tarmadji Boedi Harsono.</p>
            </div><!-- End Section Title -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                    <img src="{{ asset('landing/img/details-3.png') }}" class="img-fluid" alt=""
                        style="border-radius: 15px">
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <h3>Imam Koesoepangat</h3>
                    <p style="text-align: justify;">Imam Koesoepangat dikenal sebagai tokoh kharismatik yang menjabat
                        sebagai Ketua Umum PSHT Pusat
                        Madiun sejak tahun 1981 hingga wafatnya pada tahun 1997. Di bawah kepemimpinannya, PSHT
                        mengalami perkembangan yang signifikan. Ia berhasil membawa PSHT menjadi organisasi yang lebih
                        terstruktur secara administratif dan hukum, serta memperluas pengaruhnya ke seluruh penjuru
                        Indonesia bahkan hingga ke luar negeri. Imam Koesoepangat dihormati karena kemampuannya menjaga
                        nilai-nilai luhur ajaran Setia Hati Terate, dengan menekankan pentingnya persaudaraan, budi
                        pekerti, dan pengendalian diri. Beliau dikenal sebagai pemimpin yang bijaksana dan tegas, yang
                        mampu menyatukan warga PSHT dari berbagai latar belakang.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> <span> Ketua Umum PSHT (1974 sd 1977)</span></li>
                        <li><i class="bi bi-check"></i><span> Modernisasi organisasi, memperluas PSHT</span></li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="{{ asset('landing/img/details-4.png') }}" class="img-fluid" alt=""
                        style="border-radius: 15px">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>Tarmadji Boedi Harsono</h3>
                    <p style="text-align: justify;">
                        Sepeninggal Imam Koesoepangat, tongkat estafet kepemimpinan dilanjutkan oleh Tarmadji Boedi
                        Harsono, yang kemudian diangkat sebagai Ketua Umum melalui Musyawarah Nasional. Dalam masa
                        kepemimpinannya, Tarmadji terus melanjutkan perjuangan untuk memperkuat legalitas dan struktur
                        organisasi PSHT. Ia turut mendorong pengesahan badan hukum PSHT agar organisasi ini semakin kuat
                        di mata hukum, sekaligus terus menjaga ajaran dan falsafah yang diwariskan para pendiri. Di
                        bawah arahannya, PSHT semakin dikenal secara nasional dan internasional, serta aktif dalam
                        kegiatan pencak silat baik di dalam maupun luar negeri.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i><span> Ketua Umum PSHT (1981 sd 2014)</span></li>
                        <li><i class="bi bi-check"></i><span> Penguatan struktur hukum dan
                                ekspansi PSHT</span></li>
                    </ul>
                </div>
            </div><!-- Features Item -->

        </div>

    </section><!-- /Details Section -->

    {{-- <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <div class="col-xl-5 content">
                    <h3>About Us</h3>
                    <h2>Ducimus rerum libero reprehenderit cumque</h2>
                    <p>Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime. Enim
                        reiciendis minus et rerum hic non. Dicta quas cum quia maiores iure. Quidem nulla qui
                        assumenda incidunt voluptatem tempora deleniti soluta.</p>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>

                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-buildings"></i>
                                <h3>Eius provident</h3>
                                <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor
                                    voluptatem</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-clipboard-pulse"></i>
                                <h3>Rerum aperiam</h3>
                                <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates
                                    quia</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-command"></i>
                                <h3>Veniam omnis</h3>
                                <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur
                                    corrupti</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h3>Delares sapiente</h3>
                                <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis
                                    quideme lorenda</p>
                            </div>
                        </div> <!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </div>

    </section><!-- /About Section --> --}}

    {{-- <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="features-item">
                        <i class="bi bi-eye" style="color: #ffbb2c;"></i>
                        <h3><a href="" class="stretched-link">Lorem Ipsum</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="features-item">
                        <i class="bi bi-infinity" style="color: #5578ff;"></i>
                        <h3><a href="" class="stretched-link">Dolor Sitema</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="features-item">
                        <i class="bi bi-mortarboard" style="color: #e80368;"></i>
                        <h3><a href="" class="stretched-link">Sed perspiciatis</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="features-item">
                        <i class="bi bi-nut" style="color: #e361ff;"></i>
                        <h3><a href="" class="stretched-link">Magni Dolores</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="features-item">
                        <i class="bi bi-shuffle" style="color: #47aeff;"></i>
                        <h3><a href="" class="stretched-link">Nemo Enim</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="features-item">
                        <i class="bi bi-star" style="color: #ffa76e;"></i>
                        <h3><a href="" class="stretched-link">Eiusmod Tempor</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="features-item">
                        <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
                        <h3><a href="" class="stretched-link">Midela Teren</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="features-item">
                        <i class="bi bi-camera-video" style="color: #4233ff;"></i>
                        <h3><a href="" class="stretched-link">Pira Neve</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="features-item">
                        <i class="bi bi-command" style="color: #b2904f;"></i>
                        <h3><a href="" class="stretched-link">Dirada Pack</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
                    <div class="features-item">
                        <i class="bi bi-dribbble" style="color: #b20969;"></i>
                        <h3><a href="" class="stretched-link">Moton Ideal</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
                    <div class="features-item">
                        <i class="bi bi-activity" style="color: #ff5828;"></i>
                        <h3><a href="" class="stretched-link">Verdo Park</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
                    <div class="features-item">
                        <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
                        <h3><a href="" class="stretched-link">Flavor Nivelanda</a></h3>
                    </div>
                </div><!-- End Feature Item -->

            </div>

        </div>

    </section><!-- /Features Section --> --}}

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-emoji-smile"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Happy Clients</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-journal-richtext"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-headset"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="bi bi-people"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Galeri</h2>
            <div><span>Foto</span> <span class="description-title">Event / Kegiatan</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('landing/img/gallery/galeri-1.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('landing/img/gallery/galeri-1.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('landing/img/gallery/galeri-2.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('landing/img/gallery/galeri-2.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('landing/img/gallery/galeri-3.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('landing/img/gallery/galeri-3.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('landing/img/gallery/galeri-4.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('landing/img/gallery/galeri-4.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('landing/img/gallery/galeri-5.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('landing/img/gallery/galeri-5.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('landing/img/gallery/galeri-6.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('landing/img/gallery/galeri-6.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('landing/img/gallery/galeri-7.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('landing/img/gallery/galeri-7.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('landing/img/gallery/galeri-8.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('landing/img/gallery/galeri-8.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

            </div>

        </div>

    </section><!-- /Gallery Section -->

    {{-- <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

        <img src="{{ asset('landing/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    }
                    }
                </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('landing/img/testimonials/testimonials-1.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                    suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                    Maecen aliquam, risus at semper.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('landing/img/testimonials/testimonials-2.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                    quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                    irure amet legam anim culpa.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('landing/img/testimonials/testimonials-3.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                    quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                    quis sint minim.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('landing/img/testimonials/testimonials-4.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                    quem dolore labore illum veniam.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('landing/img/testimonials/testimonials-5.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                    noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                    esse veniam culpa fore nisi cillum quid.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section --> --}}

    {{-- <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <div><span>Check Our</span> <span class="description-title">Team</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('landing/img/team/team-1.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('landing/img/team/team-2.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('landing/img/team/team-3.jpg') }}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section --> --}}

    {{-- <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Pricing</h2>
            <div><span>Check Our</span> <span class="description-title">Pricing</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-item">
                        <h3>Free Plan</h3>
                        <p class="description">Ullam mollitia quasi nobis soluta in voluptatum et sint palora dex
                            strater</p>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <a href="#" class="cta-btn">Start a free trial</a>
                        <p class="text-center small">No credit card required</p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                            </li>
                            <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis
                                    hendrerit</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Voluptate id voluptas qui sed aperiam
                                    rerum</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Iure nihil dolores recusandae odit
                                    voluptatibus</span></li>
                        </ul>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pricing-item featured">
                        <p class="popular">Popular</p>
                        <h3>Business Plan</h3>
                        <p class="description">Ullam mollitia quasi nobis soluta in voluptatum et sint palora dex
                            strater</p>
                        <h4><sup>$</sup>29<span> / month</span></h4>
                        <a href="#" class="cta-btn">Start a free trial</a>
                        <p class="text-center small">No credit card required</p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            <li><i class="bi bi-check"></i> <span>Voluptate id voluptas qui sed aperiam
                                    rerum</span></li>
                            <li class="na"><i class="bi bi-x"></i> <span>Iure nihil dolores recusandae odit
                                    voluptatibus</span></li>
                        </ul>
                    </div>
                </div><!-- End Pricing Item -->

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pricing-item">
                        <h3>Developer Plan</h3>
                        <p class="description">Ullam mollitia quasi nobis soluta in voluptatum et sint palora dex
                            strater</p>
                        <h4><sup>$</sup>49<span> / month</span></h4>
                        <a href="#" class="cta-btn">Start a free trial</a>
                        <p class="text-center small">No credit card required</p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            <li><i class="bi bi-check"></i> <span>Voluptate id voluptas qui sed aperiam
                                    rerum</span></li>
                            <li><i class="bi bi-check"></i> <span>Iure nihil dolores recusandae odit
                                    voluptatibus</span></li>
                        </ul>
                    </div>
                </div><!-- End Pricing Item -->

            </div>

        </div>

    </section><!-- /Pricing Section --> --}}

    {{-- <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

        <div class="container-fluid">

            <div class="row gy-4">

                <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                    <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                        <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                    </div>

                    <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-item faq-active">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                            <div class="faq-content">
                                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                    laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                    rhoncus dolor purus non.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                            <div class="faq-content">
                                <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                            <div class="faq-content">
                                <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                    Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                    suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                    convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

                <div class="col-lg-5 order-1 order-lg-2">
                    <img src="{{ asset('landing/img/faq.jpg') }}" class="img-fluid" alt=""
                        data-aos="zoom-in" data-aos-delay="100">
                </div>
            </div>

        </div>

    </section><!-- /Faq Section --> --}}

    <section id="logo" class="logo section light-background">
        <div class="container-fluid">
            <div class="row gy-4">
                <div class="logo-container text-center align-items-center">
                    <img src="{{ asset('landing/img/logo/ipsi.png') }}" alt="Logo 1" class="logo img-fluid"
                        style="max-width: 170px; margin: 20px;">
                    <img src="{{ asset('landing/img/logo/psht.png') }}" alt="Logo 2" class="logo img-fluid"
                        style="max-width: 120px; margin: 20px;">
                    <img src="{{ asset('landing/img/logo/ranting.png') }}" alt="Logo 3" class="logo img-fluid"
                        style="max-width: 180px; margin: 20px;">
                    <img src="{{ asset('landing/img/logo/rayon.png') }}" alt="Logo 4" class="logo img-fluid"
                        style="max-width: 180px; margin: 5px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kontak</h2>
            <div><span>Narahubung</span> <span class="description-title">Organisasi</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Alamat</h3>
                            <p>Jln. Jelaprang - Gua wareh RT.04 RW.05 Dukuh Kedu, Kedumulyo</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>No. WhatsApp</h3>
                            <p>085866090206</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>pshtrayonkedumulyo@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.691855286828!2d110.9594504740357!3d-6.9273880678046975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c9005073fdc1%3A0x8054ed1f116922f6!2sPADEPOKAN%20(Pendopo%20PSHT%20Rayon%20Kedumulyo%20Guoware)!5e0!3m2!1sid!2sid!4v1744484722954!5m2!1sid!2sid"
                                width="700" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

    {{-- Tambahan JS jika perlu --}}
    <x-slot:js>
        @push('js')
            {{-- Tambahan JS khusus landing page --}}
        @endpush
    </x-slot:js>

</x-partisi.layout.home>
