<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="back/img/profile saya.jpeg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Fachreza
                            <span class="user-level">Front-End</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">Profil Saya</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profil</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Pengaturan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Halaman</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../demo2/index.html">
                                    <span class="sub-item">Portal Berita</span>
                                </a>
                            </li>
                            <li>
                                <a href="../demo2/index.html">
                                    <span class="sub-item">Dashboard Berita</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- SIDEBAR DATA BERITA --}}
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fas fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Data Berita</h4>
                    <div class="dropdown-divider"></div>
                </li>

                {{-- SIDEBAR KATEGORI --}}
                <li class="nav-item">
                    <a href="{{route('kategori.index')}}">
                        <i class="fas fa-desktop"></i>
                        <p>Kategori</p>
                    </a>
                </li>

                {{-- SIDEBAR ARTIKEL --}}
                <li class="nav-item">
                    <a href="{{route('artikel.index')}}">
                        <i class="fas fa-newspaper"></i>
                        <p>Artikel</p>
                    </a>
                </li>

                {{-- SIDEBAR MATERI --}}
                <li class="nav-item">
                    <a href="{{route('materi.index')}}">
                        <i class="fas fa-book"></i>
                        <p>Materi</p>
                    </a>
                </li>

                {{-- SIDEBAR SLIDEBANNER --}}
                <li class="nav-item">
                    <a href="{{route('materi.index')}}">
                        <i class="fas fa-clapperboard"></i>
                        <p>Slide</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <p>Keluar</p>
                </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </li>
            </ul>
        </div>
    </div>
</div