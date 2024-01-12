@extends('layouts.main')

@section('container-fluid')
    <div class="container-fluid mt-5 justify-content-center">
        <main class="form-signin w-25 card">
            <form class="card-body" action="/login" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal card-header text-center">Login</h1>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-bottom-0 @error('username') is-invalid @enderror"
                        name="username" id="username" placeholder="name@example.com" required>
                    <label for="text">Username</label>
                    @error('username')
                        <div class="invalid-feedback" style="text-align: left">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-top-0 @error('password') is-invalid @enderror"
                        name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback" style="text-align: left">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="btn btn-primary w-100 py-2 my-4" type="submit">Login</button>
            </form>
        </main>
    </div>
@endsection
