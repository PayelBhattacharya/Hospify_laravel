<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Search Your Hospital</title>
<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
<meta name="keywords"
    content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- selec2 cdn --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
        height: 100%;
        background-repeat: no-repeat;
        background-color: #f3fbf9;
    }

    /* ol,
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
    } */

    /* table {
        border-collapse: collapse;
        border-spacing: 0;
    }*/

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



    h2 {
        line-height: 20px;
        margin: 0;
        font-size: 28px;
        font-weight: 700;
        text-transform: uppercase;
    }



    .container-fluid {
        margin-left: 225px;
        margin-top: 42px;
        display: flex;
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
        margin-left: 130px;
        margin-top: 249px;
    }



    .block {
        display: block;
    }


    .form-control {
        height: 40px;
        background-color: #daedf2;
        border: 1px solid #5dc1e7;
        margin-right: 9rem;
    }


    .dropdown,
    .dropup {
        position: relative;
        margin-left: 7rem;
    }


    .card0 {
        box-shadow: 0px 4px 24px 0px #757575;
        border-radius: 0px;
        height: 633px;
        width: 92%;
        margin-left: -64px;
        margin-top: 30px;
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
        margin-top: 20px;
        margin-left: 6px;
    }

    h1 {
        text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
        font-size: 41px;
        font-family: 'Times New Roman', Times, serif;
        margin-left: -232px;
    }

    .image {
        width: 554px;
        height: 437px;
        margin-left: -11px;
        margin-top: 36px;
    }

    .border-line {
        border-right: 1px solid #EEEEEE
    }

    .line {
        height: 1px;
        width: 79%;
        background-color: #dcd4d4;
        margin-top: 9px;
        margin-left: -229px;
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

    ::placeholder {
        color: black;
    }

    .dashboard {
    width: 121px;
    height: 37px;
    border-radius: 50px;
    background-color: green;
    margin-left: 1381px;
    top: 16px;
    position: absolute;
    color: white;
    font-weight: bold;
    }

    .dashboard:hover {
        background-color: #337ab7;
        color: white;
    }
    .select2-container--default .select2-selection--multiple {
    background-color: #cfe9f9;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: text;
    padding-bottom: 5px;
    padding-right: 5px;
    position: relative;
    border: 2px solid #94d4f8;
}



</style>
</head>

<body>
    <a href="/dashboard" class="btn dashboard">Dashboard</a>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="{{ asset('admin/images/logo2.png') }}"
                                class="logo"> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5"> <img
                                src="{{ asset('admin/images/search.png') }}" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                            <h1 class="mb-0 mr-4 mt-2">Search Your Hospital</h1>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                        <div class="container-fluid adjust">
                            <div class="dropdown dropdown1">
                                <span class="caret"></span>
                                <form action="{{ action('App\Http\Controllers\UserController@fetch') }}" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <select class="select2-multiple form-control selcls"
                                        class="btn btn2 dropdown-toggle" type="button" id="about-us"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="city[]"
                                        id="city" multiple="multiple" data-placeholder="choose location">

                                        <div class="dropdown-menu" class="btn btn2 dropdown-toggle" type="button"
                                            id="about-us" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">

                                            <option value=""></option>
                                            {{-- <option value="" disabled selected hidden>choose location</option> --}}
                                            <option value="Kolkata">Kolkata</option>
                                            <option value="Howrah">Howrah</option>
                                            <option value="Serampore">Serampore</option>
                                            <option value="Bhradeswar">Bhradeswar</option>
                                            <option value="Chandannagar">Chandannagar</option>
                                            <option value="Bidhannagar">Bidhannagar</a>
                                            <option value="Chinsurah">Chinsurah</a>
                                            <option value="Bandel">Bandel</a>
                                            <option value="Uttarpara">Uttarpara</a>
                                            <option value="Salar">Salar</a>
                                            <option value="Salua">Salua</a>
                                            <option value="Purulia">Purulia</a>
                                            <option value="Bashirhat">Bashirhat</a>
                                            <option value="Hashnabad">Hashnabad</a>
                                            <option value="Taki">Taki</a>
                                            <option value="Barrackpore">Barrackpore</a>
                                            <option value="Katwa">Katwa</a>
                                            <option value="Arambagh">Arambagh</a>
                                        </div>
                                    </select>
                                    </button>
                            </div>
                            <div class="dropdown dropdown2">
                                <span class="caret"></span>
                                <select class="form-control selcls" class="btn btn2 dropdown-toggle" type="button"
                                    id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    name="requirements" id="requirements">

                                    <div class="dropdown-menu" class="btn btn2 dropdown-toggle" type="button"
                                        id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        <option value="" disabled selected hidden>choose requirement</option>
                                        <option value="ICU">I.C.U.</option>
                                        <option value="VENTILATION">VENTILATION</option>
                                        <option value="COVID_BED">COVID BED</option>
                                        <option value="NORMAL_BED">NORMAL BED</option>
                                        <option value="COVID_VACCINATION">COVID VACCINATION</option>
                                        <option value="CITY_SCAN">CITY SCAN</option>
                                        <option value="BLOOD_BANK">BLOOD BANK</option>
                                        <option value="OXYGEN_AVALABILITY">OXYGEN AVALABILITY</option>
                                    </div>
                                </select>
                            </div>
                        </div>
                        <div class="button">
                            <button class="btn-primary button1" type="submit" id="about-us" value="submit">search
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            // placeholder: {
            //     text: 'choose location',
            //     color: 'black'
            // },
            allowClear: true
        });

    });
</script>

</html>
