<?php
	/**
	 * PHP Code Snippet
	 * Convert Number to Rupiah & vice versa
	 * https://gist.github.com/845309
	 *
	 * Copyright 2011-2012, Faisalman
	 * Licensed under The MIT License
	 * http://www.opensource.org/licenses/mit-license 	 
	 */
	 	 
	/**	 
	 *
	 * @param integer $angka number
	 * @return string
	 *
	 * Usage example:
	 * echo convert_to_rupiah(10000000); -> "Rp. 10.000.000"	 
	 */ 
	function convert_to_rupiah($angka,$rp=true)
	{
		if($rp){

			return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
		}else{
			return strrev(implode('.',str_split(strrev(strval($angka)),3)));

		}
	}
	function rupiah($rp){
 
		return 'Rp. ' . number_format($rp);
	}
	/**
	 *
	 * @param string $rupiah
	 * @return integer
	 *
	 * Usage example:
	 * echo convert_to_number("Rp. 10.000.123,00"); -> 10000123
	 */		 
	// function convert_to_number($rupiah)
	// {
	// 	return intval(preg_replace(/,.*|[^0-9]/, '', $rupiah));
	// }

	function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = penyebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}
 
	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim(penyebut($nilai));
		} else {
			$hasil = trim(penyebut($nilai));
		}     		
		return $hasil;
	}
	
?>