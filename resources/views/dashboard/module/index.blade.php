@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    <!-- <div class="btn-toolbar mb-2 mb-md-0">
                          <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                          </div>
                          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                          </button>
                        </div> -->

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/module/create" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">File</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($module as $m)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $m->name }}</td>
                        <td>{{ $m->file }}</td>
                        <td>
                            <a href="/dashboard/module/{{ $m->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="/dashboard/module/{{ $m->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Hapus Data?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
