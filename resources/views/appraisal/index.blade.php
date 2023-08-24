@extends('layouts.master')

@section('content')
<div class="container mt-5 col-5">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a href="new/{{ $user_id }}" class="btn btn-primary pull-right">Appraise</a>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Year</th>
                <th>h1</th>
                <th>h2</th>
                <th>Total</th>
           
            </tr>
        </thead>
        <tbody>
            @foreach ($appraisals as $appraisal)
                <tr>
                    <td>{{ $appraisal->year }}</td>
                    <td>{{ $appraisal->h1 }}</td>
                    <td>{{ $appraisal->h2 }}</td>
                    <td>{{ ($appraisal->h2 !=null && $appraisal->h1 !=null? ($appraisal->h1 + $appraisal->h2)/2 : $appraisal->h2+$appraisal->h1) }}</td>            
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection