<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{ asset ('/css/style.css') }}"> 
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        .nav-main {
            background-color: white;
            padding: 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .nav-main .logo {
            display: flex;
            align-items: center;
            gap: 20px;
            font-size: 18px;
            font-weight: 600;
        }
        .nav-main .logo img {
            max-width: 40px;
        }
        .nav-main .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .nav-main .header-avatar {
            width: 52px;
            height: 52px;
        }
        .nav-main .header-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 100rem;
        }
        .dashboard-main {
            padding: 40px 20px;
            gap: 0 40px;
        }
        .dashboard-left {
            width: 300px;
            background: #ffffff;
            box-shadow: 10px 10px 20px rgba(218,213,213,0.15);
            border-radius: 12px;
        }
        .dashboard-left .menu-item.active, .dashboard-left .menu-item:hover {
            background: #f1f5fb;
            color: #166bdc !important;
        }
        .dashboard-left .menu-item {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 14px 20px;
            font-weight: 500;
            color: #808191 !important;
            margin-bottom: 20px;
            cursor: pointer;
        }
        .dashboard-left .menu-item .menu-icon .icon {
            width: 1.5rem;
            height: 1.5rem;
        }
        .dashboard-heading {
            font-weight: bold;
            font-size: 25px;
            margin-bottom: 5px;
            color: #171725;
        }
        .dashboard-short-desc {
            font-size: 14px;
            color: #808191;
        }
        .dashboard-children {
            display: none
        }
        .dashboard-children.active {
            display: block;
        }
        .btn-style {
            cursor: pointer;
            padding: 0 25px;
            line-height: 1;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #166bdc;
            background-color: #f1f5fb;
            gap: 20px;
        }
        .btn-style .icon {
            width: 1.5rem;
            height: 1.5rem;
            /* margin-right: 5px; */
        }
        .input-search {
            outline: 2px solid transparent;
            outline-offset: 2px;
            padding-top: 1rem;
            padding-bottom: 1rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border-color: rgb(209 213 219 / 1);
            border-width: 1px;
            border-radius: 0.5rem;
        }
        .table-main {
            overflow-x: auto;
            background-color: white;
            border-radius: 10px;
        }
        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse;
        }
        .table-main table {
            width: 100%;
        }
        .table-main thead {
            background-color: #f7f7f8;
        }
        .table-main th {
            padding: 20px 30px;
            font-weight: 600;
            text-align: left;
        }
        .table-main td {
            padding: 15px 30px;
        }
        .table-main th, .table-main td {
            vertical-align: middle;
        }
        .actions-style {
            display: flex;
            align-items: center;
            column-gap: 0.75rem;
        }
        .actions-style span {
            display: flex;
            height: 2.5rem;
            width: 2.5rem;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border-radius: 0.25rem;
            border-width: 1px;
            border-color: rgb(229 231 235 / 1);
        }
        .actions-style span .icon-action {
            width: 1.25rem;
            height: 1.25rem;
        }
        .actions-style span:hover {
            background: #f1f5fb;
            color: #166bdc !important;
        }
        .form-input {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            row-gap: 10px;
            margin-bottom: 2.5rem;
        }
        .form-input label {
            color: #4B5264;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
        }
        .form-input div input {
            width: 100%;
            padding: 15px 25px;
            background-color: transparent;
            border: 1px solid #F1F1F3;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.2s linear;
            color: #171725;
            font-size: 14px;
        }
        .form-input div {
            position: relative;
            width: 100%;
        }
        .btn-primary-style {
            cursor: pointer;
            padding: 0 25px;
            line-height: 1;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            height: 66px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background-color: #166bdc;
            width: 250px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        {{-- Header --}}
        <div class="row">
            <div class="col-12">
                <div class="nav-main">
                    <a href="/" class="logo">
                        <img srcSet="https://hoangkhang.com.vn/wp-content/uploads/2022/04/logo.svg 2x" alt="logo" class="img-fluid">
                        <span class="inline-block">Admin</span>
                    </a>
                    <div class="header-right">
                        <div class="header-avatar">
                            <img srcSet="https://plus.unsplash.com/premium_photo-1663091709556-1fd0bbad313b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80 2x" alt="avatar" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row dashboard-main">
            <div class="col-md-2">
                <div class="dashboard-left">
                    {{-- <div class="menu-item active" data-tab="1" aria-current="page">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </div> --}}


                    <div class="menu-item active" data-tab="2" aria-current="page">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </span>
                        <span class="menu-text">Lecturer</span>
                    </div>
                    <div class="menu-item" data-tab="3" aria-current="page">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        </span>
                        <span class="menu-text">Logout</span>
                    </div>
                </div>
            </div>


            <div class="col-md-9">
                {{-- <div class="dashboard-children" data-tab="1">
                    <div class="mb-5">
                        <div class="">
                            <h1 class="dashboard-heading">
                                Dashboard
                            </h1>
                            <p class="dashboard-short-desc">Overview dashboard monitor</p>
                        </div>
                    </div>
                </div> --}}

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
                        <div class="inline-block">
                            <button class="btn-style menu-item" data-tab="4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            Create lecturer</button>
                        </div>
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
                                <tr>
                                    <td>1</td>
                                    <td>Nguyễn Hữu Duy Kha</td>
                                    <td>Dĩ An, Bình Dương</td>
                                    <td>0398611903</td>
                                    <td>11/09/2003</td>
                                    <td>
                                        <div class="actions-style">
                                            <span class="flex align-items-center justify-content-center w-10 h-10 border border-gray-200 rounded cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-action" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                            </span>

                                            <span class="flex align-items-center justify-content-center w-10 h-10 border border-gray-200 rounded cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-action" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- New Lecturers --}}
                <div class="dashboard-children" data-tab="4">
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
                    <form autocomplete="off">
                        {{-- Name, Address --}}
                        <div class="row">
                            <div class="col-md">
                                <div class="form-input">
                                    <label for="name">Name</label>
                                    <div>
                                        <input type="text" placeholder="Enter your ame" class="name" id="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-input">
                                    <label for="address">Address</label>
                                    <div>
                                        <input type="text" placeholder="Enter your address" class="address" id="address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Phone, Birthday --}}
                        <div class="row">
                            <div class="col-md">
                                <div class="form-input">
                                    <label for="phone">Phone</label>
                                    <div>
                                        <input type="text" placeholder="Phone" class="Enter your phone" id="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-input">
                                    <label for="birthday">Birthday</label>
                                    <div>
                                        <input type="date" placeholder="Birthday" class="Enter your birthday" id="birthday">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn-primary-style">Add new lecturer</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- @yield('content') --}}
    </div>



    <script src="{{ asset ('/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>