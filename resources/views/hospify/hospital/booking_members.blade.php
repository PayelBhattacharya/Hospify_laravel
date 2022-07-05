<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Booking Patients</title>
<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
<meta name="keywords"
    content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
<!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
<style>
    /*
    Theme Name: Medilab
    Theme URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
*/

    body {
        font-family: 'Open Sans', sans-serif;
        line-height: 20px;
        font-size: 300;
        font-size: 16px;
        color: #000;
        overflow-x: hidden;
        height: 1024px;
        background-repeat: no-repeat;
        background-color: #f3fbf9;
    }



    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
        color: #222222;
    }



    .container-fluid {
        margin-left: 161px;
        margin-top: 42px;
        display: flex;
    }

    .container {
        margin-left: 102px;
    }





    td {
        border: 0px solid #ededed;
        border-top: 1px solid rgba(216, 216, 216, 0.5);
        padding: 6px 10px 6px 0;
    }





    .card0 {
        border-radius: 0px;
        height: 970px;
        width: 109%;
        margin-left: -170px;
    }

    .card1 {
        height: 611px;
    }

    .card2 {
        margin: 0px 56px;
    }

    .col-lg-6 {
        padding-right: 0px;
    }

    .logo {
        width: 200px;
        height: 71px;
        margin-top: -27px;
        margin-left: 6px;
    }

    h1 {
        text-shadow: 0 0 3px #ffffff, 0 0 5px #0000ff;
        font-size: 41px;
        font-family: 'Times New Roman', Times, serif;
        margin-left: -197px;
        margin-top: -29px;
    }

    .image {
        width: 407px;
        height: 361px;
        margin-left: 187px;
        margin-top: 77px;
    }

    .border-line {
        border-right: 1px solid #EEEEEE
    }


    .line {
        height: 1px;
        width: 93%;
        background-color: #dcd4d4;
        margin-top: 9px;
        margin-left: -321px;
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

    .row {
        margin-right: -2px;
        margin-left: 1px;
    }

    .adjust {
        margin-left: -125px;
        margin-top: 43px;
    }

    th {
        width: 170px;
    }

    .table {
        width: 100%;
        box-shadow: 0px 4px 24px 0px #757575;
        margin-top: -13px;
        margin-left: -165px;
    }

    .table th,
    td {
        text-align: center;
    }

    table.even {
        border-collapse: collapse;
    }

    table.even tr:nth-child(2n+2) {
        background-color: #81d1eb;
    }

    .col-md-12 {
        width: 124%;
    }

    .container-para {
        border: 1px solid darkgrey;
        background-color: #ebebdd;
        width: 724px;
    }

    .dashboard {
        width: 121px;
        height: 37px;
        border-radius: 50px;
        background-color: #337ab7;
        margin-left: 1050px;
        top: -70px;
        position: absolute;
        color: white;
        font-weight: bold;
    }

    .dashboard:hover {
        background-color: green;
        color: white;
    }
</style>
</head>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            {{-- <a class="btn dashboard" href="/hospital_dashboard">Dashboard</a> --}}
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="{{ asset('admin/images/logo2.png') }}"
                                class="logo">
                        </div>
                        {{-- <button class="dashboard"><a href="/dashboard">Dashboard</a></button> --}}
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <br />
                                    <br />
                                    <div class="container-fluid">
                                        <a class="btn dashboard" href="/hospital_dashboard">Dashboard</a>
                                        <table class="table table-hover table-striped table-bordered even">
                                            <tr>
                                                <th scope="col">Patient Name</th>
                                                <th scope="col">Age</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Relation</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Requirement</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                            @foreach ($data as $row)
                                                <tr>
                                                    <th scope="row">{{ $row['name'] }}</th>
                                                    <td>{{ $row['age'] }}</td>
                                                    <td>{{ $row['address'] }}</td>
                                                    <td>{{ $row['relation'] }}</td>
                                                    <td>{{ $row['phone'] }}</td>
                                                    <td>{{ $row['requirement'] }}</td>
                                                    <td>{{ $row['date'] }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                            <h1 class="mb-0 mr-4 mt-2">Booking Members</h1>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
