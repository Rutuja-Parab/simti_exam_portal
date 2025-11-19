@extends('admin.layout.app')

@section('content')
    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Create Payment Plan</h2>
                </blockquote>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <form name="form-data">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="month" placeholder="Ay">
                            <label for="floatingFirst">Count of Months</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="description" placeholder="Description">
                            <label for="floatingFirst">Description</label>
                        </div>

                        <div class="mt-3">
                            <button type="button" onclick="createAndUpdateButton()" class="btn btn-success">Save
                            </button>
                            <a href="{{ route('admin.payment-plan.index') }}" class="btn btn-danger">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('meta')
    <title>Create Payment Plan</title>
@endsection

@section('css')
    @include('partials.stylesheet')
@endsection

@section('js')
    <script>
        const actionUrl = '{{ route('admin.payment-plan.store') }}';
        const backUrl = '{{ route('admin.payment-plan.index') }}';
    </script>
    @include('partials.script')
@endsection
