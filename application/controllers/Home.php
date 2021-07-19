<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function index()
    {
        $indo = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'),true);
        $prov = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'),true);

        $data = array(
            'title' => 'perkembangan covid-19 di indonesia',
            'indo' => $indo,
            'prov' =>$prov,
            'isi' => 'v_home',
        );
        $this ->load->view('layout/v_wrapper',$data, FALSE);
    }

        public function global(){
            $global = json_decode(file_get_contents('https://api.kawalcorona.com/'),true);
            $positif = json_decode(file_get_contents('https://api.kawalcorona.com/positif'),true);
            $sembuh = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'),true);
            $meninggal = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'),true);
            $data = array(
                'title' => 'perkembangan covid-19 secara global ',
                'global' => $global,
                'positif' => $positif,
                'sembuh' => $sembuh,
                'meninggal' => $meninggal,
                'isi' => 'v_global',
            );
            $this ->load->view('layout/v_wrapper',$data, FALSE);
        }

    public function pemetaan(){
        $lokasi = json_decode(file_get_contents('https://api.kawalcorona.com/'),true);
        $data = array(
            'title' => 'perkembangan covid-19 secara global ',
            'lokasi' => $lokasi,
            'isi' => 'v_pemetaan',
        );
        $this ->load->view('layout/v_wrapper',$data, FALSE);


    }
}

/* End of file home.php */

?>