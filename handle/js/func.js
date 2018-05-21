
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
function chiTiet(i) {
    var id="js-madh-"+i;
	maDonHang =  document.getElementById(id).innerText;
	console.log(maDonHang);

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

        xmlhttp.open("GET", "chitiet.php?id="+maDonHang, true);
        xmlhttp.send();
}