@extends('layouts.master')

@section('content')
<div class="container mt-5">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Manger</th>
                <th>Email</th>
                <th>type</th>
                <th>Department</th>  
                <th>Appraisal</th>              
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->manger }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->type }}</td>
                    <td>{{ $employee->department }}</td>  
                    <td>
                        <a href="/employees/appraisal/{{ $employee->id }}" >
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                        </a>
                    </td>             
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection