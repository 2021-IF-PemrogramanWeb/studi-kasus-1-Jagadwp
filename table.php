<?php
session_start();

if(!isset($_SESSION['login'])) {
	header("Location: /studi-kasus-1-pweb-f/index.php");
	exit;
}
// Create database connection using config file
include_once("databaseconnect.php");
 
// Fetch all users data from database
$result = pg_query($conn, 'SELECT * FROM activity ORDER BY id ASC');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
			integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link rel="stylesheet" href="style.css" />
		<title>Document</title>
	</head>
	<body>
		<ul class="nav justify-content-between py-4" style="padding: 0 8vw">
			<li class="nav-item">
				<a href="/studi-kasus-1-pweb-f/index.php"
					><img src="/src/img/1_Primary_logo_on_transparent_234x66.png" alt="logo" class="logo-img"
				/></a>
			</li>
			<li class="nav-item">
				<a class="btn btn-danger btn-block ml-auto" aria-current="page" href="/studi-kasus-1-pweb-f/logout.php">Sign Out</a>
			</li>
		</ul>

		<section id="dashboard-table" style="padding: 0 7vw;">
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="dt-buttons btn-group flex-wrap">
								<button
									class="btn btn-secondary buttons-copy buttons-html5"
									tabindex="0"
									aria-controls="example1"
									type="button"
								>
									<span>Copy</span>
								</button>
								<button
									class="btn btn-secondary buttons-csv buttons-html5"
									tabindex="0"
									aria-controls="example1"
									type="button"
								>
									<span>CSV</span>
								</button>
								<button
									class="btn btn-secondary buttons-excel buttons-html5"
									tabindex="0"
									aria-controls="example1"
									type="button"
								>
									<span>Excel</span>
								</button>
								<button
									class="btn btn-secondary buttons-pdf buttons-html5"
									tabindex="0"
									aria-controls="example1"
									type="button"
								>
									<span>PDF</span>
								</button>
								<button
									class="btn btn-secondary buttons-print"
									tabindex="0"
									aria-controls="example1"
									type="button"
								>
									<span>Print</span>
								</button>
								<div class="btn-group">
									<button
										class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis"
										tabindex="0"
										aria-controls="example1"
										type="button"
										aria-haspopup="true"
										aria-expanded="false"
									>
										<span>Column visibility</span>
									</button>
								</div>
								<div class="social-auth-links text-center mt-3 mb-3">
									<a href="/studi-kasus-1-pweb-f/index.php" class="btn btn-block btn-primary my-2"> Login Page</a>
									<a href="/studi-kasus-1-pweb-f/graph.php" class="btn btn-block btn-dark my-2"> Graph Page </a>
									<a href="" class="fw-bold btn btn-block btn-btn-outline-info my-2">Welcome <?= $_SESSION["username"]?> !</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 pb-4" align="right">
							<div id="example1_filter" class="dataTables_filter">
								<label
									>Search:<input
										type="search"
										class="form-control form-control-sm"
										placeholder=""
										aria-controls="example1"
								/></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<table
								id="example1"
								class="table table-bordered table-striped dataTable dtr-inline"
								role="grid"
								aria-describedby="example1_info"
							>
								<thead>
									<tr role="row" class="">
										<th
											class="sorting sorting_asc"
											tabindex="0"
											aria-controls="example1"
											rowspan="1"
											colspan="1"
											aria-sort="ascending"
											aria-label="Rendering engine: activate to sort column descending"
										>
											No
										</th>
										<th
											class="sorting"
											tabindex="0"
											aria-controls="example1"
											rowspan="1"
											colspan="1"
										>
											On
										</th>
										<th
											class="sorting"
											tabindex="0"
											aria-controls="example1"
											rowspan="1"
											colspan="1"
										>
											Off
										</th>
										<th
											class="sorting"
											tabindex="0"
											aria-controls="example1"
											rowspan="1"
											colspan="1"
											aria-label="Engine version: activate to sort column ascending"
										>
											Ack by
										</th>
										<th
											class="sorting"
											tabindex="0"
											aria-controls="example1"
											rowspan="1"
											colspan="1"
										>
											Reason Id
										</th>
										<th
											class="sorting"
											tabindex="0"
											aria-controls="example1"
											rowspan="1"
											colspan="1"
										>
											Reason
										</th>
									</tr>
								</thead>
								<tbody>
								<?php while( $data = pg_fetch_assoc($result) ) : ?>       
									<tr class="odd">
										<td class="dtr-control sorting_1" tabindex="0"><?= $data["id"] ?></td>
										<td><?= $data["time_on"] ?></td>
										<td><?= $data["time_off"] ?></td>
										<td><?= $data["ack_by"] ?></td>
										<td><?= $data["reason_id"] ?></td>
										<td><?= $data["reason"] ?></td>
									</tr>
								<?php endwhile; ?>
								</tbody>
								<tfoot>
									<tr>
										<th rowspan="1" colspan="1">No</th>
										<th rowspan="1" colspan="1">On</th>
										<th rowspan="1" colspan="1">Off</th>
										<th rowspan="1" colspan="1">Ack by</th>
										<th rowspan="1" colspan="1">Reason_id</th>
										<th rowspan="1" colspan="1">Reason</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
								Showing 1 to 10 of 57 entries
							</div>
						</div>
						<div class="col-sm-12 col-md-7">
							<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
								<ul class="pagination">
									<li class="paginate_button page-item previous disabled" id="example1_previous">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="0"
											tabindex="0"
											class="page-link"
											>Previous</a
										>
									</li>
									<li class="paginate_button page-item active">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="1"
											tabindex="0"
											class="page-link"
											>1</a
										>
									</li>
									<li class="paginate_button page-item">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="2"
											tabindex="0"
											class="page-link"
											>2</a
										>
									</li>
									<li class="paginate_button page-item">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="3"
											tabindex="0"
											class="page-link"
											>3</a
										>
									</li>
									<li class="paginate_button page-item">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="4"
											tabindex="0"
											class="page-link"
											>4</a
										>
									</li>
									<li class="paginate_button page-item">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="5"
											tabindex="0"
											class="page-link"
											>5</a
										>
									</li>
									<li class="paginate_button page-item">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="6"
											tabindex="0"
											class="page-link"
											>6</a
										>
									</li>
									<li class="paginate_button page-item next" id="example1_next">
										<a
											href="#"
											aria-controls="example1"
											data-dt-idx="7"
											tabindex="0"
											class="page-link"
											>Next</a
										>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>
	</body>
</html>

