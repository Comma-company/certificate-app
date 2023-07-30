@extends('layouts.app')
@section('content')
{{-- <form action="/createSession" method="POST">
    @csrf
    <button type="submit">Checkout</button>
  </form> --}}


<script async src="https://js.stripe.com/v3/pricing-table.js"></script>
<stripe-pricing-table pricing-table-id="prctbl_1NSFfqE2sCQWSLCAAL7zhs2x"
publishable-key="pk_test_51L2CilE2sCQWSLCAs2PLkSBFVUdLjzlW45ex0E2uBcjYBWDR2Xr0KZRKZ0h1oD3wkepHcW4ahC4FVl6dHQ0WeuyK00OyrEKJox"
customer-email="{{request()->email_user ?? ''}}"
client-reference-id="{{ request()->CLIENT_REFERENCE_ID }}">
</stripe-pricing-table>
<script src="https://js.stripe.com/v3/" data-publishable-key="pk_test_51L2CilE2sCQWSLCAs2PLkSBFVUdLjzlW45ex0E2uBcjYBWDR2Xr0KZRKZ0h1oD3wkepHcW4ahC4FVl6dHQ0WeuyK00OyrEKJox"></script>

<script>
    // Replace 'YOUR_STRIPE_PUBLISHABLE_KEY' with your actual Stripe publishable key
    const publishableKey = document.querySelector('script[data-publishable-key]').getAttribute('data-publishable-key');
    const stripe = Stripe(publishableKey);
    const pricingTable = document.querySelector('stripe-pricing-table');

    // Event listener to handle plan selection and initiate checkout
    pricingTable.addEventListener('select-plan', async (event) => {
        const selectedPlan = event.detail.plan;

        // You can now use the selectedPlan data to initiate the checkout process.
        // For example, create a Checkout Session with the selected plan and redirect the user to the checkout page.
        try {
            const response = await fetch('/createSession', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ planId: selectedPlan.id }),
            });

            const data = await response.json();

            // Redirect the user to the Stripe Checkout page
            const { sessionId } = data;
            const { error } = await stripe.redirectToCheckout({ sessionId });

            if (error) {
                console.error('Stripe Checkout Error:', error);
                // Handle the error if necessary.
            }
        } catch (error) {
            console.error('Error:', error);
            // Handle any unexpected errors if necessary.
        }
    });
    </script>
@endsection
