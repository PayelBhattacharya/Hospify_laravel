<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>View Feedbacks</title>
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
    .img-thumbnail {
        display: inline-block;
        max-width: 12%;
        height: auto;
        padding: 4px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }

    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
        margin-left: 1334px;
        margin-top: -98px;
    }

    .table-bordered {
        border: -1px solid black;
        border: 2px solid black;
        box-shadow: 19px 16px 16px grey;
    }

    .table {
        width: 50%;
        max-width: 100%;
        margin-bottom: 24px;
        border: 2px solid;
        border: 2px solid black;
        margin-left: 401px;
        margin-top: 111px;
    }

    td {

        text-align: center;
    }

    th {

        text-align: left;
        background-color: skyblue;
        font-family: fangsong;
    }

    .logo {
        width: 190px;
        height: 71px;
        margin-top: 9px;
        margin-left: 24px;
    }

</style>
</head>
<body>
    <img src="{{ asset('admin/images/logo2.png') }}" class="logo">
    <a href="/admin_dashboard" class="btn btn-success">Dashboard</a>
    <table class="table table-hover table-striped table-bordered even">
        <tr>
            <th>
               <h2 style="text-align: center">FEEDBACKS</h2>
            </th>
        </tr>
        @foreach ($data as $row)

            <tr>
                <td>{{ $row['text'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
