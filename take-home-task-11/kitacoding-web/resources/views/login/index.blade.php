@extends('layouts.main')

@section('container')
    <div class="card text-center">
        <div class="card-header">
            <h1>Login</h1>
        </div>
        <div class="card-body">
            <main class="form-signin w-100 m-auto">
                <form>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                </form>
                <small>Not Registered? <a href="/register">Register Here</a></small>
            </main>
        </div>
        <div class="card-footer text-body-secondary">
            KitaCoding
        </div>
    </div>
@endsection
