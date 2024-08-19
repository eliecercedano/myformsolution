{{-- Extends layout --}}
@extends('app.layouts.fullpage')



{{-- Content --}}
@section('content')
<div>
	<div class="card py-5">
		<div id="accordion-one" class="accordion accordion-primary">
			<div class="accordion__item">
	          <div class="accordion__header rounded-lg collapsed" data-toggle="collapse" data-target="#default_collapseOne" aria-expanded="false">
	              <span class="accordion__header--text">Subscription Info</span>
	              <span class="accordion__header--indicator"></span>
	          </div>
	          <div id="default_collapseOne" class="accordion__body collapse" data-parent="#accordion-one" style="">
	              <div class="row">
	              	<div class="col-md-8 pt-4">
	              		<div class="bg-light col-12 p-4 h-100">	              		
	              			<table id="table-historial"></table>
	              		</div>
	              	</div>
	              	<div class="col-md-4 pt-4">
	              		<div class="bg-light col-12 p-4 h-100">	     
				              		<div id="info-container" class=" pb-3">
					              			<p class="mb-0"><b>ID:</b> {{ $data['subscription_info']->subscription_id }}</p> 
					              			<p class="mb-0"> <b>Next Payment:</b>  {{ $data['subscription_info']->current_period_end }}</p>
					              			<p class="mb-0"> <b>Amount:</b> $ {{ $data['subscription_info']->amount }}</p>
				              			@if( $data['subscription_info']->product_id !== config( 'services.stripe.free_plan' ) )
				              				
					              			@if( $data['subscription_info']->cancel_at_period_end === true)
					              				<p class="mb-0 text-danger"> <b>Cancel At:</b> {{ $data['subscription_info']->cancel_at }}</p>
					              			@else
					              				<button id="cancel-subscription" class="btn btn-danger">Cancel Subscription</button>
					              			@endif
				              			@else

				              				<button id="update-subscription" class="btn btn-danger">Update Subscription</button>

					              		@endif
				              		</div>

				              	@if( $data['subscription_info']->product_id !== config( 'services.stripe.free_plan' ) )
				              		<div id="Payment-container" class="pt-3">
					              			<h3>Payment Method</h3>
				 											<i id="brand-icon"  class="fa fa-2x {{ strtolower( $data['subscription_card']->brand_icon) }}"></i>
				 											<p class="mb-0"> <b> <span id="brand-text">{{ $data['subscription_card']->brand }}</span></b></p>
					              			<p class="mb-0"> <b>Last 4 digits:</b> <span id="4digit-text">{{ $data['subscription_card']->last4 }}</span></p>
					              			<p class="mb-0"> <b>Exp Date:</b> <span id="expDate-text">{{ $data['subscription_card']->exp_year }}  / {{ $data['subscription_card']->exp_month }}</span></p>
			              				@if( $data['subscription_info']->cancel_at_period_end === false)
				              				<button id="change-card" class="btn btn-info">Change Card</button>
				              			@endif
				              		</div>
				              	@endif
	              		</div>
	              	</div>

	              </div>
	          </div>
	      </div>
          <div class="accordion__item">
              <div class="accordion__header rounded-lg" data-toggle="collapse" data-target="#default_collapseTwo" aria-expanded="true">
                  <span class="accordion__header--text">Accordion Header Two</span>
                  <span class="accordion__header--indicator"></span>
              </div>
              <div id="default_collapseTwo" class="accordion__body collapse show" data-parent="#accordion-one" style="">
                   <div class="col-12 py-4"> 	
					  	<div class="card-deck mb-3 text-center">

					  		@foreach($data['products_list'] as $index => $item)
					  		<div class="col-md-4 pt-3">
							    <div  class="subscription-details mb-4 box-shadow bg-light p-3" data-product-id="{{ $item->product_id }}" data-price-id="{{ $item->product_price_id }}"  data-amount ="{{ $item->product_price }}" data-product-name ="{{ $item->product_name }}">
							      <div class="">
							        <h4 class="my-0 font-weight-normal">{{ $item->product_name }}</h4>
							      </div>
							      <div class="p-4">
							        <h1 class="card-title pricing-card-title">{{ $item->product_price }} <small class="text-muted">/ mo</small></h1>
							        <ul class="list-unstyled mt-3 mb-4">
							          <li>Lorem Ipsum</li>
							          <li>Lorem Ipsum</li>
							          <li>Lorem Ipsum</li>
							          <li>Lorem Ipsum</li>
							        </ul>
							        @if($item->product_id === Session::get('info_subscription')->product_id)
							        	<button type="button" class="btn btn-lg btn-block btn-outline-primary btn-info">Your Subscription</button>
							        @else
							        	<button type="button" class="btn btn-lg btn-block btn-outline-primary btn-subscription">Sign up @if( $item->product_price  < 1  )  Free  @endif  Now</button>
							        @endif
							      </div>
							    </div>
					  		</div>
					  		@endforeach
						</div>
					</div>
                </div>
            </div>
	    </div>
	</div>
</div>

@include('app.stripe.info-variables')	
@endsection			