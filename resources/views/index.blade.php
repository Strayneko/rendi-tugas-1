@inject('request', 'Illuminate\Http\Request')
@php
    $users = [
        [
            'nama' => 'Fulaniah',
            'foto' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            'bio' => 'No Comment',
            'active' => true,
            'alamat' => 'Jl. Mengandug aspal No.13',
            'role' => 'admin',
        ],
        [
            'nama' => 'Ken Tak Ky',
            'foto' => 'https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
            'bio' => '12-12-2012',
            'active' => true,
            'alamat' => 'Jl. Milik orang lain No.1',
            'role' => 'user',
        ],
        [
            'nama' => 'Logaritma Algoritma',
            'foto' => 'https://images.unsplash.com/photo-1489980557514-251d61e3eeb6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            'bio' => 'Sebuah Algoritma',
            'active' => false,
            'alamat' => 'Jl. Ditengah jalan ada jalan No.2',
            'role' => 'user',
        ],
        [
            'nama' => 'Henrick Rickson',
            'foto' => 'https://images.unsplash.com/photo-1557862921-37829c790f19?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80',
            'bio' => 'Sebuah bio dari Henrick',
            'active' => false,
            'alamat' => 'Jl. Berjalan jalan di jalan No.3',
            'role' => 'admin',
        ],
        [
            'nama' => 'Giorno Giovanna',
            'foto' => 'https://cdn.idntimes.com/content-images/community/2021/08/4be7f2c74619d1f19aac137d58d3af6d-cropped-56965fbaa68adf470a17cc45ea5d328d-85331c73d63ac9e1b73f88f8dd82934e_600x400.jpg',
            'bio' => 'I, Giorno Giovanna have a dream',
            'active' => true,
            'alamat' => 'Jl. Ada jalan di suatu tempat No.14',
            'role' => 'user',
        ],
        [
            'nama' => 'Kucing Kegelapan',
            'foto' => 'https://images-cdn.9gag.com/photo/arn7997_700b.jpg',
            'bio' => 'Kucing sakti',
            'active' => false,
            'alamat' => 'Jl. Kegelapan malam No.13',
            'role' => 'user',
        ],
        [
            'nama' => 'Ahmad Damha',
            'foto' => 'https://images.unsplash.com/photo-1594546325110-a530729c3f99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1176&q=80',
            'bio' => 'Orang gabut',
            'active' => true,
            'alamat' => 'Jl. Di atas awan No.13',
            'role' => 'admin',
        ],
        [
            'nama' => 'Alan Berjalan',
            'foto' => 'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1148&q=80',
            'bio' => 'Seorang yang selalu berjalan',
            'active' => false,
            'alamat' => 'Jl. Jalan Jalan No.113',
            'role' => 'user',
        ],
        [
            'nama' => 'Bagas Sagab',
            'foto' => 'https://images.unsplash.com/photo-1540569014015-19a7be504e3a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80',
            'bio' => 'Sebuah bio milik bagas',
            'active' => false,
            'alamat' => 'Jl. Lah kok ada jalan No.13',
            'role' => 'admin',
        ],
        [
            'nama' => 'Cita Citanya',
            'foto' => 'https://images.unsplash.com/photo-1517677129300-07b130802f46?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            'bio' => 'Ini bio',
            'active' => true,
            'alamat' => 'Jl. Ngga ada jalanya No.13',
            'role' => 'user',
        ],
    ];
    
    $filter = [];
    
    // covert users array into collection
    // $users = collect($users);
    
    // if $filter is not empty: do filtering
    // when filter is not empty show all users
    // $users = !empty($filter)
    //     ? $users
    //         ->where('active', $filter['active'])
    //         ->where('role', $filter['role'])
    //         ->all()
    //     : $users->all();
    
@endphp
{{-- check query parameter is given --}}
@if (!empty($request->query('active')))
    {{-- set filter active to specified query input --}}
    @php($filter['active'] = $request->query('active'))
@endif


{{-- check query parameter is given --}}
@if (!empty($request->query('role')))
    {{-- set filter role to specified query input --}}
    @php($filter['role'] = $request->query('role'))
@endif


@extends('templates.base')

{{-- defining icon variable --}}
@php($icon = asset('images/favicons/favicon.ico'))
@section('icon', $icon)
@section('title', 'Coba ')


@section('content')

    <form action="" class="col-md-3">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Role</label>
            <select class="form-select" name="role">
                <option value="admin" @if (!is_null($request->get('role'))) @if ($request->get('role') == 'admin') selected @endif
                    @endif>Admin</option>
                <option value="user" @if (!is_null($request->get('role'))) @if ($request->get('role') == 'user') selected @endif
                    @endif>User</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Active</label>
            <select class="form-select" aria-label="Default select example" name="active">
                <option value="true" @if (!is_null($request->get('active'))) @if ($request->get('active') == 'true') selected @endif
                    @endif>True</option>
                <option value="false" @if (!is_null($request->get('active'))) @if ($request->get('active') == 'false') selected @endif
                    @endif>False</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-4">Filter</button>
        <a href="{{ route('home') }}" class="btn btn-warning mb-4">Hapus Filter</a>

    </form>
    <div class="row">
        @foreach ($users as $user)
            {{-- check if $filter variable is empty --}}
            @if (!empty($filter))
                {{-- do filtering --}}
                @if ($user['role'] == $filter['role'] && $user['active'] == $filter['active'])
                    @include('components.card', ['user' => $user])
                @endif
                {{-- show all users when $filter variable is empty --}}
            @else
                @include('components.card', ['user' => $user])
            @endif
        @endforeach
    </div>
@endsection
