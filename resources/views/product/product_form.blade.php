
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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<link href="{{('/css/treeview.css') }}" rel="stylesheet">
  

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
                <h3 class="card-titl" style="float: left">Add New Product</h3>
              </div>
            
              <form style="text-align: center" class="form-horizontal" role="form" method="POST" action="{{ url('products') }}">
          
                {!! csrf_field() !!}

                <div class="card-body">
                    <br>
                    <label for="inputPassword3" class="col-form-label"  style="float: left;direction: ltr">Product Name</label>
                    <input class="form-control" type="text"  style="float: right;direction: rtl" name="product_name" value="">
                    <br>
                    <label for="inputPassword3" class="col-form-label"  style="float: left;direction: ltr">Price</label>
                    <input class="form-control" type="Number"  style="float: right;direction: rtl" name="price" value="">
                    <br>
                    <label for="inputPassword3" class="col-form-label"  style="float: left;direction: ltr">Stock Count</label>
                    <input class="form-control" type="Number"  style="float: right;direction: rtl" name="stock_count" value="">
                    <br>
                    <label for="inputPassword3" class="col-form-label" style="float: left;direction: ltr">Category</label>
                    <div class="row">     


				        <ul id="tree1">

				            @foreach($categories as $category)

				                <li>
                            <input type="checkbox" id="cat" name="category_ids[]" value="{{$category->id}}" />
				                    {{ $category->category_name }}

				                    @if(count($category->childs))

				                        @include('category.manageChild',['childs' => $category->childs])

				                    @endif

				                </li>

				            @endforeach

				        </ul>



                      
                    </div>  
                </div>
      

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">add Product</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>



    


    <script src="{{ asset('/js/treeview.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
</body>

</html>