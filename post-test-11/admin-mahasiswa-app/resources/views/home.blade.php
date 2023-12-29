@extends('layouts.main')

@section('container')
    <h1>Data Mahasiswa</h1><br>
    <form action="/form" method="POST">
        @csrf
        <div class="form-floating">
            <input type="text" name="name"
                class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name">
            <label for="name">Name</label>
            @error('name')
                <div class="invalid-feedback" style="text-align: left">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="nim" name="nim"
                class="form-control rounded-0 @error('name') is-invalid @enderror" id="nim" placeholder="NIM">
            <label for="nim">NIM</label>
            @error('nim')
                <div class="invalid-feedback" style="text-align: left">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                placeholder="Email">
            <label for="email">Email</label>
            @error('email')
                <div class="invalid-feedback" style="text-align: left">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
