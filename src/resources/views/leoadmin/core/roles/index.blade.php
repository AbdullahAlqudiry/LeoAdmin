@extends('leoadmin.layouts.leoadmin')

@section('content')

    @include('leoadmin.layouts.components.breadcrumb', [
        'links' => [
            ['title' => 'الإدوار', 'url' => route('dashboard.core.roles.index')],
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
                                href="{{ route('dashboard.core.roles.index') }}" 
                            >
                                الإدوار
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="box-body">

                    @can('dashboard_add_core_roles')
                        <div class="text-left">
                            <a href="{{ route('dashboard.core.roles.create') }}" class="btn white">إنشاء دور جديد</a>
                        </div>
                    @endcan

                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th style="width: 50px">#</th>
                                <th>الاسم</th>
                                <th>الوصف</th>
                                <th>Gurd</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($roles as $index => $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->description }}</td>
                                    <td>{{ $role->guard_name }}</td>
                                    <td class="text-left">

                                        @can('dashboard_edit_core_roles')
                                            <a href="{{ route('dashboard.core.roles.edit', $role) }}" class="btn btn-sm warning text-white">تعديل</a>
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
