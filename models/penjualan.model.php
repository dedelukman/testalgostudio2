<?php

require_once 'connection.php';



class PenjualanModel{
	/*=============================================
	TAMPILAN PENJUALAN
	=============================================*/

	static public function mdlShowPenjualan(){

		
        $stmt = Connection::connect()->prepare(" select a.*, b.total as komputer, c.total as handphone from penjualan a 
        left join
        (select a.id_penjualan, b.kategori ,sum(harga_total) total from penjualan_detail a
        left join master_barang b on a.kode_barang=b.kode_barang where kategori='komputer'
        group by kategori, id_penjualan) b on a.id=b.id_penjualan 
        left join
        (select a.id_penjualan, b.kategori ,sum(harga_total) total from penjualan_detail a
        left join master_barang b on a.kode_barang=b.kode_barang where kategori='handphone'
        group by kategori, id_penjualan) c on a.id=c.id_penjualan 
        order by tanggal_penjualan "
    );

			$stmt -> execute();

			return $stmt -> fetchAll();


		$stmt -> close();

		$stmt = null;

	}

    

}