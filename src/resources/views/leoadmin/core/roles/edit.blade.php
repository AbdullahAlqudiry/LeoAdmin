@extends('leoadmin.layouts.leoadmin')

@section('content')

    @include('leoadmin.layouts.components.breadcrumb', [
        'links' => [
            ['title' => 'الإدوار', 'url' => route('dashboard.core.roles.index')],
            ['title' => 'تعديل الدور', 'url' => route('dashboard.core.roles.edit', $role)],
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
                                href="{{ route('dashboard.core.roles.edit', $role) }}" 
                            >
                                تعديل الدور
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="box-body">
                
                    {!! Form::model($role, ['route' => ['dashboard.core.roles.update', $role], 'method' => 'PUT']) !!}
                        
                        {!! $roleForm->render('edit') !!}

                        @include('leoadmin.core.roles.permissions', ['permissions' => $permissions]);

                        <div class="text-left">
                            <button type="submit" class="btn primary">حفظ</button>
                        </div>
        
        
                    {!! Form::close() !!}

                </div>

            </div>
                
        </div>
    </div>

@endsection
