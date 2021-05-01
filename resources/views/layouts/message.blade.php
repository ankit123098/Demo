@if($errors->any())
<div class="alert alert-danger" id="alert">
	<ul>
		@foreach($errors->toArray() as $error)
		@foreach($error as $err)
			<h6><span class="error-login" style="text-align: center;">{{ $err}}</span></h6>
		@endforeach
		@endforeach
	</ul>
</div>
@endif

@if(session('message'))
<div class="alert alert-success" id="alert">
	<h6><span class="error-login">{{ session('message')}}</span></h6>
</div>
@endif

@if(session('err'))
<div class="alert alert-danger" id="alert">
	<h6><span class="error-login" style="text-align: center;">{{ session('err')}}</span></h6>
</div>
@endif
@push('script')
<script type="text/javascript">
	$("document").ready(function(){
		setTimeout(function(){
			$('#alert').remove();
		},5000);
	});
</script>
@endpush