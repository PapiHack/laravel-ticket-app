@extends('base')

@section('title')
    Task-App Create
@endsection

@section('body')
    @include('includes.nav')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-4">
                <form action="{{ route('task.create') }}" method="POST">
                    @csrf
                    <legend>Create New Task</legend>
                    <div class="mb-3">
                        <label for="owner" class="form-label">Owner</label>
                        <input type="text" class="form-control" id="owner" name="owner" placeholder="Task Owner Name"/>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Task Name"/>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3">The description of your task here</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Task Status</label>
                        <select id="status" name="status" class="form-select">
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="hight">Hight</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="complete" class="form-label">
                            <input class="form-check-input" type="checkbox" name="complete" id="complete"/>
                            Complete
                        </label>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Create</button>
                        <button class="btn btn-danger" type="reset">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection