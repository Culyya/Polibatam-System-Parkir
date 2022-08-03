<?php
include "connection.php";
?>
<html>
<head>
	<title>Polpar (Polibatam Parkir)</title>
	<style type="text/css">
			.wraper{
				margin    :0 auto;
				border    : 1px solid #1e62d0;
				width     : 1270px;
				height    : auto;
				padding   : 10px;
				font-family: arial;
				
			}
			.sidebar-rigth{
				border    :1px solid #ccc;
				border-radius: 6px;
				width     : 913px;
				height    : auto;
				padding   : 10px;
				float     : left;
				background-color: #f9f9f9;
				margin-left: 10px;
			}
			.title{
				border-left: 4px solid #1e62d0;
				width     : 1270px;
				height    : auto;
				padding   : 10px;
				font-family: arial;
				font-weight: bold; font-size: 25px;
				margin-bottom: 15px;
			}
			#title-id{
				margin-top: 3%;
				margin-bottom: 5px;
			}
			.form{
				padding: 20px;
			}
			.input{
				border :1px solid #ccc;
				border-radius: 5px;
				padding: 7px;
				width: 100%;
				margin-bottom: 10px;
			}
			.btn {
				width: 100%;
				box-shadow:inset 0px 1px 0px 0px #97c4fe;
				background:linear-gradient(to bottom, #3d94f6 5%, #1e62d0 100%);
				background-color:#3d94f6;
				border-radius:6px;
				border:1px solid #337fed;
				display:inline-block;
				cursor:pointer;
				color:#ffffff;
				font-family:Arial;
				font-size:15px;
				font-weight:bold;
				padding:9px 24px;
				text-decoration:none;
				text-shadow:0px 1px 0px #1570cd;
			}
			.btn:hover {
				background:linear-gradient(to bottom, #1e62d0 5%, #3d94f6 100%);
				background-color:#1e62d0;
			}
			.btn:active {
				position:relative;
				top:1px;
			}
			.table1 {
				margin-top:12px;
			    font-family: sans-serif;
			    color: #444;
			    border-collapse: collapse;
			    width: 100%;
			    border: 1px solid #f2f5f7;
			}

			.table1 tr th{
			    background: #1e62d0;
			    color: #fff;
			    font-weight: normal;
			}

			.table1, th, td {
			    padding: 8px 20px;
			    text-align: left;
			}

			.table1 tr:hover {
			    background-color: #f5f5f5;
			}

			.table1 tr:nth-child(even) {
			    background-color: #f2f2f2;
			}
			.aksi{
				padding:7px; border-radius:4px; color:#fff; 
				font-size: 12px; text-decoration: none;
			}
			.red{
				background-color: red;
				
			}
			.green{
				background-color: green;
				margin-right:10%;
				bottom:10%
			}

			.link-a{
				text-decoration: none;
				font-size: 14px;
				font-weight: bold;
				background : green;
				border-radius: 10px;
				color : white;
			}
			.data{
				background-color: green;
				margin-right:10%;
				bottom:10%
			}
			.masuk{
				position: absolute;
				margin-bottom:34%;
				padding:7px; border-radius:4px; color:#fff; 
				font-size: 12px; text-decoration: none;
			}
	</style>
</head>
<body>
	<div class="wraper" id="title-id">
		<div class="title">
			Polpar Data Mahasiswa
		</div>
		<div class="sidebar-left">
			<div class="card">
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
                $('#jam_masuk').val(d.toTimeString().split(' ')[0]);
                
            },1000);
    
        });

        $('#btn-logout').on('click',function(){
			window.location.href = "login.php";
		})
    </script>
			
		</div>
		<div class="sidebar-left">
			<div style="padding:10px;">
				<table class="table1">
					<tr>
                        <th width="5">UID</th>
						<th width="15%">Nama</th>
						<th width="%">NIM</th>
						<th width="%">Noplat</th>
						<th width="15%">Aktivitas</th>
						<th width="15%">Update or Drop </th>
					</tr>
					<?php
						$sql= "SELECT id, nama, nim,noplat FROM tb_data ORDER BY nama ASC";
						$hasil = $dbconnect->query($sql);
						
						  
						if($hasil === false) {
						   trigger_error('Perintah SQL salah: ' . $sql . ' Error: ' . $dbconnect->error, E_USER_ERROR);
						} else 
							while($data = $hasil->fetch_array()){
							
					?>
							<tr>
								<td><?php echo $data['id']; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['nim']; ?></td>
								<td><?php echo $data['noplat']; ?></td>
								<td>
									<a href="masuk.php?id=<?php echo $data['id']; ?>" class="aksi green">Masuk</a>
									<a href="keluar.php?id=<?php echo $data['id']; ?>" class="aksi red">Keluar</a>
								</td>
								<td>
								<a href="edit.php?id=<?php echo $data['id']; ?>" class="aksi green">Edit</a>
								<a href="hapus.php?act=hapus&id=<?=$data['id']?>" class="aksi red" >Drop</a>
							</td>
							</tr>
					<?php }?>
				</table>
				<a href="Form_data.php" class="data masuk" >Tambah Data</a>
			</div>
		</div>
		<div style="clear:both;"></div>
		<div class="sidebar-left">
			<div style="padding:10px;">
				<b><p style="font-size:20;">History Porpal</p></b>
				<table class="table1">
					<tr>
                        <th width="5">UID</th>
						<th width="15%">Nama</th>
						<th width="%">NIM</th>
						<th width="%">Noplat</th>
						<th width="%">Jam Masuk</th>
						<th width="%">Jam Keluar</th>
					</tr>
					<?php
						$sql= "SELECT id, nama, nim,noplat,jam_masuk FROM tb_parkir";
						$hasil = $dbconnect->query($sql);
						
						  
						if($hasil === false) {
						   trigger_error('Perintah SQL salah: ' . $sql . ' Error: ' . $dbconnect->error, E_USER_ERROR);
						} else 
							while($data = $hasil->fetch_array()){
							
					?>
							<tr>
								<td><?php echo $data['id']; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['nim']; ?></td>
								<td><?php echo $data['noplat']; ?></td>
								<td><?php echo $data['jam_masuk']; ?></td>
								<td></td>
							</tr>
					<?php }?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>