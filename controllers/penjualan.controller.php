<?php




class PenjualanController{

	/*=============================================
	TAMPILAN PENJUALAN BAR CHART
	=============================================*/

	static public function ctrShowPenjualanBarChart(){

		

		$answer = PenjualanModel::mdlShowPenjualanBarChart();

		return $answer;

	}

    
}