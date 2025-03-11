<x-layout>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        
        <div class="container text-center mt-5 pt-4">
            <h2>Tentang Luxton</h2>
            <p>Kemewahan, Kenyamanan, & Keindahan dalam Satu Tempat</p>
        
            <h3>Sejarah Luxton</h3>
            <p>Luxton telah menjadi simbol kemewahan dan keramahan sejak berdiri pada [tahun]. Dibangun dengan standar internasional, kami memberikan pengalaman terbaik bagi setiap tamu.</p>
        
            <img src="{{ asset('img/hotel-luxton.jpg') }}" alt="Hotel Luxton" class="img-fluid rounded my-3">
        
            <h3>Keunggulan Kami</h3>
            <div class="row">
                <div class="col-md-4">
                    <p>Infinity Pool</p>
                </div>
                <div class="col-md-4">
                    <p>Gourmet Dining</p>
                </div>
                <div class="col-md-4">
                    <p>Spa & Wellness</p>
                </div>
            </div>
        </div>
            
</x-layout>
