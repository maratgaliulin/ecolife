<br>
<hr>
<div class="tags">
    <p class="lead">Брернды</p>
    @foreach($brands as $brand)
        <a href="{{route('pages.categoryproduct', [$category->slug, $categoryproduct->subcategory->slug, $categoryproduct->slug, 'brand' => $brand->slug])}}">
            <span class="badge badge-light {{ request()->brand == $brand->slug ? 'active-brand' : ''}}">
                {{$brand->name}}
            </span>
        </a>
    @endforeach
</div>
