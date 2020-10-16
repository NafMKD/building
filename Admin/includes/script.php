<script src="../assets/jquery/jquery.min.js"></script>
<script src="../assets/jquery-ui/jquery-ui.min.js"></script>
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/chart.js/Chart.min.js"></script>
<script src="../assets/select2/js//select2.full.min.js"></script>
<script src="../assets/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="../assets/sparklines/sparkline.js"></script>
<script src="../assets/daterangepicker/daterangepicker.js"></script>
<script src="../assets/daterangepicker/moment.min.js"></script>
<script src="../assets/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../assets/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../assets/dist/js/adminlte.js"></script>
<script>
	$(function() {
		$("#dataTable").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('.select2').select2({
			theme: 'bootstrap4'
		})
		$('[data-mask]').inputmask();
	});
	function capturePhoto(e) {
      var data = <?php if(isset($_GET['newId'])){echo $_GET['newId'];}else{echo '0';} ?>;
      window.open('capturePicture.php?Renter&id='+data+'', '_blank', 'location=yes,height=600,width=620,scrollbars=yes,status=yes');
    }
</script>