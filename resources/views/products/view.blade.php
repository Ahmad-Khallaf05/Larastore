<h1> Show All Products </h1>

<table>

    <th>ID</th>
    <th>Product Name</th>
    <th>Product Description</th>
    <th>Product Price</th>
    <th>Action</th>


   
    <tr> 
        <td> {{$product->id}}</td>
        <td> {{$product->product_name}}</td>
        <td> {{$product->product_description}}</td>
        <td> {{$product->product_price}}</td>
        <td>
            <a href="{{route('products.edit', $product->id )}}" > Edit </a> <br>
            <form action="{{route('products.destroy' , $product->id)}}" method="post">
                @csrf
                @method('Delete')
                    <button type=submit> Delete </button> 
            </form>
            
        </td>
    <tr> 



    <a href="{{ route('products.create') }}" >Create Product</a>
</table>