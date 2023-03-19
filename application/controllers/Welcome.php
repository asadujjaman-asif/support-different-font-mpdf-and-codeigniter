<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function banglaMpdf(){
        $filename = "bangla-font-".date("Y-m-d_H_i");
        $mpdf = new \Mpdf\Mpdf(
        [
            'default_font' => 'bangla',
            'mode' => 'utf-8'
        ]);
        $html = $this->load->view('pdf/genarate_pdf',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output($filename.".pdf", 'D');

    }
    public function arabicMpdf(){
        $filename = "arabic-font-".date("Y-m-d_H_i");
        $mpdf = new \Mpdf\Mpdf(
        [
            'default_font' => 'arabic',
            'mode' => 'utf-8'
        ]);
        $html = $this->load->view('pdf/arabic',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output($filename.".pdf", 'D');

    }
    public function englishMpdf(){
        $filename = "enalish-font-".date("Y-m-d_H_i");
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('pdf/enalish',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output($filename.".pdf", 'D');

    }
    public function japaneseMpdf(){
        $filename = "japanese-font-".date("Y-m-d_H_i");
        $mpdf = new \Mpdf\Mpdf(
        [
            'default_font' => 'japanese',
            'mode' => 'utf-8'
        ]);
        $html = $this->load->view('pdf/japanese',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output($filename.".pdf", 'D');

    }
}
