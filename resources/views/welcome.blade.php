<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: #fff;
                color: #636b6f;*/
                font-family: cursive;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: red;
            }
        </style>
    </head>
    <body>
    <img src="{{url('image/background.JPEG')}}" style="no-repeat center center fixed;position: fixed;width: 100%;height: 100%;background-size: cover;">
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div>
                    <img src="{{url('image/nama.png')}}" style="width: 50%;height: 50%;">
                </div>

                    <div class="title m-b-md"><b>
                        WEBSITE UNDER MAINTENANCE IN
                        <div>
                            <i id="hari"></i> Days
                            <i id="jam"></i> Hours
                            <i id="menit"></i> Minutes
                            <i id="detik"></i> Seconds
                        </div>
                        </b>
                    </div>
            </div>
        </div>

    <script type="text/javascript">
        function countdown(setdetik) {
            var minutes = 1;
            var seconds = setdetik;
            var mins = minutes
            function tick() {
                //elemen dengan id= counter bisa diganti sesuka hati
                var hari = document.getElementById("hari");
                var jam = document.getElementById("jam");
                var menit = document.getElementById("menit");
                var detik = document.getElementById("detik");

                var date = new Date();
                var jam2 = date.getHours();
                var menit2 = date.getMinutes();
                var detik2 = date.getSeconds();
                var current_minutes = mins-1;
                seconds--;
                hari.innerHTML = Math.floor(seconds/86400);
                jam.innerHTML = Math.floor(24 - jam2);
                menit.innerHTML = Math.floor(60 - menit2);
                detik.innerHTML = Math.floor(60 - detik2);
                if( seconds > 0 ) {
                    setTimeout(tick, 1000);
                } else {
                    if(mins > 1){
                        countdown(mins-1);
                    }
                }
            }
            tick();
        }
        countdown(2592000);
    </script>

    </body>
</html>
