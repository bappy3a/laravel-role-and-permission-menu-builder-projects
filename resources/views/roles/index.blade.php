@extends('layouts.master')

@section('content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-check icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>All Roles</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('app.roles.create') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                        Create Role
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Active Users
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Permissions</th>
                                <th class="text-center">Create</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $key=>$role)
                                <tr>
                                    <td class="text-center text-muted">#{{ $key + 1 }}</td>
                                    <td class="text-center">{{ $role->name }}</td>
                                    <td class="text-center">
                                        @if($role->permissions->count() > 0)
                                            <div class="badge badge-info">{{ $role->permissions->count() }}</div>
                                        @else
                                            <div class="badge badge-danger">No permissions found :( </div>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $role->created_at->format('M d, Y') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('app.roles.edit',$role->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <form action="{{ route('app.roles.destroy', $role->id) }}" method="post">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span> Delete</button>
                                        </form>
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