@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Administrator</div>

                <div class="panel-body">
                    Selamat datang : <strong>{{ Auth::user()->name }}</strong><br>
                    Anda login sebagai administrator, anda bisa melakukan manajemen data.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
