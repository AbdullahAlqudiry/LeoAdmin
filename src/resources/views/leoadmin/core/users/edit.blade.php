@extends('leoadmin.layouts.leoadmin')

@section('content')

    @include('leoadmin.layouts.components.breadcrumb', [
        'links' => [
            ['title' => 'المستخدمين', 'url' => route('dashboard.core.users.index')],
            ['title' => 'تعديل المستخدم', 'url' => route('dashboard.core.users.edit', $user)],
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
                                href="{{ route('dashboard.core.users.edit', $user) }}" 
                            >
                                تعديل المستخدم
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="box-body">
                
                    {!! Form::model($user, ['route' => ['dashboard.core.users.update', $user], 'method' => 'PUT']) !!}
                        
                        {!! $userForm->render('edit') !!}

                        <div class="text-left">
                            <button type="submit" class="btn primary">حفظ</button>
                        </div>
        
        
                    {!! Form::close() !!}

                </div>

            </div>
                
        </div>
    </div>

@endsection
