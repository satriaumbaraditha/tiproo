<div class="panel panel-default">
    <div class="panel-heading"style="background-color:powderblue; border-radius: 4px;">
        <h3 class="panel-title" >Lihat Per Kategori</h3>
    </div>
    <div class="list-group">
        <a href="/catalogs" class="list-group-item" style="background-color:powderblue; border-radius: 4px;">Semua Produk <span class="badge">{{ App\Product::count() }}</span></a>
        @foreach(App\Category::noParent()->get() as $category)
        <a href="{{url('/catalogs?cat='.$category->id)}}" class="list-group-item"style="background-color:powderblue; border-radius: 4px;">{{ $category->title }}
        {!! $category->total_products  > 0 ? '<span class="badge">'.$category->total_products.'</span>' : '' !!}</a>
        @endforeach
    </div>
</div>
