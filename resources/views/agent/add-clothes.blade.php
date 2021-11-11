<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Clothes</title>
    <link rel="stylesheet" href="{{asset('css/editperpakaian.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    @include('master.header')
    @include('master.navbar')
    <form action="{{ route('do-add-clothes') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="edit-clothes">
            <div class ="header-edit">
                <p>Add Pakaian</p>
            </div>
            <div class="form-new">
                <div class="form2">
                    <label for="cloth-name">Nama Pakaian</label>
                    <br>
                    <input type="text" name="nama" id="cloth-name" required>
                </div>
                <div class="form2">
                    <label for="cloth-desc">Deskripsi Pakaian</label>
                    <br>
                    <textarea name="deskripsi" id="cloth-desc" required style="resize:none;"></textarea>
                </div>
                <div class="form2">
                    <label for="cloth-price">Harga Sewa Pakaian</label>
                    <br>
                    <input type="number" name="harga" id="cloth-price" required>
                </div>
                <div class="form2">
                    <label for="cloth-pict">Gambar</label>
                    <br>
                    <input type="file" name="gambar" id="cloth-pict" required>
                </div>
                <div class="form2">
                    <label for="stock">Stock</label>
                    <br>
                    <input type="number" name="stock" id="stock" required>
                </div>
                <div class="form2">
                    <label for="kategori">Kategori</label><br>
                    <select name="kategori" id="kategori" required>
                        @foreach($category as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form2">
                    <label for="size">Ukuran Pakaian</label>
                    <input type="text" name="size" id="size" required>
                </div>
            </div>
            <input type="submit" value="+ Add Data" class="btn btn-success btn-block">
        </div>
    </form>
    @include('master.footer')
</body>
</html>