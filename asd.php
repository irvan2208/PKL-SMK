<html>
<head>
<title>D dan U Sepuasnya!!</title>
<script type="text/javascript">
var counter = 10;
function countDown()
{
if(counter>=0)
{
document.getElementById("timer").innerHTML = counter;
}
else
{
download();
return;
}
counter -= 1;

var counter2 = setTimeout("countDown()",1000);
return;
}
</script>
</head>

<body onload="countDown();">
<div style="text-align: center;">
<h3>Dapat download dalam <span id="timer"></span> detik.</h3>
</div>

<div style="text-align: center;"><h1><span id="link"></span></h1></div>

</body>
</html>