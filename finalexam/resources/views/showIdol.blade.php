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
						<th>ID</th>
						<th>Image</th>
						<th>Name</th>
						<th>Description</th>
						<th>Category</th>
						<th>Action</th>
					</tr>
		    	</thead>
		        <tbody>	
                @foreach($idols as $idol)
				<tr>
		        	<td>{{$idol->id}}</td>
                    <td><img src="{{ asset('images/') }}/{{$idol->image}}" alt="" width="50"></td>
		            <td style="max-width:300px">
						<h6>{{$idol->name}}</h6>
		            </td>
					<td style="max-width:350px;"><em>{{$idol->description}}</em></td>
		            <td>{{$idol->categoryID}}</td>
		            <td>
		                <a href="{{ route('editIdol', ['id' => $idol->id]) }}" class="btn btn-warning"><i class="fas fa-edit">Edit</i></a> | 
		                <a href="{{ route('deleteIdol', ['id' => $idol->id]) }}" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
		            </td>
				</tr> 
                @endforeach

				
		        </tbody>
		    </table>

		</div>

			<div class="text-center" style="float:right;">
				{{ $idols->links() }}
			</div>
			
			
    </div>

@endsection