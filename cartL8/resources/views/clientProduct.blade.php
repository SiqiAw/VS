@extends('layouts.app')
@section('content') 

<div class="container-fluid">

    <div class="row">

    @foreach($products as $product)

            <div class="col-sm-4">
                
                <div class="card border" style="margin: 10px;">
                
                    <div class="card-body">

                        <h5>{{ $product->name }}</h5>
                        <a href="{{ route('product.detail', ['id' => $product->id]) }}">
                            <img src="{{ asset('images/') }}/{{$product->image}}" alt="" width="250">
                        </a>
                        <h6>RM {{ $product->price }}</h6>
                        <em>{{ $product->description }}</em>
                        <p></p>
                        <a href="#" class="btn btn-danger" style="float:right;">Add to Cart</a>

                    </div>  

                </div>

       </div>
       
    @endforeach

    </div>

    <div class="text-center" style="float:right;">
			{{ $products->links() }}
    </div>
    
</div>


@endsection
