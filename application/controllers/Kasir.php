<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MenuModel');
		$this->load->model('SemuaModel');
		$this->load->model('ProdukModel');
		$this->load->model('CartModel');
		// $this->load->model('SekolahModel');
		$this->load->helper('url');
		$this->load->library('session');


		// require_once APPPATH . 'third_party/vendor/mike42/autoloader.php';
		require APPPATH . 'third_party/vendor/autoload.php';
	}

	public function index()
	{
		$sess =  $this->session->userdata('user_session');
		if ($sess == null) {

			redirect('Kasir/Login', 'refresh');
		}
		$id_user =  $this->session->userdata('id_kasir');
		// var_dump($id_user);die;
		$data['konten'] = $this->SemuaModel->getSeting();
		$data['slider'] = $this->SemuaModel->getSlider();

		$cart = $this->CartModel->getCart($id_user);
		$data['totalcart'] = count($cart);
		$d = 0;
		foreach ($cart as $da) {
			$d += $da->total;
		}
		$totalHarga = $d;
		$data['totalHarga'] = $d;
		$this->load->view('Kasir/headers', $data);
		$this->load->view('Kasir/index', $data);
		$this->load->view('Kasir/footer', $data);
	}
	public function getProduk()
	{
		$id_kategori = $this->input->post('id_kategori', true);
		$page = $this->input->post('page', true);

		$hasil = "";
		$hasil = $this->ProdukModel->getProdukByIdTipeProduk($id_kategori, $page);
		$data = array();
		$status = false;
		if (count($hasil) > 0) {
			$status = true;
			$data = $hasil;
		}
		echo json_encode(array(
			'status' => $status,
			'data' => $data
		));
	}
	public function login()
	{
		// var_dump($_SESSION);die;
		$this->load->view('Kasir/Login');
	}
	public function LoginAct()
	{
		$now  =  date("Y-m-d h:m:s");
		// var_dump($now);die;
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$data = $this->SemuaModel->getKasirByUNandPW($username, $password);
		if ($data == null) {
			$data = null;
			$pesan = "Username Dan Password salah!";
			$error =  true;
		} else {
			$data = $data;
			$pesan = "Selamat Datang Kasir";
			$error = false;

			$session = array(
				'user_session' => true,
				'id_kasir' => $data->id_kasir,
				'nama_kasir' => $data->nama_kasir,
			);
			$upd = array('last_login' => $now);
			$this->SemuaModel->EditData('kasir', 'id_kasir', $upd, $data->id_kasir);
			$this->session->set_userdata($session);
		}
		echo json_encode(array(
			'error' => $error,
			'data' => $data,
			'pesan' => $pesan
		));

		# code...
	}
	public function logout()
	{

		$this->session->sess_destroy();

		$error = false;
		$pesan = " berhasil kerluar";

		echo json_encode(array(
			'error' => $error,
			'pesan' => $pesan
		));
	}
	public function print($id = 0)
	{
		$data['Data'] = $this->SemuaModel->getDataTransaksiById($id);
		$data['getData'] = $this->SemuaModel->getDataFromDetTranAndPro($id);
		$data['konten'] = $this->SemuaModel->getSeting();
		$kodeTransaksi = $data['Data']->kode_transaksi;

		// $this->load->view('Kasir/headers', $data);
		// $this->load->view('keranjang/selesai');

		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Prin$kodeTransaksi.pdf";

		$this->pdf->load_view('Kasir/print', $data);
		$this->load->view('Kasir/print', $data);
	}
	public function printPos($id = 0)
	{
		$data['Data'] = $this->SemuaModel->getDataTransaksiById($id);
		$data['getData'] = $this->SemuaModel->getDataFromDetTranAndPro($id);
		$data['konten'] = $this->SemuaModel->getSeting();
		// $this->load->view('Kasir/headers', $data);
		// $this->load->view('keranjang/selesai');
		$kodeTransaksi = $data['Data']->kode_transaksi;
		$this->load->library('pdf');
		// $this->pdf->setPaper('A', 'potrait');
		$this->pdf->filename = "PrinPos$kodeTransaksi.pdf";
		$this->pdf->load_view('Kasir/printPos', $data);
		// $this->load->view('Kasir/printPos', $data);
	}
	public function printesc($id = 0)
	{
		$this->load->library('escpos');

		// membuat connector printer ke shared printer bernama "printer_a" (yang telah disetting sebelumnya)
		$connector = new Escpos\PrintConnectors\WindowsPrintConnector("hasan");

		// membuat objek $printer agar dapat di lakukan fungsinya
		$printer = new Escpos\Printer($connector);


		/* ---------------------------------------------------------
	 * Teks biasa | text()
	 */
		$printer->initialize();
		$printer->text("Ini teks biasa \n");
		$printer->text("\n");

		/* ---------------------------------------------------------
	 * Select print mode | selectPrintMode()
	 */
		// Printer::MODE_FONT_A
		$printer->initialize();
		$printer->selectPrintMode(Escpos\Printer::MODE_FONT_A);
		$printer->text("teks dengan MODE_FONT_A \n");
		$printer->text("\n");

		// Printer::MODE_FONT_B
		$printer->initialize();
		$printer->selectPrintMode(Escpos\Printer::MODE_FONT_B);
		$printer->text("teks dengan MODE_FONT_B \n");
		$printer->text("\n");

		// Printer::MODE_EMPHASIZED
		$printer->initialize();
		$printer->selectPrintMode(Escpos\Printer::MODE_EMPHASIZED);
		$printer->text("teks dengan MODE_EMPHASIZED \n");
		$printer->text("\n");

		// Printer::MODE_DOUBLE_HEIGHT
		$printer->initialize();
		$printer->selectPrintMode(Escpos\Printer::MODE_DOUBLE_HEIGHT);
		$printer->text("teks dengan MODE_DOUBLE_HEIGHT \n");
		$printer->text("\n");

		// Printer::MODE_DOUBLE_WIDTH
		$printer->initialize();
		$printer->selectPrintMode(Escpos\Printer::MODE_DOUBLE_WIDTH);
		$printer->text("teks dengan MODE_DOUBLE_WIDTH \n");
		$printer->text("\n");

		// Printer::MODE_UNDERLINE
		$printer->initialize();
		$printer->selectPrintMode(Escpos\Printer::MODE_UNDERLINE);
		$printer->text("teks dengan MODE_UNDERLINE \n");
		$printer->text("\n");


		/* ---------------------------------------------------------
	 * Teks dengan garis bawah  | setUnderline()
	 */
		$printer->initialize();
		$printer->setUnderline(Escpos\Printer::UNDERLINE_DOUBLE);
		$printer->text("Ini teks dengan garis bawah \n");
		$printer->text("\n");

		/* ---------------------------------------------------------
	 * Rata kiri, tengah, dan kanan (JUSTIFICATION) | setJustification()
	 */
		// Teks rata kiri JUSTIFY_LEFT
		$printer->initialize();
		$printer->setJustification(Escpos\Printer::JUSTIFY_LEFT);
		$printer->text("Ini teks rata kiri \n");
		$printer->text("\n");

		// Teks rata tengah JUSTIFY_CENTER
		$printer->initialize();
		$printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
		$printer->text("Ini teks rata tengah \n");
		$printer->text("\n");

		// Teks rata kanan JUSTIFY_RIGHT
		$printer->initialize();
		$printer->setJustification(Escpos\Printer::JUSTIFY_RIGHT);
		$printer->text("Ini teks rata kanan \n");
		$printer->text("\n");


		/* ---------------------------------------------------------
	 * Font A, B dan C | setFont()
	 */
		// Teks dengan font A
		$printer->initialize();
		$printer->setFont(Escpos\Printer::FONT_A);
		$printer->text("Ini teks dengan font A \n");
		$printer->text("\n");

		// Teks dengan font B
		$printer->initialize();
		$printer->setFont(Escpos\Printer::FONT_B);
		$printer->text("Ini teks dengan font B \n");
		$printer->text("\n");

		// Teks dengan font C
		$printer->initialize();
		$printer->setFont(Escpos\Printer::FONT_C);
		$printer->text("Ini teks dengan font C \n");
		$printer->text("\n");

		/* ---------------------------------------------------------
	 * Jarak perbaris 40 (linespace) | setLineSpacing()
	 */
		$printer->initialize();
		$printer->setLineSpacing(40);
		$printer->text("Ini paragraf dengan \nline spacing sebesar 40 \ndi printer dotmatrix \n");
		$printer->text("\n");

		/* ---------------------------------------------------------
	 * Jarak dari kiri (Margin Left) | setPrintLeftMargin()
	 */
		$printer->initialize();
		$printer->setPrintLeftMargin(10);
		$printer->text("Ini teks berjarak 10 dari kiri (Margin left) \n");
		$printer->text("\n");

		/* ---------------------------------------------------------
	 * membalik warna teks (background menjadi hitam) | setReverseColors()
	 */
		$printer->initialize();
		$printer->setReverseColors(TRUE);
		$printer->text("Warna Teks ini terbalik \n");
		$printer->text("\n");


		/* ---------------------------------------------------------
	 * Menyelesaikan printer
	 */
		$printer->feed(4); // mencetak 2 baris kosong, agar kertas terangkat ke atas
		$printer->cut();
		$printer->close();
	}
	public function buatBaris1Kolom($kolom1)
	{
		// Mengatur lebar setiap kolom (dalam satuan karakter)
		$lebar_kolom_1 = 35;

		// Melakukan wordwrap(), jadi jika karakter teks melebihi lebar kolom, ditambahkan \n 
		$kolom1 = wordwrap($kolom1, $lebar_kolom_1, "\n", true);

		// Merubah hasil wordwrap menjadi array, kolom yang memiliki 2 index array berarti memiliki 2 baris (kena wordwrap)
		$kolom1Array = explode("\n", $kolom1);

		// Mengambil jumlah baris terbanyak dari kolom-kolom untuk dijadikan titik akhir perulangan
		$jmlBarisTerbanyak = count($kolom1Array);

		// Mendeklarasikan variabel untuk menampung kolom yang sudah di edit
		$hasilBaris = array();

		// Melakukan perulangan setiap baris (yang dibentuk wordwrap), untuk menggabungkan setiap kolom menjadi 1 baris 
		for ($i = 0; $i < $jmlBarisTerbanyak; $i++) {

			// memberikan spasi di setiap cell berdasarkan lebar kolom yang ditentukan, 
			$hasilKolom1 = str_pad((isset($kolom1Array[$i]) ? $kolom1Array[$i] : ""), $lebar_kolom_1, " ");

			// Menggabungkan kolom tersebut menjadi 1 baris dan ditampung ke variabel hasil (ada 1 spasi disetiap kolom)
			$hasilBaris[] = $hasilKolom1;
		}

		// Hasil yang berupa array, disatukan kembali menjadi string dan tambahkan \n disetiap barisnya.
		return implode($hasilBaris, "\n") . "\n";
	}
	public function buatBaris3Kolom($kolom1, $kolom2, $kolom3)
	{
		// Mengatur lebar setiap kolom (dalam satuan karakter)
		$lebar_kolom_1 = 11;
		$lebar_kolom_2 = 11;
		$lebar_kolom_3 = 11;

		// Melakukan wordwrap(), jadi jika karakter teks melebihi lebar kolom, ditambahkan \n 
		$kolom1 = wordwrap($kolom1, $lebar_kolom_1, "\n", true);
		$kolom2 = wordwrap($kolom2, $lebar_kolom_2, "\n", true);
		$kolom3 = wordwrap($kolom3, $lebar_kolom_3, "\n", true);

		// Merubah hasil wordwrap menjadi array, kolom yang memiliki 2 index array berarti memiliki 2 baris (kena wordwrap)
		$kolom1Array = explode("\n", $kolom1);
		$kolom2Array = explode("\n", $kolom2);
		$kolom3Array = explode("\n", $kolom3);

		// Mengambil jumlah baris terbanyak dari kolom-kolom untuk dijadikan titik akhir perulangan
		$jmlBarisTerbanyak = max(count($kolom1Array), count($kolom2Array), count($kolom3Array));

		// Mendeklarasikan variabel untuk menampung kolom yang sudah di edit
		$hasilBaris = array();

		// Melakukan perulangan setiap baris (yang dibentuk wordwrap), untuk menggabungkan setiap kolom menjadi 1 baris 
		for ($i = 0; $i < $jmlBarisTerbanyak; $i++) {

			// memberikan spasi di setiap cell berdasarkan lebar kolom yang ditentukan, 
			$hasilKolom1 = str_pad((isset($kolom1Array[$i]) ? $kolom1Array[$i] : ""), $lebar_kolom_1, " ");
			// memberikan rata kanan pada kolom 3 dan 4 karena akan kita gunakan untuk harga dan total harga
			$hasilKolom2 = str_pad((isset($kolom2Array[$i]) ? $kolom2Array[$i] : ""), $lebar_kolom_2, " ", STR_PAD_LEFT);

			$hasilKolom3 = str_pad((isset($kolom3Array[$i]) ? $kolom3Array[$i] : ""), $lebar_kolom_3, " ", STR_PAD_LEFT);

			// Menggabungkan kolom tersebut menjadi 1 baris dan ditampung ke variabel hasil (ada 1 spasi disetiap kolom)
			$hasilBaris[] = $hasilKolom1 . " " . $hasilKolom2 . " " . $hasilKolom3;
		}

		// Hasil yang berupa array, disatukan kembali menjadi string dan tambahkan \n disetiap barisnya.
		return implode($hasilBaris, "\n") . "\n";
	}
	function buatBaris4Kolom($kolom1, $kolom2, $kolom3, $kolom4) {
		// Mengatur lebar setiap kolom (dalam satuan karakter)
		$lebar_kolom_1 = 10;
		$lebar_kolom_2 = 4;
		$lebar_kolom_3 = 6;
		$lebar_kolom_4 = 8;

		// Melakukan wordwrap(), jadi jika karakter teks melebihi lebar kolom, ditambahkan \n 
		$kolom1 = wordwrap($kolom1, $lebar_kolom_1, "\n", true);
		$kolom2 = wordwrap($kolom2, $lebar_kolom_2, "\n", true);
		$kolom3 = wordwrap($kolom3, $lebar_kolom_3, "\n", true);
		$kolom4 = wordwrap($kolom4, $lebar_kolom_4, "\n", true);

		// Merubah hasil wordwrap menjadi array, kolom yang memiliki 2 index array berarti memiliki 2 baris (kena wordwrap)
		$kolom1Array = explode("\n", $kolom1);
		$kolom2Array = explode("\n", $kolom2);
		$kolom3Array = explode("\n", $kolom3);
		$kolom4Array = explode("\n", $kolom4);

		// Mengambil jumlah baris terbanyak dari kolom-kolom untuk dijadikan titik akhir perulangan
		$jmlBarisTerbanyak = max(count($kolom1Array), count($kolom2Array), count($kolom3Array), count($kolom4Array));

		// Mendeklarasikan variabel untuk menampung kolom yang sudah di edit
		$hasilBaris = array();

		// Melakukan perulangan setiap baris (yang dibentuk wordwrap), untuk menggabungkan setiap kolom menjadi 1 baris 
		for ($i = 0; $i < $jmlBarisTerbanyak; $i++) {

			// memberikan spasi di setiap cell berdasarkan lebar kolom yang ditentukan, 
			$hasilKolom1 = str_pad((isset($kolom1Array[$i]) ? $kolom1Array[$i] : ""), $lebar_kolom_1, " ");
			$hasilKolom2 = str_pad((isset($kolom2Array[$i]) ? $kolom2Array[$i] : ""), $lebar_kolom_2, " ");

			// memberikan rata kanan pada kolom 3 dan 4 karena akan kita gunakan untuk harga dan total harga
			$hasilKolom3 = str_pad((isset($kolom3Array[$i]) ? $kolom3Array[$i] : ""), $lebar_kolom_3, " ", STR_PAD_LEFT);
			$hasilKolom4 = str_pad((isset($kolom4Array[$i]) ? $kolom4Array[$i] : ""), $lebar_kolom_4, " ", STR_PAD_LEFT);

			// Menggabungkan kolom tersebut menjadi 1 baris dan ditampung ke variabel hasil (ada 1 spasi disetiap kolom)
			$hasilBaris[] = $hasilKolom1 . " " . $hasilKolom2 . " " . $hasilKolom3 . " " . $hasilKolom4;
		}

		// Hasil yang berupa array, disatukan kembali menjadi string dan tambahkan \n disetiap barisnya.
		return implode($hasilBaris, "\n") . "\n";
	}   

	public function printContoh($id = 0)
	{
		$data['Data'] = $this->SemuaModel->getDataTransaksiById($id);
		$data['getData'] = $this->SemuaModel->getDataFromDetTranAndPro($id);
		
		$data['konten'] = $this->SemuaModel->getSeting();
		$kodeTransaksi = $data['Data']->kode_transaksi;

		$nama_toko = $data['konten'][0]->isi;
		$email = $data['konten'][1]->isi;
		$telp = $data['konten'][2]->isi;
		$waktu = $data['Data']->created_at;
		$harga_total = $data['Data']->harga_total;
		

		$this->load->library('escpos');
		$connector = new Escpos\PrintConnectors\WindowsPrintConnector("pos58");
		$printer = new Escpos\Printer($connector);


		$printer->initialize();
        $printer->selectPrintMode(Escpos\Printer::MODE_DOUBLE_HEIGHT); // Setting teks menjadi lebih besar
        $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER); // Setting teks menjadi rata tengah
        $printer->text("$nama_toko\n");
        $printer->text("\n");
 
        // Data transaksi
        $printer->initialize();
        $printer->text("Kode : $kodeTransaksi\n");
        $printer->text("Alamat : $email\n");
        $printer->text("Telp. : $telp\n");
        $printer->text("Waktu : $waktu\n");
 
        // Membuat tabel
        $printer->initialize(); // Reset bentuk/jenis teks
        $printer->text("----------------------------\n");
		$printer->text($this->buatBaris4Kolom("Barang", "qty", "Harga", "Subtotal"));
		foreach ($data['getData'] as $key => $v) {
			
			$printer->text($this->buatBaris4Kolom("$v->nama_menu", $v->qty, $v->harga, $v->total));
			
		}
        $printer->text("----------------------------\n");


        $printer->text("----------------------------\n");
        $printer->text($this->buatBaris4Kolom('Total', '', "",$harga_total));
        $printer->text("\n");
 
         // Pesan penutup
        $printer->initialize();
        $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
        $printer->text("Terima kasih telah berbelanja\n");
        $printer->text("-Start System Group-\n");
 
        $printer->feed(5); // mencetak 5 baris kosong agar terangkat (pemotong kertas saya memiliki jarak 5 baris dari toner)
        $printer->close();

	}
}
        
    /* End of file  Kasir.php */
