<div class="modal fade" id="pay{{$invoice->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel3">Payment Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="coupon-form">
                @csrf
                <div class="modal-body">
                    <span class="fw-normal mb-3">Amount Due: {{$invoice->price}}</span><br>
                    <span id="discount" class="fw-normal mb-3"></span><br>
                    <span id="total_amount" class="fw-bold mb-3 test-success"></span>
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" name="coupon_code" placeholder="Coupon Code" aria-label="Coupon Code"
                               aria-describedby="button-addon2">
                        <button class="btn btn-outline-success" type="button" id="button-addon2" onclick="couponCodeBtn()">Apply</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success col-md-12" onclick="confirmPay()">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
