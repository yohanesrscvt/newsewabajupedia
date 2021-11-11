<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agent Page</title>
    <link rel="stylesheet" href="{{ asset('css/agen.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    @include('master.header')
    @include('master.navbar')
    <div class="content2">
        <div class="list-clothes">
            <div class="header-list">
                <p>Agent Page</p>
                <a href="{{ route('show-add-clothes') }}" class="btn btn-info">Add Product</a>
            </div>

            <div class="list-per-clothes">
                <!-- looping here -->
                @foreach($clothes as $c)
                <div class="clothes-card">
                    <img src="{{asset('storage/' . $c->picture_path)}}" alt="" height="50px" width="50px">
                    <div class =card2>
                        <div class="card-text">
                            <p>{{$c->name}}</p>
                            <p class="price">Rp. {{$c->price}}/hari</p>
                            <div class="stars">
                                &#9733; {{$c->rating}} of 5
                            </div>
                        </div>
                        <div class ="edit-delete">
                            <a href=""class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                    <a href="" class="btn btn-block btn-secondary">Diskusi dengan penyewa</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('master.footer')
</body>
</html>