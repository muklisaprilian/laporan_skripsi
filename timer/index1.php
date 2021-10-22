
<center>
<div id="response" style="font-size:100px; "></div>
</center>
<script type="text/javascript">
    setInterval(function()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","response.php",false);
        xmlhttp.send(null);
        document.getElementById("response").innerHTML=xmlhttp.responseText;
    },1000);
</script> 