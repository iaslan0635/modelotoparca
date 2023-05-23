@extends('admin.layout')
@section('content')
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Hero card-->
									<div class="card mb-12">
										<!--begin::Hero body-->
										<div class="card-body flex-column p-5">
											<!--begin::Hero content-->
											<div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
												<!--begin::Wrapper-->
												<div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
													<!--begin::Title-->
													<h1 class="fw-bold fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10">How Can We Help You?</h1>
													<!--end::Title-->
													<!--begin::Input group-->
													<div class="position-relative w-100">
														<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-primary position-absolute top-50 translate-middle ms-8">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-400 mw-500px" name="search" value="" placeholder="Ask a question" />
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Wrapper-->
												<div class="flex-equal d-flex justify-content-center align-items-end ms-5">
													<!--begin::Illustration-->
													<img src="assets/media/illustrations/sketchy-1/20.png" alt="" class="mw-100 mh-125px mh-lg-275px mb-lg-n12" />
													<!--end::Illustration-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Hero content-->
											<!--begin::Hero nav-->
											<div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
												<!--begin::Nav-->
												<ul class="nav flex-wrap border-transparent fw-bold">
													<!--begin::Nav item-->
													<li class="nav-item my-1">
														<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="/admin/apps/support-center/overview.html">Overview</a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item my-1">
														<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="/admin/apps/support-center/tickets/list.html">tickets</a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item my-1">
														<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="/admin/apps/support-center/tutorials/list.html">Tutorials</a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item my-1">
														<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="/admin/apps/support-center/faq.html">FAQ</a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item my-1">
														<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="/admin/apps/support-center/licenses.html">Licenses</a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item my-1">
														<a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="/admin/apps/support-center/contact.html">Contact US</a>
													</li>
													<!--end::Nav item-->
												</ul>
												<!--end::Nav-->
												<!--begin::Action-->
												<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket" class="btn btn-primary fw-bold fs-8 fs-lg-base">Create Ticket</a>
												<!--end::Action-->
											</div>
											<!--end::Hero nav-->
										</div>
										<!--end::Hero body-->
									</div>
									<!--end::Hero card-->
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin::Layout-->
											<div class="d-flex flex-column flex-xl-row p-7">
												<!--begin::Content-->
												<div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
													<!--begin::Ticket view-->
													<div class="mb-0">
														<!--begin::Heading-->
														<div class="d-flex align-items-center mb-12">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
															<span class="svg-icon svg-icon-4qx svg-icon-success ms-n2 me-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16 14C16.4 13.6 16.4 12.9 16 12.5C15.6 12.1 15.4 12.6 15 13L11 16L9 15C8.6 14.6 8.4 14.1 8 14.5C7.6 14.9 8.1 15.6 8.5 16L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="currentColor" />
																	<path d="M10.4343 15.4343L9.25 14.25C8.83579 13.8358 8.16421 13.8358 7.75 14.25C7.33579 14.6642 7.33579 15.3358 7.75 15.75L10.2929 18.2929C10.6834 18.6834 11.3166 18.6834 11.7071 18.2929L16.25 13.75C16.6642 13.3358 16.6642 12.6642 16.25 12.25C15.8358 11.8358 15.1642 11.8358 14.75 12.25L11.5657 15.4343C11.2533 15.7467 10.7467 15.7467 10.4343 15.4343Z" fill="currentColor" />
																	<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Content-->
															<div class="d-flex flex-column">
																<!--begin::Title-->
																<h1 class="text-gray-800 fw-semibold">How to use Metronic with Django Framework?</h1>
																<!--end::Title-->
																<!--begin::Info-->
																<div class="">
																	<!--begin::Label-->
																	<span class="fw-semibold text-muted me-6">Product:
																	<a href="#" class="text-muted text-hover-primary">Metronic</a></span>
																	<!--end::Label-->
																	<!--begin::Label-->
																	<span class="fw-semibold text-muted me-6">By:
																	<a href="#" class="text-muted text-hover-primary">Jerry Johns</a></span>
																	<!--end::Label-->
																	<!--begin::Label-->
																	<span class="fw-semibold text-muted">Created:
																	<span class="fw-bold text-gray-600 me-1">3 Hours ago</span>(24.06.2020 at 5:03 PM)</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Heading-->
														<!--begin::Details-->
														<div class="mb-15">
															<!--begin::Description-->
															<div class="mb-15 fs-5 fw-normal text-gray-800">
																<!--begin::Text-->
																<div class="mb-5 fs-5">Hello,</div>
																<!--end::Text-->
																<!--begin::Text-->
																<div class="mb-10">When you’re done bundling, you should decide on the order of the topics your article. In most cases, you can decide to order thematically. For instance, if you want to discuss various aspects or angles of the main topic of your blog post. But you can also order your text chronologically or didactically.</div>
																<!--end::Text-->
																<!--begin::Code-->
																<div class="mb-10">
																	<!--begin::Highlight-->
																	<div class="highlight">
																		<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																		<ul class="nav nav-pills" role="tablist">
																			<li class="nav-item">
																				<a class="nav-link active" data-bs-toggle="tab" href="#kt_highlight_631f08ff8f87f" role="tab">JAVASCRIPT</a>
																			</li>
																			<li class="nav-item">
																				<a class="nav-link" data-bs-toggle="tab" href="#kt_highlight_631f08ff8f886" role="tab">HTML</a>
																			</li>
																		</ul>
																		<div class="tab-content">
																			<div class="tab-pane fade show active" id="kt_highlight_631f08ff8f87f" role="tabpanel">
																				<div class="highlight-code">
																					<pre class="language-javascript">
<code class="language-javascript">// Element to indecate
var button = document.querySelector(&quot;#kt_button_1&quot;);

// Handle button click event
button.addEventListener(&quot;click&quot;, function() {
// Activate indicator
button.setAttribute(&quot;data-kt-indicator&quot;, &quot;on&quot;);

// Disable indicator after 3 seconds
setTimeout(function() {
    button.removeAttribute(&quot;data-kt-indicator&quot;);
}, 3000);
});</code>
</pre>
																				</div>
																			</div>
																			<div class="tab-pane fade" id="kt_highlight_631f08ff8f886" role="tabpanel">
																				<div class="highlight-code">
																					<pre class="language-html">
<code class="language-html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary me-10&quot; id=&quot;kt_button_1&quot;&gt;
&lt;span class=&quot;indicator-label&quot;&gt;
    Submit
&lt;/span&gt;
&lt;span class=&quot;indicator-progress&quot;&gt;
    Please wait...
    &lt;span class=&quot;spinner-border spinner-border-sm align-middle ms-2&quot;&gt;&lt;/span&gt;
&lt;/span&gt;
&lt;/button&gt;</code>
</pre>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!--end::Highlight-->
																</div>
																<!--end::Code-->
																<!--begin::Section-->
																<div class="mb-10">In the above example we’re discussing, ordering topics thematically makes the most sense.</div>
																<!--end::Section-->
																<!--begin::Section-->
																<div class="m-0">Than you,
																<br />Jerry</div>
																<!--end::Section-->
															</div>
															<!--end::Description-->
															<!--begin::Row-->
															<div class="row mb-7">
																<!--begin::Col-->
																<div class="col-md-3 fv-row mb-3">
																	<label class="fs-6 fw-semibold mb-2">Product</label>
																	<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" name="product">
																		<option value="1">HTML Theme</option>
																		<option value="1">Angular App</option>
																		<option value="1">Vue App</option>
																		<option value="1">React Theme</option>
																		<option value="1">Figma UI Kit</option>
																		<option value="3">Laravel App</option>
																		<option value="4">Blazor App</option>
																		<option value="5">Django App</option>
																	</select>
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-3 fv-row mb-3">
																	<label class="fs-6 fw-semibold mb-2">Assign To</label>
																	<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Assign to" name="user">
																		<option value="1" selected="selected">Karina Clark</option>
																		<option value="2">Robert Doe</option>
																		<option value="3">Niel Owen</option>
																		<option value="4">Olivia Wild</option>
																		<option value="5">Sean Bean</option>
																	</select>
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-sm-3 fv-row mb-3">
																	<label class="fs-6 fw-semibold mb-2">Status</label>
																	<select class="form-select form-select-solid" data-control="select2" data-placeholder="Status" data-hide-search="true">
																		<option value="1" selected="selected">Open</option>
																		<option value="2">Pending</option>
																		<option value="3">Resolved</option>
																		<option value="3">Closed</option>
																	</select>
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-sm-3 fv-row mb-3">
																	<label class="fs-6 fw-semibold mb-2">Priority</label>
																	<select class="form-select form-select-solid" data-control="select2" data-placeholder="Open" data-hide-search="true">
																		<option value="1" selected="selected">Low</option>
																		<option value="2">Medium</option>
																		<option value="3">High</option>
																		<option value="3">Urgent</option>
																	</select>
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
															<!--begin::Input group-->
															<div class="mb-0">
																<textarea class="form-control form-control-solid placeholder-gray-600 fw-bold fs-4 ps-9 pt-7" rows="6" name="message" placeholder="Share Your Knowledge"></textarea>
																<!--begin::Submit-->
																<button type="submit" class="btn btn-primary mt-n20 mb-20 position-relative float-end me-7">Send</button>
																<!--end::Submit-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Details-->
														<!--begin::Comments-->
														<div class="mb-15">
															<!--begin::Comment-->
															<div class="mb-9">
																<!--begin::Card-->
																<div class="card card-bordered w-100">
																	<!--begin::Body-->
																	<div class="card-body">
																		<!--begin::Wrapper-->
																		<div class="w-100 d-flex flex-stack mb-8">
																			<!--begin::Container-->
																			<div class="d-flex align-items-center f">
																				<!--begin::Author-->
																				<div class="symbol symbol-50px me-5">
																					<div class="symbol-label fs-1 fw-bold bg-light-success text-success">S</div>
																				</div>
																				<!--end::Author-->
																				<!--begin::Info-->
																				<div class="d-flex flex-column fw-semibold fs-5 text-gray-600 text-dark">
																					<!--begin::Text-->
																					<div class="d-flex align-items-center">
																						<!--begin::Username-->
																						<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-5 me-3">Sandra Piquet</a>
																						<!--end::Username-->
																						<span class="m-0"></span>
																					</div>
																					<!--end::Text-->
																					<!--begin::Date-->
																					<span class="text-muted fw-semibold fs-6">2 Days ago</span>
																					<!--end::Date-->
																				</div>
																				<!--end::Info-->
																			</div>
																			<!--end::Container-->
																			<!--begin::Actions-->
																			<div class="m-0">
																				<button class="btn btn-color-gray-400 btn-active-color-primary p-0 fw-bold">Reply</button>
																			</div>
																			<!--end::Actions-->
																		</div>
																		<!--end::Wrapper-->
																		<!--begin::Desc-->
																		<p class="fw-normal fs-5 text-gray-700 m-0">I run a team of 20 product managers, developers, QA and UX Previously we designed everything ourselves.</p>
																		<!--end::Desc-->
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Card-->
															</div>
															<!--end::Comment-->
															<!--begin::Comment-->
															<div class="mb-9">
																<!--begin::Card-->
																<div class="card card-bordered w-100">
																	<!--begin::Body-->
																	<div class="card-body">
																		<!--begin::Wrapper-->
																		<div class="w-100 d-flex flex-stack mb-8">
																			<!--begin::Container-->
																			<div class="d-flex align-items-center f">
																				<!--begin::Author-->
																				<div class="symbol symbol-50px me-5">
																					<div class="symbol-label fs-1 fw-bold bg-light-info text-info">B</div>
																				</div>
																				<!--end::Author-->
																				<!--begin::Info-->
																				<div class="d-flex flex-column fw-semibold fs-5 text-gray-600 text-dark">
																					<!--begin::Text-->
																					<div class="d-flex align-items-center">
																						<!--begin::Username-->
																						<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-5 me-3">Bob Clarcson</a>
																						<!--end::Username-->
																						<span class="badge badge-light-danger">Author</span>
																					</div>
																					<!--end::Text-->
																					<!--begin::Date-->
																					<span class="text-muted fw-semibold fs-6">4 Days ago</span>
																					<!--end::Date-->
																				</div>
																				<!--end::Info-->
																			</div>
																			<!--end::Container-->
																			<!--begin::Actions-->
																			<div class="m-0">
																				<button class="btn btn-color-gray-400 btn-active-color-primary p-0 fw-bold">Reply</button>
																			</div>
																			<!--end::Actions-->
																		</div>
																		<!--end::Wrapper-->
																		<!--begin::Desc-->
																		<p class="fw-normal fs-5 text-gray-700 m-0">I run a team of 20 product managers, developers, QA and UX Previously we designed everything ourselves.</p>
																		<!--end::Desc-->
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Card-->
															</div>
															<!--end::Comment-->
															<!--begin::Comment-->
															<div class="ms-9 mb-9">
																<!--begin::Card-->
																<div class="card card-bordered w-100">
																	<!--begin::Body-->
																	<div class="card-body">
																		<!--begin::Wrapper-->
																		<div class="w-100 d-flex flex-stack mb-8">
																			<!--begin::Container-->
																			<div class="d-flex align-items-center f">
																				<!--begin::Author-->
																				<div class="symbol symbol-50px me-5">
																					<img src="assets/media/avatars/300-1.jpg" alt="" />
																				</div>
																				<!--end::Author-->
																				<!--begin::Info-->
																				<div class="d-flex flex-column fw-semibold fs-5 text-gray-600 text-dark">
																					<!--begin::Text-->
																					<div class="d-flex align-items-center">
																						<!--begin::Username-->
																						<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-5 me-3">Matthew</a>
																						<!--end::Username-->
																						<span class="m-0"></span>
																					</div>
																					<!--end::Text-->
																					<!--begin::Date-->
																					<span class="text-muted fw-semibold fs-6">3 Days ago</span>
																					<!--end::Date-->
																				</div>
																				<!--end::Info-->
																			</div>
																			<!--end::Container-->
																			<!--begin::Actions-->
																			<div class="m-0">
																				<button class="btn btn-color-gray-400 btn-active-color-primary p-0 fw-bold">Reply</button>
																			</div>
																			<!--end::Actions-->
																		</div>
																		<!--end::Wrapper-->
																		<!--begin::Desc-->
																		<p class="fw-normal fs-5 text-gray-700 m-0">I run a team of 20 product managers, developers, QA and UX Previously we designed everything ourselves.</p>
																		<!--end::Desc-->
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Card-->
															</div>
															<!--end::Comment-->
															<!--begin::Comment-->
															<div class="overflow-hidden position-relative card-rounded">
																<!--begin::Ribbon-->
																<div class="ribbon ribbon-triangle ribbon-top-start border-success">
																	<!--begin::Ribbon icon-->
																	<div class="ribbon-icon mt-n5 ms-n6">
																		<i class="bi bi-check2 fs-2 text-white"></i>
																	</div>
																	<!--end::Ribbon icon-->
																</div>
																<!--end::Ribbon-->
																<!--begin::Card-->
																<div class="card card-bordered w-100">
																	<!--begin::Body-->
																	<div class="card-body">
																		<!--begin::Wrapper-->
																		<div class="w-100 d-flex flex-stack mb-8">
																			<!--begin::Container-->
																			<div class="d-flex align-items-center f">
																				<!--begin::Author-->
																				<div class="symbol symbol-50px me-5">
																					<div class="symbol-label fs-1 fw-bold bg-light-primary text-primary">B</div>
																				</div>
																				<!--end::Author-->
																				<!--begin::Info-->
																				<div class="d-flex flex-column fw-semibold fs-5 text-gray-600 text-dark">
																					<!--begin::Text-->
																					<div class="d-flex align-items-center">
																						<!--begin::Username-->
																						<a href="/admin/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-5 me-3">Boris</a>
																						<!--end::Username-->
																						<span class="m-0"></span>
																					</div>
																					<!--end::Text-->
																					<!--begin::Date-->
																					<span class="text-muted fw-semibold fs-6">6 Days ago</span>
																					<!--end::Date-->
																				</div>
																				<!--end::Info-->
																			</div>
																			<!--end::Container-->
																			<!--begin::Actions-->
																			<div class="m-0">
																				<!--begin::Menu-->
																				<button type="button" class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-end">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
																					<span class="svg-icon svg-icon-1">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor" />
																							<rect x="17" y="10" width="4" height="4" rx="2" fill="currentColor" />
																							<rect x="3" y="10" width="4" height="4" rx="2" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</button>
																				<!--begin::Menu 2-->
																				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
																					<!--begin::Menu item-->
																					<div class="menu-item px-3">
																						<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
																					</div>
																					<!--end::Menu item-->
																					<!--begin::Menu separator-->
																					<div class="separator mb-3 opacity-75"></div>
																					<!--end::Menu separator-->
																					<!--begin::Menu item-->
																					<div class="menu-item px-3">
																						<a href="#" class="menu-link px-3">New Ticket</a>
																					</div>
																					<!--end::Menu item-->
																					<!--begin::Menu item-->
																					<div class="menu-item px-3">
																						<a href="#" class="menu-link px-3">New Customer</a>
																					</div>
																					<!--end::Menu item-->
																					<!--begin::Menu item-->
																					<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																						<!--begin::Menu item-->
																						<a href="#" class="menu-link px-3">
																							<span class="menu-title">New Group</span>
																							<span class="menu-arrow"></span>
																						</a>
																						<!--end::Menu item-->
																						<!--begin::Menu sub-->
																						<div class="menu-sub menu-sub-dropdown w-175px py-4">
																							<!--begin::Menu item-->
																							<div class="menu-item px-3">
																								<a href="#" class="menu-link px-3">Admin Group</a>
																							</div>
																							<!--end::Menu item-->
																							<!--begin::Menu item-->
																							<div class="menu-item px-3">
																								<a href="#" class="menu-link px-3">Staff Group</a>
																							</div>
																							<!--end::Menu item-->
																							<!--begin::Menu item-->
																							<div class="menu-item px-3">
																								<a href="#" class="menu-link px-3">Member Group</a>
																							</div>
																							<!--end::Menu item-->
																						</div>
																						<!--end::Menu sub-->
																					</div>
																					<!--end::Menu item-->
																					<!--begin::Menu item-->
																					<div class="menu-item px-3">
																						<a href="#" class="menu-link px-3">New Contact</a>
																					</div>
																					<!--end::Menu item-->
																					<!--begin::Menu separator-->
																					<div class="separator mt-3 opacity-75"></div>
																					<!--end::Menu separator-->
																					<!--begin::Menu item-->
																					<div class="menu-item px-3">
																						<div class="menu-content px-3 py-3">
																							<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																						</div>
																					</div>
																					<!--end::Menu item-->
																				</div>
																				<!--end::Menu 2-->
																				<!--end::Menu-->
																			</div>
																			<!--end::Actions-->
																		</div>
																		<!--end::Wrapper-->
																		<!--begin::Desc-->
																		<p class="fw-normal fs-5 text-gray-700 m-0">I run a team of 20 product managers, developers, QA and UX Previously we designed everything ourselves.</p>
																		<!--end::Desc-->
																	</div>
																	<!--end::Body-->
																</div>
																<!--end::Card-->
															</div>
															<!--end::Comment-->
														</div>
														<!--end::Comments-->
														<!--begin::Pagination-->
														<ul class="pagination">
															<li class="page-item previous disabled">
																<a href="#" class="page-link">
																	<i class="previous"></i>
																</a>
															</li>
															<li class="page-item">
																<a href="#" class="page-link">1</a>
															</li>
															<li class="page-item active">
																<a href="#" class="page-link">2</a>
															</li>
															<li class="page-item">
																<a href="#" class="page-link">3</a>
															</li>
															<li class="page-item">
																<a href="#" class="page-link">4</a>
															</li>
															<li class="page-item">
																<a href="#" class="page-link">5</a>
															</li>
															<li class="page-item">
																<a href="#" class="page-link">6</a>
															</li>
															<li class="page-item next">
																<a href="#" class="page-link">
																	<i class="next"></i>
																</a>
															</li>
														</ul>
														<!--end::Pagination-->
													</div>
													<!--end::Ticket view-->
												</div>
												<!--end::Content-->
												<!--begin::Sidebar-->
												<div class="flex-column flex-lg-row-auto w-100 mw-lg-300px mw-xxl-350px">
													<!--begin::Search-->
													<div class="position-relative mb-15">
														<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-primary position-absolute top-50 translate-middle ms-9">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<input type="text" class="form-control form-control-lg form-control-solid ps-14" name="search" value="" placeholder="Search" />
													</div>
													<!--end::Search-->
													<!--begin::More channels-->
													<div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
														<!--begin::Title-->
														<h2 class="text-dark fw-bold mb-11">More Channels</h2>
														<!--end::Title-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-10">
															<!--begin::Icon-->
															<i class="bi bi-file-earmark-text text-primary fs-1 me-5"></i>
															<!--end::SymIconbol-->
															<!--begin::Info-->
															<div class="d-flex flex-column">
																<h5 class="text-gray-800 fw-bold">Project Briefing</h5>
																<!--begin::Section-->
																<div class="fw-semibold">
																	<!--begin::Desc-->
																	<span class="text-muted">Check out our</span>
																	<!--end::Desc-->
																	<!--begin::Link-->
																	<a href="#" class="link-primary">Support Policy</a>
																	<!--end::Link-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-10">
															<!--begin::Icon-->
															<i class="bi bi-chat-square-text-fill text-primary fs-1 me-5"></i>
															<!--end::SymIconbol-->
															<!--begin::Info-->
															<div class="d-flex flex-column">
																<h5 class="text-gray-800 fw-bold">More to discuss?</h5>
																<!--begin::Section-->
																<div class="fw-semibold">
																	<!--begin::Desc-->
																	<span class="text-muted">Email us to</span>
																	<!--end::Desc-->
																	<!--begin::Link-->
																	<a href="#" class="link-primary">support@keenthemes.com</a>
																	<!--end::Link-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-10">
															<!--begin::Icon-->
															<i class="bi bi-twitter text-primary fs-1 me-5"></i>
															<!--end::SymIconbol-->
															<!--begin::Info-->
															<div class="d-flex flex-column">
																<h5 class="text-gray-800 fw-bold">Latest News</h5>
																<!--begin::Section-->
																<div class="fw-semibold">
																	<!--begin::Desc-->
																	<span class="text-muted">Follow us at</span>
																	<!--end::Desc-->
																	<!--begin::Link-->
																	<a href="#" class="link-primary">KeenThemes Twitter</a>
																	<!--end::Link-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Icon-->
															<i class="bi bi-github text-primary fs-1 me-5"></i>
															<!--end::SymIconbol-->
															<!--begin::Info-->
															<div class="d-flex flex-column">
																<h5 class="text-gray-800 fw-bold">Github Access</h5>
																<!--begin::Section-->
																<div class="fw-semibold">
																	<!--begin::Desc-->
																	<span class="text-muted">Our github repo</span>
																	<!--end::Desc-->
																	<!--begin::Link-->
																	<a href="#" class="link-primary">KeenThemes Github</a>
																	<!--end::Link-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::More channels-->
													<!--begin::Documentations-->
													<div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
														<!--begin::Title-->
														<h1 class="fw-bold text-dark mb-9">Documentation</h1>
														<!--end::Title-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon svg-icon-2 ms-n1 me-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Angular Admin</a>
															<!--end::Subtitle-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon svg-icon-2 ms-n1 me-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">React Admin</a>
															<!--end::Subtitle-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon svg-icon-2 ms-n1 me-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Vue Dashboard</a>
															<!--end::Subtitle-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon svg-icon-2 ms-n1 me-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Niche Theme</a>
															<!--end::Subtitle-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon svg-icon-2 ms-n1 me-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Dashboard Admin</a>
															<!--end::Subtitle-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon svg-icon-2 ms-n1 me-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Dorsey Front-end</a>
															<!--end::Subtitle-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon svg-icon-2 ms-n1 me-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">CRM Admin</a>
															<!--end::Subtitle-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon svg-icon-2 ms-n1 me-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Admin Dashbaord</a>
															<!--end::Subtitle-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
															<span class="svg-icon svg-icon-2 ms-n1 me-3">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Subtitle-->
															<a href="#" class="fw-semibold text-gray-800 text-hover-primary fs-5 m-0">Intranet Admin</a>
															<!--end::Subtitle-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Documentations-->
												</div>
												<!--end::Sidebar-->
											</div>
											<!--end::Layout-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
									<!--begin::Modal - Support Center - Create Ticket-->
									<div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-750px">
											<!--begin::Modal content-->
											<div class="modal-content rounded">
												<!--begin::Modal header-->
												<div class="modal-header pb-0 border-0 justify-content-end">
													<!--begin::Close-->
													<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Close-->
												</div>
												<!--begin::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
													<!--begin:Form-->
													<form id="kt_modal_new_ticket_form" class="form" action="#">
														<!--begin::Heading-->
														<div class="mb-13 text-center">
															<!--begin::Title-->
															<h1 class="mb-3">Create Ticket</h1>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="text-gray-400 fw-semibold fs-5">If you need more info, please check
															<a href="" class="fw-bold link-primary">Support Guidelines</a>.</div>
															<!--end::Description-->
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-8 fv-row">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																<span class="required">Subject</span>
																<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a subject for your issue"></i>
															</label>
															<!--end::Label-->
															<input type="text" class="form-control form-control-solid" placeholder="Enter your ticket subject" name="subject" />
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row g-9 mb-8">
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<label class="required fs-6 fw-semibold mb-2">Product</label>
																<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a product" name="product">
																	<option value="">Select a product...</option>
																	<option value="1">HTML Theme</option>
																	<option value="1">Angular App</option>
																	<option value="1">Vue App</option>
																	<option value="1">React Theme</option>
																	<option value="1">Figma UI Kit</option>
																	<option value="3">Laravel App</option>
																	<option value="4">Blazor App</option>
																	<option value="5">Django App</option>
																</select>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<label class="required fs-6 fw-semibold mb-2">Assign</label>
																<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="user">
																	<option value="">Select a user...</option>
																	<option value="1">Karina Clark</option>
																	<option value="2">Robert Doe</option>
																	<option value="3">Niel Owen</option>
																	<option value="4">Olivia Wild</option>
																	<option value="5">Sean Bean</option>
																</select>
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row g-9 mb-8">
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<label class="required fs-6 fw-semibold mb-2">Status</label>
																<select class="form-select form-select-solid" data-control="select2" data-placeholder="Open" data-hide-search="true">
																	<option value=""></option>
																	<option value="1" selected="selected">Open</option>
																	<option value="2">Pending</option>
																	<option value="3">Resolved</option>
																	<option value="3">Closed</option>
																</select>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<label class="required fs-6 fw-semibold mb-2">Due Date</label>
																<!--begin::Input-->
																<div class="position-relative d-flex align-items-center">
																	<!--begin::Icon-->
																	<div class="symbol symbol-20px me-4 position-absolute ms-4">
																		<span class="symbol-label bg-secondary">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																			<span class="svg-icon">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
																					<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
																					<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
																					<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Icon-->
																	<!--begin::Datepicker-->
																	<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
																	<!--end::Datepicker-->
																</div>
																<!--end::Input-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-8 fv-row">
															<label class="fs-6 fw-semibold mb-2">Description</label>
															<textarea class="form-control form-control-solid" rows="4" name="description" placeholder="Type your ticket description"></textarea>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-8">
															<label class="fs-6 fw-semibold mb-2">Attachments</label>
															<!--begin::Dropzone-->
															<div class="dropzone" id="kt_modal_create_ticket_attachments">
																<!--begin::Message-->
																<div class="dz-message needsclick align-items-center">
																	<!--begin::Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
																	<span class="svg-icon svg-icon-3hx svg-icon-primary">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z" fill="currentColor" />
																			<path d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z" fill="currentColor" />
																			<path d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z" fill="currentColor" />
																			<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-4">
																		<h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
																		<span class="fw-semibold fs-7 text-gray-400">Upload up to 10 files</span>
																	</div>
																	<!--end::Info-->
																</div>
															</div>
															<!--end::Dropzone-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-15 fv-row">
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack">
																<!--begin::Label-->
																<div class="fw-semibold me-5">
																	<label class="fs-6">Notifications</label>
																	<div class="fs-7 text-gray-400">Allow Notifications by Phone or Email</div>
																</div>
																<!--end::Label-->
																<!--begin::Checkboxes-->
																<div class="d-flex align-items-center">
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid me-10">
																		<input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="email" checked="checked" />
																		<span class="form-check-label fw-semibold">Email</span>
																	</label>
																	<!--end::Checkbox-->
																	<!--begin::Checkbox-->
																	<label class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="phone" />
																		<span class="form-check-label fw-semibold">Phone</span>
																	</label>
																	<!--end::Checkbox-->
																</div>
																<!--end::Checkboxes-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center">
															<button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">Cancel</button>
															<button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end:Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - Support Center - Create Ticket-->
								</div>
@endsection
