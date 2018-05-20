function chiTiet1(){
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
     xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("result").innerHTML = xmlhttp.responseText;
        }
    };
     
    xmlhttp.open("GET", "test.php", true);
    xmlhttp.send();
}


function chiTiet(mdh) {
	var xmlhttp;
        if (window.XMLHttpRequest)
        {
            xmlhttp = new XMLHttpRequest();
        }
         xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("result").innerHTML = xmlhttp.responseText;
            }
        };

        xmlhttp.open("GET", "chitiet.php?id="+mdh, true);
        xmlhttp.send();
    }
    // xmlhttp.open("GET", "test.php"?param="+mh, true);