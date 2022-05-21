<x-app-layout>

</x-app-layout>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Page Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
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
    padding: 70px 0 30px 0;
}

.text-sm {
    font-size: 20px !important;
    color: blue;
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
    width: 63%;
    /* height: 113%; */
    height: 97%;
    border-radius: 20px;
}

.inner-form{
    width: 60%;
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
    color: #fff;
    font-size: 18px;
    font-family: auto
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
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    background: #00E5FF;
    min-height: 100vh;
}

.wrapper{
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

.wrapper .form-left{
    background: #3786bd;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    padding: 20px 40px;
    position: relative;
    width: 100%;
    color: #fff;
}

.wrapper h2{
    font-weight: 700;
    font-size: 25px;
    padding: 5px 0 0;
    margin-bottom: 34px;
    pointer-events: none;
}

.wrapper .form-left p{
    font-size: 0.9rem;
    font-weight: 300;
    line-height: 1.5;
    pointer-events: none;
}

.wrapper .form-left .text{
    margin: 20px 0 25px;
}

.wrapper .form-left p span{
    font-weight: 700;
}

.wrapper .form-left input{
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

.wrapper .form-left input:hover{
    background-color: #f2f2f2;
}

.wrapper .form-right{
    padding: 20px 40px;
    position: relative;
    width: 100%;
}

.wrapper .form-right h2{
    color: #3786bd;
}

.wrapper .form-right label{
    font-weight: 600;
    font-size: 15px;
    color: #666;
    display: block;
    margin-bottom: 8px;
}

.wrapper .form-right .input-field{
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #e5e5e5;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    outline: none;
    color: #333;
}

.wrapper .form-right .input-field:focus{
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

.wrapper .register{
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

.wrapper .register:hover{
    background-color: #3785bde0;
}

.wrapper a{
    text-decoration: none;
}

@media (max-width: 860.5px) {
    .wrapper{
        margin: 50px 5px;
    }
}


@media (max-width: 767.5px){
    .wrapper{
        flex-direction: column;
        margin: 30px 20px;
    }

    .wrapper .form-left{
        border-bottom-left-radius: 0px;
    }


}

@media (max-width: 575px) {

    .wrapper{
        margin: 30px 15px;
    }

    .wrapper .form-left{
        padding: 25px;
    }
    .wrapper .form-right{
        padding: 25px;
    }
}
    </style>
</head>
<body>
    <section class="main">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0fabca" fill-opacity="1" d="M0,192L18.5,213.3C36.9,235,74,277,111,256C147.7,235,185,149,222,133.3C258.5,117,295,171,332,197.3C369.2,224,406,224,443,192C480,160,500,96,554,101.3C590.8,107,628,181,665,197.3C701.5,213,738,171,775,176C812.3,181,849,235,886,229.3C923.1,224,960,160,997,133.3C1033.8,107,1071,117,1108,106.7C1144.6,96,1182,64,1218,69.3C1255.4,75,1292,117,1329,165.3C1366.2,213,1403,267,1422,293.3L1440,320L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z"></path></svg>

        <div class="navigation">
            <div class="brand">
                <h1  style="font-size: 45px; margin-left:288px">Welcome {{ Auth::user()->name }}</h1>
            </div>
            <div class="toggle">
                <i class="fas fa-bars"></i>
            </div>

        </div>
        <div class="wrapper">
            <div class="form-left">
                <h2 class="text-uppercase">Ambulance Data </h2>

            </div>
            <form class="form-right" action="{{route('Ambu.store')}}" method="POST">
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




    <script>
        let toggler = document.querySelector('.toggle');
        let menu = document.querySelector('.nav-menu');
        let close = document.querySelector('.close');


        toggler.addEventListener('click', () =>{
            menu.style.display ='block';
            console.log('clicked')
        });

        close.addEventListener('click', () =>{
            menu.style.display = '';
            cons
        });
    </script>
</body>
</html>
