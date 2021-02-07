<style>
    input#name{
        width: 300px;
    }

    select#courierID {
        width: 400px;
        margin: 30px auto;
    }
</style>

@extends('layouts.app')
@section('content') 
        <div>
            <div style="text-align:center"> 
                <form class="subform"  method="post" action="{{ route('addOrder') }}" enctype="multipart/form-data">
                @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <label for="id" class="label">Order ID</label><br>
                        <input type="text" name="ID" id="ID">
                    </p>

                    <p>
                        <label for="cid" class="label">Customer ID</label><br>
                        <input type="text" name="cid" id="cid">
                    </p>

                    <p>
                        <label for="receiverName" class="label">Receiver Name</label><br>
                        <input type="text" name="receiverName" id="receiverName">
                    </p>

                    <p>
                        <label for="address" class="label">Address</label><br>
                        <input type="text" name="address" id="address">
                    </p>

                    <p>
                        <label for="postCode" class="label">Postcode</label><br>
                        <input type="text" name="postCode" id="postCode">
                    </p>

                    <select name= "courierID" id= "courierID" class="form-control">
                        @foreach($a_w_b_s as $caurier)
                            <option value=" {{ $caurier->courierName }}">{{ $caurier->courierName }}</option>
                        @endforeach
                    </select>

                    <p>
                        <input type="submit" name="insert" value="Insert" class="btn btn-success">
                    </p>
                </form>
            </div>
        </div>
@endsection