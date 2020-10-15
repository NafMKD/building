<script src="../assets/jquery/jquery.min.js"></script>
<script src="../assets/jquery-ui/jquery-ui.min.js"></script>
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/chart.js/Chart.min.js"></script>
<script src="../assets/sparklines/sparkline.js"></script>
<script src="../assets/daterangepicker/daterangepicker.js"></script>
<script src="../assets/moment/moment.min.js"></script>
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
	});
	function capturePhoto() {
      var data = $('#regRentId').html();
      window.open('capturePicture.php?Renter&id='+data+'', '_blank', 'location=yes,height=590,width=620,scrollbars=yes,status=yes');
    }
</script>