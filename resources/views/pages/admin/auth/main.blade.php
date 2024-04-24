<x-auth-layout title="Masuk">
    <div id="page_login">
        <!--begin::Wrapper-->
		<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
			<!--begin::Form-->
			<form class="form w-100" novalidate="novalidate" id="form_login">
				<!--begin::Heading-->
				<div class="text-center mb-10">
					<!--begin::Title-->
					<h1 class="text-dark mb-3">Sign In LokerKu</h1>
					<!--end::Link-->
				</div>
				<!--begin::Heading-->
				<!--begin::Input group-->
				<div class="fv-row mb-10">
					<!--begin::Label-->
					<label class="form-label fs-6 fw-bolder text-dark required">Username</label>
					<!--end::Label-->
					<!--begin::Input-->
	    			<input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" />
				<!--end::Input-->
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="fv-row mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-stack mb-2">
						<!--begin::Label-->
						<label class="form-label fw-bolder text-dark fs-6 mb-0 required">Password</label>
						<!--end::Label-->
						<!--begin::Link-->
						{{-- <a href="javascript:;" onclick="auth_content('page_forgot');" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> --}}
						<!--end::Link-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Input-->
	    			<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
				<!--end::Input-->
				</div>
				<!--end::Input group-->
				<!--begin::Actions-->
				<div class="text-center">
					<!--begin::Submit button-->
					<button type="submit" id="tombol_login" onclick="handle_post('#tombol_login','#form_login','{{route('admin.auth.login')}}');" class="btn btn-lg btn-primary w-100 mb-5">
						<span class="indicator-label">Continue</span>
						<span class="indicator-progress">Please wait...
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
					<!--end::Submit button-->
				</div>
				<!--end::Actions-->
			</form>
			<!--end::Form-->
		</div>
    </div>
    <div id="page_forgot">
        <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" id="form_forgot">
                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3">Forgot Password ?</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
                    <input class="form-control form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
                </div>
                <!--end::Input group-->
                <!--begin::Actions-->
                <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                    <button type="button" id="kt_password_reset_submit" class="btn btn-lg btn-primary fw-bolder me-4">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <a href="javascript:;" onclick="auth_content('page_login');" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
    </div>
    @section('custom_js')
        <script>
            auth_content('page_login');
        </script>
    @endsection
</x-auth-layout>