<head>

	<style>
        div{
            opacity: 0.977;
        }
		*{
			padding: 0px;
			margin: 0px;
		}
		.left{background-color: #696969; width: 25%; height: 97%; float: left}
		.left_in {background-color: #808080; width: 48%; height: 98%; float: left}

		.pic {background-color: #696969; width: 40%; height: 97%; float: left}
		.down {background-color: #808080; width: 97%; height: 20%; float: left; margin: 98% 0.5% 0.5% 1.5%;}
		.right {background-color: #696969; width: 20%; height: 97%; float: left}
		.zone{
			margin:0.5%;
		}
		.data{
			background: #C0C0C0;
		}
		.data-left{
			margin:1.487834% 0% 1% 15% ;
			width:70%;
			height:3.5%;
		}
		.data-down{
			margin:1% 1.5% 0% 0%;
			float:right;
			width:4.25%;
			height:92%;
		}
		.data-right{
			margin:1.6% 0% 1% 15% ;
			width:70%;
			height:4%;
		}

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
		    animation-duration:2s;
		    animation-timing-function: linear;
		    animation-delay: 1s;
		    animation-iteration-count: infinite;
		    animation-direction: alternate;
		    animation-play-state: running;

		}

					/* Chrome, Safari, Opera */
			@-webkit-keyframes myfirst {
			    0%   {background:#DCDCDC}
			    25%  {background:#808080}
			    50%  {background:#DCDCDC}
			    75%  {background:#808080}
			    100% {background:#DCDCDC}
			}

			/* Standard syntax */
			@keyframes myfirst {
			    0%   {background:#DCDCDC}
			    25%  {background:#808080}
			    50%  {background:#DCDCDC}
			    75%  {background:#808080}
			    100% {background:#DCDCDC}
			}

        body{top:0;overflow:hidden;width:100%;height:100%;background: url("/ci/public/img/background.jpg") no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
	</style>
</head>

<body>
	<div class = "container ">
		<div class = "zone left">
