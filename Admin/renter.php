<?php
session_start();
$rentactive = "active";
include 'autoloader.php';
$obj_fetchNormal = new fetchNormal;
$obj_register = new register;
if(isset($_POST['btnRenterInfoSubmitReg'])){
	$fname = $_POST['renterInfoFullNameReg'];
	$phone = $_POST['renterInfoPhoneReg'];
	$idRec = $obj_register->registerRenterPerson($fname, $phone);
    header("location: ?addNewRenter&newId=$idRec");
}
?>
<!DOCTYPE html>
<html>

<head>
	<?php include 'includes/header.php' ?>
</head>

<body class="sidebar-mini layout-fixed layout-footer-fixed">
	<div class="wrapper">
		<?php include 'includes/nav.php' ?>
		<?php include 'includes/aside.php' ?>

		<div class="content-wrapper">

			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark">Manage Renters</h1>
						</div>
					</div>
				</div>
			</div>

			<section class="content">
				<?php if (isset($_GET['addNewRenter']) && !isset($_GET['listViewRenter'])) : ?>
					<?php include 'includes/renter/addNew.php'; ?>
				<?php elseif (!isset($_GET['addNewRenter']) && isset($_GET['listViewRenter'])) : ?>
					<?php include 'includes/renter/listView.php'; ?>
				<?php endif ?>
			</section>
		</div>


		<?php include 'includes/footer.php' ?>
	</div>

	<?php include 'includes/script.php' ?>
</body>

</html>