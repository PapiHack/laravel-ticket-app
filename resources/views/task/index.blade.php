@extends('base')

@section('title')
    Task-App
@endsection

@section('body')
    @include('includes.nav')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5 mt-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                      <h1 class="display-5 fw-bold">Welcome to <i>Task App v1.0.0</i></h1>
                      <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                      <a href="{{ route('task.list') }}" class="btn btn-primary btn-md" type="button">Task List</a>
                      <a href="{{ route('task.create') }}" class="btn btn-success btn-md" type="button">Create Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection