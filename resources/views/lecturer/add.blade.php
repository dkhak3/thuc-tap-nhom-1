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
    <form action="{{ route('store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" class="form-main">
        @csrf
        {{-- Name, Address --}}
        <div class="row">
            <div class="col-md">
                <div class="form-input">
                    <label for="lecturer_name">Name</label>
                    <div>
                        <input type="text" placeholder="Enter your ame" name="lecturer_name" id="lecturer_name" required autofocus >
                    </div>
                    @if ($errors->has('lecturer_name'))
                        <span class="text-danger">{{ $errors->first('lecturer_name') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-md">
                <div class="form-input">
                    <label for="lecturer_address">Address</label>
                    <div>
                        <input type="text" placeholder="Enter your address" name="lecturer_address" id="lecturer_address" required >
                    </div>
                    @if ($errors->has('lecturer_address'))
                        <span class="text-danger">{{ $errors->first('lecturer_address') }}</span>
                    @endif
                </div>
            </div>
        </div>
        {{-- Phone, Birthday --}}
        <div class="row">
            <div class="col-md">
                <div class="form-input">
                    <label for="lecturer_phone">Phone</label>
                    <div>
                        <input type="text" placeholder="Enter your phone" name="lecturer_phone" id="lecturer_phone" required >
                    </div>
                    @if ($errors->has('lecturer_phone'))
                        <span class="text-danger">{{ $errors->first('lecturer_phone') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-md">
                <div class="form-input">
                    <label for="lecturer_birthday">Birthday</label>
                    <div>
                        <input type="date" placeholder="Enter your birthday" name="lecturer_birthday" id="lecturer_birthday" required >
                    </div>
                    @if ($errors->has('lecturer_birthday'))
                        <span class="text-danger">{{ $errors->first('lecturer_birthday') }}</span>
                    @endif
                </div>
            </div>
        </div>

        <button type="submit" class="btn-primary-style btn-submit">
            <span class="spinner-border-xl spinner" role="status" aria-hidden="true"></span>
            Add new lecturer
        </button>
    </form>
</div>

@endsection
