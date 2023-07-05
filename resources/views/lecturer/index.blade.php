@extends('layout')
<title>Lecturers</title>

@section('content')
    {{-- Lecturers --}}
<div class="dashboard-children active" data-tab="2">
    {{-- Heading --}}
    <div class="mb-5 d-flex justify-content-between align-items-center">
        <div class="">
            <h1 class="dashboard-heading">
                Lecturers
            </h1>
            <p class="dashboard-short-desc">Manage your lecturer</p>
        </div>
        <a href="/add" class="inline-block">
            <button class="btn-style menu-item" data-tab="4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            Create lecturer</button>
        </a>
    </div>

    {{-- Search --}}
    <div class="mb-5 d-flex justify-content-end">
        <input type="text" placeholder="Search lecturer..." class="input-search">
    </div>

    {{-- Table --}}
    <div class="table-main">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Birthday</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lecturer as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->lecturer_name}}</td>
                    <td>{{$item->lecturer_address}}</td>
                    <td>{{$item->lecturer_phone}}</td>
                    <td>{{$item->lecturer_birthday}}</td>
                    {{-- <td>
                        <div class="actions-style">
                            <a href="">
                                <span class="flex align-items-center justify-content-center w-10 h-10 border border-gray-200 rounded cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-action" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </span>
                            </a>
                            <span onclick="return confirm('Are you sure?')" 
                                class="flex align-items-center justify-content-center w-10 h-10 border border-gray-200 rounded cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-action" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                            </span>
                        </div>
                    </td> --}}
                    <td>
                        <form action="{{ route('delete', $item->id) }}" onsubmit="return confirm('Do you want to delete?')" class="actions-style">
                            <a  href="{{ route('editScreenLecturer', $item->id) }}">
                                <span class="flex align-items-center justify-content-center w-10 h-10 border border-gray-200 rounded cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-action" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </span>
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="">
                                <span onclick="return confirm('Are you sure?')" 
                                    class="flex align-items-center justify-content-center w-10 h-10 border border-gray-200 rounded cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-action" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                </span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>
{{ $lecturer->links() }}

@endsection