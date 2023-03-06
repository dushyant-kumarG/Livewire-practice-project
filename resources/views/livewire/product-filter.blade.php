<div>
    <h1 style="text-align:center">Product Filter</h1>
    <hr><br>
    <form wire:submit.prevent="searching" style="text-align:center">

        <input wire:modal="name" type="text" placeholder="Name">
        <input wire:modal="price" type="text" placeholder="Price">
        <input wire:modal="brand" type="text" placeholder="brand">
        <input wire:modal="sku" type="text" placeholder="sku">
        <input wire:modal="size" type="text" placeholder="size">
        <button type="submit" value="search">Search</button>

    </form><br><br>

    <h2 style="text-align:center">Product Table</h2>
    <hr><br>

    <table border="1" width="100%">
        <tr>

            <th>Name</th>
            <th>Price</th>
            <th>Brand</th>
            <th>Sku</th>
            <th>Size</th>
        </tr>
        <tr>
            @if(count($products) > 0)
            @foreach($products as $product)
        <tr>
            
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['brand'] }}</td>
            <td>{{ $product['sku'] }}</td>
            <td>{{ $product['size'] }}</td>

        </tr>
        @endforeach
        @else
        <tr>
            <td>Data Not Found</td>
        </tr>
        @endif
        </tr>
    </table>
</div>