<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Tanggal extends CI_Controller {
 
    /**
     | title : menjalankan helper fungsi tanggal indonesia
     | file : controller tanggal
     | by : faber nainggolan | g2tech | goolanz
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('fungsidate'); //kita load helper yang kita buat cukup hanya menuliskan nama depannya saja
    }
 
    public function index()
    {
        $tanggal1  = "20-03-2015"; //format tanggal mysql
        $tanggal2 = "1427174163"; //timestamp
 
        echo tgl_indo($tanggal1);
        echo"</br>";
        echo tgl_indo_timestamp($tanggal2);
    }
}
 
/* End of file tanggal.php */
/* Location: ./application/controllers/tanggal.php */
