@extends('layouts.app')
@section('content') 

	<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped">
		        <thead>
					<tr class="thead-dark">
                        <td>ID</td>
                        <td>Name</td>
                        <td>Action</td>
					</tr>
		    	</thead>
		        <tbody>	

                    @foreach($idolcategories as $idolcategory)
                    <tr>
                        <td>{{$idolcategory->id}}</td>
                        <td>{{$idolcategory->name}}</td>
                        <td><a href="{{ route('deleteCategory', ['id' => $idolcategory->id]) }}" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a></td>
                    </tr>
                    @endforeach

		        </tbody>
		    </table>

		</div>
    </div>

@endsection