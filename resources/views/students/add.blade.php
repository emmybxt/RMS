@extends('layouts.app1')

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add Student</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('home')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add Student</li>
                    </ol>
                </div>
            </div>
            <add-student></add-student>
        </div>
    </div>

@endsection
