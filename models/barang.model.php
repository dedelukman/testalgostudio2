<?php

require_once 'connection.php';



class BarangModel{
	/*=============================================
	TAMPILAN PENJUALAN PIE CHART
	=============================================*/

	static public function mdlShowBarangKategori(){

		
        $stmt = Connection::connect()->prepare(" 
        select kategori, sum(stok) total 
        from master_barang
        group by kategori
        "
        );

			$stmt -> execute();

			return $stmt -> fetchAll();


		$stmt -> close();

		$stmt = null;

	}

    

}