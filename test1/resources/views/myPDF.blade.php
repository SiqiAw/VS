<!DOCTYPE html>
<html>
<head>
    <title>Order List</title>
</head>
    <body>
    <h1>Virtual Movie</h1>
    <p>Order List</p>
    <div>
	    <div>
		    <table>
		        <thead>
		        <tr>
		            <th>ID</th>    
                    <th>Image</th>                
		            <th>Name</th>
					<th>Category</th>
		            <th>Price</th>
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($products as $product)
		            <tr>
		                <td>{{$product->id}}</td>
                        <td><img src="{{ public_path('images/'.$product->image) }}" alt="" width="50"></td>
                        <td >{{$product->name}}</td>
						<td >{{$product->categoryID}}</td>
                        <td>{{$product->price}}</td>
		                <td>&nbsp;</td>
		            </tr> 
                @endforeach				
		        </tbody>
		    </table>
	</div>
    </div>
    
    </body>
</html>