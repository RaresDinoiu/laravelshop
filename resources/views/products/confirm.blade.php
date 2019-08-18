@extends('products.layout')

@section('content')
    <h1 style="color:white;">Order confirmation</h1>
    <hr>
    <form action="/laravelshop/public/confirm" method="post">
        {{ csrf_field() }}
        <div class="form-group" style="color:white;">
            <label for="name">First and last name</label>
            <input type="text" class="form-control" id="Name"  name="name">
        </div>
        <div class="form-group" style="color:white;">
            <label for="adress">Address</label>
            <input type="text" class="form-control" id="adress"  name="adress">
        </div>
        <div class="form-group" style="color:white;">
            <label for="email">Email adress</label>
            <input type="text" class="form-control" id="email" name="email"/>
        </div>
        <div class="form-group" style="color:white;">
            <label for="phone">Phone Number</label>
            <textarea type="text" class="form-control" id="phone" name="phone"></textarea>
        </div>
        <div class="form-group" style="color:white;">
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
