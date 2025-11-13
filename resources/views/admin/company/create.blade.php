@extends('admin.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Create Company</h2>
                </blockquote>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12 ">
                    <form name="form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="title" placeholder="Company Name">
                                    <label for="floatingFirst">Company Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="subdomain" placeholder="Subdomain">
                                    <label for="floatingFirst">Subdomain</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="tax_no" maxlength="11"
                                           placeholder="Tax Number">
                                    <label for="floatingFirst">Tax Number</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                                    <label for="floatingFirst">E-mail</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="website_url" placeholder="Website">
                                    <label for="floatingFirst">Website</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                                    <label for="floatingFirst">Phone</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-select" onchange="countryChange()" id="country"
                                            name="countryId">
                                        <option disabled selected>Select</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->title}}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelect">Country</label>
                                </div>

                            </div>

                            <div class="col-md-6 col-sm-12">

                                <div class="form-floating mb-3">
                                    <select class="form-select" onchange="cityChange()" id="city" name="cityId">
                                        <option disabled selected>Select</option>
                                    </select>
                                    <label for="floatingSelect">Province</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-select" name="stateId" id="state">
                                        <option disabled selected>Select</option>
                                    </select>
                                    <label for="floatingSelect">District</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="address" placeholder="Address">
                                    <label for="floatingFirst">Address</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="zip_code" placeholder="Postal Code">
                                    <label for="floatingFirst">Postal Code</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-select" name="planId">
                                        <option disabled selected>Select</option>
                                        @foreach($paymentPlans as $paymentPlan)
                                            <option value="{{$paymentPlan->id}}">{{$paymentPlan->description}}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelect">Payment Plan</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" name="start_date"
                                           placeholder="Start Date">
                                    <label for="floatingFirst">Start Date</label>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="logo">
                                    <label class="input-group-text" for="inputGroupFile02">Logo</label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="button" onclick="createAndUpdateButton()" class="btn btn-success">Save
                            </button>
                            <a href="{{route('admin.company.index')}}" class="btn btn-danger">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('meta')
    <title>Create Company</title>
@endsection

@section('css')
    @include('partials.stylesheet')
@endsection

@section('js')
    <script>
        const actionUrl = '{{route('admin.company.store')}}';
        const backUrl = '{{route('admin.company.index')}}';
    </script>

    <script>
        function countryChange() {
            const countryId = document.getElementById("country").value;
            const cityUrl = "{{route('city')}}/" + countryId;
            axios.get(cityUrl).then(res => {
                var option = "";
                Object.keys(res.data).forEach(key => {
                    option += "<option value=" + res.data[key].id + ">" + res.data[key].title + "</option>";
                });
                document.getElementById("city").innerHTML = option;
            });
        }

        function cityChange() {
            const cityId = document.getElementById("city").value;
            const stateUrl = "{{route('state')}}/" + cityId;
            axios.get(stateUrl).then(res => {
                var option = "";
                Object.keys(res.data).forEach(key => {
                    option += "<option value=" + res.data[key].id + ">" + res.data[key].title + "</option>";
                });
                document.getElementById("state").innerHTML = option;
            });
        }
    </script>
    @include('partials.script')
@endsection

