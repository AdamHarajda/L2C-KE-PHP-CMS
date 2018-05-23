<?php
require_once dirname(__FILE__)."/../framework/helpers.php";
require_once dirname(__FILE__)."/../framework/loggedin.php";

if(!empty($_POST)){

	if(!empty($_POST['action'])){
		switch ($_POST['action']) {
			case "insert":
				if( !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nickname']) ){
					db_query("INSERT INTO Users (email, pass, nick) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['nickname']."')");
				}
			break;

			case "update":
				if( !empty($_POST['id']) ){
					if( !empty($_POST['email']) && !empty($_POST['nickname']) ){
						db_query("UPDATE Users SET email = '".$_POST['email']."', nick = '".$_POST['nickname']."' WHERE id = '".$_POST['id']."'");
					}
				}
			break;

			case "delete":
				if( !empty($_POST['id']) ){
					db_query("DELETE FROM Users WHERE id = '".$_POST['id']."'");
				}
			break;
		}
	}
}
$users = db_get("SELECT * FROM Users");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Dashboard Template for Bootstrap</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
        <?php require_once dirname(__FILE__)."./parts/header.php"; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-12 main">
					<h1 class="page-header">Users</h1>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>email</th>
									<th>nick</th>
									<th>id</th>
								</tr>
							</thead>
							<tbody>
                                <?php
                                    foreach( $users as $user)
                                    {
                                        echo "<tr>";
                                        echo "<th>$user->email</th>";
                                        echo "<th>$user->nick</th>";
                                        echo "<th>$user->id</th>";
                                        echo "</tr>";
                                    }
                                ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>