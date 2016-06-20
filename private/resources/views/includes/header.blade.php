<div class="container header">
    <a href="{{url('/')}}">
        <div class="bg-smk" style="">
            <div class="logo-doang">
                <span class="helper"></span>
                <!-- <img src="assets/dist/img/logo_pembda.png" class="logo-smk"> -->
                {{Html::image('assets/dist/img/logo_pembda.png', 'Logo SMK Pembda Nias', array('class' => 'logo-smk')) }}
            </div>
            <div class="smk-caption">
                <!-- <img src="assets/dist/img/header/smk.png" class="logo-smk"> -->
                {{ Html::image('assets/dist/img/header/smk.png', 'SMKS Pembda Nias', array('class' => 'logo-smk')) }}
            </div>
        </div>
    </a>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#"><img src="assets/dist/img/header6.png" class="img-responsive logosmk" alt="SMKS Pembda Nias"></a>-->
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-left">
                <ul class="nav navbar-nav">
                    <li class="menu-home"><a href="{{url('/')}}"><i class="fa fa-home fa-fw"></i>Home</a></li>
                    <li class="dropdown menu-profil">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list fa-fw"></i>Profil <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="menu-profil-sekolah"><a href="{{ url('profil/sekolah') }}">Sekolah</a></li>
                            <li class="menu-profil-visi-misi"><a href="{{ url('profil/visi-misi') }}">Visi & Misi</a></li>
                            <li class="menu-profil-jurusan"><a href="{{ url('profil/jurusan') }}">Jurusan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown menu-registrasi">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-check-square-o fa-fw"></i>Registrasi <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="menu-registrasi-ppdb"><a href="{{ url('registrasi/ppdb') }}">PPDB</a></li>
                            <li class="menu-registrasi-siswa"><a href="{{ url('registrasi/siswa') }}">Siswa</a></li>
                            <li class="menu-registrasi-alumni"><a href="{{ url('registrasi/alumni') }}">Alumni</a></li>
                        </ul>
                    </li>
                    <li class="menu-galeri"><a href="{{ url('galeri') }}"><i class="fa fa-camera fa-fw"></i> Galeri</a></li>
                    <li class="menu-berita"><a href="{{ url('berita') }}"><i class="fa fa-newspaper-o fa-fw"></i> Berita</a></li>
                    <li class="menu-login"><a href="{{ url('login') }}"><i class="fa fa-user fa-fw"></i>Login</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</div>