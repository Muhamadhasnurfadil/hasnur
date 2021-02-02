<?php
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun !!</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div>
        <?php
       
        ?>
    </div>

    <div>
        <form action="daftar.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Daftar Akun disini :)</h1>
                        <hr class="mb-3">
                        <label for="firstname"><b>Nama Depan</b></label>
                        <input class="form-control" id="firstname" type="text" name="firstname" require>

                        <label for="lastname"><b>Nama Belakang</b></label>
                        <input class="form-control" id="lastname" type="text" name="lastname" require>

                        <label for="email"><b>E-Mail Address</b></label>
                        <input class="form-control" id="email" type="email" name="email" require>

                        <label for="telp"><b>Nomor Telepon</b></label>
                        <input class="form-control" id="telp" type="text" name="telp" require>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" id="password" type="password" name="password" require>
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                    </div>
                </div>
            </div>
        </form>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    $(function(){
        $('#register').click(function(e){

            var valid = this.form.checkValidity();

            if(valid){
                
                var firstname   = $('#firstname').val();
                var lastname    = $('#lastname').val();
                var email       = $('#email').val();
                var telp        = $('#telp').val();
                var password    = $('#password').val();

                e.preventDefault();

                $.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,telp: telp,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
                    error: function(data){
                    Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors whle saving the data.',
                                'type': 'error'
                                })
                    }
                });

               
            }else{
            
            }

            

            
        
        });

        
    });
</script>
</body>
</html>