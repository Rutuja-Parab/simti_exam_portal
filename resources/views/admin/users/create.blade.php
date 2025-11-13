@extends('admin.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Create User</h2>
                </blockquote>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <form name="form-data">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="tc" placeholder="ID Number" maxlength="11">
                            <label for="floatingFirst">ID Number</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" placeholder="First Name">
                            <label for="floatingFirst">First Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="surname" placeholder="Last Name">
                            <label for="floatingLast">Last Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" id="password"
                                   placeholder="Password">
                            <label for="floatingLast">Password</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password_confirmation"
                                   id="password-confirm" placeholder="Password">
                            <label for="floatingLast">Confirm Password</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                            <label for="floatingMail">Email Address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                            <label for="floatingPhone">Phone Number</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                            <label for="floatingAddress">Address</label>
                        </div>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" value="1"
                                   name="status"
                                   checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">User Active/Inactive</label>
                        </div>

                        <br>

                        <div class="form-floating">
                            <select class="form-select" name="languageId">
                                <option disabled selected>Select</option>
                                @foreach($languages as $language)
                                    <option value="{{$language->id}}">{{$language->title}}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Language</label>
                        </div>

                        <br>

                        <div class="form-floating">
                            <select class="form-select" name="companyId">
                                <option disabled selected>Select</option>
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->title}}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Company</label>
                        </div>

                        <br>

                        <div class="mt-3">
                            <button type="button" onclick="createAndUpdateButton()" class="btn btn-success">Save
                            </button>
                            <a href="{{route('admin.manager-user.index')}}" class="btn btn-danger">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('meta')
    <title>Create User</title>
@endsection

@section('css')
    @include('partials.stylesheet')
@endsection

@section('js')
    <script>
        const actionUrl = '{{route('admin.manager-user.store')}}';
        const backUrl = '{{route('admin.manager-user.index')}}';
    </script>
    @include('partials.script')
@endsection
