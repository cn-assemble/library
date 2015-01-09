<head>

	<style>
       
		*{
			padding: 0px;
			margin: 0px;
		}
		.left{background-color: #D0D0D0; width: 25%; height: 97%;opacity: 0.977; float: left}
		.left_in {background-color: #D0D0D0; width: 48%; height: 98%; float: left}

		.pic {background-color: #D0D0D0; width: 40%; height: 97%;opacity: 0.977; float: left}
		.down {background-color: #D0D0D0; width: 97%; height: 20%; float: left; margin: 98% 0.5% 0.5% 1.5%;opacity: 0.977;}
		.right {background-color: #D0D0D0; width: 20%; height: 97%; opacity: 0.977; float: left}
		.zone{
			margin:0.5%;
		}
		.data{
			background: grey;
		}
		.data-left{
			margin:1.487834% 0% 1% 15% ;
			width:70%;
			height:3.5%;
			background: grey;
		}
		.data-down{
			margin:1% 1.5% 0% 0%;
			float:right;
			width:4.25%;
			height:92%;
			background: grey;
		}
		.data-right{
			margin:1.6% 0% 1% 15% ;
			width:70%;
			height:4%;
			background: grey;
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
	<div class = "container ">
		<div class = "zone left">
