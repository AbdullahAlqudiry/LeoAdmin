@extends('leoadmin.layouts.auth')

@section('content')

    <div class="mt-10 py-5 w-100">
        <div class="mx-auto w-xxl w-auto-xs">
            <div class="px-3">
                
                <div class="mb-4 text-center">
                    <h5>انشاء حساب جديد</h5>
                </div>

                {!! Form::open(['route' => 'register', 'method' => 'POST']) !!}
                        
                    <div class="form-group">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'الاسم', 'required' => true]) !!}
                    
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'البريد الإلكتروني', 'required' => true]) !!}
                    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'كلمة السر', 'required' => true]) !!}
                    
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'تأكيد كلمة السر', 'required' => true]) !!}
                    
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                    
                    <div class="text-center">
                        {!! Form::button('انشاء الحساب', ['type' => 'submit', 'class' => 'btn primary']) !!}
                    </div>
                    
                {!! Form::close() !!}
                    
                    
                @if (Route::has('register'))       
                    <div class="my-4 text-center">
                        هل تملك حساب؟
                        <a href="{{ route('login') }}" class="text-primary _600">تسجيل الدخول</a>
                    </div>
                @endif
        
            </div>
        </div>
    </div>

@endsection