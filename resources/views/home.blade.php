<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/kategori.css')}}">
</head>
<body>
    @include('master.header')
    @include('master.navbar')
    <div class="content">
        <div class="kategori-title">
            <h1>Kategori</h1>
        </div>
        <div class="category-view">
            <div class="category-list">
                <a href="">
                    <img src="{{asset('asset/kategori/party_dress.jpg')}}" alt="">
                </a>
                <h6>Pesta</h6>
            </div>
            <div class="category-list">
                <a href="">
                    <img src="{{asset('asset/kategori/formal.jpg')}}" alt="">
                </a>
                <h6>Formal</h6>
            </div>
            <div class="category-list">
                <a href="">
                    <img src="{{asset('asset/kategori/adat.jpg')}}" alt="">
                </a>
                <h6>Adat</h6>
            </div>
            <div class="category-list">
                <a href="">
                    <img src="{{asset('asset/kategori/batik.jpg')}}" alt="">
                </a>
                <h6>Batik</h6>
            </div>
            <div class="category-list">
                <a href="">
                    <img src="{{asset('asset/kategori/cosplay.jpg')}}" alt="">
                </a>
                <h6>Cosplay</h6>
            </div>
            <div class="category-list">
                <a href="">
                    <img src="{{asset('asset/kategori/dress.jpg')}}" alt="">
                </a>
                <h6>Gaun</h6>
            </div>
            <div class="category-list">
                <a href="">
                    <img src="{{asset('asset/kategori/jas.jpg')}}" alt="">
                </a>
                <h6>Jas</h6>
            </div>
            <div class="category-list">
                <a href="">
                    <img src="{{asset('asset/kategori/baby.jpg')}}" alt="">
                </a>
                <h6>Baby</h6>
            </div>
            <div class="category-list">
                <a href="">
                    Lainnya jika anda belum menemukan kategori yang sesuai
                </a>
            </div>
        </div>
    </div>
    @include('master.footer')
</body>
</html>