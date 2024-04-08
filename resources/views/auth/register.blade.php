@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <h1>{{ __('ユーザー新規登録画面') }}</h1>

            <div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="ユーザ名">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="メールアドレス">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="パスワード">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="パスワード（確認用）">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-warning btn-sm mx-1 px-4">
                                    {{ __('新規登録') }}
                            </button>
                            <a href="{{ route('login') }}" class="btn btn-info btn-sm mx-1 px-4">戻る</a>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection
