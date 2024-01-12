@extends('layouts.main')

@section('container-fluid')
    <div class="container-fluid mt-5 custom-form">
        <a class="btn btn-md btn-primary" href="/add">Add Employee</a>
    </div>
    <div class="container-fluid mt-5">
        <div class="table-responsive-sm">
            {{-- add employee here --}}
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">ID Employee</th>
                        <th scope="col">Departmnet</th>
                        <th scope="col">Position</th>
                        <th scope="col">Work Duration</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->gender }}</td>
                            <td>{{ $employee->id_employee }}</td>
                            <td>{{ $employee->department }}</td>
                            <td>{{ $employee->position }}</td>
                            <td>{{ $employee->work_duration }}</td>
                            <td>{{ $employee->salary }}</td>
                            <td>
                                {{-- action here for update delete --}}
                                <a class="btn btn-md btn-secondary" href="#">Update</a>
                                <a class="btn btn-md btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
