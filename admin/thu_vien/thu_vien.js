// JavaScript Document
function Hoi_xoa_Loai_mon(ma_loai){
	if(confirm("Bạn xóa dữ liệu Loại món ăn")){
		window.location="xoaloaimonan.php?ma_loai=" + ma_loai;	
	}
}