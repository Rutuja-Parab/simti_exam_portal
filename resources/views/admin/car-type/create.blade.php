@extends('admin.layout.app')

@section('content')
    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Create Vehicle Type</h2>
                </blockquote>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <form name="form-data">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="title">
                            <label for="floatingFirst">Vehicle Type</label>
                        </div>

                        <div class="mt-3">
                            <button type="button" onclick="createAndUpdateButton()" class="btn btn-success">Save
                            </button>
                            <a href="{{ route('admin.car-type.index') }}" class="btn btn-danger">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('meta')
    <title>Create Vehicle Type</title>
@endsection

@section('css')
    @include('partials.stylesheet')
@endsection

@section('js')
    <script>
        // Endpoint to submit form data
        const actionUrl = '{{ route('admin.car-type.store') }}';
        // URL to redirect the user back
        const backUrl = '{{ route('admin.car-type.index') }}';
    </script>
    @include('partials.script')
@endsection
