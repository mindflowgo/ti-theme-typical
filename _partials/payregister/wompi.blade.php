<div
    id="wompiPaymentForm"
    class="payment-form w-100"
    data-button-selector=".AcceptUI"
    data-error-selector="#wompi-errors"
    data-publishable-key="{{ $paymentMethod->getPublishableKey() }}"
>    
	@foreach ($paymentMethod->getHiddenFields($order) as $name => $value)
        <input type="hidden" name="{{ $name }}" value="{{ $value }}"/>
    @endforeach
	
	<button
		type="button"
		class="AcceptUI hide"
	></button>
	<div id="wompi-errors" class="text-danger"></div>
</div>



