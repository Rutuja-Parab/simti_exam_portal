@extends('admin.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>User List</h2>
                </blockquote>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h4><a href="{{route('admin.manager-user.create')}}" class="btn btn-success">Create User</a>
                    </h4>
                </div>
                <div class="col-12 col-lg-12 mt-3 overflow-auto">
                    <table id="data-table" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name Surname</th>
                            <th>ID Number</th>
                            <th>Phone</th>
                            <th>Company</th>
                            <th>Language</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->user->name .' '. $user->user->surname}}</td>
                                <td>{{$user->user->tc}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->company->title}}</td>
                                <td>{{$user->language->title}}</td>
                                <td class="{{$user->status == 1 ? 'text-success' : 'text-danger'}} fw-bold">{{$user->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td>
                                    <a href="{{route('admin.manager-user.edit',$user->userId)}}">
                                        <i class="bi bi-pen text-dark"></i>
                                    </a>
                                    <button
                                        onclick="deleteButton(this,`${{route('admin.manager-user.destroy',$user->userId)}}`)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('meta')
    <title>User List</title>
@endsection

@section('css')
    @include('partials.stylesheet')
    @include('layouts.stylesheet')
@endsection

@section('js')
    <script>
        const backUrl = '{{route('admin.manager-user.index')}}';
    </script>
    @include('partials.script')
    @include('layouts.script')
@endsection
