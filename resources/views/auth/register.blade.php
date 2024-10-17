<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../../../dist/css/adminlte.css">

</head> <!--end::Head--> <!--begin::Body-->

<body class="register-page bg-body-secondary">
<div class="register-box"> <!-- /.register-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header"> <a href="" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                <h1 class="mb-0"> <b>Registration</b>
                </h1>
            </a> </div>
        <div class="card-body register-card-body">
            <p class="register-box-msg">Register a new membership</p>
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="input-group mb-1">
                    <div class="form-floating"> <input name="name" id="" type="text" class="form-control" placeholder="Your name"> <label for="">Full Name</label> </div>
                    <div class="input-group-text"> <span class="bi bi-person"></span> </div>
                </div>
                <div class="input-group mb-1">
                    <div class="form-floating"> <input name="email" id="" type="email" class="form-control" placeholder=""> <label for="registerEmail">Email</label> </div>
                    <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                </div>
                <div class="input-group mb-1">
                    <div class="form-floating"> <input name="password" id="" type="password" class="form-control" placeholder="enter your password"> <label for="">Password</label> </div>
                    <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                </div>
                <div class="input-group mb-1">
                    <div class="form-floating">
                        <input name="password_confirmation" id="" type="password" class="form-control" placeholder="confirm your password"> <label for="">Confirm your password</label> </div>
                    <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                </div>
                <!--begin::Row-->
                <div class="row">
                    <div class="col-4">
                        <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Sign In</button> </div>
                    </div> <!-- /.col -->
                </div> <!--end::Row-->
            </form>
        </div> <!-- /.register-card-body -->
    </div>
</div> <!-- /.register-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->



<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
<script src="../../../dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
<script>
    const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
    const Default = {
        scrollbarTheme: "os-theme-light",
        scrollbarAutoHide: "leave",
        scrollbarClickScroll: true,
    };
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (
            sidebarWrapper &&
            typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
        ) {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script> <!--end::OverlayScrollbars Configure--> <!--end::Script-->
</body><!--end::Body-->

</html>
