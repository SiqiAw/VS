<!DOCTYPE html>
<html>
<head>
    <title>Order List</title>
</head>
    <body>
    <h1>Southern Cart</h1>
    <p>Airway Bill</p>
    <div>
	    <div>
		    <table>
		        <thead>
		        <tr>
		            <th>Order ID</th>               
		            <th>Customer ID</th>
					<th>Order Date</th>
		            <th>Receiver Name</th>
                    <th>Address</th>
                    <th>PostCode</th>
                    <th>Courier ID</th>
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($myorders as $myorder)
		            <tr>
		                <td>{{$myorder->id}}</td>
                        <td >{{$myorder->name}}</td>
						<td >{{$myorder->orderDate}}</td>
                        <td>{{$myorder->receiverName}}</td>
                        <td>{{$myorder->address}}</td>
                        <td>{{$myorder->postCode}}</td>
                        <td>{{$myorder->courierID}}</td>
		                <td>&nbsp;</td>
		            </tr> 
                @endforeach				
		        </tbody>
		    </table>
	</div>
    </div>
    
    </body>
</html>