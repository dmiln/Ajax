<html>
<head>
<script type='text/javascript'>
function getHttpObject(){
	if(window.ActiveXObject)
		return new ActiveXObject("Microsoft XMLHTTP");
	else if(window.XMLHttpRequest)
		return new XMLHttpRequest();
	else{
		alert("AJAX is not supported");
		return null;
	}
}
function dowork(){
   xhttp=getHttpObject();
   xhttp.onreadystatechange=function(){
      if (xhttp.readyState===4 && xhttp.status===200)
         document.getElementById('OT').value=xhttp.responseText;
      }
   xhttp.open('GET','t.php?IT='+document.getElementById('IT').value,true);
   xhttp.send();
}
</script>
</head>
<body>
<form name='testForm'>
    <label for="IT"></label><input type='text' onkeyup='dowork()' ID='IT'/>
<br>
<pre><label for="OT"></label><textarea readonly rows="10" cols="22" ID='OT'></textarea></pre>
</form>
</body>
</html>



