<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONe</title>
    <style>
        .bold{
            font-weight: 500;
        }
        .col-1{
            float:left;
            width:30%;
        }
        .col-2{
            float:left;
            width:30%;
        }
        .col-3{
            float:left;
            width:30%;
            line-height: 1.35;
            padding:1em 0;
        }
        .background{
            background-color: aqua;
            height:250px;
        }
        *{
            margin:0;
            padding:0;
        }
        .img{
            margin:0.8em;
            padding:3em;
        }
        .name{
            font-size:xx-large;
            word-wrap: normal;
            padding:2em;
        }
        .heading{
            font-size:x-large;  
        }
        .sub-heading{
            font-size: medium;
            margin:0 0.5em;
        }
        .wirtable-area{
            margin:1em;
            padding:1em;
            line-height: 1.5;
        }
        .margin{
            padding:0 2.15em;
        }
    </style>
</head>
<body>
    <div>
        <div class="background">
            <div class="col-1">
                <img src="./one.jpg" class="img" height="130" width="130" />
            </div>
            <div class="col-2 name">
                b
            </div>
            <div class="col-3">
                <div class="heading">
                    Name
                    <div class="sub-heading">
                        This is myanmar
                    </div>
                </div>
                <div class="heading">
                    Name
                    <div class="sub-heading">
                        This is myanmar
                    </div>
                </div>
                <div class="heading">
                    Name
                    <div class="sub-heading">
                        This is myanmar
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wirtable-area">
        <div class="heading">
            Name
            <div class="sub-heading">
                This is myanmar
            </div>
        </div>
        <div class="heading">
            Name
            <div class="sub-heading">
                This is myanmar
            </div>
        </div>
        <div class="heading">
            Name
            <div class="sub-heading">
                This is myanmar
            </div>
        </div>  
        <div class="heading">
            Home
            <div class="sub-heading ">
                <ul class="margin">
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ul>  
            </div>
        </div>
        <div class="heading">
            Home
            <div class="sub-heading  bold">
                <ul class="margin">
                    <li>Home</li>
                    <li>Home</li>
                    <li>Home</li>
                    <li>Home</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>