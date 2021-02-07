@extends('layouts.app')
@section('content') 

	<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped" style="width: 50%;">
		        <thead>
					<tr class="thead-dark">
                        <th>ID</th>
                        <th>Courier Name</th>
					</tr>
		    	</thead>
		        <tbody>	

                    @foreach($a_w_b_s as $courier)
                    <tr>
                        <td>{{$courier->id}}</td>
                        <td>{{$courier->courierName}}</td>
                    </tr>
                    @endforeach

		        </tbody>
		    </table>

		</div>
    </div>

@endsection