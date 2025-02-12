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
                        
<div class="container-fluid mt-3">
    <div class="row justify-content-center text-center row-container mt-2">
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
                <img src="{{ asset('assets/images/svg/wifi.svg') }}" 
                     class="img-categori mt-3 w-50" 
                     style="transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Free Internet Acces
                     </p>
            </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <img src="{{ asset('assets/images/svg/elevator.svg') }}" 
                     class="img-categori mt-3 w-50" 
                     style="transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Elevators
                     </p>
            </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <img src="{{ asset('assets/images/svg/partners.svg') }}" 
                     class="img-categori mt-3 w-50" 
                     style="transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Meeting rooms
                     </p>
            </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <img src="{{ asset('assets/images/svg/washing-machine.svg') }}" 
                     class="img-categori mt-3 w-50" 
                     style="transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Laundry and Valet service
                     </p>
            </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <img src="{{ asset('assets/images/swimm.png') }}" 
                     class="img-categori mt-3 w-50" 
                     style="transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Pool
                     </p>
            </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <img src="{{ asset('assets/images/restaurant.png') }}" 
                     class="img-categori mt-3 w-50" 
                     style="transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     On-Site Restaurant
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


            <div class="untree_co--site-section">
                <div class="container">
                    <div class="container pt-0 pb-5">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-6 section-heading" data-aos="fade-up">
                                <h3 class="text-center"> Our Hotel</h3>
                            </div>
                        </div>
                    </div>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f8f8f8;
                            margin: 0;
                            padding: 0;
                        }
                    
                        /* Container utama */
                        .pool-section {
                            display: flex;
                            align-items: flex-end;
                            max-width: 1100px;
                            margin: 50px auto;
                            position: relative;
                        }
                    
                        /* Gambar */
                        .image-container {
                            flex: 1.9; /* Biar gambar lebih dominan */
                            max-width: 75%; /* Lebar lebih besar dari sebelumnya */
                        }
                    
                        .image-container img {
                            width: 100%;
                            height: 480px; /* Diperpanjang lagi */
                            object-fit: cover;
                            display: block;
                            border-radius: 10px;
                        }
                    
                        /* Bagian teks */
                        .info {
                            flex: 1;
                            padding: 40px 50px;
                            background: white;
                            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
                            border-radius: 10px;
                            border-left: 4px solid #E0D9C8; /* Hiasan kiri */
                            border-top: 4px solid #E0D9C8; /* Hiasan atas */
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            position: absolute;
                            right: 0;
                            bottom: 0; /* Sejajarkan bawahnya dengan gambar */
                            width: 42%;
                        }
                    
                        /* Hiasan tambahan di pojok kanan atas */
                        .info::before {
                            content: "";
                            position: absolute;
                            top: 15px;
                            right: 15px;
                            width: 80px;
                            height: 4px;
                            background-color: #E0D9C8; /* Warna gold-ish */
                        }
                    
                        /* Hiasan tambahan di pojok kiri bawah */
                        .info::after {
                            content: "";
                            position: absolute;
                            bottom: 15px;
                            left: 15px;
                            width: 50px;
                            height: 4px;
                            background-color: #E0D9C8;
                        }
                    
                        /* Judul */
                        .info h2 {
                            font-size: 24px;
                            margin-bottom: 15px;
                            color: #333;
                        }
                    
                        /* Deskripsi */
                        .info p {
                            font-size: 16px;
                            color: #666;
                            line-height: 1.6;
                            margin-bottom: 10px;
                        }
                    
                        /* Jam operasional */
                        .hours {
                            font-weight: bold;
                            color: #444;
                            margin-top: 10px;
                        }
                    
                        /* Responsif */
                        @media (max-width: 900px) {
                            .pool-section {
                                flex-direction: column;
                                align-items: center;
                            }
                    
                            .image-container {
                                max-width: 100%;
                            }
                    
                            .info {
                                max-width: 90%;
                                position: static;
                                text-align: center;
                                padding: 30px;
                            }
                        }
                    </style>                    
                    
                    <div class="pool-section">
                        <div class="image-container">
                            <img src="{{ asset('assets/images/swim.jpg') }}" alt="Pool View">
                        </div>
                        <div class="info">
                            <h2>POOL</h2>
                            <p>After exploring Jakarta or having a busy day of meetings, relax at the outdoor hotel swimming pool at Park Hyatt Jakarta. 
                               Take a refreshing swim in the tranquil waters. The pool is on the 35th floor, next to the fitness center, and offers a sun deck and city views. 
                               Feel free to visit before or after your workout.</p>
                            <p class="hours">Hours: 6:00 a.m. - 8:00 p.m.</p>
                        </div>
                    </div>

                    <div class="pool-section">
                        <div class="image-container">
                            <img src="{{ asset('assets/images/ruangmetting.jpg') }}" alt="Pool View">
                        </div>
                        <div class="info">
                            <h2>Meeting Rooms</h2>
                            <p>Elevate your casual business meeting at the Library on level 23. 
                                Our lavish and cozy working space on the hotel lobby level caters to all your business requirements. 
                                Discover a comprehensive range of amenities in the Library, 
                                including high-speed Internet access and printing services.</p>
                            <p class="hours">Hours
                                From 10 am to 10 pm</p>
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
</x-layout >