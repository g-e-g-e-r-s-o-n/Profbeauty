@extends('layouts.master')


@section('title')
    პროფბიუთი - სამართავი პანელი | შეთავაზების რედაქტირება
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
            <li>
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
            <li class="active">
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
    სამართავი პანელი - შეთავაზების რედაქტირება
@endsection


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>შეთავაზების რედაქტირება</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/suggestion-update/{{ $suggestions->id }}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}


                                    <div class="form-group">
                                        <label>სათაური</label>
                                        <input type="text" name="suggestion_title" class="form-control blue" value="{{ $suggestions->suggestion_title }}" maxlength="200" required>
                                    </div>
                                    {{--                                    <div class="form-group">--}}
                                    <label>ტექსტი</label>
                                    <textarea name="suggestion_text" class="form-control blue" maxlength="255" required>{{ $suggestions->suggestion_text }}</textarea>
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="form-group">--}}
                                    <label>ბოლო ვადა</label>
                                    <input type="datetime-local" name="suggestion_deadline" class="form-control blue" value="{{ $suggestions->suggestion_deadline }}" required>
                                    {{--                                    </div>--}}




                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <label for="exampleFormControlFile1">Example file input</label>--}}
                                    {{--                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">--}}
                                    {{--                                    </div>--}}

                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <label>მივანიჭოთ ტიპი</label>--}}
                                    {{--                                        <select name="permission" class="form-control">--}}
                                    {{--                                            <option value="" disabled selected>აირჩიეთ ტიპი</option>--}}
                                    {{--                                            <option value="admin">ადმინი</option>--}}
                                    {{--                                            <option value="user">რიგითი მომხმარებელი</option>--}}
                                    {{--                                        </select>--}}
                                    {{--                                    </div>--}}
                                    <button type="submit" class="btn btn-success"> განახლება</button>
                                    <a href="/suggestions" class="btn btn-danger"> გაუქმება</a>
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
