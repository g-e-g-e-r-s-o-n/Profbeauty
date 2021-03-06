@extends('layouts.master')


@section('title')
    პროფბიუთი - სამართავი პანელი | პროდუქტის რედაქტირება
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
            <li class="active">
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
    სამართავი პანელი - პროდუქტის რედაქტირება
@endsection


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>პროდუქტის რედაქტირება</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/product-update/{{ $products->id }}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
{{--                                    {{ method_field('PUT') }}--}}

                                    <div class="form-group">
                                        <label>ID</label>
                                        <input type="text" name="prod_ID" class="form-control blue" value="{{ $products->prod_ID }}" maxlength="200" required>
                                    </div>
                                    <div class="form-group">
                                        <label>დასახელება</label>
                                        <input type="text" name="prod_name" class="form-control blue" value="{{ $products->prod_name }}" maxlength="200" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ფასი</label>
                                        <input type="number" step="0.01" name="prod_price" class="form-control blue" value="{{ $products->prod_price }}" min="0" max="9999" onKeyPress="if(this.value.length==5) return false;" required>
                                    </div>
                                    {{--                                    <div class="form-group">--}}
                                    <label>აღწერა</label>
                                    <textarea name="prod_description" class="form-control blue" maxlength="255" required>{{ $products->prod_description }}</textarea>
                                    {{--                                    </div>--}}
                                    <div class="form-group">
                                        <label>კატეგორია</label>
                                        <input type="text" name="prod_category" class="form-control blue" value="{{ $products->prod_category }}" maxlength="200" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ბრენდი</label>
                                        <input type="text" name="prod_brand" class="form-control blue" value="{{ $products->prod_brand }}" maxlength="200" required>
                                    </div>
                                    <div class="form-group">
                                        <label>ტეგები</label>
                                        <input type="text" name="prod_tags" class="form-control blue" value="{{ $products->prod_tags }}" maxlength="200" required>
                                    </div>
                                    {{--                                    <div class="form-group">--}}
                                    <label>ფოტო</label>
                                    <input type="file" name="image" class="form-control blue" value="{{ $products->image }}" required>
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
                                    <a href="/products" class="btn btn-danger"> გაუქმება</a>
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
