@extends('leoadmin.layouts.leoadmin')

@section('content')

    @include('leoadmin.layouts.components.breadcrumb', [
        'links' => [
            ['title' => 'المستخدمين', 'url' => route('dashboard.core.users.index')],
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
                                href="{{ route('dashboard.core.users.index') }}" 
                            >
                                المستخدمين
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="box-body">

                    @can('dashboard_add_core_users')
                        <div class="text-left">
                            <a href="{{ route('dashboard.core.users.create') }}" class="btn white">إنشاء مستخدم جديد</a>
                        </div>
                    @endcan

                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th style="width: 50px">#</th>
                                <th>الاسم</th>
                                <th>البريد الإلكتروني</th>
                                <th>الدور</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $index => $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <span class="badge success">{{ $user->role_name }}</span>
                                    </td>
                                    <td class="text-left">

                                        @can('dashboard_edit_core_users')
                                            <a href="{{ route('dashboard.core.users.edit', $user) }}" class="btn btn-sm warning text-white">تعديل</a>
                                        @endcan

                                    </td>
                                </tr>  
                            @endforeach
                            
                        </tbody>
                    </table>

                </div>

            </div>
                
        </div>
    </div>

@endsection
