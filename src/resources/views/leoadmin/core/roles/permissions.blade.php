<div class="row">
    <div class="col-sm-12">
        <div class="form-group">

            {!! Form::label('label', 'الصلاحيات') !!}

            <div class="row">
                @foreach($permissions->groupBy('group_key') as $group => $groupPermissions)

                    <div class="col-md-4">
                        <u>{{ __('strings.roles.' . $group) }}</u> <br /><br />

                        @foreach($groupPermissions as $perm)

                            @php 
                                $per_found = null;
                                    
                                if( isset($role) ) {
                                    $per_found = $role->hasPermissionTo($perm->name);
                                }
                            @endphp
                                
                            <div class="checkbox">
                                <label class="{{ str_contains($perm->name, 'delete') ? 'text-danger' : '' }}">
                                    {!! Form::checkbox("permissions[]", $perm->name, $per_found, isset($options) ? $options : []) !!} {{ $perm->label }}
                                </label>
                            </div>
                            
                        @endforeach
                    </div>
                        
                @endforeach
            </div>
            
        </div>
    </div>
</div>