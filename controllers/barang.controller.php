<?php




class BarangController{

	/*=============================================
	TAMPILAN PENJUALAN PIE CHART
	=============================================*/

	static public function ctrShowBarangKategori(){
		

		$answer = BarangModel::mdlShowBarangKategori();

		return $answer;

	}

    
}