@extends('layouts.master')


@section('title')
    პროფბიუთი - სამართავი პანელი | პროდუქცია

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
    სამართავი პანელი - პროდუქცია
@endsection


@section('content')


{{--        <!-- Modal -->--}}
{{--        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--            <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title" id="exampleModalLongTitle">მომხმარებლის დამატება</h5>--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <form method="POST">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="name" class="col-form-label">დასახელება:</label>--}}
{{--                                <input type="text" class="form-control"  id="name" name="name" required autocomplete="name" autofocus>--}}

{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="email" class="col-form-label">ელ-ფოსტა:</label>--}}
{{--                                <input type="email" class="form-control" id="email" name="email" required autocomplete="email">--}}

{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="password" class="col-form-label">პაროლი:</label>--}}
{{--                                <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">--}}

{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="password-confirm" class="col-form-label">დაადასტურეთ პაროლი:</label>--}}
{{--                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-danger" data-dismiss="modal">გაუქმება</button>--}}
{{--                        <button type="submit" class="btn btn-success">დამატება</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}









    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">პროდუქცია
                        <!-- Button trigger modal -->
                                                <a href="/product" class="btn btn-success float-right" style="font-size: 15px">დამატება</a>
                    </h4>
                    <br>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>




                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-info">
                            <tr>
                                <th>ID</th>
                                <th>დასახელება</th>
                                <th>ფასი</th>
                                <th>აღწერა</th>
                                <th>კატეგორია</th>
                                <th>ბრენდი</th>
                                <th>ტეგები</th>
                                <th>ფოტო</th>
                                <th>შეიქმნა</th>
                                <th>განახლდა</th>
                                <th></th>
                                <th></th>
                            </tr>
                            {{--                            <th>რედაქტირება</th>--}}
                            {{--                            <th>წაშლა</th>--}}
                            {{--                            <th class="text-right">Salary</th>--}}
                            </thead>
                            <tbody>
                            @foreach ($products as $row)
                                <tr>
                                    <td>{{ strlen($row->prod_ID) > 15 ? substr($row->prod_ID,0,15).'...' : $row->prod_ID }}</td>
                                    <td>{{ strlen($row->prod_name) > 15 ? substr($row->prod_name,0,15).'...' : $row->prod_name }}</td>
                                    <td>{{ number_format($row->prod_price, 2) }} ₾</td>
                                    <td>{{ strlen($row->prod_description) > 20 ? substr($row->prod_description,0,20).'...' : $row->prod_description }}</td>
                                    <td>{{ strlen($row->prod_category) > 15 ? substr($row->prod_category,0,15).'...' : $row->prod_category }}</td>
                                    <td>{{ strlen($row->prod_brand) > 15 ? substr($row->prod_brand,0,15).'...' : $row->prod_brand }}</td>
                                    <td>{{ strlen($row->prod_tags) > 15 ? substr($row->prod_tags,0,15).'...' : $row->prod_tags }}</td>
                                    <td><img src="{{ asset('uploads/product/' . $row->image ) }}" width="120px"></td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>{{ $row->updated_at }}</td>
                                    <td class="text-right">
                                        <a href="/product-edit/{{ $row->id }}" class="btn btn-warning">რედაქტირება</a>
                                    </td>
                                    <td>
                                        <form action="/product-delete/{{ $row->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">წაშლა</button>
                                        </form>
                                    </td>
                                    {{--                                <td class="text-right">$36,738</td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                            <thead class=" text-info">
                            <tr>
                                <th>ID</th>
                                <th>დასახელება</th>
                                <th>ფასი</th>
                                <th>აღწერა</th>
                                <th>კატეგორია</th>
                                <th>ბრენდი</th>
                                <th>ტეგები</th>
                                <th>ფოტო</th>
                                <th>შეიქმნა</th>
                                <th>განახლდა</th>
                                <th></th>
                                <th></th>
                            </tr>

                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

@endsection



@section('scripts')

    <script>
        $('table').DataTable();
    </script>

@endsection
