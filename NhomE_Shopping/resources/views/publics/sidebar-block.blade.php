<div class="sidebar-block">
    <div class="title-block">Danh mục</div>
    <div class="block-content">
        @foreach($categories as $key)
        <div class="cateTitle hasSubCategory open level1">
            <span class="arrow collapse-icons collapsed" data-toggle="collapse" data-target="#{{$key->id}}">
                <i class="zmdi zmdi-minus"></i>
                <i class="zmdi zmdi-plus"></i>
            </span>
            <a class="cateItem" href="/list-product/{{$key->id}}">{{$key->category_name}}</a>
            <div class="subCategory collapse" id="{{$key->id}}" aria-expanded="true" role="status">
                @foreach($key->categoryChildren as $subItem)
                <div class="cateTitle">
                    <a href="/list-product/{{$subItem->id}}" class="cateItem">{{$subItem->category_name}}</a>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
