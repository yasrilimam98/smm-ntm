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

    .start-25 {
        left: 25% !important;
    }

    .top-25 {
        top: 25% !important;
    }

    .w-35 {
        width: 35% !important;
    }

    .image-20 {
        -ms-transform: rotate(20deg);
        /* IE 9 */
        transform: rotate(20deg);
    }

    .card-hoper:hover {
        background-color: #EDEDED;
    }

    #profileImage {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        font-size: 15px;
        color: #fff;
        text-align: center;
        padding: 2px;
        line-height: 29px;
        vertical-align: middle;
        margin: 0 auto;
    }

    .bg-ungu {
        background: rgb(25, 128, 194);
        background: linear-gradient(66deg, rgba(25, 128, 194, 1) 0%, rgba(215, 15, 232, 1) 100%);
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
                            <div class="page-header-icon"><i class="fa fa-truck"></i></div>
                            Stok Gudang
                        </h1>
                    </div>
                    <div class="col-auto mt-4">
                        <div class="float-end">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="input-group w-100">
                                        <input class="form-control pe-0" type="text" placeholder="Cari Segala Sesuatu" aria-label="Search" id="search_nama">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="btn-group">
                                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="ms-2 d-none d-sm-block">Add New</span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                            <li><a class="dropdown-item" href="javascript:void(0);" onclick="formTransaksiStok()"><i class="me-2 fa fa-plus"></i>Transaksi Stok</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-6 mb-4">
                <div class="card h-100">
                    <img src="<?= base_url() ?>assets/image/logo/stock_in.png" class="image-20 w-25 position-absolute top-25 start-25 translate-middle" alt="" style="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 align-self-center text-center">
                            </div>
                            <div class="col-7 align-self-center">
                                <h6 class="fw-bold m-0">Stock In</h6>
                                <div class="row">
                                    <div class="col-auto">
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="persentPending">255 x</b></h1>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <p class="m-0" style="font-size: 10px;">Transaction</p>
                                        <p class="m-0" style="font-size: 10px;">Today 13/12/2022</p>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-outline-primary btn-sm p-1">
                                    <p style="font-size: 11px;" class="mb-0">Detail Stock In</p>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card h-100">
                    <img src="<?= base_url() ?>assets/image/logo/stock_out.png" class="image-20 w-25 position-absolute top-25 start-25 translate-middle" alt="" style="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 align-self-center text-center">
                            </div>
                            <div class="col-7 align-self-center">
                                <h6 class="fw-bold m-0">Stock Out</h6>
                                <div class="row">
                                    <div class="col-auto">
                                        <h1 class="m-0 mt-1 mb-1 fw-bold"><b id="persentPending">255 x</b></h1>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <p class="m-0" style="font-size: 10px;">Transaction</p>
                                        <p class="m-0" style="font-size: 10px;">Today 13/12/2022</p>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-outline-primary btn-sm p-1">
                                    <p style="font-size: 11px;" class="mb-0">Detail Stock Out</p>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        Request Today
                        <div class="row">
                            <div class="col-auto mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Gudang</option>
                                    <option value="1">Warehouse</option>
                                    <option value="2">SKT</option>
                                    <option value="3">SKM</option>
                                </select>
                            </div>
                            <div class="col-auto mb-1 p-1">
                                <button type="button" class="btn btn-primary btn-sm w-100"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="chart-pie"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-8 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        Material Today
                        <div class="row">
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Gudang</option>
                                    <option value="1">Warehouse</option>
                                    <option value="2">SKT</option>
                                    <option value="3">SKM</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="all">Semua Material</option>
                                    <option value="1">Etiked</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option value="1">Sisa Gudang</option>
                                    <option value="1">Barang Out</option>
                                    <option value="2">Barang In</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-1 p-1">
                                <button type="button" class="btn btn-primary btn-sm w-100"><i class="fa fa-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body overflow-auto" style="height: 300px;">
                        <div class="container">
                            <?php for ($i = 0; $i < 30; $i++) { ?>
                                <div class="row">
                                    <div class="col fw-bold">Foil Gold 12 SKM</div>
                                    <div class="col align-self-center">
                                        <div class="row">
                                            <div class="col-auto">
                                                <i class="fa fa-arrow-down text-success fa-2x"></i>
                                            </div>
                                            <div class="col-auto align-self-center ps-0">
                                                <p class="m-0" style="font-size: 12px;"><b>Warehouse</b></p>
                                                <p class="m-0" style="font-size: 10px;">13/12/2022</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-end">650 Roll</div>
                                </div>
                                <hr>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-header-actions">
                    <div class="card-header">
                        <span class="d-none d-sm-block">Warehouse</span>
                        <div class="float-end">
                            <div class="input-group input-group-sm w-100">
                                <input class="form-control pe-0" type="text" placeholder="Cari Nama Material" aria-label="Search" id="search_soal">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                <div class="col-6 col-xl-2 col-lg-3 col-md-3 col-sm-6 mb-3">
                                    <div class="card shadow-sm w-100 h-100 p-1">
                                        <div class="card-body text-center">
                                            <small class="fw-bold">Filter DF 160</small>
                                            <h2 class="text-primary m-0 p-0">6,000</h2>
                                            <small class="m-0 p-0">Tray</small>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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
<!-- Modal -->
<div class="modal fade" id="modal2" role="dialog" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document" id="modalDialog2">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader2">

            </div>
            <div class="modal-body" id="modalBody2">

            </div>
            <div class="modal-footer" id="modalFooter2">

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('components/modal_static') ?>
<!-- Chart js -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<!-- <script src="<?= base_url() ?>assets/js/vendor/jquery.validate/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/jquery.validate/additional-methods.min.js"></script>
<script src="<?= base_url(); ?>assets/js/ImageTools.js"></script> -->
<script>
    function clearModal() {
        $('#modalDialog').removeClass();
        $('#modalDialog').removeAttr('style');
        $('#modalHeader').html('');
        $('#modalBody').html('');
        $('#modalFooter').html('');
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        jumlahPR = 0
        last_number = 1
        clearModal();
    })
    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var data_user = ""
    var data_item = ""
    var data_supplier = ""
    var data_gudang = ""
    var data_stok = ""
    $(document).ready(function() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
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
                getDataStok()
            }
        })
    }

    function getDataStok() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getDataStok'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                tanggal: currentDate()
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_stok = response['data']
                // console.log(data_stok)
            }
        })
    }
    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: ["Direct", "Referral", "Social"],
            datasets: [{
                data: [55, 30, 15],
                backgroundColor: [
                    "rgba(0, 97, 242, 1)",
                    "rgba(0, 172, 105, 1)",
                    "rgba(88, 0, 232, 1)"
                ],
                hoverBackgroundColor: [
                    "rgba(0, 97, 242, 0.9)",
                    "rgba(0, 172, 105, 0.9)",
                    "rgba(88, 0, 232, 0.9)"
                ],
                hoverBorderColor: "rgba(234, 236, 244, 1)"
            }]
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: "#dddfeb",
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });

    function formTransaksiStok() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-xl modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Transaksi Stok</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'
        html_body += '<div class="col-12 col-md-7 small">'
        html_body += '<p class="m-0 mb-2"><b>Nomor Dokumen :</b></p>'
        html_body += '<input type="text" class="form-control form-control-sm p-1" id="nomorDokumen" style="border:none;">'
        html_body += '<hr class="m-0 mb-3">'

        html_body += '<p class="m-0 mb-2"><b>Choose Item :</b></p>'
        html_body += '<div id="listFormItem">'
        html_body += '</div>'
        html_body += '<button class="btn btn-sm bg-ungu text-white float-end mt-2" onclick="addItem()">Tambah Item<i class="fa fa-plus ms-2"></i></button>'
        html_body += '</div>'
        html_body += '<div class="col-12 col-md-5 small">'

        html_body += '<p class="m-0 mb-2"><b>Customized :</b></p>'
        // tanggal
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">1</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Tanggal</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input type="text" class="form-control form-control-sm datepicker" id="tanggalStok" style="border:none;" autocomplete="off">'
        html_body += '<hr class="m-0">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // tanggal
        // jenis barang
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">2</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Jenis Barang</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input type="radio" class="btn-check p-1 text-start radioJenisBarang" name="radioJenisBarang" id="radioJenisBarang1" autocomplete="off" value="IN">'
        html_body += '<label class="btn btn-sm btn-outline-primary w-100" for="radioJenisBarang1" onclick="tampilKategori(0)">Barang Masuk</label>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input type="radio" class="btn-check p-1 text-start radioJenisBarang" name="radioJenisBarang" id="radioJenisBarang2" autocomplete="off" value="OUT">'
        html_body += '<label class="btn btn-sm btn-outline-primary w-100" for="radioJenisBarang2" onclick="tampilKategori(1)">Barang Keluar</label>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // jenis barang
        // Tag
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">3</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Kategori</b></p>'
        html_body += '</div>'
        html_body += '</div>'


        html_body += '<div class="row" id="tampilKategori">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<div class="card shadow-none mt-3">'
        html_body += '<div class="card-body text-center">'
        html_body += '<p class="m-0 mt-5 mb-5" style="font-size:11px;">Pilih <b>Jenis Barang</b> terlebih dahulu</p>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'


        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Tag
        // Gudang
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">4</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Gudang</b></p>'
        html_body += '</div>'

        $.each(data_gudang, function(keys, values) {
            html_body += '<div class="col-2 ">'
            html_body += '</div>'
            html_body += '<div class="col-10 mb-2">'
            html_body += '<input type="radio" class="btn-check p-1 text-start radioGudang" name="radioGudang" id="radioGudang' + keys + '" autocomplete="off" value="' + values['id'] + '">'
            html_body += '<label class="btn btn-sm btn-outline-primary w-100" for="radioGudang' + keys + '">' + values['name'] + '</label>'
            html_body += '</div>'
        })

        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Gudang
        // Upload Image
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">5</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Upload Dokumen</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<input class="form-control form-control-sm" type="file" id="formFile" accept="image/*">'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Upload Image
        // Notes
        html_body += '<div class="card shadow-none m-0 w-100 mb-2">'
        html_body += '<div class="card-body">'
        html_body += '<div class="row align-self-center">'
        html_body += '<div class="col-12">'

        html_body += '<div class="row">'
        html_body += '<div class="col-2 align-self-center mb-2">'
        html_body += '<div id="profileImage" class="bg-ungu">6</div>'
        html_body += '</div>'
        html_body += '<div class="col-10 align-self-center mb-2">'
        html_body += '<p class="m-0"><b>Catatan</b></p>'
        html_body += '</div>'

        html_body += '<div class="col-2 ">'
        html_body += '</div>'
        html_body += '<div class="col-10 mb-2">'
        html_body += '<textarea class="form-control form-control-sm w-100" rows="5" id="catatanStok"></textarea>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'
        // Notes

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
        html_footer += '<button type="button" class="btn btn-primary btn-sm" id="btnSimpanStok" onclick="doSimpanStok()">Simpan</button>'
        $('#modalFooter').html(html_footer);
        addItem()
    }
    $(document).on('change', '.itemStok', function(e) {
        var key = $(this).data('id')
        $('#satuanStok' + key).empty()
        var id = $(this).val()
        let obj = JSON.parse(data_item.find((value, key) => {
            if (value.id === id) return true
        })['data_konversi'])
        var satuan_tetap = data_item.find((value, key) => {
            if (value.id === id) return true
        });
        var html_body = ""
        html_body += '<option value="' + satuan_tetap['satuan_id'] + '">' + satuan_tetap['satuan_name'] + '</option>'
        if (obj != null) {
            $.each(obj, function(keys, values) {
                html_body += '<option value="' + values['satuan_id'] + '">' + values['satuan_name'] + '</option>'
            })
        }
        $('#satuanStok' + key).html(html_body)
    })

    var numberItem = 0

    function addItem() {
        var html = ""
        html += '<div class="card shadow-none m-0 w-100 mb-2" id="fieldItem' + numberItem + '">'
        html += '<div class="card-body p-3">'

        html += '<div class="row align-self-center mb-2">'

        html += '<div class="col-5">'
        html += '<select style="border:none"  class="form-select form-select-sm w-100 itemStok" id="selectItemYangBelumTuntas" id="itemStok' + numberItem + '" data-id="' + numberItem + '">'
        html += '<option value="" selected disabled>Pilih Item</option>'
        $.each(data_item, function(keys, values) {
            html += '<option value="' + values['id'] + '">' + values['name'] + '</option>'
        })
        html += '</select>'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-2">'
        html += '<input onkeypress="return event.charCode >= 48" min="1" style="border:none" type="text" name="" class="form-control form-control-sm p-1 nominal jumlahStok" value="" placeholder="Jumlah Stok" id="jumlahStok' + numberItem + '">'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-3">'
        html += '<select style="border:none" name="" class="form-control form-control-sm satuanStok" id="satuanStok' + numberItem + '">'
        html += '</select>'
        html += '<hr class="m-0">'
        html += '</div>'

        html += '<div class="col-1">'
        html += '<button class="btn btn-sm btn-outline-danger" onclick="removeFieldItem(' + numberItem + ')"><i class="fa fa-trash"></i></button>'
        html += '</div>'

        html += '</div>'

        html += '</div>'
        html += '</div>'
        $('#listFormItem').append(html)
        $('.nominal').number(true);
        numberItem++
        return true
    }

    function tampilKategori(status) {
        // 0 = masuk
        // 1 = keluar
        var name1 = 'Kembali Pinjam'
        var name2 = 'Retur Produksi'
        var name3 = 'Terima Supplier'
        if (status == 1) {
            name1 = 'Peminjaman'
            name2 = 'Distribusi Produksi'
            name3 = 'Retur Supplier'
        }
        var html = ""
        html += '<div class="col-2 ">'
        html += '</div>'
        html += '<div class="col-10 mb-2">'
        html += '<input type="radio" class="btn-check p-1 text-start radioTag" name="radioTag" id="radioTag1" autocomplete="off" value="' + name1 + '">'
        html += '<label class="btn btn-sm btn-outline-primary w-100" for="radioTag1">' + name1 + '</label>'
        html += '</div>'

        html += '<div class="col-2 ">'
        html += '</div>'
        html += '<div class="col-10 mb-2">'
        html += '<input type="radio" class="btn-check p-1 text-start radioTag" name="radioTag" id="radioTag2" autocomplete="off" value="' + name2 + '">'
        html += '<label class="btn btn-sm btn-outline-primary w-100" for="radioTag2">' + name2 + '</label>'
        html += '</div>'

        html += '<div class="col-2 ">'
        html += '</div>'
        html += '<div class="col-10 mb-2">'
        html += '<input type="radio" class="btn-check p-1 text-start radioTag" name="radioTag" id="radioTag3" autocomplete="off" value="' + name3 + '">'
        html += '<label class="btn btn-sm btn-outline-primary w-100" for="radioTag3">' + name3 + '</label>'
        html += '</div>'
        $('#tampilKategori').html(html)
        return true
    }

    function removeFieldItem(num) {
        $('#fieldItem' + num).remove()
    }

    function imageProcessing() {
        var image = $('#formFile').get(0).files;
        var file = $('#formFile').prop('files')[0];
        if (file != undefined) {
            var timestamp = Date.now()
            var gambar = [];
            for (let index = 0; index < image.length; index++) {
                if (!(/image/i).test(image[index].type)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'File Not an Image',
                        text: 'Please Upload an Image'
                    });
                } else {
                    ImageTools.resize(image[index], {
                        width: 620,
                        height: 620
                    }, function(blob, didItResize) {
                        var isi = [];
                        if (didItResize == true) {
                            gambar.push(blob);
                            isi = blob
                        } else {
                            gambar.push(image[index]);
                            isi = image[index]
                        }
                        arrayImage(gambar, image.length)
                    });
                }
            }
        } else {
            doSimpanStok()
        }
    }

    function arrayImage(image, length) {
        if (image.length == length) {
            doSimpanStok(image[0])
        }
    }

    function doSimpanStok(images = "") {
        Swal.fire({
            text: 'Apakah anda yakin ingin menyimpan data Transaksi Stok ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                var item = []
                var id_item = $('.itemStok').map(function() {
                    return $(this).val();
                }).get();
                var qty = $('.jumlahStok').map(function() {
                    return $(this).val();
                }).get();
                var satuan = $('.satuanStok').map(function() {
                    return $(this).val();
                }).get();
                for (let i = 0; i < id_item.length; i++) {
                    item.push({
                        'id_item': id_item[i],
                        'jumlah': qty[i],
                        'id_satuan': satuan[i],
                    })
                }
                var form_data = new FormData();
                var tanggal = $('#tanggalStok').val()
                var no_doc = $('#nomorDokumen').val()
                var jenis_barang = $('.radioJenisBarang:checked').val()
                var kategori = $('.radioTag:checked').val()
                var gudang = $('.radioGudang:checked').val()
                var image = images
                var note = $('#catatanStok').val()
                var type = 'POST'
                var form_data = {
                    'tanggal': tanggal,
                    'no_doc': no_doc,
                    'jenis_barang': jenis_barang,
                    'kategori': kategori,
                    'gudang': gudang,
                    'image': image,
                    'note': note,
                    'item': item,
                    'created_by': user_id,
                }
                var button = '#btnClosePO'
                var url = '<?php echo api_url('Api_Warehouse/insertTransaksiStok'); ?>'
                // console.log(form_data)
                kelolaData(form_data, type, url, button)
            }
        })
    }

    function kelolaData(data, type, url, button) {
        $.ajax({
            url: url,
            type: type,
            data: data,
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Error Data'
                });
                $(button).prop("disabled", false);
            },
            beforeSend: function() {
                $(button).prop("disabled", true);
            },
            success: function(response) {
                if (response.success == true) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Data Berhasil Tersimpan',
                        icon: 'success',
                    }).then((responses) => {
                        getData()
                        $('#modal').modal('hide')
                        $(button).prop("disabled", false);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal Tersimpan'
                    });
                    $(button).prop("disabled", false);
                }
            }
        });
    }
</script>