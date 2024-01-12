@extends('layouts.main')

@section('container-fluid')
    <div class="container-fluid mt-5">
        <div class="row g-5">
            <div class="col">
                <main class="form-signin card">
                    <form class="card-body" action="/add" method="POST">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal card-header text-center">Add Employee</h1>

                        <div class="form-floating">
                            <input type="text" class="form-control rounded-bottom-0 @error('name') is-invalid @enderror"
                                name="name" id="name" required>
                            <label class="form-label" for="name">Name</label>
                            @error('name')
                                <div class="invalid-feedback" style="text-align: left">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select @error('gender') is-invalid @enderror" name="gender" id="gender"
                                autofocus required>
                                <option value="Alien" selected>Alien
                                </option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback" style="text-align: left">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="string" class="form-control rounded-bottom-0 @error('id_employee') is-invalid @enderror"
                                name="id_employee" id="id_employee" required>
                            <label class="form-label" for="id_employee">ID Employee</label>
                            @error('id_employee')
                                <div class="invalid-feedback" style="text-align: left">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <label for="department" class="form-label">Department</label>
                            <select class="form-select @error('department') is-invalid @enderror" name="department" id="department"
                                autofocus required>
                                <option value="Alien" selected>Alien
                                </option>
                                <option value="AA">AA</option>
                                <option value="BB">BB</option>
                                <option value="CC">CC</option>
                                <option value="DD">DD</option>
                            </select>
                            @error('department')
                                <div class="invalid-feedback" style="text-align: left">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <label for="position" class="form-label">Position</label>
                            <select class="form-select @error('position') is-invalid @enderror" name="position" id="position"
                                autofocus required>
                                <option value="00" selected>00
                                </option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                            </select>
                            @error('department')
                                <div class="invalid-feedback" style="text-align: left">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="number" class="form-control rounded-bottom-0 @error('work_duration') is-invalid @enderror"
                                name="work_duration" id="work_duration" required>
                            <label class="form-label" for="id_employee">Work Duration</label>
                            @error('work_duration')
                                <div class="invalid-feedback" style="text-align: left">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="number" class="form-control rounded-bottom-0 @error('salary') is-invalid @enderror"
                                name="salary" id="salary" required>
                            <label class="form-label" for="salary">Salary</label>
                            @error('salary')
                                <div class="invalid-feedback" style="text-align: left">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary w-100 py-2 my-4" type="submit">Login</button>
                    </form>
                </main>
            </div>
        </div>
    </div>
@endsection
