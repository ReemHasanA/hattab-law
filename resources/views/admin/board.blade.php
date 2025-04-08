@extends('layouts.dashboard') 

@section('style')
<link rel="stylesheet" href="{{asset('home/css/board.css')}}">
@endsection

@section('body')

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h1>Admin Dashboard</h1>
        </div>

        <!-- Cards -->
        <div class="cards">
            <a href="{{ route('admin.board') }}" class="card">
                <h3>Dashboard Overview</h3>
                <p>Manage your data and activity.</p>
            </a>
            <a href="{{ route('practices.create') }}" class="card">
                <h3>Manage Practices</h3>
                <p>Add or Edit any of the practices area.</p>
            </a>
            <a href="{{ route('team.create') }}" class="card">
                <h3>Manage Team Members</h3>
                <p>View and edit team member details.</p>
            </a>
        </div>
@endsection