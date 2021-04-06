<?php




class PenjualanController{

	/*=============================================
	Tampilan Penjualan
	=============================================*/

	static public function ctrShowPenjualan(){

		

		$answer = PenjualanModel::mdlShowPenjualan();

		return $answer;

	}

    
}