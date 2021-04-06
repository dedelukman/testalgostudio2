/*====================================
=            sidebar menu            =
====================================*/

// $('.sidebar-menu').tree();

/*=====  End of sidebar menu  ======*/


/*=================================
=            datatable            =
=================================*/

$('.tables').dataTable({
	"language" : {
   "sProcessing":   "Sedang proses...",
   "sLengthMenu":   "Tampilan _MENU_ entri",
   "sZeroRecords":  "Tidak ditemukan data yang sesuai",
   "sInfo":         "Tampilan _START_ sampai _END_ dari _TOTAL_ entri",
   "sInfoEmpty":    "Tampilan 0 hingga 0 dari 0 entri",
   "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
   "sInfoPostFix":  "",
   "sSearch":       "Cari:",
   "sUrl":          "",
   "oPaginate": {
       "sFirst":    "Awal",
       "sPrevious": "Balik",
       "sNext":     "Lanjut",
       "sLast":     "Akhir"
   }
},
 "lengthMenu": [  10, 25, 50, 75, 100,500 ]
} );

$('.tableInfo').dataTable({
     "dom": 't'
} );











/*=====  End of datatable  ======*/
    
    
/*=================================
=            inputmask            =
=================================*/

//Datemask dd/mm/yyyy
$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
//Datemask2 mm/dd/yyyy
$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
//Money Euro
$('[data-mask]').inputmask()