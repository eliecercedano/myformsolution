@if(!empty(config('dz.public.global.js')))
	@foreach(config('dz.public.global.js') as $script)
			<script src="{{ asset($script) }}" type="text/javascript"></script>
	@endforeach
@endif
@if(!empty(config('dz.public.pagelevel.js.'.$action)))
	@foreach(config('dz.public.pagelevel.js.'.$action) as $script)
			<script src="{{ asset($script) }}" type="text/javascript"></script>
	@endforeach
@endif
	<!--		<script src="{{ asset('js/custom.min.js') }}" type="text/javascript"></script>
			<script src="{{ asset('js/deznav-init.js') }}" type="text/javascript"></script> -->
<!--	{{-- Education Theme JS --}}
 @if(!empty(config('dz.public.education.pagelevel.js.'.$action)))
	@foreach(config('dz.public.education.pagelevel.js.'.$action) as $script)
			<script src="{{ asset($script) }}" type="text/javascript"></script>
	@endforeach
@endif	-->
<script src="{{asset('vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<script src="{{asset('app/js/sweetalert-init.js')}}"></script>

<script src="{{asset('vendor/jquery-steps/build/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendor/jquery-validation/jquery.validate.min.js')}}"></script>

<script src="{{asset('js/plugins-init/jquery.validate-init.js')}}"></script>



<!-- Form Steps -->
 <script src="{{asset('vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js')}}"></script>
 
 <script>
	 $(document).ready(function(){
		 // SmartWizard initialize
		 $('#smartwizard').smartWizard(); 
	 });
 </script>


<script>
		$('.sweet-confirm').submit(function(e) {
			e.preventDefault();
			swal({
				title: "Are you sure?",
				text: "You will not be able to recover this register!",
				type: "warning",
				showCancelButton: !0,
				confirmButtonColor: "#B12333",
				confirmButtonText: "Yes, delete!",
				closeOnConfirm: !1
	        }).then((result) => {
				if(result.value){
					this.submit();
				}
			})
		});
</script>

<script>
$(document).ready(function() {
  $(".situation").click(function(evento) {
	var value = $(this).val();
    if (value == 'other') {
      $("#specification").css("display", "block");
    } else {
		$("#specification").css("display", "none");
		$("#specification").val("");
    }
  });
});
$(document).ready(function() {
  $(".can_read_understand_english").click(function(evento) {
	var value = $(this).val();
    if (value == 'no') {
      $("#interpreter_language").css("display", "block");
    } else {
		$("#interpreter_language").css("display", "none");
		$("#interpreter_language").val("");
    }
  });
});
</script>

