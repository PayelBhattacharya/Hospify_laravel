<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Results</title>
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

    ol,
    ul {
        list-style: none;
    }

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: '';
        content: none;
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

    a,
    a:hover,
    a:focus,
    a:active {
        outline: none;
    }

    .section-padding {
        padding: 60px 0px;

    }

    h2 {
        line-height: 20px;
        margin: 0;
        font-size: 28px;
        font-weight: 700;
        text-transform: uppercase;
    }

    hr.botm-line {
        height: 3px;
        width: 60px;
        background: #ffb737;
        position: relative;
        border: 0;
        margin: 20px 0 20px 0;
    }

    /***************************************
banner
***************************************/


    .container-fluid {
        margin-left: 161px;
        margin-top: 42px;
        display: flex;
    }
    .container{
        margin-left: 102px;
    }

    .btn {
        width: 67px;
        margin-left: 1225px;
    }


    .button1 {
        width: 127px;
        padding: 6px;
        background-color: #0982e9;
        border-color: #0982e9;
        margin-left: 350px;
        margin-top: 249px;
    }



    .white,
    .white:hover,
    .white:focus {
        color: #fff;
        width: 100% !important;
    }

    .block {
        display: block;
    }



    .banner-info {
        padding-top: 190px;
        margin-top: -74px;
    }

    .banner-logo img {
        display: inline-block;
    }

    .banner-text {
        color: #fff;
    }

    .banner-text h1 {
        font-family: 'Candal', sans-serif;
        font-size: 35px;
        text-transform: uppercase;
        padding-bottom: 15px;
    }

    .btn-appoint,
    .btn-appoint:hover,
    .btn-appoint:focus {
        margin-top: 30px;
        padding: 10px 20px;
        font-size: 12px;
        background-color: rgba(12, 184, 182, 0.91);
        border-radius: 3px;
        color: #fff;
    }

    .overlay-detail a i {
        text-align: center;
        position: absolute;
        bottom: 25px;
        font-size: 38px;
        color: #fff;
        margin: 0 auto;
    }

    .text-primary i {
        padding-top: 8px;
        display: inline-block;
    }

    /***************************************
services
***************************************/
    .icon i {
        color: #0cb8b6;
        font-size: 45px;
        margin-bottom: 25px;
    }

    .service-info {
        margin-bottom: 20px;
    }

    .icon-info h4 {
        padding-bottom: 15px;
    }

    .icon-info p {
        font-size: 15px !important;
    }

    /***************************************
cta-1
***************************************/
    .schedule-tab {
        /* background-color: #0CB8B6; */
        float: left;
    }

    .medi-info {
        border-right: 1px solid #fff;
    }

    .medi-info,
    .time-info {
        padding: 20px;
        color: #fff;
    }

    .medi-info h3,
    .time-info h3 {
        padding-bottom: 16px;
        color: #fff;
        font-weight: 600;
    }

    .medi-info-btn,
    .medi-info-btn:hover,
    .medi-info-btn:focus {
        margin: 15px 0px 5px;
        display: inline-block;
        border: solid white 2px;
        padding: 3px 8px;
        font-size: 12px;
        color: #fff;
        font-weight: 400 !important;
        cursor: pointer;
    }

    td {
        border: 0px solid #ededed;
        border-top: 1px solid rgba(216, 216, 216, 0.5);
        padding: 6px 10px 6px 0;
    }

    .medi-info,
    .time-info {
        font-size: 14px;
    }

    /***************************************
about
***************************************/
    #about {
        background-color: rgba(238, 238, 238, 0.15);
    }

    .lg-line {
        line-height: 1.4;
        font-size: 28px;
    }

    .more-features-box-text-icon {
        float: left;
        width: 40px;
        height: 40px;
        padding-top: 6px;
        /* background: #0cb8b6; */
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        color: #fff;
        text-align: center;
    }

    .more-features-box-text-description h3 {
        padding-bottom: 15px;
    }

    .more-features-box-text-icon i {
        font-size: 18px;
        line-height: 26px;
    }

    .more-features-box-text-description {
        margin-left: 80px;
        margin-bottom: 35px;
    }

    .sec-para {
        padding-bottom: 10px;
    }

    /***************************************
doctor team
***************************************/
    .thumbnail {
        border-radius: 0px;
    }

    .caption h3 {
        padding-bottom: 5px;
    }

    .caption p {
        padding-bottom: 10px;
    }

    /***************************************
testimonial
***************************************/
    #testimonial {
        background-color: #eee;
    }

    .testi-details {
        background: #fff;
        padding: 14px 24px;
        margin-bottom: 20px;
        box-shadow: 3px 3px 2px 0px rgba(0, 0, 0, 0.18);
        position: relative;
    }

    .testi-info a {
        display: block;
        width: 50px;
        height: 50px;
        background-color: #fff;
        border-radius: 50%;
        float: left;
        margin-right: 10px;
    }

    .testi-info a img {
        border-radius: 50%;
    }

    .testi-info h3 {
        display: inline-block;
        line-height: 22px;
        font-weight: 600;
        color: #000;
        margin-top: 8px;
    }

    .testi-info h3>span {
        display: block;
        line-height: 16px;
        font-weight: 400;
    }

    .testi-details::after {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border-style: solid;
        border-color: transparent;
        border-left: 0;
        bottom: -40px;
        left: 56px;
        border-top-color: #fff;
        border-width: 20px;
    }

    .testi-details::before {
        content: '';
        position: absolute;
        transform: rotate(45deg);
        width: 0px;
        height: 0px;
        bottom: -30px;
        left: 45px;
        border-style: solid;
        border-width: 15px;
        border-color: transparent;
        z-index: -1;
        box-shadow: 3px -13px 5px 0px rgba(0, 0, 0, 0.18);
        border-left: 0;
    }

    /***************************************
cta -2
***************************************/
    #cta-2 {
        background-color: rgb(41, 48, 46);
    }

    .white {
        color: #fff;
    }

    .icon-play,
    .icon-play:hover,
    .icon-play:focus {
        /* background-color: #0CB8B6; */
        padding: 5px 10px;
        color: #fff;
        text-decoration: none;
        padding: 5px 17px;
        margin-top: 26px;
        display: block;
    }

    .text-primary {
        color: #0cb8b6;
    }

    .icon-mar {
        margin-right: 7px;
    }

    /***************************************
contact us
***************************************/
    .space {
        margin-top: 40px;
    }

    .btn-form,
    .btn-form:hover,
    .btn-form:focus {
        background-color: #0cb8b6;
        color: #fff;
        border-radius: 0px;
        padding: 10px 20px;
    }

    .br-radius-zero {
        border-radius: 0px;
    }

    .form-control {
        height: 40px;
        background-color: #daedf2;
        border: 1px solid #5dc1e7;
    }

    .validation {
        color: red;
        display: none;
        margin: 0 0 20px;
        font-weight: 400;
        font-size: 13px;
    }

    #sendmessage {
        color: green;
        border: 1px solid green;
        display: none;
        text-align: center;
        padding: 15px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    #errormessage {
        color: red;
        display: none;
        border: 1px solid red;
        text-align: center;
        padding: 15px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    #sendmessage.show,
    #errormessage.show,
    .show {
        display: block;
    }


    /***************************************
footer
***************************************/
    #footer {
        background-color: #325C6A;
    }

    .ftr-tle {
        height: 50px;
    }

    .info-sec {
        color: #fff;
    }

    .quick-info li i {
        font-size: 8px;
        width: 15px;
        height: 15px;
        line-height: 15px;
        text-align: left;
    }

    .social-icon li {
        float: left;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        margin-right: 5px;
    }

    .bglight-blue {
        /* background-color: #3498DB; */
    }

    .bgred {
        background-color: #E74C3C;
    }

    .bgdark-blue {
        background-color: #2C3E50;
    }

    .bglight-blue {
        /* background-color: #3498DB; */
    }

    .top-footer {
        padding: 40px 0px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.12);
    }

    .footer-line {
        padding: 30px 0px;
        color: #fff;
    }

    .footer-line a {
        color: #0CB8B6;
    }

    .quick-info li a {
        color: #fff;
    }

    .site-link,
    .site-link:hover,
    .site-link:focus {
        color: #0cb8b6;
        text-transform: none;
    }

    @media (min-width: 551px) and (max-width: 980px) {}

    @media (min-width: 220px) and (max-width: 551px) {
        .testi-info {
            margin-bottom: 20px;
        }

        .marb20 {
            margin-top: 30px;
        }

        h2 {
            font-size: 24px;
            line-height: 1.2;
        }

        .section-title {
            margin-bottom: 30px;
        }

        .medi-info {
            border: 0px;
            border-bottom: 1px solid #fff;
        }

        .service-info {
            margin-top: 20px;
            margin-bottom: 0px;
        }

        .caption h3 {
            font-size: 14px;
        }

        .caption p {
            font-size: 12px;
            padding-bottom: 5px;
        }

        .caption ul li a i {
            font-size: 14px;
        }

        .banner-text h1 {
            font-size: 24px;
        }
    }

    .dropdown,
    .dropup {
        position: relative;
        margin-left: 7rem;
    }

    .form-control {
        margin-right: 9rem;
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
        text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
        font-size: 41px;
        font-family: 'Times New Roman', Times, serif;
        margin-left: -301px;
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
        margin-left: -306px;
    }

    .or {
        width: 10%;
        font-weight: bold
    }

    .text-sm {
        font-size: 17px !important;

    }

    ::placeholder {
        color: #BDBDBD;
        opacity: 1;
        font-weight: 300
    }

    :-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    ::-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    input,
    textarea {
        padding: 10px 12px 10px 12px;
        border: 1px solid lightgrey;
        border-radius: 2px;
        margin-bottom: 5px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 14px;
        letter-spacing: 1px
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #304FFE;
        outline-width: 0
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

    .btn-blue {
        background-color: #1A237E;
        width: 150px;
        color: #fff;
        border-radius: 2px;
        margin-top: 69px;
    }

    .btn-blue:hover {
        background-color: rgba(25, 232, 104, 0.566);
        color: black;
        cursor: pointer
    }

    .bg-blue {
        color: #fff;
        /* background-color: #5690cd; */
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
    .col-md-12{
        width:124%;
    }
    .btn-primary{
    width: 90px;
    margin-left: -2px;
    }
    .container-para{
        border: 1px solid darkgrey;
    background-color: #ebebdd;
    width: 724px;
    }

</style>
</head>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="{{ asset('admin/images/logo2.png') }}"
                                class="logo"> </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <br />
                                    <br />
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif

                                    <div class="container-para">
                                        <p class="text-center">
                                            click on book now to book your hospital and to see the specialists of that hospital
                                        </p>
                                    </div>
                                    <div class="container-fluid">
                                        <table class="table table-hover table-striped table-bordered even">
                                            <tr>
                                                <th scope="col">Hospital Name</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">City</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                            </tr>
                                            @foreach ($hospitals as $row)
                                                <tr>
                                                    <th scope="row">{{ $row['hname'] }}</th>
                                                    <td>{{ $row['address'] }}</td>
                                                    <td>{{ $row['city'] }}</td>
                                                    <td>{{ $row['email'] }}</td>
                                                    <td>{{ $row['phone'] }}</td>
                                                    <td>
                                                        <form method="post" action="{{action('App\Http\Controllers\UserController@doctor_details',$row['email'])}}">
                                                         {{csrf_field()}}
                                                         <button type="submit" class="btn btn-primary">Book now</button>
                                                        </form>
                                                    </td>
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
                            <h1 class="mb-0 mr-4 mt-2">Hospitals based on your search</h1>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
</body>

</html>
