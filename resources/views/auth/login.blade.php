@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ __('ユーザーログイン画面') }}</h1>

            <div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="パスワード">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="アドレス">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8">
                            <a href="{{ route('register') }}" class="btn btn-warning btn-sm mx-1 px-4">新規登録</a>      
                            <button type="submit" class="btn btn-info btn-sm mx-1 px-4">
                                {{ __('ログイン') }}
                            </button>    
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
