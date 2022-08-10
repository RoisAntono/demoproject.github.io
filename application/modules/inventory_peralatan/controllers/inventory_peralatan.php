<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_peralatan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_inventory_peralatan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{

		$data = array(
			'namamodule' 	=> "inventory_peralatan",
			'namafileview' 	=> "V_inventory_peralatan",
			'tampil'		=> $this->m_inventory_peralatan->tampil(),
			'totalaset'		=> $this->m_inventory_peralatan->totalaset(),
			'totalasetrusak'	=> $this->m_inventory_peralatan->totalasetrusak(),
			'totalasetkurangbaik'		=> $this->m_inventory_peralatan->totalasetkurangbaik(),

			'totalnilaiaset'		=> $this->m_inventory_peralatan->totalnilaiaset(),
			'totalnilaiasetrusak'		=> $this->m_inventory_peralatan->totalnilaiasetrusak(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// index
	function tambahview()
	{

	
		$data = array(
			'namamodule' 	=> "inventory_peralatan",
			'namafileview' 	=> "V_inventory_tambah",
			'getmerk'		=> $this->m_inventory_peralatan->getmerk(),
			'getruang'		=> $this->m_inventory_peralatan->getruang(),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{
		$this->m_inventory_peralatan->tambah();
		redirect('inventory_peralatan');
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "inventory_peralatan",
			'namafileview' 	=> "V_inventory_edit",
			'tampil'		=> $this->m_inventory_peralatan->tampiledit($id),
			'getmerk'		=> $this->m_inventory_peralatan->getmerk(),
			'getruang'		=> $this->m_inventory_peralatan->getruang(),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function edit()
	{
		$this->m_inventory_peralatan->edit();
		redirect('inventory_peralatan');
	}

	
	function hapus()
	{
		$this->m_inventory_peralatan->hapus();
		redirect('inventory_peralatan');
	}
	

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_sekolah",
			'namafileview' 	=> "V_data_sekolah",
			'tampil'		=> $this->m_data_sekolah->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	 function fetch()
		 {
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->m_inventory_peralatan->fetch_data($query);
		  $output .= '


		  <div class="table-responsive">
		     <table class="table table-bordered table-striped">
		      <tr>
		       <th>Kode Kategori</th>
		       <th>Nama Kategori</th>
		       <th>Opsi</th>
		      </tr>
		  ';
		  if($data->num_rows() > 0)
		  {
		   foreach($data->result() as $row)
		   {
		    $output .= '


		      <tr>
		       <td class="nr">'.$row->kode_kat_inventory.'</td>
		       <td class="pr">'.$row->nama_kat_inventory.'</td>
		       <td><button type="button" class="btn btn-primary use-kode"  data-dismiss="modal">
                                            <i class="fa fa-plus fa-w-16 use-button" ></i>
                                        </button></td>
		      </tr>

			<script>
		     $(".use-kode").click(function() {
			    var $row = $(this).closest("tr");    // Find the row
			    var $text = $row.find(".nr").text(); // Find the text
			     var $text2 = $row.find(".pr").text(); // Find the text
			    document.getElementById("kodekat").value = $text;
			    document.getElementById("katname").value = $text2;
		});
				</script>
		    ';
		   }
		  }
		  else
		  {
		   $output .= '<tr>
		       <td colspan="5">Data Tidak Ditemukan</td>
		      </tr>';
		  }
		  $output .= '</table>';
		  echo $output;
		 }



		   public function export(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('SIMRS Bangil')
                 ->setLastModifiedBy('My Notes Code')
                 ->setTitle("Data Peralatan ")
                 ->setSubject("Peralatan dan mesin")
                 ->setDescription("Laporan Semua Data Peralatan dan Mesin")
                 ->setKeywords("Data Peralatan");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA SISWA"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $excel->getActiveSheet()->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "KODE BARANG"); 
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "KATEGORI"); 
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "MERK"); 
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "TIPE"); 
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "UKURAN / CC");
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "BAHAN");
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "NO. PABRIK");
    $excel->setActiveSheetIndex(0)->setCellValue('I3', "NO. RANGKA");
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "NO. MESIN");
    $excel->setActiveSheetIndex(0)->setCellValue('K3', "NO. POLISI");
    $excel->setActiveSheetIndex(0)->setCellValue('L3', "NO. BPKB");
    $excel->setActiveSheetIndex(0)->setCellValue('M3', "TGL. PEROLEHAN");
    $excel->setActiveSheetIndex(0)->setCellValue('N3', "TGL. PEMBUKUAN");
    $excel->setActiveSheetIndex(0)->setCellValue('O3', "ASAL USUL");
    $excel->setActiveSheetIndex(0)->setCellValue('P3', "KONDISI");
    $excel->setActiveSheetIndex(0)->setCellValue('Q3', "KETERANGAN");
    $excel->setActiveSheetIndex(0)->setCellValue('R3', "NILAI ");
    $excel->setActiveSheetIndex(0)->setCellValue('S3', "RUANG");
    $excel->setActiveSheetIndex(0)->setCellValue('T3', "BEBAN");
    $excel->setActiveSheetIndex(0)->setCellValue('U3', "AKUMULASI");
    $excel->setActiveSheetIndex(0)->setCellValue('V3', "NILAI BUKU");
    $excel->setActiveSheetIndex(0)->setCellValue('W3', "SISA USIA MANFAAT");

    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('V3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('W3')->applyFromArray($style_col);
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $peralatanX = $this->m_inventory_peralatan->tampil();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($peralatanX as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->kode_barang);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->kategori);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->nama_merk);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->tipe);
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->ukuran);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->bahan);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->nopabrik);
      $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->norangka);
      $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->nomesin);
      $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->nopolisi);
      $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->nobpkb);
      $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->tgl_oleh);
      $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->tgl_buku);
      $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data->asal);
      $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data->kondisi);
      $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data->keterangan);
      $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data->nilai);
      $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data->nama_room);
      $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data->beban);
      $excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data->akumulasi);
      $excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $data->nilaibuku);
      $excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data->sisausia);
      
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);

      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(30); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(30); // Set width kolom G
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(30); // Set width kolom H
    $excel->getActiveSheet()->getColumnDimension('I')->setWidth(30); // Set width kolom I
    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(30); // Set width kolom J
    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(30); // Set width kolom K
    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(30); // Set width kolom L
    $excel->getActiveSheet()->getColumnDimension('M')->setWidth(30); // Set width kolom M
    $excel->getActiveSheet()->getColumnDimension('N')->setWidth(30); // Set width kolom N
    $excel->getActiveSheet()->getColumnDimension('O')->setWidth(30); // Set width kolom O
    $excel->getActiveSheet()->getColumnDimension('P')->setWidth(30); // Set width kolom P
    $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30); // Set width kolom Q
    $excel->getActiveSheet()->getColumnDimension('R')->setWidth(30); // Set width kolom R
    $excel->getActiveSheet()->getColumnDimension('S')->setWidth(30); // Set width kolom S
    $excel->getActiveSheet()->getColumnDimension('T')->setWidth(30); // Set width kolom T
    $excel->getActiveSheet()->getColumnDimension('U')->setWidth(30); // Set width kolom U
    $excel->getActiveSheet()->getColumnDimension('V')->setWidth(30); // Set width kolom V
    $excel->getActiveSheet()->getColumnDimension('W')->setWidth(30); // Set width kolom W
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Laporan data Peralatan");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data Peralatan dan mesin.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }
	
}
 