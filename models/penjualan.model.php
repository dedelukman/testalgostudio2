<?php

require_once 'connection.php';



class PenjualanModel{
	/*=============================================
	TAMPILAN PENJUALAN BAR CHART
	=============================================*/

	static public function mdlShowPenjualanBarChart(){

		
        $stmt = Connection::connect()->prepare(" 
            select a.*, b.total as komputer, c.total as handphone 
            from penjualan a 
            left join
                (select a.id_penjualan, b.kategori ,sum(harga_total) total 
                from penjualan_detail a
                left join master_barang b on a.kode_barang=b.kode_barang 
                where kategori='komputer'
                group by kategori, id_penjualan) b on a.id=b.id_penjualan 
            left join
                (select a.id_penjualan, b.kategori ,sum(harga_total) total 
                from penjualan_detail a
                left join master_barang b on a.kode_barang=b.kode_barang 
                where kategori='handphone'
                group by kategori, id_penjualan) c on a.id=c.id_penjualan 
            order by tanggal_penjualan "
        );

			$stmt -> execute();

			return $stmt -> fetchAll();


		$stmt -> close();

		$stmt = null;

	}


    /*=============================================
	TAMPILAN PENJUALAN TERAKHIR
	=============================================*/

	static public function mdlShowPenjualanTerakhir(){

		
        $stmt = Connection::connect()->prepare(" 
        select id, nama_konsumen, alamat, tanggal_penjualan, format(total,0,'de_DE')total 
        from penjualan a left join 
            (select id_penjualan, sum(harga_total) total from penjualan_detail
            group by id_penjualan) b on a.id=b.id_penjualan
        order by tanggal_penjualan desc limit 10
         "
        );

			$stmt -> execute();

			return $stmt -> fetchAll();


		$stmt -> close();

		$stmt = null;

	}
    

    static public function mdlShowPenjualan(){

		
        $stmt = Connection::connect()->prepare(" 
        select id, nama_konsumen, alamat, tanggal_penjualan, format(total,0,'de_DE')total , detail
        from penjualan a left join 
            (select id_penjualan, sum(harga_total) total from penjualan_detail
            group by id_penjualan) b on a.id=b.id_penjualan
            left join (select a.id_penjualan, GROUP_CONCAT(nama_barang ORDER BY nama_barang ASC SEPARATOR ', \n ') AS detail  from penjualan_detail a
        left join master_barang b on a.kode_barang=b.kode_barang
        group by a.id_penjualan) c on a.id=c.id_penjualan
         "
        );

			$stmt -> execute();

			return $stmt -> fetchAll();


		$stmt -> close();

		$stmt = null;

	}

}