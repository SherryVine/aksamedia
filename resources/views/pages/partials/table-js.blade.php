
  <!-- DataTables JavaScript -->
  <script src="{{asset('/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{asset('/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
