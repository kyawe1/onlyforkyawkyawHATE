<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding:0;
            margin:0;
        }
        head,body{
            height:100%;
        }
        .h-100{
            height: 100%;
        }
        .left-col{
            float:left;
            width:30%;
            line-height: 2;
        }
        .right-col{
            float:right;
            width:30%;
            line-height: 2;

        }
        .background{
            background-color: black;
        }
        .wirtable-area{
            margin:1em;
            padding:1em;
        }
        .img{
            border-radius:50%;
            /* background-color:blanchedalmond; */
            margin:3em 0.5em;
            padding:2.5em 9em;
        }
        .center{
            text-align:center;
        }
        .heading{
            font-size:x-large;  
        }
        .sub-heading{
            font-size: medium;
            margin:0 0.5em;
        }
        .name{
            font-size:xx-large;
            word-wrap: normal;
        }
        .white{
            color:white;
        }
        .black{
            color:black;
        }
        .margin{
            padding:0 2.15em;
        }
    </style>
</head>
<body>
    <div class="left-col wirtable-area h-100">
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
            Name
            <div class="sub-heading">
                <ul class="margin">
                    <li>Home</li>
                    <li>Home</li>
                    <li>Home</li>
                    <li>Home</li>
                    <li>Home</li>
                    <li>Home</li>
                </ul>
            </div>
            
        </div>
        
    </div>
    <div class="right-col background h-100 white">
        <div class="">
            <img src="./one.jpg" class="img" height="100" width="100" />
        </div>
        <div class="wirtable-area">
            <div class="center name ">
                B
            </div>
            
            <div class="heading">
                Name
                <div class="sub-heading">
                    This is myanmar
                </div>
            </div>
        </div>
    </div>
</body>
</html>