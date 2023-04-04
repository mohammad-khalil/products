
<ul>

    @foreach($childs as $child)
    
        <li>
            <input type="checkbox" id="cat" name="category_ids[]"  value="{{$child->id}}" />
            {{ $child->category_name }}
    
        @if(count($child->childs))
    
                @include('category.manageChild',['childs' => $child->childs])
    
            @endif
    
        </li>
    
    @endforeach
    
    </ul>

