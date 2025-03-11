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
            <p>Luxton adalah sebuah hotel yang mengutamakan kenyamanan dan layanan berkualitas bagi para tamunya. Dengan desain modern dan fasilitas lengkap, Luxton menawarkan pengalaman menginap yang mewah dan menyenangkan, cocok untuk wisatawan maupun pebisnis.</p>
            <p>Hotel ini menyediakan berbagai tipe kamar yang dirancang dengan elegan, dilengkapi dengan fasilitas seperti tempat tidur yang nyaman, akses Wi-Fi cepat, TV layar datar, dan kamar mandi modern. Selain itu, Luxton juga memiliki restoran dengan pilihan menu lezat, ruang pertemuan untuk kebutuhan bisnis atau acara, serta area rekreasi seperti kolam renang dan pusat kebugaran.</p>
            <p>Dengan pelayanan yang ramah dan profesional, Luxton berkomitmen untuk memberikan pengalaman menginap yang tak terlupakan bagi setiap tamunya.</p>
            
            <h3 class="mt-5">Fasilitas Unggulan Luxton</h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/ruangmetting.jpg') }}" class="img-fluid rounded" alt="Infinity Pool">
                    <p>Ruang Meeting</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/restoran.jpg') }}" class="img-fluid rounded" alt="Gourmet Dining">
                    <p>Restoran</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/fitness.jpg') }}" class="img-fluid rounded" alt="Spa & Wellness">
                    <p>Fitnes & Gym</p>
                </div>
            </div>
        </div>
</x-layout>
