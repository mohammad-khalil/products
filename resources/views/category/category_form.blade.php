
<!DOCTYPE html>

<html>

<head>

	<title>Laravel Category Treeview Example</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{('assets/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{('assets/dist/css/adminlte.min.css')}}">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<link rel="stylesheet" href="{{('assets/dist/css/adminlte.min.css')}}">


<link rel="stylesheet" href="{{asset('assets/ms/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/ms/bootstrap.min.css')}}">



</head>
<body>
    <!-- Main content -->
    <section class="content mt-5 w-50" style="margin:  auto;">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-titl" style="float: left">Add New Category</h3>
              </div>
            
              <form style="text-align: center" class="form-horizontal" role="form" method="POST" action="{{ url('categories') }}">
                {{-- @if ($role->id) {{ method_field('PUT') }} @endif --}}
                {!! csrf_field() !!}

                <div class="card-body">
                    <br>
                    <label for="inputPassword3" class="col-form-label"  style="float: left;direction: ltr">Category Name:</label>
                    <input class="form-control" type="text"  style="float: right;direction: rtl" name="category_name" value="">
                    <br>
                    <label for="inputPassword3" class="col-form-label" style="float: left;direction: ltr">Parent Category</label>
                    <select style="text-align: right" name="parent_id" class="col custom-select" id="validationCustom04" required>
                      @foreach ($allCategories as $category)
                      <option value="{{$category->id}}">{{$category->category_name}}</option>
                      @endforeach
                  </select>

                    <br>    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">add Category</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>









</body>

</html>