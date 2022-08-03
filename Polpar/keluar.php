<?php

include "connection.php";
$id = $_GET['id'];
$user = mysqli_query($dbconnect, "select * from tb_data where id='$id'");
$data = mysqli_fetch_array($user);


?>

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
                <form action="parkir.php" method="POST">
                <div class="form-group">
                        <label for="UID">UID</label>
                        <input type="text" class="form-control"value="<?php echo $data['id']; ?>" id="id" name="id" aria-describedby="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="Name">Nama</label>
                        <input type="text" class="form-control" value="<?php echo $data['nama']; ?> "  id="nama" name="nama" readonly>
                    </div>
                    <div class="form-group">
                        <label for="NIM">NIM</label>
                        <input type="text" class="form-control" value="<?php echo $data['nim']; ?> "  id="nim" name="nim" readonly>
                    </div>
                    <div class="form-group">
                        <label for="Noplat">Noplat</label>
                        <input type="text" class="form-control" value="<?php echo $data['noplat']; ?> " id="noplat" name="noplat" readonly>
                    </div>
                    <div class="form-group">
                        <label for="Jam-masuk">Jam keluar</label>
                        <input class="form-control" type="text" name="jam_keluar" id="jam_keluar" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <div class="btn btn-primary" id="btn-data">Data</div>
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
         $(document).ready(function(){
            var toSeconds = function(s){
                var b = s.split(':');
                return b[0]*3600 + b[1]*60 + b[2]*1 ;
            };
            var setTime= setInterval(function(){
                var d = new Date();
                $('#jam_keluar').val(d.toTimeString().split(' ')[0]);
                
            },1000);
    
        });
        $('#btn-data').on('click',function(){
			window.location.href = "Form.php";
		})

		$('#btn-logout').on('click',function(){
			window.location.href = "login.php";
		})
    </script>
</body>

</html>