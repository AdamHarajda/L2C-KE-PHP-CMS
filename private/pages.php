<?php
require_once dirname(__FILE__)."/../framework/helpers.php";
$pages = db_get("SELECT * FROM Pages");
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
					<h1 class="page-header">Pages</h1>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>title</th>
									<th>content</th>
									<th>id</th>
                                    <th>menu_label</th>
                                    <th>menu_order</th>
                                    <th>autor</th>
								</tr>
							</thead>
							<tbody>
                                <?php
                                    foreach( $pages as $page)
                                    {
                                        echo "<tr>";
                                        echo "<th>$page->title</th>";
                                        echo "<th>$page->content</th>";
                                        echo "<th>$page->id</th>";
                                        echo "<th>$page->menu_label</th>";
                                        echo "<th>$page->menu_order</th>";
                                        echo "<th>".db_single("SELECT * FROM Users WHERE id = '".$page->user_id."'")->nick."</th>";
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