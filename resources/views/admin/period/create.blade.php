@extends('admin.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Create Period</h2>
                </blockquote>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <form name="form-data">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="title" placeholder="Period">
                            <label for="floatingFirst">Period</label>
                        </div>

                        <div class="mt-3">
                            <button type="button" onclick="createAndUpdateButton()" class="btn btn-success">Save
                            </button>
                            <a href="{{route('admin.period.index')}}" class="btn btn-danger">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('meta')
    <title>Create Period</title>
@endsection

@section('css')
    @include('partials.stylesheet')
@endsection

@section('js')
    <script>
        const actionUrl = '{{route('admin.period.store')}}';
        const backUrl = '{{route('admin.period.index')}}';
    </script>
    @include('partials.script')
@endsection
