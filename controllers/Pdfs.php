
<?php
/**
 * Description of Pdfs Controller
 *
 * @author Web Preparations Team
 *
 * @email  webpreparations@gmail.com
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Pdfs extends CI_Controller {
	// construct
    public function __construct() {
        parent::__construct();
		// load model
        $this->load->model('Pdf', 'pdf');
    }    
	 // show mobiles data
    public function index() {
    	//echo 'hi'; die;
        $data['page'] = 'export-pdf';
        $data['title'] = 'Export PDF data | Web Preparations';
        $data['mobiledata'] = $this->pdf->mobileList();

        //var_dump($data);die;
		// load view file for output
        //$this->load->view('header');
        //$this->load->view('pdf/pdf', $data);


         	


        $showdata = [];
        //$data['mobiledata'] = $this->pdf->mobileList();
        $html = $this->load->view('pdf/pdf', $data);
        $pdfFilePath = "download_pdf.pdf";
       // $this->load->view('mpdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $this->m_pdf->pdf->Ourput($pdfFilePath,"D");


        exit();








       // $this->load->view('footer');
    }
 
// for generate pdf
	public function save_pdf()
	{ 
		//load mPDF library
		$this->load->library('M_pdf'); 
		//now pass the data//
		$data['mobiledata'] = $this->pdf->mobileList();
		$html=$this->load->view('pdf/pdf',$data, true); //load the pdf.php by passing our data and get all data in $html varriable.
		$pdfFilePath ="webpreparations-".time().".pdf";	
		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->m_pdf->load();

		//var_dump($pdf);
        $pdf = preg_replace_callback(
    "/\{([<>])([a-zA-Z0-9_]*)(\?{0,1})([a-zA-Z0-9_]*)\}(.*)\{\\1\/\\2\}/isU",
    function($pdf) { return CallFunction($m[1], $m[2], $m[3], $m[4], $m[5]); },
    $result
);

		//generate the PDF!
		//$stylesheet = '<style>'.file_get_contents('pdfassets/css/bootstrap.min.css').'</style>';
		// apply external css
		$pdf->WriteHTML($stylesheet,1);
		$pdf->WriteHTML($pdf);
		$mpdf->Output($destDir.DS.$pdfName.'.pdf', 'F');
		//$pdf->WriteHTML($html,2);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		//$pdf->Output($pdfFilePath, "D");
		exit;
	}
	
}
?>