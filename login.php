<?php

    session_start();

    if(isset($_SESSION['userlogin'])){
        header("Location: index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Modal Login Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/login.css">

</head>
<body>
<div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<a href="#myModal" class="trigger-btn" data-toggle="modal">tekan untuk login</a>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<form action="/examples/actions/confirmation.php" method="post">
				<div class="modal-header">				
					<h4 class="modal-title">Login</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">				
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" id="username" class="form-control" required="required">
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Password</label>
							<a href="#" class="float-right text-muted"><small>Forgot?</small></a>
						</div>
						
						
						<input type="password" name="password" id="password" class="form-control" required="required">
						
						<a href="daftar.php">daftar akun</a>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<label class="form-check-label"><input type="checkbox"> Remember me</label>
					<input type="button" name="button" id="login" class="btn btn-primary" value="Login">
				</div>
			</form>
		</div>
	</div>
</div> 
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(function(){
        $('#login').click(function(e){
            
            var valid = this.form.checkValidity();

            if(valid){
                var username = $('#username').val();
                var password = $('#password').val();
            }

            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'jslogin.php',
                data: {username: username, password: password},
                success: function(data){
                    if($.trim(data) === "1"){
                        setTimeout(' window.location.href =  "index.php"', 1000);
                    }
                },
                error: function(data){
                    alert('there were error while doing the operation');
                }
            });

        });
    });
</script>
</body>
</html>    