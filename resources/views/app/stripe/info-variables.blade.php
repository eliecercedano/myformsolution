<script>
	const stripePublishableKey  =  "{{ config( 'services.stripe.public_key' ) }}";
	const urlUpdateSubscription =  "{!! route('subscription-update') !!}";
	const urlCancelSubscription =  "{!! route('subscription-cancel') !!}";
	const urlChangeCard 		=  "{!! route('change-card') !!}";
	const emailCustomer         =  "{!! session('email_user') !!}";
	const subscriptionId         =  "{!!  (!empty( $data['subscription_info']->subscription_id)) ? $data['subscription_info']->subscription_id :'' !!}";
	const historyPayments         = JSON.parse('@php echo json_encode($data["history_payments"]) @endphp');
	let product_sus_id;
</script>