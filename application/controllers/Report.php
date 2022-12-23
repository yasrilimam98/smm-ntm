<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login()) {
            redirect('Auth');
        }
        $this->user_id = $this->session->userdata('user_id');
    }
    public function hutang()
    {
        $this->template->views('report/hutang');
    }
    public function reportMutasiGudang()
    {
        $data['title'] = 'Report Gudang';
        $this->template->views('report/mutasi_gudang', $data);
    }
    public function reportOpname()
    {
        $data['title'] = 'Report Opname';
        $this->template->views('report/opname', $data);
    }
    public function exportLaporanGudang()
    {
        $item_id = $this->input->get('item_id');
        $date_start = $this->input->get('date_start');
        $date_end = $this->input->get('date_end');
        $url = "Api_Warehouse/mutasiStock?item_id=" . $item_id . "&date_start=" . $date_start . "&date_end=" . $date_end . "";
        $main = json_decode(file_get_contents(api_url($url)), true);
        $body = $main['data'];
        $huruf = range('A', 'Z');
        $extension = 'xlsx';
        $fileName = 'Report Gudang';
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        for ($j = 0; $j < count($huruf); $j++) {
            if (!empty($header[$j])) {
                $sheet->setCellValue($huruf[$j] . '1', $header[$j]);
            }
        }
        $rowCount = 2;
        for ($k = 0; $k < count($body); $k++) {
            for ($m = 0; $m < count($huruf); $m++) {
                if (!empty($header[$m])) {
                    $sheet->setCellValue($huruf[$m] . $rowCount, $body[$k][$header[$m]]);
                }
            }
            $rowCount++;
        }


        $date_time = date('Y-m-d H:i:s');
        $epoch = strtotime($date_time);

        $writer = new Xlsx($spreadsheet);
        $filename = 'report_petty_cash_' . $epoch;

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
