<?php




class PenjualanController{

	/*=============================================
	TAMPILAN PENJUALAN BAR CHART
	=============================================*/

	static public function ctrShowPenjualanBarChart(){

		

		$answer = PenjualanModel::mdlShowPenjualanBarChart();

		return $answer;

	}

	/*=============================================
	TAMPILAN PENJUALAN BAR CHART
	=============================================*/

	static public function ctrShowPenjualanTerakhir(){

		

		$answer = PenjualanModel::mdlShowPenjualanTerakhir();

		return $answer;

	}

	static public function ctrShowPenjualan(){

		

		$answer = PenjualanModel::mdlShowPenjualan();

		return $answer;

	}

    
}