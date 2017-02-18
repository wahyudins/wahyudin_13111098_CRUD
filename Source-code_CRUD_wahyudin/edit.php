<?php 
					include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title> Halman Awal Operasi CRUD</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>


<body style="background-color: #eeeeee">

<!--  bagian header  spasi -->
<div class="container">
	<div class="col-md-12"><br>
	</div>
</div>

<!--  bagian header Judul web   -->
<div class="container" style="background-color: #69f0ae">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
			<br><br>
				<h1>
					<b>Web</b>   <small style="font-size:25px"><i> - membuat aplikasi crud</i></small>  
				</h1><br>
			</div>
		</div>
	</div>
</div>

<!--  bagian Header menuu   -->
<div class="container " style="background-color: #000000">
	<div class="row" style="font-size: 20px">
		<div class="col-md-12">
				<ul class="nav navbar-default" style="color: #1a237e">
					<li>
						<a href="index.php">&nbsp;Beranda&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li>
						<a href="#">&nbsp;menu 1&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="disabled">
						<a href="#">&nbsp;menu 2&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="disabled">
						<a href="#">&nbsp;menu 3&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</ul>
		</div>
	</div>
</div>

<!--  bagian spasi warna   -->
<div class="container" style="background-color: #b9f6ca">
<br><br><br>
</div>

<!--  bagian form input pendataan    -->
<div class="container" style="background-color: #b9f6ca">
	<div class="row" style="height: 486px">
		<div class="col-md-4">
		</div>

		<div class="col-md-4">
			<h4 style="color: #1a237e"><i>Edit data Siswa</i></h4><br>
				<?php 
					$id = $_GET['edit_id'];
					$query_mysql = mysql_query("SELECT * FROM siswa WHERE id='$id'")or die(mysql_error());
					while($data = mysql_fetch_array($query_mysql)){
				?>
		

			<form action="update.php" method="post">
				<div class="form-group form-group-default">
					<div class="form-group">
						<label>ID</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control"  name="id" value="<?php echo $data['id'] ?>">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
					</div>
					<div class="form-group">
						<label>NIM</label>
						<input type="text" style="height: 30px; width: 200px;" class="form-control" name="nim"  value="<?php echo $data['nim'] ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>            
			    		<textarea class="form-control" style=" width: 200px; "  name="alamat" > <?php echo $data['alamat'] ?></textarea>
		    		</div>
						<button type="submit" style="color: #000000" class="btn btn-info ">Update</button>
					</div>
			</form>
			<?php } ?>
			
		</div>
		<div class="col-md-4">
		
		</div>
	</div>
</div>

</body>
	<link rel="javascript" src="js/jquery.js">
	<link rel="javascript" src="js/jquery.min.js">
</html>