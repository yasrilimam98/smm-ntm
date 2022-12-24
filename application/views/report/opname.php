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

    /* .card-hoper:hover {
        background-color: #F7F7F7;
    } */

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
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-book"></i></div>
                            Report Opname
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-md-12 mb-2">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <span class="small"><b></b></span>
                                    </div>
                                    <div class="col mb-3">
                                        <button type="button" class="btn btn-primary btn-sm float-end" onclick="tampilFilter()"><i class="fa fa-filter me-2"></i> Filter</button>
                                    </div>
                                    <div class="col-12 mb-3" id="tampilReport">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-sm small" id="example" style="width: 100%;white-space:nowrap;">
                                                <thead class="align-self-center">
                                                    <tr class="align-self-center">
                                                        <th class="text-center" rowspan="2">No</th>
                                                        <th class="text-center" rowspan="2">Nama Item</th>
                                                        <th class="text-center" id="waktuOpname" style="width:auto;">Waktu Opname</th>
                                                    </tr>
                                                    <tr class="align-self-center" style="width:100%;" id="dateTable">
                                                    </tr>
                                                </thead>
                                                <tbody id="contentTable">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- autocomplete -->
<script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
<!-- QR CODE -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
<script>
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
    var data_item = ""
    var data_satuan = ""
    var data_supplier = ""
    var data_gudang = ""

    $(document).ready(function() {
        // tampilFilter()
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_user = response['data']
                getData()
            }
        })
    })

    function getData() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/loadMaster'); ?>",
            method: "GET",
            dataType: 'JSON',
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_item = response['data']['item'];
                data_satuan = response['data']['itemSatuan'];
                data_supplier = response['data']['supplier'];
                data_gudang = response['data']['gudang'];
                // tampilFilter()
                getDataOpname()
            }
        })
    }

    function tampilFilter() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered');
        var html_header = '';
        html_header += '<h5 class="modal-title">Filter</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'

        html_body += '<div class="row">'
        html_body += '<b class="small">Tanggal</b>'
        html_body += '<div class="col pe-0">'
        html_body += '<input class="form-control datepicker" type="text" id="dateStart" placeholder="Tanggal Mulai" style="padding:0.875rem 3.375rem 0.875rem 1.125rem">'
        html_body += '</div>'
        html_body += '<div class="col-auto align-self-center">-</div>'
        html_body += '<div class="col ps-0">'
        html_body += '<input class="form-control datepicker" type="text" id="dateEnd" placeholder="Tanggal Akhir" style="padding:0.875rem 3.375rem 0.875rem 1.125rem">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '<div class="row pt-2">'
        html_body += '<b class="small">Item</b>'
        html_body += '<div class="col">'
        html_body += '<select class="form-select w-100 itemStok">'
        html_body += '<option value="" selected disabled>All Item</option>'
        $.each(data_item, function(keys, values) {
            html_body += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
        })
        html_body += '</select>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        $('#modalBody').html(html_body);
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            orientation: "auto",
            autoclose: true
        });

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>'
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanStok" onclick="getDataOpname()">Simpan</button>'
        $('#modalFooter').html(html_footer);
    }
    var item_id = ""

    function getDataOpname() {
        $.ajax({
            url: "<?= api_url('Api_So/laporanSo'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                item_id: item_id,
                date_start: '2022-12-01',
                date_end: '2022-12-23',
            },
            // data: {
            //     item_id: item_id,
            //     date_start: $('#dateStart').val(),
            //     date_end: $('#dateEnd').val(),
            // },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                $('#modal').modal('hide')
                data_report = response['data']
                dataTampilReport()
                // console.log(data_report)

            }
        })
    }

    function dataTampilReport() {
        var html = ""
        var html_date = ""
        $.each(JSON.parse(data_report[0]['datas']), function(key, value) {
            html_date += '<th class="text-center p-2" colspan="2" style="width:200px">' + value['tanggal'] + '</th>'
        })
        $('#waktuOpname').attr('colspan', JSON.parse(data_report[0]['datas']).length)
        $('#dateTable').html(html_date)
        $.each(data_report, function(key, value) {
            html += '<tr>'
            html += '<td>' + (parseInt(key) + 1) + '</td>'
            html += '<td>' + JSON.parse(value['item'])['name'] + '</td>'
            $.each(JSON.parse(value['datas']), function(key, value) {
                var stok_input = 0
                var stok_sistem = 0
                var stok_koreksi = 0
                if (value['data_so']['stok_opname'] != null) {
                    stok_input = value['data_so']['stok_opname']
                }
                if (value['data_so']['stok_sistem'] != null) {
                    stok_sistem = value['data_so']['stok_sistem']
                }
                if (value['data_so']['stok_opname_koreksi'] != null) {
                    stok_koreksi = value['data_so']['stok_opname_koreksi']
                }
                html += '<td class="text-center"><p class="m-0" style="font-size:9px">Sistem</p>' + stok_sistem + '</td>'
                html += '<td class="text-center"><p class="m-0" style="font-size:9px">Opname</p>' + stok_input + '</td>'
            })
            html += '</tr>'
        })
        $('#contentTable').html(html)
    }

    function exportExcel() {
        var url = '<?= base_url('report/exportLaporanGudang') ?>';
        var params = "item_id=" + item_id + "&date_start=" + $('#dateStart').val() + "&date_end=" + $('#dateEnd').val()
        window.open(url + '?' + params, '_blank');
    }
</script>