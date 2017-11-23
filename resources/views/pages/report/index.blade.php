@extends ('layout.app')
@section('title', 'Reports')
@section('description', 'Reports')
@section('content-title', 'All Reports')
@section('content-body')
    <ul class="users-list clearfix">
        <li>
            <img src="dist/img/user1-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="{{url('users/1')}}">Alexander Pierce</a>
            <span class="users-list-date">Administrator</span>
        </li>
        <li>
            <img src="dist/img/user8-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="{{url('users/1')}}">Norman</a>
            <span class="users-list-date">Accountant</span>
        </li>
        <li>
            <img src="dist/img/user7-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="{{url('users/1')}}">Jane</a>
            <span class="users-list-date">Dispatcher</span>
        </li>
        <li>
            <img src="dist/img/user6-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="{{url('users/1')}}">John</a>
            <span class="users-list-date">Auditor</span>
        </li>
        <li>
            <img src="dist/img/user2-160x160.jpg" alt="User Image">
            <a class="users-list-name" href="{{url('users/1')}}">Alexander</a>
            <span class="users-list-date">Sales Manager</span>
        </li>
        <li>
            <img src="dist/img/user5-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="{{url('users/1')}}">Sarah</a>
            <span class="users-list-date">Project Manager</span>
        </li>
        <li>
            <img src="dist/img/user4-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="{{url('users/1')}}">Nora</a>
            <span class="users-list-date">Security</span>
        </li>
        <li>
            <img src="dist/img/user3-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="{{url('users/1')}}">Nadia</a>
            <span class="users-list-date">Dispatcher</span>
        </li>
    </ul>
@endsection