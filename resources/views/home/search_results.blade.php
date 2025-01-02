<!-- resources/views/partials/search_results.blade.php -->

@if($products->isEmpty())
    <div class="dropdown-item">No results found</div>
@else
    @foreach($products as $product)
        <div class="dropdown-item">
            <a href="{{ url('product_details', $product->id) }}">{{ $product->title }}</a>
        </div>
    @endforeach
@endif
