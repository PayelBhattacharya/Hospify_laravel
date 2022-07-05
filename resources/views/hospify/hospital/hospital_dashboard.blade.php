<x-app-layout>

</x-app-layout>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="{{asset('admin1/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin1/img/favicon.ico')}}" rel="icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
  .sidebar{
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 78px;
  background: #203a65fa;
  padding: 6px 14px;
  z-index: 99;
  transition: all 0.5s ease;
}
.sidebar.open{
  width: 250px;
}
.sidebar .logo-details{
  height: 60px;
  display: flex;
  align-items: center;
  position: relative;
}
.sidebar .logo-details .icon{
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details .icon,
.sidebar.open .logo-details .logo_name{
  opacity: 1;
}
.sidebar .logo-details #btn{
    position: absolute;
    top: 50%;
    right: 3px;
    transform: translateY(-50%);
    font-size: 22px;
    transition: all 0.4s ease;
    font-size: 33px;
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease;
}
.sidebar.open .logo-details #btn{
  text-align: right;
}
.sidebar i{
  color: #fff;
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px;
}
.sidebar .nav-list{
  margin-top: 20px;
  height: 100%;
}
.sidebar li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}
.sidebar li .tooltip{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}
.sidebar.open li .tooltip{
  display: none;
}
.sidebar input{
  font-size: 15px;
  color: #FFF;
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 100%;
  width: 50px;
  border: none;
  border-radius: 12px;
  transition: all 0.5s ease;
  background: #30a4bafa;
}
.sidebar.open input{
  padding: 0 20px 0 50px;
  width: 100%;
}
.sidebar .bx-search{
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 22px;
  background: #1d1b31;
  color: #FFF;
}
.sidebar.open .bx-search:hover{
  background: #1d1b31;
  color: #FFF;
}
.sidebar .bx-search:hover{
  background: #FFF;
  color: #11101d;
}
.sidebar li a{
  display: flex;
  /* height: 100%; */
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  /* background: #11101D; */
  background: #203a65fa;

}
.sidebar li a:hover{
  background: #FFF;
}
.sidebar li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}
.sidebar.open li a .links_name{
  opacity: 1;
  pointer-events: auto;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color: #11101D;
}
.sidebar li i{
    height: 50px;
    line-height: 50px;
    font-size: 25px;
    border-radius: 12px;
    margin-left: -36px;
}
.sidebar li.profile{
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #1d1b31;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar.open li.profile{
  width: 250px;
}
.sidebar li .profile-details{
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}
.sidebar li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 6px;
  margin-right: 10px;
}
.sidebar li.profile .name,
.sidebar li.profile .job{
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
}
.sidebar li.profile .job{
  font-size: 12px;
}
.sidebar .profile #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #1d1b31;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}
.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}
.home-section{
  position: relative;
  background: #E4E9F7;
  min-height: 100vh;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}
.sidebar.open ~ .home-section{
  left: 250px;
  width: calc(100% - 250px);
}
.home-section .text{
  display: inline-block;
  color: #11101d;
  font-size: 25px;
  font-weight: 500;
  margin: 18px
}
@media (max-width: 420px) {
  .sidebar li .tooltip{
    display: none;
  }
}


  /* extra file */





        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* fill: rgb(249, 194, 38); */
.main{
    position: relative;
    height: 100vh;
}

.main svg{
    position: absolute;
    width: 100%;
}

.navigation{
    height: 50px;
    padding: 30px 100px;
    position: relative;
    display: flex;
    justify-content: space-between;
    z-index: 99;
}

.brand h1{
    color: #fff;
    margin-left: 526px;
    font-weight: 700;
}

.toggle, .close{
    display: none;
}

.nav-menu li{
    display: inline-block;
    margin: 0 30px;
    font-size: 20px;
    color: #fff;
}

.nav-menu li a{
    text-decoration: none;
    color: #fff;
}

.container{
    height: 75vh;
    width: 80vw;
    color: #fff0;
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    justify-content: space-between;
    padding: 80px 0 30px 0;
}


.photo{
    position: relative;
    width: 58%;
    height: 110%;
    padding: 0 20px;
}

.photo img{
    position: relative;
    width: 100%;
    height: 100%;
}

.form-cont{
    background-color: #30a4bafa;
    width: 55%;
    height: 107%;
    border-radius: 20px;
}

.inner-form{
    width: 68%;
    height: 100%;
    position: relative;
    display: block;
    margin: 0 auto;
}

.inner-form img{
    width: 100px;
    height: 100px;
    position: relative;
    display: block;
    margin: 0 auto;
}
.social-login{
    position: relative;
    margin: 10px 0;
    text-align: center;
    padding-bottom:24px;
}

.social-login span{
    text-shadow: -1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
    color: white;

    padding: 5px 0;
    font-size: 29px;
    font-weight: 700;
}
h1{
    color:#fff;
}
h3{
    color:#fff;
}
p{
    color:#fff;
    font-size: 19px;
}
.bg-2{
    margin-top: 23px;
}
.social-login ul li{
    display: inline;
    color: #fff;
    font-size: 30px;
    padding: 5px;
    margin: 5px 0;
}

.social-login ul>li>a{
    color: #fff;
    text-decoration: none;
}

.inner-form .imput-area{
    margin: 10px 0;
}

.input-area i{
    position: absolute;
    margin: 10px 0px;
    color: #fff;
}

.input-area input{
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

::placeholder{
    color: #fff;
    opacity: 0.7;
}

.btn{
    position: relative;
    display: block;
    margin: 10px auto;
    font-size: 20px;
    background: transparent;
    box-shadow: none;
    border:  2px solid #fff;
    color: #fff;
    padding: 5px 15px;
    border-radius: 10px;
}

.btn:hover{
    border: 2px solid #F9C226;
    background-color: #fff;
    cursor: pointer;
    color: #F9C226;
}

.input-area span{
    color: #fff;
    margin: 0 5px;
}

.input-area a{
    color: #fff;
    font-weight: 700;
    margin: 0 5px;
    text-decoration: none;
}

@media(max-width: 990px){
    .navigation{
        padding: 10px 100px;
    }
    .toggle{
        display: flex;
        color:#fff;
        cursor: pointer;
    }

    .close{
        display: block;
        position: absolute;
        color: #fff;
        right: 0;
        font-size: 30px;
        cursor: pointer;
        margin: 50px;
    }

    .nav-menu{
        display: none;
        position: absolute;
        width: 100%;
        height: 100vh;
        background-color: #F9C226;
        left: 0;
        top: 0;
        transition: all 3s ease;
    }

    .nav-menu ul{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .nav-menu ul li{
        display: block;
        font-size: 30px;
        margin: 20px 0;
        text-align: center;

    }
    .nav-menu ul>li>a:hover{
        color: #fff;
        padding-bottom: 5px;
        border-bottom: 2px solid #fff;
    }
    .container{
        height: 75vh;
        top: 50%;
        margin: 10px;
    }

    .photo{
        display: none;
    }

    .form-cont{
        width: 100%;
        max-height: 100%;
    }
}
.img{
    max-width: 13%;
    height: auto;
}
.logo{
    margin-left: 97px;
    margin-top: -54px;
}
    </style>
</head>
<body>
    @include('sweetalert::alert')
    <div class="img">
        <img src="{{ asset('admin/images/logo2.png') }}" class="logo">
    </div>
    <section class="main">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0fabca" fill-opacity="1" d="M0,192L18.5,213.3C36.9,235,74,277,111,256C147.7,235,185,149,222,133.3C258.5,117,295,171,332,197.3C369.2,224,406,224,443,192C480,160,500,96,554,101.3C590.8,107,628,181,665,197.3C701.5,213,738,171,775,176C812.3,181,849,235,886,229.3C923.1,224,960,160,997,133.3C1033.8,107,1071,117,1108,106.7C1144.6,96,1182,64,1218,69.3C1255.4,75,1292,117,1329,165.3C1366.2,213,1403,267,1422,293.3L1440,320L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z"></path></svg>

        <div class="navigation">
            <div class="brand">
                <h1  style="font-size: 45px; margin-left: 203px;">Welcome {{ Auth::user()->name }}</h1>
            </div>
            <div class="toggle">
                <i class="fas fa-bars"></i>
            </div>

            <div class="sidebar">
                <div class="logo-details">

                    <div class="logo_name">Hospify</div>
                    <i class='bx bx-menu' id="btn" ></i>
                </div>

                <ul class="nav-list">

                  <li>
                   <a href="{{route('hospital_details.create')}}">
                    <i class='bx bx-duplicate' ></i>
                     <span class="links_name">Add your details</span>
                   </a>
                   <span class="tooltip">Add your details</span>
                 </li>

                 <li>
                   <a href="{{route('hospital_edit',['email'=>Auth::user()->email])}}">
                    <i class='bx bx-duplicate' ></i>
                     <span class="links_name">Update your details</span>
                   </a>
                   <span class="tooltip">Update your details</span>
                 </li>

                 <li>
                   <a href="{{ route('Facilities.create', ['email' => Auth::user()->email]) }}">
                    <i class='bx bx-plus-medical' ></i>
                     <span class="links_name">Add Facilities</span>
                   </a>
                   <span class="tooltip">Add Facilities</span>
                 </li>

                 <li>
                  <a href="{{route('Facilities.index',['email'=>Auth::user()->email])}}">
                    <i class='bx bx-plus-medical' ></i>
                    <span class="links_name">View/Update Facilities</span>
                  </a>
                  <span class="tooltip">View/Update Facilities</span>
                </li>

                <li>
                  <a href="{{route('specialist.create',['email'=>Auth::user()->email,'hname'=>Auth::user()->name])}}">
                    <i class='bx bx-user-plus' ></i>
                    <span class="links_name">Add Specialist</span>
                  </a>
                  <span class="tooltip">Add Specialist</span>
                </li>

                <li>
                  <a href="{{route('Doctor_view',Auth::user()->email)}}">
                    <i class='bx bx-user-plus' ></i>
                    <span class="links_name">View/Update Specialist</span>
                  </a>
                  <span class="tooltip">View/Update Specialist</span>
                </li>

                <li>
                  <a href="{{action('App\Http\Controllers\HospitalDetailsController@fetch',['email'=>Auth::user()->email])}}">
                    <i class='bx bx-user' ></i>
                    <span class="links_name">Booked Members</span>
                  </a>
                  <span class="tooltip">Booked Members</span>
                </li>

                </ul>
              </div>
            </div>


        <div class="container">
            <div class="photo">
                <img src="{{asset('admin/images/hos.jpeg')}}">
            </div>

            <div class="form-cont">
                <div class="inner-form">
                    <div class="social-login">
                        <span class="head">Instructions</span>
                    </div>

                    <div class="input-area">
                        <form action="" method="post">
                            <div>

                            <div id="process" class="bg-1">
                                <p>● You can add and update your hospital details</p>
                                <p>● You can add view and update your hospital facilities</p>
                                <p>● You can see the names of patients booked already</p>
                                <p>● You can add, view and update your specialist doctor so that patient
                                    can take proper treatement from their preferable doctor and see
                                    the secheduled time </p>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", ()=>{
          sidebar.classList.toggle("open");
          menuBtnChange();//calling the function(optional)
        });

        searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
          sidebar.classList.toggle("open");
          menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
         if(sidebar.classList.contains("open")){
           closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
         }else {
           closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
         }
        }
        </script>
</body>
</html>
