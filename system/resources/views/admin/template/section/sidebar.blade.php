<ul class="metismenu" id="menu">
    <li><a href="{{ url('administrator') }}" aria-expanded="false"><i class="fas fa-home"></i><span
                class="nav-text">Dashboard</span></a></li>

    <li class="nav-label first">Main Menu</li>
    {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-single-copy-06"></i><span
                class="nav-text">Manajemen Kamar</span></a>
        <ul aria-expanded="false">
            <li><a href="#">Daftar KamarTersedia</a></li>
            <li><a href="#">Bokingan</a></li>
        </ul>
    </li> --}}

    @if (session('admin')->role == 'Administrator')
        <li>
            <a href="{{ url('administrator/penginapan') }}" aria-expanded="false">
                <i class="fas fa-city"></i>
                <span class="nav-text">Penginapan</span>
            </a>
        </li>
        <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="fas fa-users"></i>
                <span class="nav-text">Manajemen User</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ url('administrator/admin') }}">Administrator</a></li>
            </ul>
        </li>
    @elseif(session('admin')->role == 'Penginapan')
        <li>
            <a href="{{ url('administrator/kamar') }}" aria-expanded="false">
                <i class="fas fa-hotel"></i>
                <span class="nav-text">Kamar</span>
            </a>
        </li>
        <li>
            <a href="{{ url('administrator/galeri') }}" aria-expanded="false">
                <i class="fas fa-images"></i>
                <span class="nav-text">Galeri</span>
            </a>
        </li>

        <li>
            <a href="{{ url('administrator/reservasi') }}" aria-expanded="false">
                <i class="fas fa-calendar-check"></i>
                <span class="nav-text">Reservasi</span>
            </a>
        </li>

        <li>
            <a href="{{ url('administrator/pembayaran') }}" aria-expanded="false">
                <i class="fas fa-dollar-sign"></i>
                <span class="nav-text">Pembayaran</span>
            </a>
        </li>

        <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="fas fa-users"></i>
                <span class="nav-text">Manajemen User</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ url('administrator/konsumen') }}">Konsumen</a></li>
            </ul>
        </li>
    @endif
</ul>