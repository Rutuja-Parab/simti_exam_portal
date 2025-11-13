@extends('admin.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Update Coupon</h2>
                </blockquote>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <form name="form-data">
                        @csrf @method('PUT')

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="code" placeholder="Coupon Kodu"
                                   value="{{$coupon->code}}">
                            <label for="floatingFirst">Coupon Kodu</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="discount" placeholder="Discount Rate"
                                   value="{{$coupon->discount}}">
                            <label for="floatingFirst">Discount Rate</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="start_date"
                                   placeholder="Start Date" value="{{$coupon->start_date}}">
                            <label for="floatingFirst">Start Date</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="end_date" placeholder="End Date"
                                   value="{{$coupon->end_date}}">
                            <label for="floatingFirst">End Date</label>
                        </div>

                        <div class="mt-3">
                            <button type="button" onclick="createAndUpdateButton()" class="btn btn-success">
                                Save
                            </button>
                            <a href="{{route('admin.coupon.index')}}" class="btn btn-danger">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('meta')
    <title>Update Coupon</title>
@endsection

@section('css')
    @include('partials.stylesheet')
@endsection

@section('js')
    <script>
        const actionUrl = '{{route('admin.coupon.update',$coupon)}}';
        const backUrl = '{{route('admin.coupon.index')}}';
    </script>
    @include('partials.script')
@endsection

