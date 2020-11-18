@extends('leoadmin.layouts.leoadmin')

@section('content')

    @include('leoadmin.layouts.components.breadcrumb', [
        'links' => [
            ['title' => 'المستخدمين', 'url' => route('dashboard.core.users.index')],
            ['title' => 'إنشاء مستخدم جديد', 'url' => route('dashboard.core.users.create')],
        ]
    ])

    <div class="row">
        <div class="col-sm-12">

            <div class="box">

                <div class="b-b b-primary nav-active-primary">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a 
                                class="nav-link active" 
                                href="{{ route('dashboard.core.users.create') }}" 
                            >
                                إنشاء مستخدم جديد
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="box-body">
                
                    {!! Form::open(['route' => ['dashboard.core.users.store'], 'method' => 'POST']) !!}
                        
                        {!! $userForm->render('create') !!}

                        <div class="text-left">
                            <button type="submit" class="btn primary">إنشاء</button>
                        </div>
        
        
                    {!! Form::close() !!}

                </div>

            </div>
                
        </div>
    </div>

@endsection
