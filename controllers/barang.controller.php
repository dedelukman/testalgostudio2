<?php




class BarangController{

	/*=============================================
	TAMPILAN PENJUALAN BAR CHART
	=============================================*/

	static public function ctrShowBarangKategori(){
		

		$answer = BarangModel::mdlShowBarangKategori();

		return $answer;

	}

    
}