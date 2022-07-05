<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Facilities</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet"
        href="{{ asset('admin/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        .logo {
            width: 190px;
            height: 71px;
            margin-top: -347px;
            margin-left: 24px;
            position: absolute;
        }

        .wrapper {
            background-color: #f2f1f9;
        }

        img {
            max-width: 100%;
            height: 478px;
            margin-left: 66px;
        }

        form {
            height: 600px;
            width: 69%;
            background: linear-gradient(to left, #030234, #474079);
            padding-top: 63px;
            padding-left: 49px;
            padding-right: 50px;
            margin-left: 267px;
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

        .submit {
            height: 42px;
            width: 191px;
            display: inline-flex;
            border: none;
            font-size: 17px;
            color: #fff;
            align-items: center;
            justify-content: center;
            margin-top: 24px;
            margin-left: 120px;
            cursor: pointer;
            transition: all 0.5s ease;
            background-image: -moz-linear-gradient(top, #cb6e7a 0%, #be6779 12%, #ae5e77 23%, #42236b 78%, #321a69 88%, #251368 100%);
            /* FF3.6-15 */
            background-image: -webkit-linear-gradient(top, #cb6e7a 0%, #be6779 12%, #ae5e77 23%, #42236b 78%, #321a69 88%, #251368 100%);
            /* Chrome10-25,Safari5.1-6 */
            background-image: linear-gradient(to right, #cb6e7a 0%, #be6779 12%, #ae5e77 23%, #42236b 78%, #321a69 88%, #251368 100%);
            /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        }

        h3 {
            font-size: 30px;
            color: white;
            margin-top: -31px;
            margin-bottom: 21px;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')
    <div class="wrapper">
        <div class="img">
            <img src="{{ asset('admin/images/logo2.png') }}" class="logo">
        </div>
        <a class="btn dashboard" href="/hospital_dashboard">Dashboard</a>
        <div class="inner">
            <form action="{{ route('Facilities.store', ['email' => $email]) }}" method="POST">
                {{ csrf_field() }}
                <h3>Add Facilities</h3>
                <div class="form-wrapper form-price">
                    <label for="" class="label-input">I.C.U. available?(yes/no)</label>
                    <input type="text" name="icu" class="form-control">
                </div>
                <div class="form-wrapper">
                    <label for="" class="label-input">Ventilation available?(yes/no)</label>
                    <input type="text" name="ventilation" class="form-control">
                </div>
                <div class="form-wrapper">
                    <label for="" class="label-input">Covid Vaccination available?(yes/no)</label>
                    <input type="text" name="covid" class="form-control">
                </div>
                <div class="form-wrapper">
                    <label for="" class="label-input">Blood Bank available?(yes/no)</label>
                    <input type="text" name="bloodbank" class="form-control">
                </div>
                <div class="form-wrapper">
                    <label for="" class="label-input">City Scan available?(yes/no)</label>
                    <input type="text" name="cityscan" class="form-control"></input>
                </div>
                <div class="form-wrapper">
                    <label for="" class="label-input">Oxygen available?(yes/no)</label>
                    <input type="text" name="oxygen" class="form-control"></input>
                </div>
                <div class="form-wrapper">
                    <label for="" class="label-input">No. of Normal Bed</label>
                    <input type="number" name="normalbed" class="form-control"></input>
                </div>
                <div class="form-wrapper">
                    <label for="" class="label-input">No. of Covid Bed</label>
                    <input type="number" name="covidbed" class="form-control"></input>
                </div>
                <button class="submit" type="submit" value="submit">Submit</button>
            </form>
        </div>
        <div class="image-holder">
            <img src="{{ asset('admin/images/facilities.png') }}" alt="">
        </div>
    </div>

    <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
