@extends('leoadmin.layouts.leoadmin')

@section('content')

    @include('leoadmin.layouts.components.breadcrumb', [
        'links' => [
            ['title' => 'الإدوار', 'url' => route('dashboard.core.roles.index')],
            ['title' => 'إنشاء دور جديد', 'url' => route('dashboard.core.roles.create')],
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
                                href="{{ route('dashboard.core.roles.create') }}" 
                            >
                                إنشاء دور جديد
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="box-body">
                
                    {!! Form::open(['route' => ['dashboard.core.roles.store'], 'method' => 'POST']) !!}
                        
                        {!! $roleForm->render('create') !!}

                        @include('leoadmin.core.roles.permissions', ['permissions' => $permissions]);

                        <div class="text-left">
                            <button type="submit" class="btn primary">إنشاء</button>
                        </div>
        
        
                    {!! Form::close() !!}

                </div>

            </div>
                
        </div>
    </div>

@endsection
