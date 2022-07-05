<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctors</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">\
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: #fafbfb;
            }

        .container {
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0 4px 21px rgb(23 0 132 / 54%);
            margin-left: 224px;
        }

        .container .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .container .title::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .content form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        form .input-box span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: #9b59b6;
        }

        form .gender-details .gender-title {
            font-size: 20px;
            font-weight: 500;
        }

        form .category {
            display: flex;
            width: 80%;
            margin: 14px 0;
            justify-content: space-between;
        }

        form .category label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        form .category label .dot {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }

        #dot-1:checked~.category label .one,
        #dot-2:checked~.category label .two,
        #dot-3:checked~.category label .three {
            background: #9b59b6;
            border-color: #d9d9d9;
        }

        form input[type="radio"] {
            display: none;
        }

        form .button {
            height: 45px;
            margin: 35px 0
        }

        form .button input {
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        form .button input:hover {
            /* transform: scale(0.99); */
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }

        @media(max-width: 584px) {
            .container {
                max-width: 100%;
            }

            form .user-details .input-box {
                margin-bottom: 15px;
                width: 100%;
            }

            form .category {
                width: 100%;
            }

            .content form .user-details {
                max-height: 300px;
                overflow-y: scroll;
            }

            .user-details::-webkit-scrollbar {
                width: 5px;
            }
        }

        @media(max-width: 459px) {
            .container .content .category {
                flex-direction: column;
            }
        }

        .button1 {
            width: 121px;
            height: 37px;
            border-radius: 50px;
            background-color: green;
            margin-left: 1378px;
            top: 19px;
            position: absolute;
        }

        .button1 a {
            color: white;
            font-weight: bold;
        }

        img {
            width: 172px;
            margin-top: -627px;
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
    <div class="img">
        <img src="{{ asset('admin/images/logo2.png') }}" class="logo">
    </div>
    <a class="btn dashboard" href="/hospital_dashboard">Dashboard</a>
    <div class="container">
        <div class="title">Add Doctor</div>
        <div class="content">
            @foreach ($student as $row)
                <form action="/specialist_update" method="post">
                    {{ csrf_field() }}
                    <div class="user-details">
                        <input type="hidden" name="id" value="{{ $row['id'] }}" />

                        <div class="input-box">
                            <span class="details" type="hidden"></span>
                            <input type="hidden" value="{{ Auth::user()->name }}" name="hname"
                                placeholder="Enter Doctor name" required>
                        </div>

                        <div class="input-box">
                            <span class="details" type="hidden"></span>
                            <input type="hidden" value="{{ Auth::user()->email }}" name="email"
                                placeholder="Enter your username" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Doctor_Name</span>
                            <input type="name" value="{{ $row->doctorname }}" name="doctorname"
                                placeholder="Enter Doctor name" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Doctor_Phno</span>
                            <input type="phone" name="doctorphone" placeholder="Enter your number" required
                                value="{{ $row->doctorphone }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Doctor_Email</span>
                            <input type="email" name="doctoremail" placeholder="Enter Doctor's emailid" required
                                value="{{ $row->doctoremail }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Specialitst</span>
                            <input type="text" name="specialist" placeholder="In which field is the doctor specialist?"
                                required value="{{ $row->specialist }}">
                        </div>
                    </div>
                    <div class="gender-details">
                        <!-- <input type="checkbox" name="gender">
          <span class="gender-title">Day</span> -->
                        <div class="category">
                            <label for="dot-1">
                                <!-- <span class="dot one"></span> -->
                                <input type="checkbox" name="date[]" value="Sunday"
                                    {{ in_array('Sunday', $row->date) ? 'checked' : '' }}>

                                <span class="gender">Sunday</span>
                            </label>
                            <label for="dot-2">
                                <input type="checkbox" name="date[]" value="Monday"
                                    {{ in_array('Monday', $row->date) ? 'checked' : '' }}>

                                <!-- <span class="dot two"></span> -->
                                <span class="gender">Monday</span>
                            </label>
                            <label for="dot-3">
                                <!-- <span class="dot three"></span> -->
                                <input type="checkbox" name="date[]" value="Tuesday"
                                    {{ in_array('Tuesday', $row->date) ? 'checked' : '' }}>

                                <span class="gender">Tuesday</span>
                            </label>
                            <label for="dot-3">
                                <!-- <span class="dot three"></span> -->
                                <input type="checkbox" name="date[]" value="Wednesday"
                                    {{ in_array('Wednesday', $row->date) ? 'checked' : '' }}>

                                <span class="gender">Wednesday</span>
                            </label>
                            <!-- <label for="dot-3">
                <input type="checkbox" name="gender">

                <span class="gender">Tuesday</span>
                </label>
                <label for="dot-3">
                   <span class="dot three"></span>
                  <input type="checkbox" name="gender">

                  <span class="gender">Tuesday</span>
                  </label>
                  <label for="dot-3">
                     <span class="dot three"></span>
                    <input type="checkbox" name="gender">

                    <span class="gender">Tuesday</span>
                    </label> -->
                        </div>
                        <div class="category">
                            <label for="dot-1">
                                <!-- <span class="dot one"></span> -->
                                <input type="checkbox" name="date[]" value="Thursday"
                                    {{ in_array('Thursday', $row->date) ? 'checked' : '' }}>

                                <span class="gender">Thrusday</span>
                            </label>
                            <label for="dot-2">
                                <input type="checkbox" name="date[]" value="Friday"
                                    {{ in_array('Friday', $row->date) ? 'checked' : '' }}>

                                <!-- <span class="dot two"></span> -->
                                <span class="gender">Friday</span>
                            </label>
                            <label for="dot-3">
                                <!-- <span class="dot three"></span> -->
                                <input type="checkbox" name="date[]" value="Saturday"
                                    {{ in_array('Saturday', $row->date) ? 'checked' : '' }}>

                                <span class="gender">Saturday</span>
                            </label>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Register">
                    </div>
                </form>
            @endforeach
        </div>
    </div>

</body>

</html>
