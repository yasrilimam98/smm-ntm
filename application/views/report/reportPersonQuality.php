<style>
    html {
        scroll-behavior: smooth;
    }

    #overlay {
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 999999;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        display: none;
    }

    .nominal {
        text-align: right;
    }

    .text-grey {
        color: #D8D9CF;
    }

    .text-dark-grey {
        color: #B2B2B2;
    }

    .bg-grey {
        background-color: #EDEDED;
        color: #B2B2B2;
    }

    .bg-light-grey {
        background-color: #FAF7F0;
    }

    .text-random {
        color: #425F57;
    }

    .bg-random {
        background-color: #425F57;
    }

    .card-hoper:hover {
        background-color: #F7F7F7;
    }

    input.bawahaja {
        outline: 0;
        border-width: 0 0 2px;
        border-color: #00ABB3;
    }

    #profileImage {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgb(25, 128, 194);
        background: linear-gradient(66deg, rgba(25, 128, 194, 1) 0%, rgba(215, 15, 232, 1) 100%);
        font-size: 15px;
        color: #fff;
        text-align: center;
        padding: 2px;
        line-height: 39px;
        vertical-align: middle;
        margin: 0 auto;
    }

    .dots-lead {
        display: flex;
    }

    .dots-lead::after {
        background-image: radial-gradient(circle, currentcolor 1px, transparent 1.5px);
        background-position: bottom;
        background-size: 1ex 4.5px;
        background-repeat: space no-repeat;
        content: "";
        flex-grow: 1;
        height: 1em;
        order: 2;
    }

    .gambar-miring {
        -ms-transform: rotate(20deg);
        /* IE 9 */
        transform: rotate(20deg);
        opacity: 0.3;
    }

    .litepicker .container__months .month-item {
        box-sizing: content-box !important;
        width: 280px !important;
    }

    .container__months {
        width: 280px !important;
    }

    .small-text {
        font-size: 11px;
    }

    .super-small-text {
        font-size: 9px;
    }

    .bg-super-grey {
        background-color: #F7F7F7;
    }

    .is-select-picker {
        background-color: white !important;
        border: 1px solid #c5ccd6 !important;
        text-align: left !important;
    }

    .formFilter {
        border-radius: 20px;
        width: 200px;
        padding-left: 30px;
        padding: 10px;
        padding-right: 45px;
    }

    .is-select-picker {
        border-radius: 20px !important;
        width: 200px !important;
        padding-left: 30px !important;
        padding: 10px !important;
        padding-right: 45px !important;
    }

    .border-radius-20 {
        border-radius: 20px;
    }

    #tableDetail_length,
    #tableDetail_info {
        display: none;
    }

    .dataTables_filter {
        margin-bottom: 10px;
    }

    .dataTables_wrapper .dataTables_paginate {
        float: none;
        text-align: center;
    }

    table {
        border-collapse: initial !important;
        /* Don't collapse */
        border-spacing: 0px !important;
        border: 1px solid #dce0e6 !important;
    }

    .bs-actionsbox {
        float: none !important;
    }

    .bs-actionsbox .btn-group button {
        font-size: 10px !important;
        margin-bottom: 5px;
    }

    .actions-btn {
        background-color: transparent;
        border: 1px solid #c5ccd6;
        border-radius: 20px !important;
    }

    .actions-btn:hover {
        background-color: #c5ccd6;
        color: white;
    }
</style>
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>


<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark pb-10">
        <div class="container-xl px-4 mb-5">
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10">
        <div class="row justify-content-center mb-2">
            <div class="col pb-2">
                <h1 class="text-dark fw-bolder m-0" style="font-weight: 900 !important">REPORT PERSON QUALITY</h1>
                <p class="m-0 small" id="dateRangeString">-</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto">
                                <p class="fw-bolder small-text m-0">Tanggal</p>
                                <input class="form-select form-select-sm datepicker formFilter" type="text" id="dateRange" placeholder="Tanggal Mulai" autocomplete="off">
                            </div>
                            <div class="col-auto ps-0">
                                <p class="fw-bolder small-text m-0">Machine</p>
                                <select class="selectpicker w-100" multiple data-live-search="true" data-actions-box="true" data-selected-text-format="count > 1" id="selectMachine" title="Pilih Mesin" onchange="arrangeVariable()">
                                </select>
                            </div>
                            <div class="col-auto p-0 d-flex align-items-end">
                                <button type="button" class="btn btn-primary btn-sm btnSimpan" style="border-radius: 20px;padding: 10px;" onclick="simpanData()">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-flex align-items-end">
                        <div class="dropdown">
                            <button class="btn btn-outline-primary btn-sm dropdown-toggle border-radius-20 shadow-none small-text btnSimpan" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="fa fa-download me-2"></span>Downloads
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <!-- <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('pdf',0)">PDF (Raw)</a></li> -->
                                <!-- <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('pdf',1)">PDF (Formatted)</a></li> -->
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('excel',0)">Excel</a></li>
                                <!-- <li><a class="dropdown-item" href="javascript:void(0);" onclick="cetakReport('pdf',0)">PDF</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-2">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body">
                        <p class="fw-bolder m-0">Detail</p>
                        <div class="table-responsible" id="dataTable">

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow-none border-radius-20">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="modal" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader">

            </div>
            <div class="modal-body" id="modalBody">

            </div>
            <div class="modal-footer" id="modalFooter">

            </div>
        </div>
    </div>
</div>

<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<!-- autocomplete -->
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/bootstrap-multiselect/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script>
    function notFoundReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/nodata.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function empty(location, text, height = null) {
        if (!height) {
            height = '100%'
        }
        $(location).html('<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyReturn(text, height = null) {
        if (!height) {
            height = '100%'
        }
        var html = '<div class="row"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:' + height + ';"><div class="card-body h-100 p-5 m-5"><lottie-player style="margin:auto;width: 200px; height: 100%;" src="<?= base_url() ?>assets/json/lf20_s8pbrcfw.json" mode="bounce" background="transparent" speed="2" loop autoplay></lottie-player><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function emptyText(location, text) {
        $(location).html('<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>')
    }

    function emptyTextReturn(text) {
        var html = '<div class="row h-100"><div class="col-12 align-self-center text-center"><div class="card shadow-none" style="border:0px;height:100%;background-color:transparent"><div class="card-body h-100 m-5"><p class="small"><i>' + text + '</i></p></div></div></div></div>'
        return html
    }

    function arrayToString(arr) {
        var resultString = arr.join(',');
        return resultString;
    }

    function groupDataByProperties(data, propertyNames) {
        // Menggunakan Set untuk menyimpan nilai unik dari kombinasi properti
        var uniqueValuesSet = new Set();

        // Loop melalui data untuk mendapatkan nilai unik dari kombinasi properti
        data.forEach(function(item) {

            // Membuat array yang berisi nilai properti yang diinginkan
            var propertyValues = propertyNames.map(function(propertyName) {
                if (item[propertyName].name) {
                    return item[propertyName].name
                } else {
                    return item[propertyName];
                }
            });

            // Menambahkan array nilai properti ke dalam Set
            uniqueValuesSet.add(JSON.stringify(propertyValues));
        });

        // Mengonversi Set menjadi array dan mengembalikan hasilnya
        var uniqueValuesArray = Array.from(uniqueValuesSet).map(function(stringifiedArray) {
            return JSON.parse(stringifiedArray);
        });

        return uniqueValuesArray;
    }

    function findQty(data, criteria) {
        for (let i = 0; i < data.length; i++) {
            let match = true;

            for (let key in criteria) {
                // Mengatasi properti dengan hierarki
                const keys = key.split('.');
                let currentValue = data[i];

                for (let j = 0; j < keys.length; j++) {
                    if (currentValue.hasOwnProperty(keys[j])) {
                        currentValue = currentValue[keys[j]];
                    } else {
                        match = false;
                        break;
                    }
                }

                if (!match) {
                    break;
                }
                if (currentValue != criteria[key]) {
                    match = false;
                    break;
                }
            }
            if (match) {
                if (data[i].qty_waste == null) {
                    data[i].qty_waste = 0
                }
                if (data[i].qty_goods == null) {
                    data[i].qty_goods = 0
                }
                if (data[i].qty_reject == null) {
                    data[i].qty_reject = 0
                }
                return {
                    qty_goods: number_format(data[i].qty_goods),
                    qty_reject: number_format(data[i].qty_reject),
                    qty_waste: number_format(data[i].qty_waste),
                }
            }
        }
        return null;
    }

    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }


    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('department_id') ?>'
    var data_user = ""
    var data_report = ""
    var date_start = currentDate()
    var date_end = currentDate()
    var machineId
    var rowCode
    $(document).ready(function() {
        $('#dataTable').html(emptyReturn('Belum Melakukan Pencarian'))
        $('select').selectpicker();
        loadData()
    })

    function loadData() {
        $.ajax({
            url: "<?= api_produksi('loadPageMachineReport'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                employeeId: user_id,
            },
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
            },
            beforeSend: function() {
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                data_user = response['data']
                setDaterange()
                formMachine()
                dateRangeString()
            }
        })
    }

    function dateRangeString() {
        $('#dateRangeString').html(formatMonthYear(date_start) + ' - ' + formatMonthYear(date_end))
    }

    function setDaterange() {
        new Litepicker({
            element: document.getElementById('dateRange'),
            singleMode: false,
            firstDay: 0,
            startDate: date_start,
            endDate: date_end,
            format: "DD MMMM YYYY",
            autoRefresh: true,
            setup: (picker) => {
                picker.on('selected', (date1, date2) => {
                    date_start = formatDate(date1['dateInstance'])
                    date_end = formatDate(date2['dateInstance'])
                });
            },
        })
    }

    function formMachine() {
        var html = ''
        data_user.machine.forEach(e => {
            html += '<option value="' + e.id + '" selected>' + e.code + '</option>'
        });
        $('#selectMachine').html(html)
        $('#selectMachine').selectpicker('refresh');
        $('#selectMachine').selectpicker({

        });
        // simpanData()
        arrangeVariable()
    }

    function arrayToString(arr) {
        var resultString = arr.join(',');
        return resultString;
    }

    function arrangeVariable() {
        machineId = arrayToString($('#selectMachine').map(function() {
            return $(this).val();
        }).get())
    }

    function simpanData() {

        // ----------------------------------------- //
        var type = 'GET'
        var button = '.btnSimpan'
        var url = '<?php echo api_produksi('getReportResultPersonQuality'); ?>'
        var data = {
            dateStart: date_start,
            dateEnd: date_end,
            machineId: machineId,
        }
        kelolaData(data, type, url, button)
    }

    function kelolaData(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                showOverlay('hide')
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $(button).prop("disabled", false);
            },
            beforeSend: function() {
                $(button).prop("disabled", true);
                showOverlay('show')
            },
            success: function(response) {
                showOverlay('hide')
                dateRangeString()
                $(button).prop("disabled", false);
                data_report = response.data
                if (data_report.reportResultPersonQuality.length) {
                    updatedStructure()
                } else {
                    // tidak ada data
                    $('#dataTable').html(notFoundReturn('Data Tidak Ditemukan'))
                }
            }
        });
    }

    function updatedStructure() {
        dataTable()
    }

    function dataTable() {
        var html = ''
        html += '<table class="table table-bordered table-hover table-sm small w-100" id="tableDetail">'
        html += '<thead id="headTable">'
        html += '</thead>'
        html += '<tbody id="bodyTable">'
        html += '</tbody>'
        html += '</table>'
        $('#dataTable').html(html)
        headTable()
    }

    function formatMonthYear(orginaldate) {
        var date = new Date(orginaldate);
        var tahun = date.getFullYear();
        var bulan = date.getMonth();
        switch (bulan) {
            case 0:
                bulan = "Januari";
                break;
            case 1:
                bulan = "Februari";
                break;
            case 2:
                bulan = "Maret";
                break;
            case 3:
                bulan = "April";
                break;
            case 4:
                bulan = "Mei";
                break;
            case 5:
                bulan = "Juni";
                break;
            case 6:
                bulan = "Juli";
                break;
            case 7:
                bulan = "Agustus";
                break;
            case 8:
                bulan = "September";
                break;
            case 9:
                bulan = "Oktober";
                break;
            case 10:
                bulan = "November";
                break;
            case 11:
                bulan = "Desember";
                break;
        }
        var tampilTanggal = bulan + " " + tahun;
        return tampilTanggal;
    }

    function headTable() {
        var html = ''
        html += '<tr>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">#</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">EID</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">Nama</th>'
        html += '<th class="align-middle" rowspan="2" style="background-color: white;">No. Meja</th>'
        const dates = data_report.reportResultPersonQuality[0].data.map(item => Object.keys(item)[0]);
        for (let i = 0; i < dates.length; i++) {
            html += '<th class="align-middle" colspan="6">' + formatMonthYear(dates[i]) + '</th>'
        }
        html += '</tr>'

        html += '<tr>'
        for (let i = 0; i < dates.length; i++) {
            html += '<th class="align-middle">Quality (%)</th>'
            html += '<th class="align-middle">AVG Deliv<br>(per Day)</th>'
            html += '<th class="align-middle">Total<br>Delivery</th>'
            html += '<th class="align-middle">Total<br>Good</th>'
            html += '<th class="align-middle">Total<br>Bad</th>'
            html += '<th class="align-middle">Total<br>All</th>'
        }
        html += '</tr>'
        $('#headTable').html(html)
        bodyTable()
    }

    function bodyTable() {
        var html = ''
        var a = 1
        data_report.reportResultPersonQuality.forEach(e => {
            html += '<tr>'
            html += '<td class="text-center small-text" style="background-color: white;">' + a++ + '</td>'
            html += '<td class="text-center small-text" style="background-color: white;">' + e.employee.eid + '</td>'
            html += '<td class="text-center small-text text-nowrap" style="background-color: white;">' + e.employee.name + '</td>'
            html += '<td class="text-center small-text text-nowrap" style="background-color: white;">' + e.employee.row_code + '</td>'
            e.data.forEach(el => {
                html += '<td class="text-center small-text">' + number_format(roundToTwo(el[Object.keys(el)[0]].quality)) + '</td>'
                html += '<td class="text-center small-text">' + number_format(el[Object.keys(el)[0]].avg_deliv) + '</td>'
                html += '<td class="text-center small-text">' + number_format(el[Object.keys(el)[0]].total_deliv) + '</td>'
                html += '<td class="text-center small-text">' + number_format(el[Object.keys(el)[0]].total_good) + '</td>'
                html += '<td class="text-center small-text">' + number_format(el[Object.keys(el)[0]].total_bad) + '</td>'
                html += '<td class="text-center small-text">' + number_format(el[Object.keys(el)[0]].total_all) + '</td>'
            });
            html += '</tr>'
        });
        $('#bodyTable').html(html)
        $('#tableDetail').DataTable({
            ordering: false, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            fixedColumns: {
                left: 3
            },
            paging: false,
        })
    }

    function cetakReport(x, y) {
        if (x == 'excel') {
            var url = "<?= base_url() ?>report/reportPersonQualityExcel"
        } else {
            var url = "<?= base_url() ?>report/reportPersonQualityPdf"
        }
        var params = "*$" + date_start + "*$" + date_end + "*$" + machineId;
        window.open(url + '?params=' + encodeURIComponent(params), '_blank');
    }
</script>