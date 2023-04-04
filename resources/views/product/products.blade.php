
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{('assets/dist/css/adminlte.min.css')}}">


    <!-- Main content -->
    <section class="content">
    
  
              <div class="card w-50" style="margin: 0 auto;">
                <div class="card-header">
                  <h3 class="card-title" style="float: left">My Products</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>              
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Stock Count</th>
                        <th>Categories</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr style="direction: ltr">
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->strock_count }}</td>
                            <td>
                            <table>
                            @foreach ($product->categories as $category)
                             <tr>
                             <td>{{$category->category_name}}</td>
                             </tr>   
                            @endforeach                 
                            </table>
                            </td>
                        </tr>
                        @endforeach      
                    </tbody>
                    <tfoot>
               
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

      </section>
      <!-- /.content -->




<!-- jQuery -->
<script src="{{('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- DataTables  & Plugins -->
<script src="{{('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{('assets/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

