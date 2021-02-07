<style>
    input#name, #ID, textarea#description {
        width: 300px;
    }

    textarea#description {
        height: 300px;
    }

    select#category, input#product-image-input {
        width: 400px;
        margin: 30px auto;
    }
</style>
@extends('layouts.app')
@section('content') 
            <div>
                <div style="text-align:center"> 
                    <form class="form-group"  method="post" action="{{ route('updateIdol') }}" enctype="multipart/form-data">
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <h3>Edit Idol</h3>
                    </p>
                    @foreach ($idols as $idol)
                    <p>
                        <label for="ID" class="label">Idol ID</label><br>
                        <input type="text" name="ID" id="ID" value="{{$idol->id}}" readonly>
                    </p>
                    <p>
                        <label for="name" class="label">Name</label><br>
                        <input type="text" name="name" id="name" value="{{$idol->name}}">
                    </p>
                    <p>
                        <label for="description" class="label">Description</label><br>
                        <textarea type="text" name="description" id="description">{{$idol->description}}</textarea>
                    </p>

                    <div class="form-group">
                    <select name= "category" id= "category" class="form-control">
                        @foreach($idolcategories as $idolcategory)
                            <option  value="{{ $idolcategory->name }}"
                            @if($idol->categoryID==$idolcategory->id)
                            selected                    
                            @endif
                            >{{ $idolcategory->name }}
                            </option>
                        @endforeach
                    </select> 
                    </div>

                    <p>
                        <input id="product-image-input" type="file" class="form-control" name="idol-image" value="">
                    </p>

                    @endforeach
                    <p>
                        <input type="submit" name="edit" value="Edit" class="btn btn-success">
                    </p>
                    </form>
                </div>
            </div>
@endsection