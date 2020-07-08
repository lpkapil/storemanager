@extends('base')

@section('title', 'Admin - Add New User')

@section('main')


<div class="card-header">Add New User</div>
<div class="card-body">
    <div>
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif

        @if(session()->get('errors'))
        <div class="alert alert-danger">
            {{ session()->get('errors') }}
        </div>
        @endif
    </div>
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" />
        </div>
        <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" value="" />
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" class="form-control" name="password_confirmation" value="" />
        </div>
        <div class="form-group">
            <label for="password">Roles:</label><br><br>
            @foreach($user->allroles as $k => $role)
            <input type="checkbox" name="role_ids[]" value="{{$k}}">
            <label for="role_ids">{{$role}}</label><br>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary float-right">Add User</button>
    </form>
</div>
@endsection