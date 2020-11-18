@extends('leoadmin.layouts.auth')

@section('content')

    <div class="mt-10 py-5 w-100">
        <div class="mx-auto w-xxl w-auto-xs">
            <div class="px-3">
                
                <div class="mb-4 ">
                    <h5 class="text-center">هل نسيت كلمة المرور؟</h5>
                    <p class="text-muted my-3">
                        أدخل بريدك الإلكتروني وسيتم ارسال تعليمات حول كيفية استعادة كلمة المرور الخاصة بك.
                    </p>
                </div>

                {!! Form::open(['route' => 'password.email', 'method' => 'POST']) !!}
                        
                    <div class="form-group">
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'البريد الإلكتروني', 'required' => true]) !!}
                    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="text-center">
                        {!! Form::button('إرسال رابط إعادة تعيين كلمة السر', ['type' => 'submit', 'class' => 'btn primary']) !!}
                    </div>
                    
                {!! Form::close() !!}

                @if (Route::has('login'))       
                    <div class="my-4 text-center">
                        العودة الى <a href="{{ route('login') }}" class="text-primary _600">تسجيل الدخول</a>
                    </div>
                @endif
                    
        
            </div>
        </div>
    </div>

@endsection