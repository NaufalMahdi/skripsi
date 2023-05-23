@extends('layouts.main')

@section('content')
    <div style="width:100%;height:20px;">
    </div>
    <center>
        <h3>MODUL PJJ</h3>
    </center>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modules as $m)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="dashboard/module/download/{{ $m->id }}">{{ $m->name }}</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div style="width:100%;height:800px;">
    @endsection
