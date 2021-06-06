<nav class="navbar navbar-expand-lg navbar-dark bg-success" style="background-color: #e3f2fd;">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('task.index') }}">Task App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link {{ $pages['index'] ? 'active' : '' }}" aria-current="page" href="{{ route('task.index') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $pages['list'] ? 'active' : '' }}" href="{{ route('task.list') }}">Task List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $pages['create'] ? 'active' : '' }}" href="{{ route('task.create') }}">New Task</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $pages['about'] ? 'active' : '' }}" href="{{ route('task.about') }}">About</a>
        </li>
        </ul>
        <span class="navbar-text">
        Task App v1.0.0
        </span>
    </div>
    </div>
</nav>