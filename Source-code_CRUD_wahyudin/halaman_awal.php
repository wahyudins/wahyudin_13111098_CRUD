<?php
include 'koneksi.php';
	if(isset($_GET['delete_id']))
		$sql_query ="DELETE FROM siswa WHERE id=".$_GET['delete_id'];
		mysql_query($sql_query);
		header("location : $_SERVER [PHP_SELF]");

?>

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
<script type="text/javascript">
	function edit_id(id){
		if (confirm('serius ingin di modif bro')){
			window.location.href ='edit.php?edit_id='+id;
		}
	}
	function delete_id(id){
		if (confirm('serius ingin di hapus euy')) {
			window.location.href='halaman_awal.php?delete_id='+id;
		}
	}
</script>
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
					<b>Web</b>   <small style="font-size:25px"> - membuat aplikasi crud</small>  
				</h1>
			</div>
			<br>
		</div>
	</div>
</div>

<!--  bagian Header menuu   -->
<div class="container " style="background-color: #000000">
	<div class="row" style="font-size: 20px">
		<div class="col-md-12">
				<ul class="nav navbar-default" style="color: #1a237e">
					<li class="active" style="background-color: #b9f6ca">
						<a href="halaman_awal.php">&nbsp;Beranda&nbsp;</a>
					</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li class="disabled">
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


<!--  bagian edit dan session logout  -->
<div class="container" style="background-color: #b9f6ca">
	<div class="row" style="height: 486px">
		<div class="col-md-12">
			<?php 
				 session_start();
				 	if (empty($_SESSION['username'])) {
				 		header("location:index.php"); 
				 		}
				 		else {
				 		?>
					 	<h6 style="text-align: right" >
					 		<?php echo $_SESSION['username'] ?>
					 		<small style="color: #039be5"><i>Berhasil Masuk</i></small><br />
					 		<a href="logout.php">Logout</a></h6> 
					 	<?php 
					 	} 
				 	?>

			<br><br>
			  <h2>Data siswa</h2>        
			  <table class="table table-bordered" >
			    <thead>
			      <tr>
			        <th><center>No.</center></th>
			        <th><center>Nama</center></th>
			        <th><center>NIM</center></th>
			        <th><center>Alamat</center></th>
			        <th colspan="2"><center>Aksi</center></th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php 
						$sql_query= "SELECT * FROM siswa";
						$result_set= mysql_query($sql_query);

						if (mysql_num_rows($result_set)>0) {
							while ($row=mysql_fetch_row($result_set)) {
					?>
			    <tr>
			    	<td><?php echo $row [0];?></td>
			    	<td><?php echo $row [1];?></td>
			    	<td><?php echo $row [2];?></td>
			    	<td><?php echo $row [3];?></td>
			    	
			    	<td><center><a href="javascript:edit_id('<?php echo $row[0];?>')">edit</a></td></center>
			    	<td><center><a href="javascript:delete_id('<?php echo $row[0];?>')">delete</a></td></center>
			    </tr>
			    <?php
			}
			}
			    ?>
			    </tbody>
			  </table>
			  <a href="tambah.php"><button type="button" class="btn btn-info">
				Tambah Data
			</button></a>
			</div>
	</div>
</div>

</body>
	<link rel="javascript" src="js/jquery.js">
	<link rel="javascript" src="js/jquery.min.js">
</html>