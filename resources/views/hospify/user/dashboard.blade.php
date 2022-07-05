<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <title>User Dashboard</title>
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #B0BEC5;
            background-repeat: no-repeat
        }

        .card0 {
            box-shadow: 0px 4px 8px 0px #757575;
            border-radius: 0px;
            height: 561px;
            width: 92%;
            margin-left: 50px;
        }

        .card1 {
            height: 562px;

        }

        .card2 {
            margin: 0px 56px;
        }

        .col-lg-6 {
            padding-right: 56px;
        }

        .logo {
            width: 200px;
            height: 100px;
            margin-top: 20px;
            margin-left: 35px;
        }

        h1 {
            text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
            font-size: 41px;
            font-family: 'Times New Roman', Times, serif;
        }

        .image {
            width: 670px;
            height: 412px;
        }

        .border-line {
            border-right: 1px solid #EEEEEE
        }

        .line {
            height: 1px;
            width: 45%;
            background-color: #E0E0E0;
            margin-top: 10px
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        a {
            color: inherit;
            cursor: pointer
        }

        .btn-blue {
            background-color: #1A237E;
            width: 150px;
            color: #fff;
            border-radius: 2px;
            margin-top: 69px;
        }

        .btn-blue:hover {
            background-color: rgba(25, 232, 104, 0.566);
            color: black;
            cursor: pointer
        }

        .bg-blue {
            color: #fff;
            background-color: #5690cd;
        }

        @media screen and (max-width: 991px) {
            .logo {
                margin-left: 0px
            }

            .image {
                width: 300px;
                height: 220px
            }

            .border-line {
                border-right: none
            }

            .card2 {
                border-top: 1px solid #EEEEEE !important;
                margin: 0px 15px
            }
        }

        .mr-4,
        .mx-4 {
            margin-right: -3.5rem !important;
        }
        .text-sm {
            font-size: 17px !important;
            color: blueviolet
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')

    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="{{ asset('admin/images/logo2.png') }}"
                                class="logo"> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img
                                src={{ asset('admin/images/doc4.jpg') }} class="image"> </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                            <h1 class="mb-0 mr-4 mt-2">Welcome {{ Auth::user()->name }}</h1>

                        </div>

                        <div class="row px-3 mb-4">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                        <div class="row px-3">
                            <h6 class="mb-0 text-sm">
                                Welcome to Hospify
                            </h6>
                            <h6 class="mb-0 text-sm">
                                You can search your nearest hospitals according to your location preferences and
                                requirement like ICU,COVID VACCINATION etc.
                                Please click on the below search button to proceed searching.
                            </h6>

                        </div>
                        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center"><a
                                    href="{{ route('search') }}" style="text-decoration: none">Search
                                    Hospitals</button>
                        </div>
                        <!-- <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small> </div> -->
                    </div>
                </div>

            </div>
            <div class="bg-blue py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights
                        reserved.</small>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
