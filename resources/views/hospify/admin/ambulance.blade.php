<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Ambulance</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@600&display=swap');

        /* fill: rgb(249, 194, 38); */
        .main {
            position: relative;
            height: 100vh;
        }


        .btn {
            width: 104px;
            background-color: red;
            font-size: 15px;
        }



        h1 {
            color: #fff;
        }

        h3 {
            color: #fff;
        }

        p {
            color: #fff;
            font-size: 18px;
            font-family: auto
        }


        ::placeholder {
            color: #fff;
            opacity: 0.7;
        }

        .btn {
            position: relative;
            display: block;
            margin: 10px auto;
            font-size: 15px;
            box-shadow: none;
            border: 2px solid #fff;
            color: #fff;
            padding: 5px 15px;
            border-radius: 10px;
        }

        .btn:hover {
            border: 2px solid #F9C226;
            background-color: #fff;
            cursor: pointer;
            color: #F9C226;
        }



        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Reseting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(223deg, #e7e7f5, #c3e6ff, transparent);
            min-height: 100vh;
        }

        .wrapper {
            max-width: 850px;
            background-color: #fff;
            border-radius: 10px;
            top: -170px;
            position: relative;
            display: flex;
            margin: 50px auto;
            overflow: hidden;
            margin: 213px auto;
            height: 465px;
            box-shadow: 0 8px 20px 0px #1f1f1f1a;
        }

        .wrapper .form-left {
            background: #3786bd;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            padding: 20px 40px;
            position: relative;
            width: 100%;
            color: #fff;
        }

        .wrapper h2 {
            font-weight: 700;
            font-size: 25px;
            padding: 5px 0 0;
            margin-bottom: 34px;
            pointer-events: none;
            margin-left: 40px;
        }

        .wrapper .form-left p {
            font-size: 0.9rem;
            font-weight: 300;
            line-height: 1.5;
            pointer-events: none;
        }

        .wrapper .form-left .text {
            margin: 20px 0 25px;
        }

        .wrapper .form-left p span {
            font-weight: 700;
        }

        .wrapper .form-left input {
            padding: 15px;
            background: #fff;
            border-top-left-radius: 5px;
            border-bottom-right-radius: 5px;
            width: 180px;
            border: none;
            margin: 15px 0 50px 0px;
            cursor: pointer;
            color: #333;
            font-weight: 700;
            font-size: 0.9rem;
            appearance: unset;
            outline: none;
        }

        .wrapper .form-left input:hover {
            background-color: #f2f2f2;
        }

        .wrapper .form-right {
            padding: 20px 40px;
            position: relative;
            width: 100%;
        }

        .wrapper .form-right h2 {
            color: #3786bd;
        }

        .wrapper .form-right label {
            font-weight: 600;
            font-size: 15px;
            color: #666;
            display: block;
            margin-bottom: 8px;
        }

        .wrapper .form-right .input-field {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #9f9e9e;
            border-top-left-radius: 5px;
            border-bottom-right-radius: 5px;
            outline: none;
            color: #333;
        }

        .wrapper .form-right .input-field:focus {
            border: 1px solid #31a031;
        }









        .wrapper .register {
            padding: 12px;
            background: #3786bd;
            border-top-left-radius: 5px;
            border-bottom-right-radius: 5px;
            width: 130px;
            border: none;
            margin: 6px 0 50px 0px;
            cursor: pointer;
            color: #fff;
            font-weight: 700;
            font-size: 15px;
        }

        .wrapper .register:hover {
            background-color: #3785bde0;
        }



        @media (max-width: 860.5px) {
            .wrapper {
                margin: 50px 5px;
            }
        }


        @media (max-width: 767.5px) {
            .wrapper {
                flex-direction: column;
                margin: 30px 20px;
            }

            .wrapper .form-left {
                border-bottom-left-radius: 0px;
            }


        }

        @media (max-width: 575px) {

            .wrapper {
                margin: 30px 15px;
            }

            .wrapper .form-left {
                padding: 25px;
            }

            .wrapper .form-right {
                padding: 25px;
            }
        }

        img {
            width: 356px;
            margin-top: 70px;
        }

        .logo {
            width: 200px;
            height: 71px;
            margin-top: 17px;
            margin-left: 37px;
        }

        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
            margin-left: 1361px;
            margin-top: -62px;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')
    <div class="row"> <img src="{{ asset('admin/images/logo2.png') }}" class="logo">
    </div>
    <a href="/admin_dashboard" class="btn btn-success">Dashboard</a>
    <div class="wrapper">
        <div class="form-left">
            <h2 class="text-uppercase">Ambulance Data </h2>
            <img src="{{ asset('admin/images/ambu.png') }}" alt="" class="img-responsive">
        </div>
        <form class="form-right" action="{{ route('Ambu.store') }}" method="POST">
            {{ csrf_field() }}
            <h2 class="text-uppercase">Registration form</h2>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label>Ambulance Name</label>
                    <input type="text" name="name" id="name" class="input-field">
                </div>
                <div class="col-sm-6 mb-3">
                    <label>Location</label>
                    <input type="text" name="location" id="location" class="input-field">
                </div>
                <div class="col-sm-6 mb-3">
                    <label>Phone Number</label>
                    <input type="number" name="phone" id="phone" class="input-field">
                </div>
            </div>

            <div class="form-field">
                <input type="submit" value="submit" class="register" name="register">
            </div>
        </form>
    </div>
</body>

</html>
