<ul class="menu level1" style="width:240px">
    @foreach($datas as $item)
        <li class="item parent">
            <a href="/list-product/{{$item->id}}" class="hasicon" title="SIDE TABLE">
                <img src="{{asset('client_template/img/home/table-lamp.png')}}" alt="img">{{ $item->category_name }}
            </a>
            @if($item->categoryChildren <> null)
                <div class="dropdown-menu">
                    <div class="menu-items">
                        <ul>
                            @foreach($item->categoryChildren as $subItem)
                            <li class="item">
                                <a href="/list-product/{{$subItem->id}}" title="Aliquam lobortis">{{ $subItem->category_name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
        </li>
    @endforeach
    <li class="more item">Show More</li>
</ul>