@extends('layouts.app')

@section('content')
<div class="container" style="font-family: 'Segoe UI', Helvetica Neue, Helvetica, Arial, sans-serif">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="background: #3264f9; color: white">{{ __('გადაამოწმეთ თქვენი ელ-ფოსტის მისამართი') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('ვერიფიკაციის ახალი ბმული გაიგზავნა თქვენს ელ-ფოსტის მისამართზე.') }}
                        </div>
                    @endif

                    {{ __('გაგრძელებამდე გთხოვთ, გადაამოწმოთ თქვენი ელ-ფოსტა დამადასტურებელი ბმულისთვის.') }}
                    {{ __('თუ ბმული არ მიგიღიათ') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="color: #007bff">{{ __('დააჭირეთ აქ, რომ გავაგზავნოთ სხვა') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
