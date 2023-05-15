<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lutfi Junaedi Abdillah</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('theme/css/vendor.css') }}"> 
    <link rel="stylesheet" href="{{ asset('theme/css/styles.css') }}">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('theme/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('theme/L.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('theme/L.png') }}">
    <link rel="manifest" href="site.webmanifest"> 

</head>


<body id="top">

    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">
            <div class="row s-header__inner">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="index.html">
                            <img src="{{ asset('theme/me.png') }}" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">    
                    <ul class="s-header__menu-links">
                        <li class="current"><a class="smoothscroll" href="#intro">Perkenalan</a></li>
                        <li><a class="smoothscroll" href="#about">Tentang</a></li>
                        <li><a class="smoothscroll" href="#works">Karya</a></li>
                        <li><a class="smoothscroll" href="#footer">Kontak</a></li>
                    </ul> <!-- s-header__menu-links -->    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->
        </header> <!-- end s-header -->


        <!-- # intro
        ================================================== -->
        <section id="intro" class="s-intro target-section">

            <div class="row s-intro__content width-sixteen-col">
                <div class="column lg-12 s-intro__content-inner grid-block grid-16">
                    
                    <div class="s-intro__content-text">

                        <div class="s-intro__content-pretitle text-pretitle">Hallo</div>
                        <h1 class="s-intro__content-title">
                       Saya Lutfi <br>
                        seorang Pegawai Swasta & Freelancer <br>
                        </h1>                            

                        <div class="s-intro__content-btns">
                            <a class="smoothscroll btn" href="#about">Perkenalan Lanjut</a>
                            <a class="smoothscroll btn btn--stroke" href="#footer">Hubungi Kami</a>
                        </div> <!-- s-intro__content-btns -->   

                    </div> <!-- s-intro__content-text -->                     
                    
                </div> <!-- s-intro__content-inner -->  
            </div> <!-- s-intro__content -->

            <ul class="s-intro__social social-list">
                <li>
                    <a href="https://www.facebook.com/lutfijunaediabdillah">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                        <span class="u-screen-reader-text">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/lutfijua_/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                        <span class="u-screen-reader-text">Instagram</span>
                    </a>
                </li>
            </ul> <!-- end s-intro__social -->

            <div class="s-intro__content-media">                               
                <img src="{{ asset('theme/me.jpeg') }}" srcset="theme/me.jpeg 1x, theme/me.jpeg 2x" alt="">
            </div> <!-- s-intro__content-media -->                

            <div class="s-intro__btn-download">
                <a class="btn btn--stroke" href="#0">Dapatkan CV Saya</a>
            </div> <!-- end s-intro__btn-download -->
            
            <div class="s-intro__scroll-down">
                <a href="#about" class="smoothscroll">
                    <div class="scroll-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></svg>
                    </div>
                    <span class="scroll-text u-screen-reader-text">Scroll Down</span>
                </a>
            </div> <!-- s-intro__scroll-down -->

        </section> <!-- end s-intro -->


        <!-- # about
        ================================================== -->
        <section id="about" class="s-about target-section">

            <div class="row s-about__content">
                <div class="column xl-12">    
                    
                    <div class="section-header" data-num="01">
                        <h2 class="text-display-title">Tentang Kami</h2>
                    </div> <!-- end section-header -->

                    <p class="attention-getter">
                    Lutfi Junaedi Abdillah, berasal dari Sukabumi, adalah seorang mahasiswa Teknik Informatika di Universitas Muhammadiyah Sukabumi yang memiliki keahlian dalam teknologi informasi. Saat ini ia juga bekerja sebagai pegawai di Pesantren Al-Ma'tuq dengan posisi sebagai pencari berita dan spesialis media sosial. Lutfi memiliki minat yang kuat dalam teknologi dan informasi, yang membuatnya mampu memberikan informasi terkini dan berkualitas melalui media sosial.
                    </p>

                    <p class="attention-getter">
                    Sebagai seorang pencari berita dan spesialis media sosial di pesantren, Lutfi bertanggung jawab dalam memastikan pesantren selalu terkini dengan peristiwa dan kegiatan yang terjadi. Dengan keterampilannya dalam mencari berita dan mengelola media sosial, ia memastikan pesan yang disebarkan selalu akurat dan relevan. Dalam posisinya, Lutfi juga membantu mempromosikan kegiatan pesantren melalui media sosial.
                    </p>

                    <p class="attention-getter">
                    Dengan kemampuannya dalam teknologi dan informasi, serta semangatnya yang kuat dalam dunia pendidikan, Lutfi Junaedi Abdillah merupakan seorang mahasiswa dan pegawai yang berdedikasi dan berkomitmen untuk memberikan kontribusi positif pada pesantren dan masyarakat sekitarnya.
                    </p>

                    <div class="grid-list-items s-about__blocks">

                        <div class="grid-list-items__item s-about__block">
                            <h4 class="s-about__block-title">Pengalaman</h4>
                            <ul class="s-about__list">
                                <li>
                                    Penyiar
                                    <span>Radio Komunitas Al-Ma'tuq FM</span>
                                </li>
                                <li>
                                    Sekretaris
                                    <span>Bidang Humas Pesantren Al-Ma'tuq</span>
                                </li>
                                <li>
                                    Poto dan Videographer
                                    <span>Bidang Humas Pesantren Al-Ma'tuq</span>
                                </li>
                                <li>
                                    Wordpress
                                    <span>Pengembang Portal Berita Pesantren</span>
                                </li>
                            </ul>
                        </div> <!--end s-about__block -->

                        <div class="grid-list-items__item s-about__block">
                            <h4 class="s-about__block-title">Penghargaan</h4>

                            <ul class="s-about__list">
                                <li>
                                    <a href="#0">
                                        Peserta Pelatihan Jurnalistik
                                        <span>ARTVISI — 2017</span>
                                    </a>                                        
                                </li>
                                <li>
                                    <a href="#0">
                                        Peserta IT Bootcamp
                                        <span>Rodja — 2017</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        Peserta Pelatihan Videograpi
                                        <span>Puldapii TV — 2017</span>
                                    </a>                                       
                                </li>
                            </ul>
                        </div> <!--end s-about__block -->
                        
                        <div class="grid-list-items__item s-about__block">
                            <h4 class="s-about__block-title">Kemampuan</h4>

                            <ul class="s-about__list">
                                <li>
                                    Content Writer
                                </li>
                                <li>
                                    Copy Writer
                                </li>
                                <li>
                                    Photo dan Videographer
                                </li>
                                <li>
                                    Content Creator
                                </li>
                                <li>
                                    Web Developer
                                </li>
                            </ul>
                        </div> <!--end s-about__block -->

                    </div> <!-- grid-list-items -->

                </div> <!--end column -->
            </div> <!--end s-about__content -->
            
        </section> <!-- end s-about -->   



        <!-- # works
        ================================================== -->
        <section id="works" class="s-works target-section">

            <div class="row">
                <div class="column xl-12">
                    <div class="section-header" data-num="02">
                        <h2 class="text-display-title">Selected Works.</h2>
                    </div> <!-- end section-header -->
                </div>
            </div>

            <div class="row folio-entries">

                <div class="column entry">
                    <a href="images/folio/gallery/g-turban.jpg" class="entry__link glightbox" data-glightbox="title: White Knit Cap; description: .entry__desc-01">
                        <div class="entry__thumb">
                            <img src="images/folio/white_turban.jpg" srcset="images/folio/white_turban.jpg 1x, images/folio/white_turban@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">White Knit Cap</h4>
                            <div class="entry__cat">Frontend Design</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-01">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->

                <div class="column entry">
                    <a href="images/folio/gallery/g-woodcraft.jpg" class="entry__link glightbox" data-glightbox="title: WoodCraft; description: .entry__desc-02">
                        <div class="entry__thumb">
                            <img src="images/folio/woodcraft.jpg" srcset="images/folio/woodcraft.jpg 1x, images/folio/woodcraft@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">WoodCraft</h4>
                            <div class="entry__cat">Product Design</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-02">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->

                <div class="column entry">
                    <a href="images/folio/gallery/g-tulips.jpg" class="entry__link glightbox" data-glightbox="title: Caffeine & Tulips; description: .entry__desc-03">
                        <div class="entry__thumb">
                            <img src="images/folio/caffeine_and_tulips.jpg" srcset="images/folio/caffeine_and_tulips.jpg 1x, images/folio/caffeine_and_tulips@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">Caffeine & Tulips</h4>
                            <div class="entry__cat">Brand Identity</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-03">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->

                <div class="column entry">
                    <a href="images/folio/gallery/g-grayscale.jpg" class="entry__link glightbox" data-glightbox="title: Grayscale; description: .entry__desc-04">
                        <div class="entry__thumb">
                            <img src="images/folio/grayscale.jpg" srcset="images/folio/grayscale.jpg 1x, images/folio/grayscale@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">Grayscale</h4>
                            <div class="entry__cat">Product Design</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-04">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->

                <div class="column entry">
                    <a href="images/folio/gallery/g-lamp.jpg" class="entry__link glightbox" data-glightbox="title: The Lamp; description: .entry__desc-05">
                        <div class="entry__thumb">
                            <img src="images/folio/lamp.jpg" srcset="images/folio/lamp.jpg 1x, images/folio/lamp@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">The Lamp</h4>
                            <div class="entry__cat">Brand Identity</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-05">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->

                <div class="column entry">
                    <a href="images/folio/gallery/g-tropical.jpg" class="entry__link glightbox" data-glightbox="title: Tropical; description: .entry__desc-06">
                        <div class="entry__thumb">
                            <img src="images/folio/tropical.jpg" srcset="images/folio/tropical.jpg 1x, images/folio/tropical@2x.jpg 2x" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">Tropical</h4>
                            <div class="entry__cat">Frontend Design</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-06">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Inventore ipsum iste soluta fugiat, impedit illum ducimus 
                        deleniti facilis ab, tempora non! Nisi, tempora provident.
                        <a href="https://www.behance.net/">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry --> 

            </div> <!-- folio entries -->



        </section> <!-- end s-works --> 


        <!-- # numbers
        ================================================== -->
        <section id="numbers" class="s-numbers">

            <div class="row counter-items">

                <div class="column counter-items__item">
                    <div class="num">
                        80
                        <span>+</span>
                    </div>
                    <h5>Happy Customers</h5>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Vel harum magni quae voluptate error quo repellendus inventore 
                    laborum ex veniam. 
                    </p>
                </div> <!-- end counter-items__item -->

                <div class="column counter-items__item">
                    <div class="num">
                        120
                        <span>+</span>
                    </div>
                    <h5>Projects Completed</h5>
                    <p>
                    Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. 
                    Fusce vel dui. In ac felis 
                    quis tortor malesuada pretium
                    </p>
                </div> <!-- end counter-items__item -->

                <div class="column counter-items__item">
                    <div class="num">
                        23k
                        <span>+</span>
                    </div>
                    <h5>Lines of Code</h5>
                    <p>
                    Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                    Nisi eaque consequatur. Voluptatem dignissimos ut ducimus
                    </p>
                </div> <!-- end counter-items__item -->

                <div class="column counter-items__item">
                    <div class="num">
                        85
                        <span>+</span>
                    </div>
                    <h5>Positive Feedback</h5>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel harum magni quae voluptate error 
                    quo repellendus inventore laborum ex veniam.
                    </p>
                </div> <!-- end counter-items__item -->

            </div>  <!-- end counter-items -->

        </section> <!-- end s-numbers -->


        <!-- # footer 
        ================================================== -->
        <footer id="footer" class="s-footer target-section">

            <div class="row">
                <div class="column lg-12">
                    <div class="section-header light-on-dark" data-num="03">
                        <h2 class="text-display-title">Tentang Kami</h2>
                    </div> <!-- end section-header -->
                </div>
            </div>

            <div class="row s-footer__content">

                <div class="column xl-6 md-12 s-footer__block s-footer__about">                    
                    <p class="attention-getter">
                    Lutfi Junaedi Abdillah adalah salah seorang pegawai di Pesantren Al-Ma'tuq. Bekerja sebagai pencari berita, Content Media Specialist dan Web Developer.
                    </p>               
                </div> <!-- end section-footer__about -->

                <div class="column xl-6 md-12 s-footer__block s-footer__site-links">
                    <div class="row">
                        <div class="column xl-4 lg-5 md-6 tab-12">
                            <h5>Ikuti Kami</h5>
                            <ul class="link-list">
                                <li><a href="https://www.facebook.com/lutfijunaediabdillah">Facebook</a></li>
                                <li><a href="https://www.instagram.com/lutfijua_/">Instagram</a></li>
                            </ul>
                        </div>
                        <div class="column xl-6 md-6 tab-12">
                            <h5>Hubungi Kami</h5>
                            <ul class="link-list">
                                <li><a href="mailto:#0">salam@lutfi.com</a></li>
                                <li><a href="tel:+6285720090309">+62 857 2009 0309</a></li>
                            </ul> 
                        </div>
                    </div>                    
                </div> <!-- end section-footer__site-links -->

            </div> <!-- end section-footer__content -->


            <div class="row s-footer__buttons">
               
                <div class="column xl-6 tab-12">
                    <a href="mailto:wa.me/625720090309" class="btn btn--primary btn--large u-fullwidth">Hubungi Kami</a>
                </div>
          
                <div class="column xl-6 tab-12">                    
                    <a href="#0" class="btn btn--stroke btn--large u-fullwidth">Dapatkan CV Saya</a>
                </div>
            
            </div> <!-- end section-footer__buttons -->              
            
            <div class="row s-footer__bottom">
                
                <div class="column xl-6 lg-12">
                    <ul class="s-footer__social social-list">
                        <li>
                            <a href="https://www.facebook.com/lutfijunaediabdillah">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/lutfijua_/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                    </ul> 
                </div> <!-- end section-footer__social -->

                <div class="column xl-6 lg-12">
                    <p class="ss-copyright">
                        <span>© Copyright Lutfi 2023</span> 
                        <span>Design by <a href="#0">RaafiqMediaDigital</a></span>
                    </p>
                </div>

            </div> <!-- end section-footer__bottom -->          

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">                 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A1 1 0 0 0 5 3v18a1 1 0 0 0 .536.886z"></path></svg>
                </a>                                
                <span>Back To Top</span>   
            </div> <!-- end ss-go-top -->
            
        </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('theme/js/plugins.js') }}"></script>
    <script src="{{ asset('theme/js/main.js') }}"></script>

</body>
</html>