@extends('products.layout')

@section('content')
    <h1>Confirm Order</h1>
    <hr>
    <form action="/laravelshop/public/products/listProducts" method="get">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">First and last name</label>
            <input type="text" class="form-control" id="Name"  name="name">
        </div>
        <div class="form-group">
            <label for="title">Address</label>
            <input type="text" class="form-control" id="address"  name="address">
        </div>
        <div class="form-group">
            <label for="email">Email adress</label>
            <input type="text" class="form-control" id="email" name="email"/>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <textarea type="text" class="form-control" id="phone" name="phone"></textarea>
        </div>
        <div class="form-group">
            <label for="comment">Additional order comment</label>
            <textarea type="text" class="form-control" id="comment" name="comment"></textarea>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>
@endsection
