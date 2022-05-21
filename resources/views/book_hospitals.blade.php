<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form HTML Template</title>

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

    </style>
</head>

<body>
    <div id="booking" class="section">
        <div class="container-flex">
            <div class="img">
                <img src="{{ asset('admin/images/logo2.png') }}" class="logo">
            </div>
            <div class="row mb-4 px-3">
                <h1 class="mb-0 mr-4 mt-2 text-center">Book your hospital</h1>
            </div>
        </div>
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="booking-bg">
                            <div class="form-header">
                                <h2>Doctor Details</h2>
                            </div>
                        </div>
                        <form action="{{ route('book_hospital.store') }}" method="POST">
                            {{-- <div class="row">
								<div class="col-md-6"> --}}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <span class="form-label">Patient Name</span>
                                <input class="form-control" type="text" name="name" required>
                            </div>
                            {{-- </div>
								<div class="col-md-6"> --}}
                            <div class="form-group">
                                <span class="form-label">Age</span>
                                <input class="form-control" type="number" name="age" required>
                            </div>

                            <div class="form-group">
                                <span class="form-label">Address</span>
                                <input class="form-control" type="text" name="address" required>
                            </div>
                            {{-- </div>
							</div>
							<div class="row">
								<div class="col-md-6"> --}}
                            <div class="form-group">
                                <span class="form-label">Relation with patient</span>
                                <input class="form-control" type="text" name="relation" required>
                            </div>
                            {{-- </div>
								<div class="col-md-6"> --}}
                            <div class="form-group">
                                <span class="form-label">Contact No.</span>
                                <input class="form-control" type="number" name="phone" required>
                            </div>
                            {{-- </div>
							</div> --}}
                            <div class="form-group">
                                <span class="form-label">Requirment</span>
                                <input class="form-control" type="text" name="requirment" required>
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
