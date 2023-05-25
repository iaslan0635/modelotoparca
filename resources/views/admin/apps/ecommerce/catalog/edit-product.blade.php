@extends('admin.layout')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
	<!--begin::Toolbar-->
	<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
		<!--begin::Toolbar container-->
		<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
				<!--begin::Title-->
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Edit Product</h1>
				<!--end::Title-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="admin/index" class="text-muted text-hover-primary">Home</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">eCommerce</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Catalog</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<!--begin::Filter menu-->
				<div class="m-0">
					<!--begin::Menu toggle-->
					<a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
					<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
					<span class="svg-icon svg-icon-6 svg-icon-muted me-1">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->Filter</a>
					<!--end::Menu toggle-->
					<!--begin::Menu 1-->
					<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631f08e5785b7">
						<!--begin::Header-->
						<div class="px-7 py-5">
							<div class="fs-5 text-dark fw-bold">Filter Options</div>
						</div>
						<!--end::Header-->
						<!--begin::Menu separator-->
						<div class="separator border-gray-200"></div>
						<!--end::Menu separator-->
						<!--begin::Form-->
						<div class="px-7 py-5">
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-semibold">Status:</label>
								<!--end::Label-->
								<!--begin::Input-->
								<div>
									<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631f08e5785b7" data-allow-clear="true">
										<option></option>
										<option value="1">Approved</option>
										<option value="2">Pending</option>
										<option value="2">In Process</option>
										<option value="2">Rejected</option>
									</select>
								</div>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-semibold">Member Type:</label>
								<!--end::Label-->
								<!--begin::Options-->
								<div class="d-flex">
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
										<input class="form-check-input" type="checkbox" value="1" />
										<span class="form-check-label">Author</span>
									</label>
									<!--end::Options-->
									<!--begin::Options-->
									<label class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="2" checked="checked" />
										<span class="form-check-label">Customer</span>
									</label>
									<!--end::Options-->
								</div>
								<!--end::Options-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10">
								<!--begin::Label-->
								<label class="form-label fw-semibold">Notifications:</label>
								<!--end::Label-->
								<!--begin::Switch-->
								<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
									<label class="form-check-label">Enabled</label>
								</div>
								<!--end::Switch-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex justify-content-end">
								<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
								<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Form-->
					</div>
					<!--end::Menu 1-->
				</div>
				<!--end::Filter menu-->
				<!--begin::Secondary button-->
				<!--end::Secondary button-->
				<!--begin::Primary button-->
				<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
				<!--end::Primary button-->
			</div>
			<!--end::Actions-->
		</div>
		<!--end::Toolbar container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Content-->
	<div id="kt_app_content" class="app-content flex-column-fluid">
		<!--begin::Content container-->
		<div id="kt_app_content_container" class="app-container container-xxl">
			<!--begin::Form-->
			<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="admin/apps/ecommerce/catalog/products">
				<!--begin::Aside column-->
				<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
					<!--begin::Thumbnail settings-->
					<div class="card card-flush py-4">
						<!--begin::Card header-->
						<div class="card-header">
							<!--begin::Card title-->
							<div class="card-title">
								<h2>Thumbnail</h2>
							</div>
							<!--end::Card title-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body text-center pt-0">
							<!--begin::Image input-->
							<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
								<!--begin::Preview existing avatar-->
								<div class="image-input-wrapper w-150px h-150px" style="background-image: url(assets/media//stock/ecommerce/78.gif)"></div>
								<!--end::Preview existing avatar-->
								<!--begin::Label-->
								<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
									<i class="bi bi-pencil-fill fs-7"></i>
									<!--begin::Inputs-->
									<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
									<input type="hidden" name="avatar_remove" />
									<!--end::Inputs-->
								</label>
								<!--end::Label-->
								<!--begin::Cancel-->
								<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
									<i class="bi bi-x fs-2"></i>
								</span>
								<!--end::Cancel-->
								<!--begin::Remove-->
								<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
									<i class="bi bi-x fs-2"></i>
								</span>
								<!--end::Remove-->
							</div>
							<!--end::Image input-->
							<!--begin::Description-->
							<div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
							<!--end::Description-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Thumbnail settings-->
					<!--begin::Status-->
					<div class="card card-flush py-4">
						<!--begin::Card header-->
						<div class="card-header">
							<!--begin::Card title-->
							<div class="card-title">
								<h2>Status</h2>
							</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
							</div>
							<!--begin::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-0">
							<!--begin::Select2-->
							<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
								<option></option>
								<option value="published" selected="selected">Published</option>
								<option value="draft">Draft</option>
								<option value="scheduled">Scheduled</option>
								<option value="inactive">Inactive</option>
							</select>
							<!--end::Select2-->
							<!--begin::Description-->
							<div class="text-muted fs-7">Set the product status.</div>
							<!--end::Description-->
							<!--begin::Datepicker-->
							<div class="d-none mt-10">
								<label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
								<input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date & time" />
							</div>
							<!--end::Datepicker-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Status-->
					<!--begin::Category & tags-->
					<div class="card card-flush py-4">
						<!--begin::Card header-->
						<div class="card-header">
							<!--begin::Card title-->
							<div class="card-title">
								<h2>Product Details</h2>
							</div>
							<!--end::Card title-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-0">
							<!--begin::Input group-->
							<!--begin::Label-->
							<label class="form-label">Categories</label>
							<!--end::Label-->
							<!--begin::Select2-->
							<select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
								<option></option>
								<option value="Computers">Computers</option>
								<option value="Watches">Watches</option>
								<option value="Headphones">Headphones</option>
								<option value="Footwear">Footwear</option>
								<option value="Cameras">Cameras</option>
								<option value="Shirts">Shirts</option>
								<option value="Household">Household</option>
								<option value="Handbags">Handbags</option>
								<option value="Wines">Wines</option>
								<option value="Sandals">Sandals</option>
							</select>
							<!--end::Select2-->
							<!--begin::Description-->
							<div class="text-muted fs-7 mb-7">Add product to a category.</div>
							<!--end::Description-->
							<!--end::Input group-->
							<!--begin::Button-->
							<a href="admin/apps/ecommerce/catalog/add-category" class="btn btn-light-primary btn-sm mb-10">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
							<span class="svg-icon svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
									<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->Create new category</a>
							<!--end::Button-->
							<!--begin::Input group-->
							<!--begin::Label-->
							<label class="form-label d-block">Tags</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags" class="form-control mb-2" value="new, trending, sale" />
							<!--end::Input-->
							<!--begin::Description-->
							<div class="text-muted fs-7">Add tags to a product.</div>
							<!--end::Description-->
							<!--end::Input group-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Category & tags-->
					<!--begin::Card widget 6-->
					<div class="card card-flush">
						<!--begin::Header-->
						<div class="card-header pt-5">
							<!--begin::Title-->
							<div class="card-title d-flex flex-column">
								<!--begin::Info-->
								<div class="d-flex align-items-center">
									<!--begin::Currency-->
									<span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
									<!--end::Currency-->
									<!--begin::Amount-->
									<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">2,420</span>
									<!--end::Amount-->
									<!--begin::Badge-->
									<span class="badge badge-light-success fs-base">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
									<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
											<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->2.6%</span>
									<!--end::Badge-->
								</div>
								<!--end::Info-->
								<!--begin::Subtitle-->
								<span class="text-gray-400 pt-1 fw-semibold fs-6">Average Daily Sales</span>
								<!--end::Subtitle-->
							</div>
							<!--end::Title-->
						</div>
						<!--end::Header-->
						<!--begin::Card body-->
						<div class="card-body d-flex align-items-end px-0 pb-0">
							<!--begin::Chart-->
							<div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card widget 6-->
					<!--begin::Template settings-->
					<div class="card card-flush py-4">
						<!--begin::Card header-->
						<div class="card-header">
							<!--begin::Card title-->
							<div class="card-title">
								<h2>Product Template</h2>
							</div>
							<!--end::Card title-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-0">
							<!--begin::Select store template-->
							<label for="kt_ecommerce_add_product_store_template" class="form-label">Select a product template</label>
							<!--end::Select store template-->
							<!--begin::Select2-->
							<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_store_template">
								<option></option>
								<option value="default" selected="selected">Default template</option>
								<option value="electronics">Electronics</option>
								<option value="office">Office stationary</option>
								<option value="fashion">Fashion</option>
							</select>
							<!--end::Select2-->
							<!--begin::Description-->
							<div class="text-muted fs-7">Assign a template from your current theme to define how a single product is displayed.</div>
							<!--end::Description-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Template settings-->
				</div>
				<!--end::Aside column-->
				<!--begin::Main column-->
				<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
					<!--begin:::Tabs-->
					<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
						<!--begin:::Tab item-->
						<li class="nav-item">
							<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#spareto_connections">Ürün bağlantıları</a>
						</li>
						<!--end:::Tab item-->
					</ul>
					<!--end:::Tabs-->
					<!--begin::Tab content-->
					<div class="tab-content">
						<!--begin::Tab pane-->
						<div class="tab-pane fade show active" id="spareto_connections" role="tabpanel">
							<div class="d-flex flex-column gap-7 gap-lg-10">
								<!--begin::Reviews-->
								<div class="card card-flush py-4">
									<!--begin::Card header-->
									<div class="card-header">
										<!--begin::Card title-->
										<div class="card-title">
											<h2>Spareto Ürün bağlantıları</h2>
										</div>
										<!--end::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table-->
										<table class="table table-row-dashed fs-6 gy-5 my-0" id="spareto_connections">
											<!--begin::Table head-->
											<thead>
												<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2">
														<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#spareto_connections .form-check-input" value="1" />
														</div>
													</th>
													<th class="min-w-125px">Spareto url</th>
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
                                            @foreach($product->sparetoConnections as $connection)
                                                <tr>
													<td>
														<!--begin::Checkbox-->
														<div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
														<!--end::Checkbox-->
													</td>
													<td>
														<a href="admin/apps/inbox/reply" class="d-flex text-dark text-gray-800 text-hover-primary">
															<!--begin::Name-->
															<span class="fw-bold">{{ $connection->url }}</span>
															<!--end::Name-->
														</a>
													</td>
												</tr>
                                            @endforeach
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Reviews-->
							</div>
						</div>
						<!--end::Tab pane-->
					</div>
					<!--end::Tab content-->
					<div class="d-flex justify-content-end">
						<!--begin::Button-->
						<a href="admin/apps/ecommerce/catalog/products" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
						<!--end::Button-->
						<!--begin::Button-->
						<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
							<span class="indicator-label">Save Changes</span>
							<span class="indicator-progress">Please wait...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
						<!--end::Button-->
					</div>
				</div>
				<!--end::Main column-->
			</form>
			<!--end::Form-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection
@push('styles')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endpush
@push('vendor_scripts')
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
@endpush
@push('custom_scripts')
<script src="assets/js/custom/apps/ecommerce/catalog/save-product.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endpush
