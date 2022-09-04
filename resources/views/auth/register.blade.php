@extends('auth.master')

@section('content')

    <form action="" class="form" method="post">
        <a class="account-logo" href="index.html">
            <img src="img/weblogo.png" alt="">
        </a>
        <div class="form-content form-account">

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" class="txt @error('name') is-invalid @enderror"
                    placeholder="نام و نام خانوادگی *" id="name"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                >
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="email" class="txt @error('email') is-invalid @enderror"
                    placeholder="ایمیل *" id="email"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="text" class="txt @error('mobile') is-invalid @enderror"
                    placeholder="موبایل" id="mobile"
                    name="mobile" value="{{ old('mobile') }}" autocomplete="mobile" autofocus
                >
                @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="password" class="txt txt-l @error('password') is-invalid @enderror"
                    id="password" name="password" required autocomplete="new-password"
                    placeholder="رمز عبور *"
                >
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="password" class="txt txt-l"
                    id="password-confirm" name="password_confirmation"
                    required autocomplete="new-password"
                    placeholder="تایید رمز عبور *"
                >

                <span class="rules">
                    رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و کاراکترهای غیر الفبا مانند !@#$%^&*() باشد.
                </span>
                <br>
                <button class="btn continue-btn" type="submit">ثبت نام و ادامه</button>
            </form>

        </div>
        <div class="form-footer">
            <a href="login.html">صفحه ورود</a>
        </div>
    </form>

@endsection
