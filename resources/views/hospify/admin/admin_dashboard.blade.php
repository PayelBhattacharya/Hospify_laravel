<x-app-layout>

</x-app-layout>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Hind Siliguri', sans-serif;
        }

        @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@600&display=swap');

        /* fill: rgb(249, 194, 38); */
        .main {
            position: relative;
            height: 100vh;
        }

        /* tr{
    border: 1px black solid;
    height: 52px;
} */
        .main svg {
            position: absolute;
            width: 100%;
        }

        .navigation {
            height: 50px;
            padding: 30px 100px;
            position: relative;
            display: flex;
            justify-content: space-between;
            z-index: 99;
        }

        .brand h1 {
            color: #fff;
            font-weight: 700;
        }

        .toggle,
        .close {
            display: none;
        }

        .nav-menu li {
            display: inline-block;
            margin: 0 30px;
            font-size: 20px;
            color: #fff;
        }

        .nav-menu li a {
            text-decoration: none;
            color: #fff;
        }

        .container {
            height: 75vh;
            width: 80vw;
            color: #fff0;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: space-between;
            padding: 70px 0 30px 0;
        }

        .text-sm {
            font-size: 20px !important;
            color: blue;
        }

        .photo {
            position: relative;
            width: 58%;
            height: 110%;
            padding: 0 20px;
        }

        .photo img {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .form-cont {
            background-color: #30a4bafa;
            width: 63%;
            /* height: 113%; */
            height: 97%;
            border-radius: 20px;
        }

        .inner-form {
            width: 60%;
            height: 100%;
            position: relative;
            display: block;
            margin: 0 auto;
        }

        .inner-form img {
            width: 100px;
            height: 100px;
            position: relative;
            display: block;
            margin: 0 auto;
        }

        .social-login {
            position: relative;
            margin: 10px 0;
            text-align: center;
            padding-bottom: 24px;
        }

        .social-login span {
            text-shadow: -1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            color: white;

            padding: 5px 0;
            font-size: 29px;
            font-weight: 700;
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

        .bg-2 {
            margin-top: 23px;
        }

        .social-login ul li {
            display: inline;
            color: #fff;
            font-size: 30px;
            padding: 5px;
            margin: 5px 0;
        }

        .social-login ul>li>a {
            color: #fff;
            text-decoration: none;
        }

        .inner-form .imput-area {
            margin: 10px 0;
        }

        .input-area i {
            position: absolute;
            margin: 10px 0px;
            color: #fff;
        }

        .input-area input {
            position: relative;
            background: transparent;
            width: 100%;
            border: none;
            border-bottom: 2px solid #fff;
            margin: 5px 0;
            padding: 5px 18px;
            color: white;
            font-weight: 700;
            font-size: 15px;
            box-sizing: border-box;
        }

        ::placeholder {
            color: #fff;
            opacity: 0.7;
        }

        .btn-success {
            margin: 11px;
        }



        .input-area span {
            color: #fff;
            margin: 0 5px;
        }

        table {
            background-color: white;

            box-shadow: 2px 2px 75px grey;
            padding-top: 100px;
        }

        .input-area a {
            color: #fff;
            font-weight: 700;
            margin: 0 5px;
            text-decoration: none;
        }

        th {
            font-size: 21px;
        }

        @media(max-width: 990px) {
            .navigation {
                padding: 10px 100px;
            }

            .toggle {
                display: flex;
                color: #fff;
                cursor: pointer;
            }

            .close {
                display: block;
                position: absolute;
                color: #fff;
                right: 0;
                font-size: 30px;
                cursor: pointer;
                margin: 50px;
            }

            .tr {
                border-bottom: 1px solid #ddd;
            }

            .nav-menu {
                display: none;
                position: absolute;
                width: 100%;
                height: 100vh;
                background-color: #F9C226;
                left: 0;
                top: 0;
                transition: all 3s ease;
            }

            .nav-menu ul {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .nav-menu ul li {
                display: block;
                font-size: 30px;
                margin: 20px 0;
                text-align: center;

            }

            .nav-menu ul>li>a:hover {
                color: #fff;
                padding-bottom: 5px;
                border-bottom: 2px solid #fff;
            }

            .container {
                height: 75vh;
                top: 50%;
                margin: 10px;
            }

            .photo {
                display: none;
            }

            .form-cont {
                width: 100%;
                max-height: 100%;
            }
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
            /* background: #00E5FF; */
            min-height: 100vh;
        }

        .wrapper {
            max-width: 850px;
            background-color: #fff;
            border-radius: 10px;
            position: relative;
            display: flex;
            margin: 50px auto;
            box-shadow: 0 8px 20px 0px #1f1f1f1a;
            overflow: hidden;
            margin: 213px auto;
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
            border: 1px solid #e5e5e5;
            border-top-left-radius: 5px;
            border-bottom-right-radius: 5px;
            outline: none;
            color: #333;
        }

        .wrapper .form-right .input-field:focus {
            border: 1px solid #31a031;
        }


        .wrapper .option {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 12px;
            font-size: 0.95rem;
            font-weight: 900;
            cursor: pointer;
            user-select: none
        }

        .wrapper .option input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0
        }

        .tr {
            border: 3px black solid;

        }

        .wrapper .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 18px;
            width: 18px;
            background-color: #fff;
            border: 2px solid #ddd;
            border-radius: 2px
        }

        .wrapper .option:hover input~.checkmark {
            background-color: #f1f1f1
        }

        .wrapper .option input:checked~.checkmark {
            border: 2px solid #e5e5e5;
            background-color: #fff;
            transition: 300ms ease-in-out all
        }

        .wrapper .checkmark:after {
            content: "\2713";
            position: absolute;
            display: none;
            color: #3786bd;
            font-size: 1rem;
        }

        .wrapper .option input:checked~.checkmark:after {
            display: block
        }

        .wrapper .option .checkmark:after {
            left: 2px;
            top: -4px;
            width: 5px;
            height: 10px
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

        .wrapper a {
            text-decoration: none;
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

        .buttons {
            display: flex;
            margin-left: 1166px;
            margin-top: -100px;
            position: absolute;
        }

        .logo {
            width: 200px;
            height: 71px;
            margin-top: 20px;
            margin-left: 6px;
        }

        .btn-warning {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')
    <section class="main">
        <img src="{{ asset('admin/images/logo2.png') }}" class="logo">
        <div class="navigation">
            <div class="brand">
                <h1 style="font-size: 36px; margin-left:405px; color:black;">Welcome {{ Auth::user()->name }}</h1>
            </div>
            <div class="toggle">
                <i class="fas fa-bars"></i>
            </div>

        </div>
        <br />
        <div class="container-fluid" style="margin-top:40px;">
            <div class="buttons">
                <div>
                    <a href="{{ route('Ambu.create') }}" class="btn btn-success">Add Ambulance</a>
                </div>
                <div>
                    <a href="{{ URL::to('feedback') }}" class="btn btn-warning">View Feedbacks</a>
                </div>
            </div>
            <div class="container-fluid" style="background-color: white;">
                <h1 style="text-align: center; color:black;    font-size: 36px;
            font-family: fangsong; ">DATA OF HOSPITALS AND USERS</h1>
                <table class="table table-hover table-striped table-bordered even" style="border:2px black solid;
            margin-left: 238px; width: 1004px;">
                    <tr style="border: 2px blue solid;">
                        <th scope="col"> ID</th>
                        <th scope="col"> Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Usertype</th>
                        <th scope="col"></th>
                    </tr>
                    @foreach ($users as $row)
                        <tr>
                            <th scope="row" style="width: 165px;">{{ $row['id'] }}</th>
                            <td style="width: 229px;">{{ $row['name'] }}</td>
                            <td>{{ $row['email'] }}</td>
                            <td>{{ $row['usertype'] }}</td>
                            <td>
                                <form method="post" class="delete_form"
                                    action="{{ action('App\Http\Controllers\AdminController@destroy', $row['id']) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>


            <script>
                let toggler = document.querySelector('.toggle');
                let menu = document.querySelector('.nav-menu');
                let close = document.querySelector('.close');


                toggler.addEventListener('click', () => {
                    menu.style.display = 'block';
                    console.log('clicked')
                });

                close.addEventListener('click', () => {
                    menu.style.display = '';
                    cons
                });
            </script>
</body>

</html>
