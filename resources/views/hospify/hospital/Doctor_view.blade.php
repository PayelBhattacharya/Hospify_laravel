<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specialist View</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <style>
        * {
            margin: 5px;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Hind Siliguri', sans-serif;
        }

        @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@600&display=swap');

        /* fill: rgb(249, 194, 38); */
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border: 2px solid black;
            box-shadow: 37px 17px 29px #1b98ae;
        }

        a {
            text-decoration: none;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .text-sm {
            color: black;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 26px;
            padding-bottom: 39px;
            text-align: left;
            background-color: #1b98ae;
            color: white;

        }

        button,
        [role="button"] {
            cursor: pointer;
            background-color: white;
            border: 2px solid #005871;
            padding: 16px;
            border-radius: 16px;
        }

        .img {
            max-width: 13%;
            height: auto;
        }

        .btn1 {
            margin-top: -75px;
            margin-left: 1350px;
            width: 107px;
            border-radius: 20px;
            background-color: #ceebf8;
            height: 56px;
        }

        .bt1 a {
            color: black;
            text-decoration: none;
        }

        .btn1 a:hover {
            text-decoration: underline;
        }

        .dashboard {
            width: 121px;
            height: 37px;
            border-radius: 50px;
            background-color: #337ab7;
            margin-left: 1154px;
            top: 12px;
            position: absolute;
            color: white;
            font-weight: bold;
        }

        .dashboard:hover {
            background-color: green;
            color: white;
        }

        .button {
            width: 68px;
            background-color: #337ab7;
            color: white;
        }

        .delete {
            width: 68px;
            background-color: red;
            color: white;
        }
    </style>
</head>

<body>
    </head>

    <body>
        <img src="{{ asset('admin/images/logo2.png') }}" alt="" class="logo" style="max-width: 13%">
        <a class="btn dashboard" href="/hospital_dashboard">Dashboard</a>
        <div class="container-fluid">
            <h1 style="text-align: center;
        color: #1b98ae;
        font-size: 36px;
        font-family: fangsong;
        margin-top: -23px;
        margin-bottom: 29px;">DATA OF SPECIALISTS</h1>
            <table id="customers">
                <th scope="col"> ID</th>
                <th scope="col"> Hospital Name</th>
                <th scope="col"> Hospital email</th>
                <th scope="col">Doctor's Name</th>
                <th scope="col">Doctor's Email</th>
                <th scope="col">Doctor's Phone</th>
                <th scope="col">Specialist</th>
                <th scope="col">Dates</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

                </tr>
                @foreach ($sp as $row)
                    <tr>
                        <th scope="row" style="width: 165px;">{{ $row['id'] }}</th>
                        <td style="width: 229px;">{{ $row['hname'] }}</td>
                        <td style="width:211px">{{ $row['email'] }}</td>
                        <td style="width:37px">{{ $row['doctorname'] }}</td>
                        <td style="width:250px">{{ $row['doctoremail'] }}</td>
                        <td style="width:250px">{{ $row['doctorphone'] }}</td>
                        <td>{{ $row['specialist'] }}</td>
                        <td>{{ json_encode($row['date']) }}</td>
                        <td><a class="btn button" href="{{ route('specialist_edit', $row->id) }}">Edit</a></td>
                        <td><a class="btn delete" href="{{ route('destroy_specialist', $row->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

</html>
