<x-layout>
        @section('head')
            <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
        @endsection 
    <!doctype html>
    <html lang="en">

    <body>
        <div id="untree_co--overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="untree_co--site-main">

            <div class="owl-carousel owl-hero">

                <div class="untree_co--site-hero overlay"
                    style="background-image: url({{ asset('assets/images/slider_2.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-8">
                                <div class="site-hero-contents text-center" data-aos="fade-up">
                                    <h1 class="hero-heading">LuxtonHotel by Untree.co</h1>
                                    <div class="sub-text">
                                        <p>Another free awesome templates for Hotels and any kind of website by <a
                                                href="https://untree.co/" target="_blank"
                                                class="text-white font-weight-bold">Untree.co</a>. See our <a
                                                href="https://untree.co/license/"
                                                class="text-white font-weight-bold">license page</a> for more usage
                                            details</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="untree_co--site-hero overlay"
                    style="background-image: url({{ asset('assets/images/slider_2.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7">
                                <div class="site-hero-contents text-center" data-aos="fade-up">
                                    <h1 class="hero-heading">Enjoy Your Stay</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="untree_co--site-hero overlay"
                    style="background-image: url({{ asset('assets/images/room_1_a.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-10">
                                <div class="site-hero-contents text-center" data-aos="fade-up">
                                    <h1 class="hero-heading">Away from the Hustle and Bustle of City Life</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="untree_co--site-section float-left pb-0 featured-rooms">

                <div class="container pt-0 pb-5">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6 section-heading" data-aos="fade-up">
                            <h3 class="text-center">Modern, Luxton Hotel in Cirebon</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div align="center">
                <table width="60%">
                    <tr>
                        <td align="center">
                            <p style="font-family: Georgia, serif; font-size: 16px; line-height: 1.6;">
                                Hotel Luxton Cirebon adalah hotel modern yang terletak di pusat kota Cirebon, menawarkan kenyamanan dan kemewahan dengan berbagai fasilitas premium. 
                                Dikenal dengan desain yang elegan, hotel ini memberikan pengalaman menginap yang luar biasa, cocok untuk perjalanan bisnis maupun liburan.
                                 Nikmati berbagai fasilitas seperti kolam renang outdoor, spa, serta restoran dan bar dengan pemandangan kota yang menakjubkan,
                                  memberikan pengalaman yang menyenangkan selama menginap.


                            </p>
                            <p style="font-family: Georgia, serif; font-size: 16px; line-height: 1.6;">
                                Hotel Luxton Cirebon juga merupakan tempat ideal untuk pertemuan dan acara, 
                                dengan fasilitas yang dapat disesuaikan untuk setiap kebutuhan. Layanan antar-jemput ke Stasiun Kereta Api Cirebon yang berjarak dekat semakin memudahkan perjalanan Anda. 
                                Dengan pelayanan terbaik dalam suasana yang elegan, Hotel Luxton Cirebon adalah pilihan sempurna untuk pengalaman menginap yang memuaskan.
                            </p>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="untree_co--site-section float-left pb-0 featured-rooms">

                <div class="container pt-0 pb-5">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6 section-heading" data-aos="fade-up">
                            <h3 class="text-center">Featured Rooms</h3>
                        </div>
                    </div>
                </div>

                <div class="container-fluid pt-5">
                    <div class="suite-wrap overlap-image-1">

                        <div class="suite">
                            <div class="image-stack">
                                <div class="image-stack-item image-stack-item-top" data-jarallax-element="-30">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/images/room_1_a.jpg') }}" alt="Image"
                                        class="img-fluid pic1">
                                </div>
                                <div class="image-stack-item image-stack-item-bottom">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/images/room_1_b.jpg') }}" alt="Image"
                                        class="img-fluid pic2">
                                </div>
                            </div>
                        </div> <!-- .suite -->

                        <div class="suite-contents" data-jarallax-element="30">
                            <h2 class="suite-title">King Bedroom</h2>
                            <div class="suite-excerpt">
                                <p>A hotel is an establishment that provides paid lodging on a short-term basis.
                                    Facilities provided may range from a modest-quality mattress in a small room to
                                    large suites with bigger.</p>
                                <p><a href="#" class="readmore">Room Details</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="suite-wrap overlap-image-2">

                        <div class="suite">
                            <div class="image-stack">
                                <div class="image-stack-item image-stack-item-top">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/images/room_2_a.jpg') }}" alt="Image"
                                        class="img-fluid pic1">
                                </div>
                                <div class="image-stack-item image-stack-item-bottom" data-jarallax-element="-30">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/images/room_2_b.jpg') }}" alt="Image"
                                        class="img-fluid pic2">
                                </div>
                            </div>
                        </div>

                        <div class="suite-contents" data-jarallax-element="30">
                            <h2 class="suite-title">Queen &amp; Double Bedroom</h2>
                            <div class="suite-excerpt pr-5">
                                <p>A hotel is an establishment that provides paid lodging on a short-term basis.
                                    Facilities provided may range from a modest-quality mattress in a small room to
                                    large suites with bigger</p>
                                <p><a href="#" class="readmore">Room Details</a></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="untree_co--site-section">
                <div class="container">
                    <div class="container pt-0 pb-5">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-6 section-heading" data-aos="fade-up">
                                <h3 class="text-center">Hotel Amenities</h3>
                            </div>
                        </div>
                    </div>

                     <style>
                    .menu-kategori {
                        text-align: center;
                        padding: 10px;
                    }
                    
                    .img-categori {
                        width: 80px; /* Ukuran gambar sedang */
                        height: 80px;
                        object-fit: cover; /* Agar gambar tidak terdistorsi */
                        border-radius: 10px; /* Memberikan sedikit sudut melengkung agar lebih estetik */
                        transition: transform 0.3s ease-in-out;
                    }
                    
                    .img-categori:hover {
                        transform: scale(1.1); /* Efek hover memperbesar sedikit */
                    }
                    
                    .menu-kategori p {
                        font-size: 14px; /* Ukuran teks lebih proporsional */
                        font-weight: 600; /* Membuat teks lebih tegas */
                        color: #333; /* Warna teks agar lebih elegan */
                        margin-top: 5px;
                    }
                    </style>

                    <div class="container-fluid mt-5">
                        <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px;">
                          <h5 class="text-center" style="margin-top: 5px">KATEGORI</h5>
                        </div>
                        <div class="row justify-content-center text-center row-container mt-2">
                          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="menu-kategori">
                              <a href="#baju"><img src="{{ asset('assets/images/svg/internet.svg') }}" class="img-categori mt-3"></a>
                              <p class="mt-2">Baju</p>
                            </div>
                          </div>
                      
                          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="menu-kategori">
                              <a href="#celana"><img src="{{ asset('assets/images/svg/internet.svg') }}" class="img-categori mt-3"></a>
                              <p class="mt-2">Celana</p>
                            </div>
                          </div>
                      
                          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="menu-kategori">
                              <a href="#skirt"><img src="img/k1.jpg" class="img-categori mt-3"></a>
                              <p class="mt-2">Skirt</p>
                            </div>
                          </div>
                      
                          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="menu-kategori">
                              <a href="#dress"><img src="img/k3.jpg" class="img-categori mt-3"></a>
                              <p class="mt-2">Dress</p>
                            </div>
                          </div>
                      
                          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="menu-kategori">
                              <a href="#outer"><img src="img/y.jpg" class="img-categori mt-3"></a>
                              <p class="mt-2">Outer</p>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                    
                    

                    {{-- <div class="row custom-row-02192 align-items-stretch">
                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="media-29191 text-center h-100">
                                <div class="media-29191-icon">
                                    <img src="{{ asset('assets/images/svg/parking.svg') }}" alt="Image"
                                        class="img-fluid">
                                </div>
                                <h3>Free Self-Parking</h3>
                                <p>A hotel is an establishment that provides paid lodging on a short-term basis.
                                    Facilities provided may range from a modest-quality.</p>
                                <p>
                                <p><a href="#" class="readmore reverse">Read More</a></p>
                                </p>
                            </div>
                        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <img src="{{ asset('assets/images/svg/parking.svg') }}" 
                     class="img-categori mt-3 w-50" 
                     style="transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Free Self-Parking
                     </p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <img src="{{ asset('assets/images/svg/parking.svg') }}" 
                     class="img-categori mt-3 w-50" 
                     style="transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Free Self-Parking
                     </p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <img src="{{ asset('assets/images/svg/parking.svg') }}" 
                     class="img-categori mt-3 w-50" 
                     style="transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Free Self-Parking
                     </p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <img src="{{ asset('assets/images/svg/parking.svg') }}" 
                     class="img-categori mt-3 w-50" 
                     style="transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Free Self-Parking
                     </p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <img src="{{ asset('assets/images/svg/parking.svg') }}" 
                     class="img-categori mt-3 w-50" 
                     style="transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Free Self-Parking
                     </p>
            </div>
        </div>
    </div>
  </div>
                </div>
            </div>



            <div class="untree_co--site-section py-5 bg-body-darker cta">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h3 class="m-0 p-0">If you have any special requests, please feel free to call us. <a
                                    href="tel://+123456789012">+12.345.678.9012</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Search -->
        <div class="search-wrap">
            <a href="#" class="close-search js-search-toggle">
                <span>Close</span>
            </a>
            <div class="container">
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-md-12">
                        <form action="#">
                            <input type="search" name="s" id="s"
                                placeholder="Type a keyword and hit enter..." autocomplete="false">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
</x-layout>
