<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
             
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> DATA MASTER<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('kelas.index') }}">Data Kelas</a>
                    </li>
                    <li>
                        <a href="{{ route('jurusan.index') }}">Data Jurusan</a>
                    </li>
                    <li>
                        <a href="{{ route('siswa.index') }}">Data Siswa</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> STAF & GURU<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('jabatan.index') }}">Data Jabatan</a>
                    </li>
                    <li>
                        <a href="{{ route('pelajaran.index') }}">Data Pelajaran</a>
                    </li>
                    <li>
                        <a href="{{ route('guru.index') }}">Data Guru</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="{{ route('kejuruan.index') }}"><i class="fa fa-shopping-cart"></i> Kejuruan</a>
            </li>

            <li>
                <a href="{{ route('kejuruan.index') }}"><i class="fa fa-shopping-cart"></i> Nilai</a>
            </li>

            <li>
                <a href="{{ route('post.index') }}"><i class="fa fa-pencil"></i> Artikel</a>
            </li>

            <li>
                <a href="empty.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->