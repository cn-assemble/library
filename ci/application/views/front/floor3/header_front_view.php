<head>

    <style>

        *{padding: 0px;margin: 0px;}
        .left{background-color: red; width: 20%; height: 97%; float: left;}
        .right{background-color: yellow; width: 20%; height:97%; float: left;}
        .top{background-color: purple; width:40%; height:20%; float: left;}
        .pic {background-color: green; width:40%; height: 53%; position: absolute; left:21%; top:22%;}
        .down {background-color: blue; width:40%; height: 20%; position: absolute; left:21%; top:77%;}
        .zone{margin:0.5%;}
        .data-left {background: grey; margin:2.5% 10% 2.5% 10% ; width:80%; height:4%;}
        .data-top {background: grey;  margin:2.5% -0.5% 2.5% 2%; width: 4%; height: 80%; float: left;}
        .data-down {background: grey; margin:2.5% 2% 2.5% -0.5% ; width:4%; height:80%; float:right;}
        .data-right {background: grey; margin:2.5% 10% 2.5% 10% ; width:80%; height:3.2%;}

        .blink{
            /* Chrome, Safari, Opera */
            -webkit-animation-name: myfirst;
            -webkit-animation-duration: 5s;
            -webkit-animation-timing-function: linear;
            -webkit-animation-delay: 2s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-direction: alternate;
            -webkit-animation-play-state: running;
            /* Standard syntax */
            animation-name: myfirst;
            animation-duration: 2s;
            animation-timing-function: linear;
            animation-delay: 1s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            animation-play-state: running;

        }

        /* Chrome, Safari, Opera */
        @-webkit-keyframes myfirst {
            0%   {background:red;}
            25%  {background:orange;}
            50%  {background:red;}
            75%  {background:orange;}
            100% {background:red;}
        }

        /* Standard syntax */
        @keyframes myfirst {
            0%   {background:red;}
            25%  {background:orange;}
            50%  {background:red;}
            75%  {background:orange;}
            100% {background:red;}
        }
        body{top:0;overflow:hidden;width:100%;height:100%;background: url("/ci/public/img/background.jpg") no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
</head>

<body>
<div class = "container">
