@extends('leoadmin.layouts.auth')

@section('content')

    <div class="mt-10 py-5 w-100">
        <div class="mx-auto w-xxl w-auto-xs">
            <div class="px-3">
                
                <div class="mb-4 text-center">
                    <h5>تسجيل الدخول</h5>
                </div>

                {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}
                        
                    <div class="form-group">
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'البريد الإلكتروني', 'required' => true]) !!}
                    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'كلمة المرور', 'required' => true]) !!}
                    
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="text-center">
                        {!! Form::button('تسجيل الدخول', ['type' => 'submit', 'class' => 'btn primary']) !!}
                    </div>
                    
                {!! Form::close() !!}
                    
                @if (Route::has('password.request'))       
                    <div class="my-4 text-center">
                        <a href="{{ route('password.request') }}" class="text-primary _600">هل نسيت كلمة المرور؟</a>
                    </div>
                @endif
                    
                @if (Route::has('register'))       
                    <div class="my-4 text-center">
                        لا تملك حساب؟
                        <a href="{{ route('register') }}" class="text-primary _600">انشاء حساب جديد</a>
                    </div>
                @endif
        
            </div>
        </div>
    </div>

@endsection
