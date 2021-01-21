@extends('template')

@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Password </label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>  

            </div>
        </div>
    </div>
@endsection
