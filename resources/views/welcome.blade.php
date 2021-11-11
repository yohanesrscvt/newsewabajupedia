<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Sewabajupedia</title>
    <link rel="stylesheet" href="{{asset('/css/welcome.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    @include('master.header')
    {{-- content --}}
    <div class="box">
        <div class="block"></div>
        <img src="{{asset('/asset/pexels-tembela-bohle-1884581.jpg')}}" alt="pexels-tembela-bohle-1884581.jpg">
        <div class="box-text">
            <p class="par" style="font-size: 30px;">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam dicta impedit tempore. Iure vel omnis perferendis nihil dolor voluptate neque nulla exercitationem? Aliquid perspiciatis ullam consectetur nesciunt iste quos mollitia?
            </p>
            <a class="btn btn-success btn-block" href="{{ route('show-login') }}" style="font-size: 20px;">Coba Sekarang</a><br>
            Photo by <strong>Tembela Bohle</strong> from Pexels
        </div>
    </div>
    {{-- endcontent --}}
    @include('master.footer')
</body>
</html>