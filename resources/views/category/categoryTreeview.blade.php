<!DOCTYPE html>

<html>

<head>

	<title>Laravel Category Treeview Example</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link href="{{('/css/treeview.css') }}" rel="stylesheet">

</head>

<body>

	<div class="row">     


				        <ul id="tree1">

				            @foreach($categories as $category)

				                <li>
                                    <input type="checkbox" id="subscribeNews" name="checkbox{{$category->categoy_id}}" value="{{$category->categoy_id}}" />
				                    {{ $category->category_name }}

				                    @if(count($category->childs))

				                        @include('category.manageChild',['childs' => $category->childs])

				                    @endif

				                </li>

				            @endforeach

				        </ul>
    </div>


    <script src="{{ asset('/js/treeview.js')}}"></script>
</body>

</html>