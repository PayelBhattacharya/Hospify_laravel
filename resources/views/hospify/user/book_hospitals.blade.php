<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Book Hospital</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/booking.css') }}">
    <style>
        body {
            background-color: #f1f2f9;
        }

        .logo {
            width: 190px;
            height: 71px;
            margin-top: 9px;
            margin-left: 24px;
        }

        .container-flex {
            display: flex;
        }

        h1 {
            text-shadow: 0 0 1px #00d0ff, 0 0 2px #00014f;
            font-size: 36px;
            font-family: 'Times New Roman', Times, serif;
            margin-left: 414px;
            margin-top: 11px;
        }

        .row {
            margin-right: -2px;
            margin-left: 1px;
        }

        .line {
            height: 1px;
            width: 93%;
            background-color: #b6afaf;
            margin-top: 9px;
            margin-left: 225px;
        }

        li {
            font-size: 20px;
        }
        .dashboard {
        width: 121px;
        height: 37px;
        border-radius: 50px;
        background-color: green;
        margin-left: 1362px;
        top: 16px;
        position: absolute;
    }

    .dashboard a {
        color: white;
        font-weight: bold;
        text-decoration: none;
    }

    .dashboard a:hover {
        text-decoration: underline;
    }

    </style>
</head>

<body>
    @include('sweetalert::alert')
    <div id="booking" class="section">
        <div class="container-flex">
            <div class="img">
                <img src="{{ asset('admin/images/logo2.png') }}" class="logo">
            </div>
            {{-- <button class="dashboard"><a href="/dashboard">Dashboard</a></button> --}}
        </div>
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="booking-bg">
                            <div class="form-header">

                                <h2>Book Your<br>Hospital</h2>
                                <a href="/dashboard" style="color: white;
                                text-decoration: none;
                                font-style: italic;
                                margin-left: 260px;
                                font-size: 19px;
                                border: 2px solid black;
                                border-radius: 20px;
                                padding: 9px;
                                margin-top: -66px;
                                position: absolute;
                                background-color: #008aff;">Dashboard</a></button>
                            </div>
                        </div>
                        <form action="{{ route('book_hospital.store',['email'=> $email, 'useremail'=>Auth::user()->email]) }}" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <span class="form-label">Patient Name</span>
                                <input class="form-control" type="text" name="name" placeholder="Enter Patient Name" required>
                            </div>

                            <div class="form-group">
                                <span class="form-label">Age</span>
                                <input class="form-control" type="number" name="age" placeholder="Enter Age" required>
                            </div>

                            <div class="form-group">
                                <span class="form-label">Address</span>
                                <input class="form-control" type="text" name="address" placeholder="Enter Address" required>
                            </div>

                            <div class="form-group">
                                <span class="form-label">Patient Email</span>
                                <input class="form-control" type="text" name="user_email" placeholder="Enter Patient Email" required>
                            </div>

                            <div class="form-group">
                                <span class="form-label">Relation with patient</span>
                                <input class="form-control" type="text" name="relation" placeholder="Enter Relation with patient" required>
                            </div>

                            <div class="form-group">
                                <span class="form-label">Contact No.</span>
                                <input class="form-control" type="number" name="phone" placeholder="Enter Contact No." required>
                            </div>

                            <div class="form-group">
                                <span class="form-label">Requirement</span>
                                <input class="form-control" type="text" name="requirement" placeholder="Enter Requirement" required>
                            </div>

                            <div class="form-group">
                                <span class="form-label">Booking Date</span>
                                <input class="form-control" type="date" name="date" required>
                            </div>

                            <div class="form-btn">
                                <button type="submit" class="submit-btn" value="submit">Book now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
