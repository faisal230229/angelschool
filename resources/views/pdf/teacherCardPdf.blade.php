<!DOCTYPE html>
<html lang="en">
<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Employee ID Card - The Angel School System</title>


    <!-- General CSS Files -->
    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}"> --}}
    <!-- Template CSS -->
    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .brand-name {
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 700;
            font-size: 23px;
            vertical-align: bottom;
            color: #6777ef;
        }

        @media only screen and (max-width: 480px) {
            .brand-name {
                font-weight: 900;
                font-size: 8px;
            }
        }

        .student-fee-info input {
            border-top: 0;
            border-left: 0;
            border-right: 0;
            outline: none;
        }

        .brown-progress-bar {
            height: 20px;
            width: 100%;
            background-color: #eceaea;
            border-radius: 10px;
            position: relative;
        }

        .green-progress-bar {
            height: 100%;
            width: 83%;
            position: absolute;
            background-color: #6777ef;
            border-radius: 10px 10px 10px 10px;
        }

        .progress-perc {
            font-size: 14px;
        }

        .red {
            height: 10px;
            width: 10px;
            background-color: red;
            border-radius: 50%;
        }

        .green {
            height: 10px;
            width: 10px;
            background-color: #1bbc9b;
            border-radius: 50%;
        }

        .yellow {
            height: 10px;
            width: 10px;
            background-color: #fe9701;
            border-radius: 50%;
        }

        .blue {
            height: 10px;
            width: 10px;
            background-color: #4eb7c8;
            border-radius: 50%;
        }

        .pink {
            height: 10px;
            width: 10px;
            background-color: pink;
            border-radius: 50%;
        }

        .purple {
            height: 10px;
            width: 10px;
            background-color: #9b59b6;
            border-radius: 50%;
        }

        .brown {
            height: 10px;
            width: 10px;
            background-color: #f3565d;
            border-radius: 50%;
        }

        .share-icon {
            font-size: 20px;
            margin-right: 5px;
        }

        .teacher-dash .card {
            transition: 0.5s;
        }

        .teacher-dash .card:hover {
            transform: scale(1.1);
        }

        .sky {
            height: 5px;
            width: 5px;
            background-color: #f3565d;
            display: flex;
            margin-right: 10px;
            align-items: center;
        }

        .blue-text {
            color: #094496 !important;
            font-weight: 900;
        }

        /* 
.p-flag {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

.p-flag img {
  height: 180px;
  width: 300px;
  opacity: 0.3;
} */

        .student-card-body {
            border-radius: 20px !important;
        }

        .st-card {
            background-image: url("/assets/img/flag.png");
            background-position: 120px;
            height: 180px;
            background-size: 230px;
            background-repeat: no-repeat;
        }

        .footer-blue-color {
            background-color: #094496;
        }

        .student-pic {
            border: 3px solid #000;
        }

        .teacher-pic {
            height: 100px;
            width: 100px;
            border: 4px solid #000;
        }

        .teacher-pic img {
            height: 100%;
            width: 100%;
        }

        .blue-radius {
            /* background: rgb(18, 66, 106);
  background: linear-gradient(
    0deg,
    rgba(18, 66, 106, 1) 0%,
    rgba(22, 209, 209, 1) 99%
  ); */
            background: linear-gradient(90deg, #4477a1 0%, #092633 100%);
            height: 300px;
            width: 100%;
            border-radius: 270px 0px 0px 0px;
        }

        .employee-info {
            background-image: url("/assets/img/Bupe.jpg");
        }

        .card-logo img {
            height: 120px !important;
            width: 120px !important;
            margin-top: -20px;
        }

        .login-logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-logo img {
            height: 60px;
            width: 60px;
        }

        .profile-picture {
            height: 100px;
            width: 150px;
            display: flex;
            justify-content: center;
            margin: auto;
        }

        .profile-picture img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        @media (max-width: 767.98px) {
            .btn-student-id-card {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- Main Content -->
            <div class=" ">
                <section class="section">
                    <div class="container mt-5 pt-5">
                        <div class="row mt-5 d-flex justify-content-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-4 col-md-4">
                                            <div class="teacher-pic m-4">
                                                <img src="{{ asset('$data->image') }}" alt="" class="img-fluid">

                                            </div>
                                            <div class="">
                                                <h6 class="mx-4 text-dark">{{ $data->name }}</h6>
                                                <p class="mx-4 text-dark text-center">Teacher</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <div class="blue-radius">
                                                <div class="d-flex justify-content-end">
                                                    <div class="col-12 col-md-10">
                                                        <div class="employee-info p-3 mt-5">
                                                            <table class="mt-4">
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-white font-13 ">ID Number:</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-white mx-5">{{ $data->id }}</h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-white font-16">Join Date:</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-white mx-5">{{
                                                                            \Carbon\Carbon::parse($data->created_at)->format('d/m/Y')
                                                                            }}
                                                                        </h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-white font-16">D.O.Birth:</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-white mx-5">{{ $data->dob }}
                                                                        </h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-white font-16">Address:</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-white mx-5">{{ $data->dob }}
                                                                        </h6>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="employee-footer bg-light mt-3 mx-3">
                                                    <h6 class="pt-2 text-center text-dark m-0">The Angels School System
                                                        Khan Garh
                                                    </h6>
                                                    <h6 class="text-center m-0 p-0 text-dark">0336-7063952</h6>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
    </section>
    </div>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>
<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

</html>