<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Facilities</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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

        .booking-form .booking-bg {
            position: absolute;
            left: -3px;
            top: -400px;
            bottom: -25px;
            width: 551px;
            height: 603px;
            background-size: cover;
            background-position: center;
            padding: 25px;
            border-radius: 6px;
            -webkit-box-shadow: 0px 5px 10px -5px rgb(0 0 0 / 10%);
            /* box-shadow: -16px -11px 10px -5px rgb(0 0 0 / 10%); */
            overflow: hidden;
            background-color: #78b4ee;
        }

        span {
            padding: 23px 23px;
        }

        .container-data {
            background-color: #53dad3;
            width: 952px;
            margin-top: -76px;
            margin-left: -146px;
            height: 610px;
            box-shadow: 3px 6px 23px 5px #0f8084;
        }

        .table {
            width: 75%;
            max-width: 100%;
            margin-bottom: 113px;
            margin-top: 84px;
            height: 406px;
            margin-left: 114px;
        }

        .btn-warning {
            color: #fff;
            background-color: #b46f0c;
            border-color: #4c2e03;
            margin-top: -115px;
            margin-left: 377px;
            width: 200px;
            border-radius: 34px;
            height: 40px;
            font-size: 18px;
        }

        .btn-primary {
            margin-top: 457px;
            margin-left: -300px;
            position: absolute;
            width: 196px;
            border-radius: 34px;
            background-color: #f0ad4e;
            border-color: #936421;
        }

        .container {
            width: 1170px;
            margin-top: -52px;
        }

        th {
            font-size: 19px;
        }

        td {
            font-size: 16px;
        }
        .dashboard {
            width: 121px;
            height: 37px;
            border-radius: 50px;
            background-color: #337ab7;
            margin-left: 1381px;
            top: 20px;
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
    @include('sweetalert::alert')
    <div class="container-flex">
        <div class="img">
            <img src="{{ asset('admin/images/logo2.png') }}" class="logo">
        </div>
        <a class="btn dashboard" href="/hospital_dashboard">Dashboard</a>
            {{-- <div class="row mb-4 px-3">
            <h1 class="mb-0 mr-4 mt-2 text-center">Book your hospital</h1>
        </div> --}}
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br />
                <h3 align="center">Details of Availability of Facilities</h3>
                <br />
                {{-- <div align="right">
                    <a href="{{ route('Facilities.create', ['email' => Auth::user()->email]) }}"
                        class="btn btn-primary">Add Facilities</a>
                    <br />
                    <br />
                </div> --}}
                <div class="container-data">
                    <div class="container-fluid">
                        <table class="table table-hover table-striped table-bordered even">
                            <tr>
                                <th scope="col">Facilities</th>
                                <th scope="col">Availability</th>
                            </tr>
                            @foreach ($students as $row)
                                <tr>
                                    <td>I.C.U.</td>
                                    <td>{{ $row['ICU'] }}</td>
                                </tr>
                                <tr>
                                    <td>VENTILATION AVAILABILITY</td>
                                    <td>{{ $row['VENTILATION'] }}</td>
                                </tr>
                                <tr>
                                    <td>COVID VACCINATION</td>
                                    <td>{{ $row['COVID_VACCINATION'] }}</td>
                                </tr>
                                <tr>
                                    <td>BLOODBANK AVAILABILITY</td>
                                    <td>{{ $row['BLOOD_BANK'] }}</td>
                                </tr>
                                <tr>
                                    <td>CITYSCAN AVAILABILITY</td>
                                    <td>{{ $row['CITY_SCAN'] }}</td>
                                </tr>
                                <tr>
                                    <td>OXYGEN AVAILABILITY</td>
                                    <td>{{ $row['OXYGEN_AVALABILITY'] }}</td>
                                </tr>
                                <tr>
                                    <td>NO. OF NORMAL BED</td>
                                    <td>{{ $row['NORMAL_BED'] }}</td>
                                </tr>
                                <tr>
                                    <td>NO. OF COVID BED</td>
                                    <td>{{ $row['COVID_BED'] }}</td>
                                </tr>
                        </table>
                    </div>
                    <a href="{{ route('Facilities.edit', $row['id']) }}" class="btn btn-warning">Edit Facilities</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
{{-- <script>
    $(document).ready(function(){
     $('.delete_form').on('submit', function(){
      if(confirm("Are you sure you want to delete it?"))
      {
       return true;
      }
      else
      {
       return false;
      }
     });
    });
    </script> --}}

</html>
