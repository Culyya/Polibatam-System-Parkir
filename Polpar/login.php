<?php include "header.php" ?>
<div class="full bgcolor" >
<img src="gambar/Polibatam.jpeg" style="width:100%; margin-top:-5%" />
</div>
<div class="full center v-parent">
	<div class="container-fluid v-child">
		<div class="row">
			<div class="col-md-12 title" style="color:white;"><b>Polibatam Sistem Parking</b></div>
		</div>
		<div class="row" id="message">
		</div>
		<div class="row">
			<div class=" mg-t10 pd20" style="border-color:white;">
				<form name="form-login" method="get" action="login.php">
					<table class="table-fixed">
						<tr>
							<td class="right pd-r20" width="53%" height="10%" style="margin-right:10%;">Username</td>
							<td>
								<input class="form-control" type="text" name="username" id="username"></td>
						</tr>
						<tr class="pd-t20">
							<td class="right pd-r20">Password</td>
							<td>
								<input class="form-control" type="password" name="password" id="password" style="margin-top:5%"></td>
						</tr>
					</table>
					<div class="btn blue-button mg-t10" id="log-in-submit-button">Log in</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script>
		$('#log-in-submit-button').on('click',function(){
			console.log("clicked");
			var user = $('#username').val();
			var pass = $('#username').val();
			if(pass!=""){
				$("#message").html('');
				if(user=="admin"){
					window.location.href = "Form.php";
				}
				else{
					$('#message').html('<div class="col-md-12 error">Username dan password salah</div>');
				}
			}
			else {
				$('#message').html('<div class="col-md-12 error">Username dan password salah</div>');
			}
		});
	</script>

<?php include "footer.php" ?>