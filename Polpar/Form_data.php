<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"x  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Polpar ( Polibatam Parkir ) </title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <h1 style="margin-left:38%">Form User Polpar</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="data.php" method="POST">
                    <div class="form-group">
                        <label for="UID">UID</label>
                        <input type="text" class="form-control" id="id" name="id" aria-describedby="" />
                        <small id="" class="form-text text-muted">Kolom diisi secara Manual</small>
                    </div>
                    <div class="form-group">
                        <label for="Name">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <small id="" class="form-text text-muted">Silahkan isi nama anda</small>
                    </div>
                    <div class="form-group">
                        <label for="NIM">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                        <small id="" class="form-text text-muted">Silahkan isi nim anda</small>
                    </div>
                    <div class="form-group">
                        <label for="Noplat">Noplat</label>
                        <input type="text" class="form-control" id="noplat" name="noplat">
                        <small id="" class="form-text text-muted">Silahkan isi Noplat anda</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <div class="btn btn-primary" id="btn-data">Data</div>
					<div class="btn btn-primary" id="btn-logout">Logout</div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"crossorigin="anonymous"></script>
    <script>
        
    </script>
    <!-- Scritp Jam -->
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script>
        $('#btn-data').on('click',function(){
			window.location.href = "Form.php";
		})

		$('#btn-logout').on('click',function(){
			window.location.href = "login.php";
		})
    </script>
</body>

</html>