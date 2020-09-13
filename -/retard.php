<style type="text/css">
body {
  background: #2a2a2b;
  color: #fff;
  text-align: center;
  font-family: Arial, Helvetica;
}

.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

p {
	font-family: 'Roboto', sans-serif;
	font-size: 2em;
}
</style>
<body>
	<div class="container">
		<div class="retard">
			<img src="assets/retard-alert.png">
			<center><p>You will be redirected in <span id="counter" style="color: red">10</span> seconds...</p></center>
			<audio src="assets/retard.mp3" loop autoplay id="myVideo"></audio>
		</div>
	</div>
</body>
<script type="text/javascript">
	var vid = document.getElementById("myVideo");
	vid.volume = 0.05;

	function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'https://leonisgeweldig.be/dev';
    }
	if (parseInt(i.innerHTML)!=0) {
	    i.innerHTML = parseInt(i.innerHTML)-1;
	}
	}
	setInterval(function(){ countdown(); },1000);
</script>