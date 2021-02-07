<style>
    input#name, textarea#description {
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
                <form class="subform"  method="post" action="{{ route('addIdol') }}" enctype="multipart/form-data">
                @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <label for="name" class="label">Name</label><br>
                        <input type="text" name="name" id="name">
                    </p>

                    <p>
                        <label for="description" class="label">Description</label><br>
                        <textarea type="text" name="description" id="description"></textarea>
                    </p>

                    <select name= "category" id= "category" class="form-control">
                        @foreach($idolcategories as $idolcategory)
                            <option value=" {{ $idolcategory->name }}">{{ $idolcategory->name }}</option>
                        @endforeach
                    </select>

                    <p>
                        <input id="product-image-input" type="file" class="form-control" name="idol-image" value="">
                    </p>

                    <p>
                        <input type="submit" name="insert" value="Insert" class="btn btn-success">
                    </p>
                </form>
            </div>
        </div>
@endsection