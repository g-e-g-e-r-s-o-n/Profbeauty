@extends('layouts.master')


@section('title')
    პროფბიუთი - სამართავი პანელი | მომხმარებლის რედაქტირება
@endsection


@section('sidebar')
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="/dashboard">
                    <i class="now-ui-icons design_app"></i>
                    <p>სამართავი პანელი</p>
                </a>
            </li>
            <li class="active">
                <a href="/role-register">
                    <i class="fa fa-users"></i>
                    <p>მომხმარებლების მართვა</p>
                </a>
            </li>
            <li>
                <a href="/products">
                    <i class="fa fa-database"></i>
                    <p>პროდუქცია</p>
                </a>
            </li>
            <li>
                <a href="/sliders">
                    <i class="fa fa-sliders-h"></i>
                    <p>სლაიდერი</p>
                </a>
            </li>
            <li>
                <a href="/offers">
                    <i class="fa fa-handshake"></i>
                    <p>შეთავაზებები</p>
                </a>
            </li>
            <li>
                <a href="/suggestions">
                    <i class="fa fa-hourglass"></i>
                    <p>შეთავაზება</p>
                </a>
            </li>
            <li>
                <a href="/images">
                    <i class="fa fa-images"></i>
                    <p>ფოტოები</p>
                </a>
            </li>
        </ul>
    </div>

@endsection



@section('page-title')
    სამართავი პანელი - მომხმარებლის რედაქტირება
@endsection


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>მომხმარებლის რედაქტირება</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/role-register-update/{{ $users->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <div class="form-group">
                                        <label>სახელი</label>
                                        <input type="text" name="name" value="{{ $users->name }}" maxlength="200" class="form-control blue">
                                    </div>
                                    <div class="form-group">
                                        <label>მივანიჭოთ ტიპი</label>
                                        <select name="permission" class="form-control blue">
                                            <option value="" disabled>აირჩიეთ ტიპი</option>
                                            @if  ($users->permission  == 'admin')
                                                <option value="admin">ადმინი</option>
                                                <option value="user">რიგითი მომხმარებელი</option>
                                            @else
                                                <option value="user">რიგითი მომხმარებელი</option>
                                                <option value="admin">ადმინი</option>
                                            @endif
{{--                                            <option value="admin">ადმინი</option>--}}
{{--                                            <option value="user">რიგითი მომხმარებელი</option>--}}
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success"> განახლება</button>
                                    <a href="/role-register" class="btn btn-danger"> გაუქმება</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('scripts')

@endsection
