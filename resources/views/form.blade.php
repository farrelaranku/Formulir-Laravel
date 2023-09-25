<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="public/app.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Form Simple</title>
</head>
<body style="background-color:blue; font-family: Verdana; >
    <div class="container">
                    <div class="position-absolute top-50 start-50 translate-middle bg-primary bg-gradient rounded">
                        <form method="POST" action="/form" enctype="multipart/form-data">
                            @csrf
                            <div class="text-center mt-2">
                                <h2 style="color:white;">Form Mahasiswa</h2>
                            </div>

                            <div class="form-group mt-3 px-4" >
                                <label for="nama" style="color:white;">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                                @error('nama')
                                <div class="text-dark">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group mt-3 px-4" >
                                <label for="nrp"  style="color:white;">NRP:</label>
                                <input type="text" class="form-control" id="nrp" name="nrp">
                                @error('nrp')
                                <div class="text-dark">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group mt-3 px-4" >
                                <label for="departemen"  style="color:white;">Departemen:</label>
                                <input type="text" class="form-control" id="departemen" name="departemen">
                                @error('departemen')
                                <div class="text-dark">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group mt-3 px-4" >
                                <label for="angka_khusus"  style="color:white;">Angka Khusus:</label>
                                <input type="float" class="form-control" id="angka_khusus" name="angka_khusus">
                                @error('angka_khusus')
                                <div class="text-dark">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group mt-3 px-4" >
                                <label for="gambar"  style="color:white;">Upload Gambar:</label> <br>
                                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                                @error('gambar')
                                <div class="text-dark">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-warning mt-3 mb-3 mx-auto d-block">Submit</button>
                        </form>
               
    </div>
</body>
</html>