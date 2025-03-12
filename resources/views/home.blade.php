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
                                    <h1 class="hero-heading">LuxtonHotel</h1>
                                    <div class="sub-text">
                                        <p><a
                                                href="https://untree.co/" target="_blank"
                                                class="text-white font-weight-bold"></a> <a
                                                href="https://untree.co/license/"
                                                class="text-white font-weight-bold"></a> </p>
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
                                Dengan pelayanan terbaik dalam suasana yang elegan, Hotel Luxton Cirebon adalah pilihan sempurna untuk pengalaman menginap yang memuaskan.
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

                <section class="room-list">
                    <div class="room">
                        <div class="room-image">
                            <img src="{{ asset('assets/images/kamar2.jpg') }}" alt="Standard Room">
                        </div>
                        <div class="room-info">
                            <h2>Standard Room</h2>
                            <p>Kamar dengan desain simpel dan nyaman, cocok untuk Anda yang mencari tempat menginap dengan suasana tenang dan menyenangkan.</p>
                
                            <div class="amenities">
                                <button class="toggle-btn">AMENITIES ▼</button>
                                <ul class="amenities-list">
                                    <li>TV 42 Inch</li>
                                    <li>AC & Pemanas Ruangan</li>
                                    <li>WiFi Gratis</li>
                                    <li>Shower Air Panas</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="room">
                        <div class="room-image">
                            <img src="{{ asset('assets/images/kamar1.jpg') }}" alt="Superior Room">
                        </div>
                        <div class="room-info">
                            <h2>Superior Room</h2>
                            <p>Menawarkan ruang lebih luas dengan sentuhan desain yang modern dan elegan. 
                                Pilihan yang tepat bagi tamu yang menginginkan kenyamanan ekstra selama menginap.</p>
                
                            <div class="amenities">
                                <button class="toggle-btn">AMENITIES ▼</button>
                                <ul class="amenities-list">
                                    <li>TV 42 Inch</li>
                                    <li>AC & Pemanas Ruangan</li>
                                    <li>WiFi Gratis</li>
                                    <li>Shower Air Panas</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="room">
                        <div class="room-image">
                            <img src="{{ asset('assets/images/kamar3.jpg') }}" alt="Deluxe Room">
                        </div>
                        <div class="room-info">
                            <h2>Deluxe Room</h2>
                            <p>Menghadirkan pengalaman menginap yang lebih mewah dengan suasana yang lebih eksklusif. 
                                Cocok untuk tamu yang menginginkan keleluasaan dan kenyamanan lebih.</p>

                            <div class="amenities">
                                <button class="toggle-btn">AMENITIES ▼</button>
                                <ul class="amenities-list">
                                    <li>TV 42 Inch</li>
                                    <li>AC & Pemanas Ruangan</li>
                                    <li>WiFi Gratis</li>
                                    <li>Shower Air Panas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                
                    <div class="room">
                        <div class="room-image">
                            <img src="{{ asset('assets/images/kamarr.jpg') }}" alt="Executive Room">
                        </div>
                        <div class="room-info">
                            <h2>Executive Room</h2>
                            <p>Pilihan terbaik bagi tamu yang menginginkan kemewahan dan eksklusivitas. 
                                Dengan desain elegan dan ruang yang luas, kamar ini memberikan pengalaman menginap yang istimewa.</p>
                
                            <div class="amenities">
                                <button class="toggle-btn">AMENITIES ▼</button>
                                <ul class="amenities-list">
                                    <li>TV 50 Inch</li>
                                    <li>Mini Bar</li>
                                    <li>Shower & Bathtub</li>
                                    <li>WiFi Kecepatan Tinggi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>                
                
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
                <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                    <img src="{{ asset('assets/images/pool.jpg') }}" 
                         class="img-categori mt-3" 
                         style="width: 80px; transition: transform 0.3s ease-in-out;" 
                         onmouseover="this.style.transform='scale(1.1)'" 
                         onmouseout="this.style.transform='scale(1)'">
                </div>
                <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                   color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                  Kolam Renang
                </p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                <img src="{{ asset('assets/images/restaurant.png') }}" 
                class="img-categori mt-3" 
                style="width: 90px; transition: transform 0.3s ease-in-out;" 
                onmouseover="this.style.transform='scale(1.1)'" 
                onmouseout="this.style.transform='scale(1)'">
                </div>
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                    Restoran
                     </p>
            </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                <img src="{{ asset('assets/images/svg/partners.svg') }}" 
                class="img-categori mt-3" 
                style="width: 70px; transition: transform 0.3s ease-in-out;" 
                onmouseover="this.style.transform='scale(1.1)'" 
                onmouseout="this.style.transform='scale(1)'">   
                </div>        
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                    Ruang Pertemuan
                     </p>
            </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                <img src="{{ asset('assets/images/spa1.jpg') }}" 
                     class="img-categori mt-3" 
                     style="width: 80px; transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                </div>
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Spa
                     </p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                    <img src="{{ asset('assets/images/fitness2.png') }}" 
                         class="img-categori mt-3" 
                         style="width: 100px; transition: transform 0.3s ease-in-out;" 
                         onmouseover="this.style.transform='scale(1.1)'" 
                         onmouseout="this.style.transform='scale(1)'">
                </div>
                <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                   color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                  Pusat Kebugaran
                </p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                    <img src="{{ asset('assets/images/masjid2.png') }}" 
                         class="img-categori mt-3" 
                         style="width: 100px; transition: transform 0.3s ease-in-out;" 
                         onmouseover="this.style.transform='scale(1.1)'" 
                         onmouseout="this.style.transform='scale(1)'">
                </div>
                <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                   color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                  Mushollah
                </p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                    <img src="{{ asset('assets/images/taman.png') }}" 
                         class="img-categori mt-3" 
                         style="width: 90px; transition: transform 0.3s ease-in-out;" 
                         onmouseover="this.style.transform='scale(1.1)'" 
                         onmouseout="this.style.transform='scale(1)'">
                </div>
                <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                   color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                  Taman
                </p>
            </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                    <img src="{{ asset('assets/images/svg/parking.svg') }}" 
                         class="img-categori mt-3" 
                         style="width: 90px; transition: transform 0.3s ease-in-out;" 
                         onmouseover="this.style.transform='scale(1.1)'" 
                         onmouseout="this.style.transform='scale(1)'">
                </div>
                <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                   color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                  Parkir Gratis
                </p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                <img src="{{ asset('assets/images/svg/wifi.svg') }}" 
                     class="img-categori mt-3" 
                     style="width: 70px; transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                </div>
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Akses Internet Gratis.
                     </p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                <img src="{{ asset('assets/images/svg/washing-machine.svg') }}" 
                     class="img-categori mt-3" 
                     style="width: 70px; transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                </div>
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                    Layanan Laundry
                     </p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori" style="text-align: center; position: relative; display: flex; flex-direction: column; align-items: center;">
                <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                <img src="{{ asset('assets/images/svg/elevator.svg') }}" 
                     class="img-categori mt-3" 
                     style="width: 70px; transition: transform 0.3s ease-in-out;" 
                     onmouseover="this.style.transform='scale(1.1)'" 
                     onmouseout="this.style.transform='scale(1)'">
                </div>
                     <p style="margin-top: 8px; font-size: 18px; font-weight: 700; 
                     color: #000; text-align: center; font-family: 'Playfair Display', serif;">
                     Lift
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
                    
                        .info {
    flex: 1;
    padding: 30px 40px;
    background: rgba(255, 255, 255, 0.92);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
    border-radius: 10px;
    border-left: 4px solid #E0D9C8;
    border-top: 4px solid #E0D9C8;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: absolute;
    right: 0;
    bottom: 0;
    width: 42%; /* Lebar dikurangi dari 50% ke 45% supaya tidak terlalu nutupin gambar */
    min-height: 320px;
    backdrop-filter: blur(5px);
}

/* Untuk mode reverse */
.reverse .info {
    left: 0;
    right: auto;
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
/* Tata letak terbalik untuk div kedua */
.reverse {
    display: flex; /* Pastikan tetap flex */
    flex-direction: row-reverse; /* Balik posisi gambar & teks */
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
                            <h2>KOLAM RENANG</h2>
                            <p>Setelah seharian menjelajahi Cirebon atau menghadiri pertemuan penting, 
                                bersantailah di kolam renang Hotel Luxton Cirebon. 
                                Nikmati kesegaran berenang di air yang tenang sambil menikmati pemandangan kota yang menakjubkan.
                                Ini adalah tempat yang sempurna untuk melepas penat dan menikmati suasana.
                            </p>
                            <p class="hours">Hours: 6:00 a.m. - 8:00 p.m.</p>
                        </div>
                    </div>

                    <div class="pool-section reverse">
                        <div class="image-container">
                            <img src="{{ asset('assets/images/restoran.jpg') }}" alt="Pool View">
                        </div>
                        <div class="info">
                            <h2>RESTORAN</h2>
                            <p>Nikmati hidangan lezat di restoran Hotel Luxton Cirebon dengan suasana elegan dan pemandangan kota yang menawan, 
                                restoran ini menyajikan hidangan lokal dan internasional yang menggugah selera.
                                Sempurna untuk bersantap atau bersantai.</p>
                            <p class="hours">Hours: 6:00 a.m. - 8:00 p.m.</p>
                        </div>
                    </div>

                    <div class="pool-section">
                        <div class="image-container">
                            <img src="{{ asset('assets/images/ruangmetting.jpg') }}" alt="Pool View">
                        </div>
                        <div class="info">
                            <h2>RUANG PERTEMUAN</h2>
                            <p>Adakan pertemuan bisnis yang nyaman dan profesional di meeting room Hotel Luxton Cirebon. 
                                Dilengkapi dengan fasilitas modern dan suasana elegan, ruangan ini cocok untuk rapat, seminar, atau acara khusus. 
                                Lokasi strategis dan layanan terbaik memastikan setiap pertemuan berjalan lancar dan sukses.</p>
                            <p class="hours">Hours: 6:00 a.m. - 8:00 p.m.</p>
                        </div>
                    </div>

                    <div class="pool-section reverse">
                        <div class="image-container">
                            <img src="{{ asset('assets/images/spa4.jpeg') }}" alt="Pool View">
                        </div>
                        <div class="info">
                            <h2>SPA</h2>
                            <p>Rileks dan segarkan diri di spa Hotel Luxton Cirebon.
                                Nikmati perawatan menenangkan dengan suasana nyaman dan layanan profesional. 
                                Pilihan terapi yang tersedia membantu meredakan stres dan mengembalikan energi, 
                                sempurna untuk melepas penat setelah hari yang sibuk.</p>
                            <p class="hours">Hours: 6:00 a.m. - 8:00 p.m.</p>
                        </div>
                    </div>

                    <div class="pool-section">
                        <div class="image-container">
                            <img src="{{ asset('assets/images/mushollah.jpeg') }}" alt="Pool View">
                        </div>
                        <div class="info">
                            <h2>MUSHOLLAH</h2>
                            <p>Laksanakan ibadah dengan nyaman di musholla Hotel Luxton Cirebon. 
                                Dengan suasana tenang dan fasilitas yang bersih,
                                 musholla ini menyediakan tempat yang ideal untuk berdoa dan beristirahat sejenak di tengah aktivitas Anda.
                            </p>
                            <p class="hours">Hours: 6:00 a.m. - 8:00 p.m.</p>
                        </div>
                    </div>

                    <div class="pool-section reverse">
                        <div class="image-container">
                            <img src="{{ asset('assets/images/fitness.jpg') }}" alt="Pool View">
                        </div>
                        <div class="info">
                            <h2>PUSAT KEBUGARAN</h2>
                            <p>Jaga kebugaran Anda di pusat kebugaran Hotel Luxton Cirebon. 
                                Dilengkapi dengan peralatan modern dan suasana nyaman, tempat ini ideal untuk berolahraga, 
                                baik kardio maupun latihan kekuatan. Nikmati pengalaman berolahraga yang menyegarkan dengan fasilitas terbaik.</p>
                            <p class="hours">Hours: 6:00 a.m. - 8:00 p.m.</p>
                        </div>
                    </div>     
                    
                    <div class="pool-section">
                        <div class="image-container">
                            <img src="{{ asset('assets/images/taman1.jpeg') }}" alt="Pool View">
                        </div>
                        <div class="info">
                            <h2>Taman</h2>
                            <p>Nikmati kesejukan dan keindahan di taman Hotel Luxton Cirebon.
                                Dikelilingi oleh pepohonan hijau dan suasana yang menenangkan, tempat ini ideal untuk bersantai, berjalan santai, atau berolahraga ringan.
                                Rasakan pengalaman relaksasi yang menyegarkan di tengah suasana asri yang menenangkan.
                            </p>
                            <p class="hours">Hours: 6:00 a.m. - 8:00 p.m.</p>
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