@extends('base')

@section('title')
    Task-App About
@endsection

@section('body')
    @include('includes.nav')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-4">
              <h1>About this minimalistic application.</h1>
              <p>
                  This is a simple apllication built with the <code>PHP</code> framework
                  named <code>Laravel</code> that allow you to manage easily your day-to-day tasks.
              </p>
              <p><strong>Technical Stack :</strong></p>
              <ul>
                <li><p>Laravel</p></li>
                <li><p>Bootstrap 5</p></li>
                <li><p>MySQL</p></li>
              </ul>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection