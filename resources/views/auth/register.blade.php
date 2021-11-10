<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    @include('master.header')
    <div class="content">
        <div class="form-list">
            <div class="judul-register">
                <h1>REGISTER</h1>
            </div>
            
            <!-- modified form -->
            <form action="{{ route('do-register') }}" method="post" class="form"> 
                @csrf
                <div class="name">
                    <label for="name">Nama Lengkap</label>
                    <br>
                    <input type="text" name="name" id="name" required>
                </div>

                <div class="email">
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="password">
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" id="password" required>
                </div>

                <button id="submit-button" type="submit" >Register</button>
            </form>

            <!-- alert message -->
            @if ($errors->any())
                <script>
                    swal("Sorry", 
                        @foreach ($errors->all() as $error)
                            "{{ $error }}"
                        @endforeach
                    , "error");
                </script>
            @endif
            <div class="already-register">
                <p>Sudah memiliki akun?</p>
                <a href="">Masuk Sekarang</a>
            </div>
        </div>    
    </div>
    @include('master.footer')
</body>
</html>