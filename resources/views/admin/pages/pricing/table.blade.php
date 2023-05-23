@extends('admin.layout')
@section('content')
<div id="kt_app_content_container" class="app-container container-xxl">
	<!--begin::Pricing-->
	<div class="card">
		<!--begin::Card body-->
		<div class="card-body px-10 px-lg-20 pt-17 pb-10">
			<!--begin::Table container-->
			<div class="table-responsive">
				<!--begin::Table-->
				<table class="table align-middle table-striped gy-7">
					<!--begin::Table head-->
					<thead class="align-middle">
						<tr id="kt_pricing">
							<th>
								<!--begin::Nav group-->
								<div class="nav bg-light rounded-pill px-3 py-2 ms-9 mb-15 w-225px" data-kt-buttons="true">
									<!--begin::Nav link-->
									<button class="nav-link active btn btn-active btn-active-dark fw-bold btn-color-gray-600 active py-3 px-5 m-1 rounded-pill" data-kt-plan="month">Monthly</button>
									<!--end::Nav link-->
									<!--begin::Nav link-->
									<button class="nav-link btn btn-active btn-active-dark fw-bold btn-color-gray-600 py-3 px-5 m-1 rounded-pill" data-kt-plan="annual">Annually</button>
									<!--end::Nav link-->
								</div>
								<!--end::Nav group-->
							</th>
							<th class="text-center min-w-200px">
								<div class="min-w-200px mb-15">
									<div class="text-primary fs-3 fw-bold mb-7">Free</div>
									<div class="fs-5x fw-semibold d-flex justify-content-center align-items-start lh-sm">
									<span class="align-self-start fs-2 mt-3">$</span>0</div>
									<div class="text-muted fw-bold mb-7">Monthly</div>
									<a href="#" class="btn btn-light-primary fw-bold mx-auto">Start</a>
								</div>
							</th>
							<th class="text-center min-w-200px">
								<div class="min-w-200px bg-primary card-rounded py-12 mb-15">
									<div class="text-white fs-3 fw-bold mb-7">Pro</div>
									<div class="fs-5x text-white d-flex justify-content-center align-items-start">
										<span class="fs-2 mt-3">$</span>
										<span class="lh-sm fw-semibold" data-kt-plan-price-month="99" data-kt-plan-price-annual="399">99</span>
									</div>
									<div class="text-white fw-bold mb-7">Monthly</div>
									<a href="#" class="btn bg-white bg-opacity-20 bg-hover-white text-hover-primary text-white fw-bold mx-auto">Start</a>
								</div>
							</th>
							<th class="text-center min-w-200px">
								<div class="min-w-200px mb-15">
									<div class="text-primary fs-3 fw-bold mb-7">Lifetime</div>
									<div class="fs-5x d-flex justify-content-center align-items-start">
										<span class="fs-2 mt-3">$</span>
										<span class="lh-sm fw-semibold" data-kt-plan-price-month="199" data-kt-plan-price-annual="999">199</span>
									</div>
									<div class="text-muted fw-bold mb-7">Monthly</div>
									<a href="#" class="btn btn-light-primary fw-bold mx-auto">Select</a>
								</div>
							</th>
						</tr>
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody>
						<tr>
							<th class="card-rounded-start">
								<div class="fw-bold d-flex align-items-center ps-9 fs-3">Sublicense Visuals</div>
							</th>
							<td>
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td>
								<div class="px-7 flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td class="card-rounded-end">
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="card-rounded-start">
								<div class="fw-bold d-flex align-items-center ps-9 fs-3">Free Updates</div>
							</th>
							<td>
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td>
								<div class="px-7 flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td class="card-rounded-end">
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="card-rounded-start">
								<div class="fw-bold d-flex align-items-center ps-9 fs-3">Theme Support</div>
							</th>
							<td>
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td>
								<div class="px-7 flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td class="card-rounded-end">
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="card-rounded-start">
								<div class="fw-bold d-flex align-items-center ps-9 fs-3">Unlimited Websites</div>
							</th>
							<td>
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-danger">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td>
								<div class="px-7 flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-danger">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td class="card-rounded-end">
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-danger">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="card-rounded-start">
								<div class="fw-bold d-flex align-items-center ps-9 fs-3">DDOS Protection</div>
							</th>
							<td>
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-danger">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td>
								<div class="px-7 flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-danger">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td class="card-rounded-end">
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-danger">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="card-rounded-start">
								<div class="fw-bold d-flex align-items-center ps-9 fs-3">Domain Reseller</div>
							</th>
							<td>
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-danger">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td>
								<div class="px-7 flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-danger">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
							<td class="card-rounded-end">
								<div class="flex-root d-flex justify-content-center">
									<span class="h-40px w-40px d-flex flex-center d-block">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-success">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="h-40px w-40px d-flex flex-center d-none">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-danger">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
												<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
								</div>
							</td>
						</tr>
					</tbody>
					<!--end::Table body-->
				</table>
				<!--end::Table-->
			</div>
			<!--end::Table container-->
		</div>
		<!--end::Card body-->
	</div>
	<!--end::Pricing-->
</div>
@endsection
