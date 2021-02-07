@extends('layouts.app')
@section('content') 
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif     

	<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped">
		        <thead>
					<tr class="thead-dark">
						<th>Order ID</th>
						<th>Customer ID</th>
						<th>Order Date</th>
						<th>Receiver Name</th>
						<th>Address</th>
						<th>Postcode</th>
                        <th>Courier ID</th>
					</tr>
		    	</thead>
		        <tbody>	
                @foreach($my_orders as $myorder)
				<tr>
		        	<td>{{$myorder->id}}</td>
		            <td>{{$myorder->customerID}}</td>
                    <td>{{$myorder->created_at}}</td>
                    <td>{{$myorder->receiverName}}</td>
                    <td>{{$myorder->address}}</td>
                    <td>{{$myorder->postCode}}</td>
		            <td>{{$myorder->courierID}}</td>
				</tr> 
                @endforeach

				
		        </tbody>
		    </table>

		</div>		
			
    </div>

@endsection