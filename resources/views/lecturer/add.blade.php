@extends('layout')
<title>Add New Lecturers</title>

@section('content')
    
{{-- New Lecturers --}}
<div class="dashboard-children active" data-tab="4">
    {{-- Heading --}}
    <div class="mb-5 d-flex justify-content-between align-items-center">
        <div class="">
            <h1 class="dashboard-heading">
                New Lecturers
            </h1>
            <p class="dashboard-short-desc">Add your lecturer</p>
        </div>
    </div>
    
    {{-- Form --}}
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        {{-- Name, Address --}}
        <div class="row">
            <div class="col-md">
                <div class="form-input">
                    <label for="lecturer_name">Name</label>
                    <div>
                        <input type="text" placeholder="Enter your ame" class="lecturer_name" id="lecturer_name">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-input">
                    <label for="lecturer_address">Address</label>
                    <div>
                        <input type="text" placeholder="Enter your address" class="lecturer_address" id="lecturer_address">
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
                        <input type="text" placeholder="Enter your phone" class="lecturer_phone" id="lecturer_phone">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-input">
                    <label for="lecturer_birthday">Birthday</label>
                    <div>
                        <input type="date" placeholder="Enter your birthday" class="lecturer_birthday" id="lecturer_birthday">
                    </div>
                </div>
            </div>
        </div>

        <button class="btn-primary-style">Add new lecturer</button>
    </form>
</div>

@endsection
