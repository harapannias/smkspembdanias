@extends('template.index')
@section('title', 'Profil Sekolah')
@section('menu', 'menu-profil, .menu-profil-sekolah')
@section('content')
<header class="page-header">
    <h1 class="entry-title"><a href="#">Profil SMK Pembda Nias</a></h1>
</header>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <tbody>
            <tr>
                <td>Alamat</td><td>Jl. Pelita No.69 Kota Gunungsitoli</td>
            </tr>
            <tr>
                <td>Jenis Jurusan</td><td>TKJ, TAV, TKR, TGB</td>
            </tr>
            <tr>
                <td>Jumlah Ruangan</td><td>14 Ruangan</td>
            </tr>
            <tr>
                <td>Jumlah Guru</td><td>42 Orang</td>
            </tr>
            <tr>
                <td>Jumlah Siswa</td><td>824 Orang</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection