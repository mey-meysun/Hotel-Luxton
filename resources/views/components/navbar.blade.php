<div class="untree_co--site-wrap">
    <nav class="untree_co--site-nav js-sticky-nav py-2 
        @if (Request::is('profil')) bg-white shadow-sm text-dark @endif">
        <div class="container d-flex align-items-center">
            <div class="logo-wrap">
                <a href="/" class="untree_co--site-logo @if (Request::is('profil')) text-dark @endif">LuxtonHotel</a>
            </div>
            <div class="site-nav-ul-wrap text-center d-none d-lg-block">
                <ul class="site-nav-ul js-clone-nav">
                    <li class="active"><a href="/" class="@if (Request::is('profil')) text-dark @endif">Beranda</a></li>
                    <li class="has-children">
                        <a href="/tipekamar" class="@if (Request::is('profil')) text-dark @endif">Tipe Kamar</a>
                        <ul class="dropdown">
                            <li><a href="#" class="@if (Request::is('profil')) text-dark @endif">Standard</a></li>
                            <li><a href="#" class="@if (Request::is('profil')) text-dark @endif">Superior</a></li>
                            <li><a href="#" class="@if (Request::is('profil')) text-dark @endif">Deluxe</a></li>
                            <li><a href="#" class="@if (Request::is('profil')) text-dark @endif">Executive</a></li>
                        </ul>
                    </li>
                    <li><a href="/fasilitas" class="@if (Request::is('profil')) text-dark @endif">Fasilitas</a></li>
                    <li><a href="gallery.html" class="@if (Request::is('profil')) text-dark @endif">Ulasan</a></li>
                    <li><a href="contact.html" class="@if (Request::is('profil')) text-dark @endif">Tentang Kami</a></li>
                </ul>
            </div>
            <div class="icons-wrap text-md-right">
                <ul class="d-flex align-items-center">
                    <li style="list-style: none">
                        <a href="/profil"><i class="bi bi-person-circle mr-2 fs-5 @if (Request::is('profil')) text-dark @endif"></i></a>
                    </li>
                </ul>
            </div>
  
            <!-- Mobile Toggle -->
            <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>
        </div>
    </nav>
</div>
