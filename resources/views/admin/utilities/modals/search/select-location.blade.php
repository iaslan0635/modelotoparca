@extends('admin.layout')
@section('content')
<div id="kt_app_content_container" class="app-container container-xxl">
	<!--begin::Card-->
	<div class="card">
		<!--begin::Card body-->
		<div class="card-body">
			<!--begin::Heading-->
			<div class="card-px text-center pt-15 pb-15">
				<!--begin::Title-->
				<h2 class="fs-2x fw-bold mb-0">Select Location Modal Example</h2>
				<!--end::Title-->
				<!--begin::Description-->
				<p class="text-gray-400 fs-4 fw-semibold py-7">Click on the below buttons to launch
				<br />select location modal.</p>
				<!--end::Description-->
				<!--begin::Action-->
				<a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_select_location">Select Location</a>
				<!--end::Action-->
			</div>
			<!--end::Heading-->
			<!--begin::Illustration-->
			<div class="text-center pb-15 px-5">
				<img src="assets/media/illustrations/sketchy-1/8.png" alt="" class="mw-100 h-200px h-sm-325px" />
			</div>
			<!--end::Illustration-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Card-->
</div>
@endsection
