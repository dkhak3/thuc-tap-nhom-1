@extends('layout')
<title>Update Lecturers</title>


@section('content')

{{-- New Lecturers --}}
<div class="dashboard-children active" data-tab="4">
    {{-- Heading --}}
    <div class="mb-5 d-flex justify-content-between align-items-center">
        <div class="">
            <h1 class="dashboard-heading">
                Update Lecturers
            </h1>
            <p class="dashboard-short-desc">Update your lecturer id: {{$lecturer[0]->id}}</p>
        </div>
    </div>
    
    {{-- Form --}}
    <form action="{{ route('edit',$lecturer[0]->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        {{-- Name, Address --}}
        <div class="row">
            <div class="col-md">
                <div class="form-input">
                    <label for="lecturer_name">Name</label>
                    <div>
                        <input type="text" placeholder="Enter your ame" class="lecturer_name" id="lecturer_name" value="{{$lecturer[0]->lecturer_name}}" maxlength="255" >
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-input">
                    <label for="lecturer_address">Address</label>
                    <div>
                        <input type="text" placeholder="Enter your address" class="lecturer_address" id="lecturer_address" value="{{$lecturer[0]->lecturer_address}}" maxlength="255" >
                    </div>
                </div>
            </div>
        </div>
        {{-- Phone, Birthday --}}
        <div class="row">
            <div class="col-md">
                <div class="form-input">
                    <label for="lecturer_phone">Phone</label>
                    <div>
                        <input type="text" placeholder="Enter your phone" class="lecturer_phone" id="lecturer_phone"  value="{{$lecturer[0]->lecturer_phone}}" maxlength="255" >
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-input">
                    <label for="lecturer_birthday">Birthday</label>
                    <div>
                        <input type="date" placeholder="Enter your birthday" class="lecturer_birthday" id="lecturer_birthday" value="{{$lecturer[0]->lecturer_birthday}}" maxlength="255" >
                    </div>
                </div>
            </div>
        </div>

        <button class="btn-primary-style">Update lecturer</button>
    </form>
</div>

@endsection