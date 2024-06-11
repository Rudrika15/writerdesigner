<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        @yield('title')
    </title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #012e6f" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="background-color: #f8f9fc"
                href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="">
            </a>


            <!-- Divider -->
            {{-- <hr class="sidebar-divider my-0"> --}}
            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('home*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            @include('layout.admin')

            @role('Designer')
                <li class="nav-item {{ request()->is('designer*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('designer.index') }}">
                        <i class="fa fa-edit"></i>
                        <span>Slogan</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <li class="nav-item {{ request()->is('designs*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('designer.show') }}">
                        <i class="fa fa-image"></i>
                        <span>My Designs</span></a>
                </li>

                <hr class="sidebar-divider">
            @endrole

            @role('Writer')
                <li class="nav-item {{ request()->is('writer*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('writer.slugs.index') }}">
                        <i class="fa fa-edit"></i>
                        <span>My Slogans</span></a>
                </li>
                <hr class="sidebar-divider">
            @endrole


            <!-- Divider -->


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"
                    style="background-color: #00b9f0;"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light border topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow no-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('profile') }}/{{ Auth::user()->profilePhoto }}"
                                    onerror="this.onerror=null;this.src='{{ asset('assets/img/default.jpg') }}'";>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu
                                    dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();
                                                     localStorage.removeItem('selectedRole');">
                                    Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-flex justify-content-end">
                        @if (session()->has('success'))
                            <div class="toast align-items-center text-white show bg-success" role="alert"
                                aria-live="assertive" aria-atomic="true" data-bs-autohide="true"
                                data-bs-delay="5000">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        {{ session('success') }}
                                    </div>

                                    {{-- <button type="button" class="btn-close me-2 m-auto bg-transparent " data-bs-dismiss="toast"
                            aria-label="Close">X</button> --}}

                                </div>
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                        role="progressbar" style="width: 0%"></div>
                                </div>
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="toast align-items-center text-white show bg-danger" role="alert"
                                aria-live="assertive" aria-atomic="true" data-bs-autohide="true"
                                data-bs-delay="5000">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        {{ session('error') }}
                                    </div>
                                    {{-- <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button> --}}
                                </div>
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                        role="progressbar" style="width: 0%"></div>
                                </div>
                            </div>
                        @endif
                        @if (session()->has('warning'))
                            <div class="toast align-items-center text-white show bg-warning" role="alert"
                                aria-live="assertive" aria-atomic="true" data-bs-autohide="true"
                                data-bs-delay="5000">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        {{ session('warning') }}
                                    </div>
                                    {{-- <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button> --}}
                                </div>
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                        role="progressbar" style="width: 0%"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toasts = document.querySelectorAll('.toast');

            function startProgressBar(toast) {
                const progressBar = toast.querySelector('.progress-bar');
                if (progressBar) {
                    if (!toast.classList.contains('progress-in-progress')) {
                        const delay = parseInt(toast.getAttribute('data-bs-delay'));
                        progressBar.style.transition = `width ${delay}ms linear`;
                        progressBar.style.width = '100%';
                        toast.classList.add('progress-in-progress');

                        // Check when progress bar reaches 100% width
                        progressBar.addEventListener('transitionend', function() {
                            if (progressBar.style.width === '100%' && !toast.classList.contains(
                                    'hovered')) {
                                toast.remove();
                            }
                        });
                    }
                }
            }

            function resetProgressBar(toast) {
                const progressBar = toast.querySelector('.progress-bar');
                if (progressBar) {
                    progressBar.style.width = '0%';
                    toast.classList.remove('progress-in-progress');
                }
            }

            toasts.forEach(toast => {
                toast.addEventListener('mouseenter', function() {
                    toast.classList.add('hovered');
                    resetProgressBar(toast);
                });

                toast.addEventListener('mouseleave', function() {
                    toast.classList.remove('hovered');
                    startProgressBar(toast);
                });

                startProgressBar(toast);
            });
        });
    </script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
