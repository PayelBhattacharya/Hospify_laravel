<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Hospital Registration</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        #banner {
            /* background: url('../img/bg-banner.jpg') no-repeat fixed; */
            background-size: cover;
            min-height: 1199px;
            position: relative;
            background: linear-gradient(#d5d8f6, #8096d3);
            /* background-blend-mode: soft-light; */
        }

        /*
    .bg-color {
      background-color: RGBA(13, 70, 83, 0.78);
      min-height: 1020px;
    } */

        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .col-lg-6 {
            /* fallback for old browsers */
            background-color: #bbb6b6;

            /* Chrome 10-25, Safari 5.1-6
  background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            /* background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1)) */
        }

        .bg-indigo {
            background-color: #e3e2ef;
        }

        .bg-indigo .form-label {
            color: black;
        }


        @media (min-width: 992px) {
            .card-registration-2 .bg-indigo {
                border-bottom-right-radius: 15px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-indigo {
                border-bottom-right-radius: 15px;
            }
        }

        .form-label {
            color: black;
        }

        h3 {
            margin-bottom: 14px;
            margin-top: 8px;
        }

        .form-check-input {
            margin-top: 5.25em;
        }

        .adjust {
            width: 366%;
        }

        .btn {
            margin-top: 121px;
            margin-left: 209px;
            width: 138px;
            border-radius: 20px;
        }

        .checkbox1 {
            width: 556px;
            border: 2px solid white;
            padding: 11px;
            background-color: #9cb9c6;
            margin-top: -11px;
            font-size: 15px;
            color: black;
        }

        .form-check-input[type=checkbox] {
            border-radius: -13.75em;
            width: 53px;
            margin-left: -7px;
        }

        .pulse:hover,
        .pulse:focus {
            -webkit-animation: pulse 1s;
            animation: pulse 1s;
            box-shadow: 0 0 0 2em rgba(255, 255, 255, 0);
        }

        @-webkit-keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 var(--hover);
            }
        }

        .pulse {
            /* --color: #ef6eae; */
            --hover: #ef8f6e;
        }

        button {
            color: var(--color);
            transition: 0.25s;
        }

        button:hover,
        button:focus {
            border-color: var(--hover);
            color: #fff;
        }
        .logo{
        width: 149px;
        height: 60px;
        margin-left: 12px;
        margin-top: 10px;
        }

    </style>
</head>

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('App\Http\Controllers\HospitalDetailsController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH"/>
   <section class="h-100 h-custom gradient-custom-2">
    <div class="container py-5 h-100">
      <h2 class="text-center pb-2">New Hospital Registration</h2>
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="p-5">
                    <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                          <input type="text" id="form3Examplev2" class="form-control form-control-lg" value="{{$student->hname}}" name="hname" :value="old('hname')" />
                          <label class="form-label" for="form3Examplev2">Full Hospital Name</label>
                        </div>
                      </div>
                    </div>


                    <div class="mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" id="form3Examplev4" class="form-control form-control-lg" value="{{$student->registration}}" name="registration" required />
                        <label class="form-label" for="form3Examplev4">Regd. No.</label>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                          <input type="text" id="form3Examplev2" class="form-control form-control-lg" value="{{$student->trade}}" name="trade" required/>
                          <label class="form-label" for="form3Examplev2">Trade Licence No.</label>
                        </div>
                      </div>
                    </div>


                    <div class="mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" id="form3Examplev4" class="form-control form-control-lg" value="{{$student->ownername}}" name="ownername" required/>
                        <label class="form-label" for="form3Examplev4">Owner's Name</label>
                      </div>
                    </div>

                    <div class="mb-3 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" value="{{$student->email}}" name="email" required/>
                        <label class="form-label" for="form3Examplea2">Email</label>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="col-lg-6 bg-indigo text-black">
                  <div class="p-5">
                    <h3 class="fw-normal mb-5">Contact Details</h3>

                    <div class="row">

                      <div class="col-md-7 mb-4 pb-2">
                        <div class="form-outline form-white">
                          <input type="number" id="form3Examplea4" class="form-control form-control-lg" value="{{$student->phone}}" name="phone" required/>
                          <label class="form-label" for="form3Examplea4">Phone Number</label>
                        </div>
                      </div>

                      <div class="mb-3 pb-2">
                          <div class="form-outline form-white">
                            <input type="text" id="form3Examplea3" class="form-control form-control-lg" value="{{$student->address}}" name="address" required/>
                            <label class="form-label" for="form3Examplea3">Address</label>
                          </div>
                        </div>

                        <div class="col-md-7 mb-4 pb-2">
                          <div class="form-outline form-white">
                            <input type="password" id="form3Examplea4" class="form-control form-control-lg" value="{{$student->password}}" name="password" required/>
                            <label class="form-label" for="form3Examplea4">Password</label>
                          </div>
                        </div>

                      <div class="row">
                      <div class="col-md-7 mb-4 pb-2">

                        <div class="form-outline form-white">
                          <label class="form-label" for="form3Examplea8">City</label>
                          <div class="col-sm-10 input-column">
                              <select class="form-control selcls" name="city" id="city">
                                  <div class="dropdown-menu">
                                  <option><h5>{{$student->city}}</h5></option>
                                  <option value="Kolkata">Kolkata</option>
                                    <option value="Bidhannagar">Bidhannagar</option>
                                    <option value="Howrah">Howrah</option>
                                    <option value="Serampore">Serampore</option>
                                    <option value="Bhadrhwar">Bhradeswar</option>
                                    <option value="Chandannagar">Chandannagar</option>
                                    <option value="Chinsurah">Chinsurah</option>
                                    <option value="Bandel">Bandel</option>
                                    <option value="Uttarpara">Uttarpara</option>
                                    <option value="Salar">Salar</option>
                                    <option value="Salua">Salua</option>
                                    <option value="Purulia">Purulia</option>
                                    <option value="Bashirhat">Bashirhat</option>
                                    <option value="Hashnabad">Hashnabad</option>
                                    <option value="Taki">Taki</option>
                                    <option value="Barrackpore">Barrackpore</option>
                                    <option value="Katwa">Katwa</option>
                                    <option value="Arambagh">Arambagh</option>
                                  </div>

                              </div>
                        </div>
                        <div class="form-outline form-white">
                            <label class="form-label" for="form3Examplea8">Requirements</label>
                        <input type="checkbox" name="requirements[]" value= "I.C.U." {{ in_array('I.C.U.',$student->requirements) ? 'checked' : '' }}/>I.C.U.
                        <input type="checkbox" name="requirements[]" value= "VENTILATION"{{in_array('VENTILATION',$student->requirements) ? 'checked' : '' }}/>VENTILATION
                        <input type="checkbox" name="requirements[]" value="NORMAL BED"{{in_array('NORMAL BED',$student->requirements) ? 'checked' : '' }}/>NORMAL BED
                        <input type="checkbox" name="requirements[]" value="COVID VACCINATION"{{in_array('COVID VACCINATION',$student->requirements) ? 'checked' : '' }}/>COVID VACCINATION
                        <input type="checkbox" name="requirements[]" value="CITY SCAN"{{in_array('CITY SCAN',$student->requirements) ? 'checked' : '' }}/>CITY SCAN
                        <input type="checkbox" name="requirements[]" value="BLOOD BANK"{{in_array('BLOOD BANK',$student->requirements) ? 'checked' : '' }}/>BLOOD BANK
                        <input type="checkbox" name="requirements[]" value="OXYGEN AVALABILITY"{{in_array('OXYGEN AVALABILITY',$student->requirements) ? 'checked' : '' }}/>OXYGEN AVALABILITY
                        </div>
                      </div>
                    </div>

                    <div class="form-check d-flex justify-content-start mb-4 pb-3">
                      <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                        <div class="adjust">
                          <label class="form-check-label checkbox text-black" for="formCheck-1">
                              I do accept the <a href="/terms&conditions" class="text-black"><u>Terms and Conditions</u></a> of your site.
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-primary" data-mdb-ripple-color="dark" value="submit">Register</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
      </form>
