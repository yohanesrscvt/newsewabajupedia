<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    @include('master.header')
    <div class="content">
        <div class="form-list">
            <div class="judul-login">
                <h1>LOGIN</h1>
            </div>
            <!-- modified form -->
            <form action="{{ route('do-login') }}" method="post" class="form">
                @csrf
                <div class="email">
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" required value="{{ @old('email') }}">
                </div>

                <div class="password">
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" id="password" required value="{{ @old('password') }}">
                </div>
                
                <button id="submit-button" type="submit" >Login</button>
            </form>

            <!-- alert message -->
            @if(Session::get('fail'))
                <script>
                    swal("Sorry", "{{Session::get('fail')}}", "error");
                </script>
            @elseif(Session::get('success'))
                <script>
                    swal("Horay", "{{Session::get('success')}}", "success");
                </script>
            @endif
            
            <div class="already-login">
                <p>Belum memiliki akun?</p>
                <a href="">Daftar Sekarang</a>
            </div>
        </div>
    </div>
    @include('master.footer')
</body>
</html>