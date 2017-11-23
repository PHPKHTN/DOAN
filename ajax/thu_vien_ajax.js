function XL_dien_thoai(ma_hang_san_xuat)
{
	// Ajax
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.status==200 && xmlhttp.readyState==4){
			var kq=xmlhttp.responseText;
			document.getElementById("ds_dien_thoai").innerHTML=kq
			console.log(kq)	
		}
	}
	xmlhttp.open("POST","XL_dien_thoai.php",true)
	var data=new FormData();
	data.append("ma_hang_san_xuat",ma_hang_san_xuat)
	xmlhttp.send(data)	
}