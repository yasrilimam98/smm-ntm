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
        background: rgb(194, 25, 162);
        background: linear-gradient(66deg, rgba(194, 25, 162, 1) 0%, rgba(58, 63, 111, 1) 46%, rgba(15, 232, 219, 1) 100%);
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

    .vertical-text {
        writing-mode: vertical-rl;
        -webkit-transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        vertical-align: middle;
        display: inline-block;
    }

    .bg-skm {
        background-color: #276A6F;
    }

    .bg-skt {
        background-color: #FEC868;
    }

    .bd-callout-0 {
        border-left-color: #9b5fe0;
        border-left-width: 10px;
    }

    .bd-callout-1 {
        border-left-color: #16a4d8;
        border-left-width: 10px;
    }

    .bd-callout-2 {
        border-left-color: #60dbe8;
        border-left-width: 10px;
    }

    .bd-callout-3 {
        border-left-color: #8bd346;
        border-left-width: 10px;
    }

    .bd-callout-4 {
        border-left-color: #efdf48;
        border-left-width: 10px;
    }

    .bd-callout-5 {
        border-left-color: #f9a52c;
        border-left-width: 10px;
    }

    .bd-callout-6 {
        border-left-color: #d64e12;
        border-left-width: 10px;
    }

    .bg-callout-0 {
        background-color: #9b5fe0;
    }

    .bg-callout-1 {
        background-color: #16a4d8;
    }

    .bg-callout-2 {
        background-color: #60dbe8;
    }

    .bg-callout-3 {
        background-color: #8bd346;
    }

    .bg-callout-4 {
        background-color: #efdf48;
    }

    .bg-callout-5 {
        background-color: #f9a52c;
    }

    .bg-callout-6 {
        background-color: #d64e12;
    }

    .font-small {
        font-size: 9px;
    }

    .table {
        border-color: #808080 !important;
    }

    .fixed-right {
        position: fixed;
        right: 0;
        width: 120px;
        z-index: 1030;
    }

    .bg-gradient-production {
        background-color: #1C315E !important;
        background-image: linear-gradient(135deg,
                #1C315E 0%,
                rgba(34, 124, 112, 0.8) 100%) !important;
    }
</style>
<style type="text/css">
    @keyframes ldio-wf2k1rxtsnb {
        0% {
            transform: translate(12px, 80px) scale(0);
        }

        25% {
            transform: translate(12px, 80px) scale(0);
        }

        50% {
            transform: translate(12px, 80px) scale(1);
        }

        75% {
            transform: translate(80px, 80px) scale(1);
        }

        100% {
            transform: translate(148px, 80px) scale(1);
        }
    }

    @keyframes ldio-wf2k1rxtsnb-r {
        0% {
            transform: translate(148px, 80px) scale(1);
        }

        100% {
            transform: translate(148px, 80px) scale(0);
        }
    }

    @keyframes ldio-wf2k1rxtsnb-c {
        0% {
            background: #93dbe9
        }

        25% {
            background: #3b4368
        }

        50% {
            background: #5e6fa3
        }

        75% {
            background: #689cc5
        }

        100% {
            background: #93dbe9
        }
    }

    .ldio-wf2k1rxtsnb div {
        position: absolute;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        transform: translate(80px, 80px) scale(1);
        background: #93dbe9;
        animation: ldio-wf2k1rxtsnb 1s infinite cubic-bezier(0, 0.5, 0.5, 1);
    }

    .ldio-wf2k1rxtsnb div:nth-child(1) {
        background: #689cc5;
        transform: translate(148px, 80px) scale(1);
        animation: ldio-wf2k1rxtsnb-r 0.25s infinite cubic-bezier(0, 0.5, 0.5, 1), ldio-wf2k1rxtsnb-c 1s infinite step-start;
    }

    .ldio-wf2k1rxtsnb div:nth-child(2) {
        animation-delay: -0.25s;
        background: #93dbe9;
    }

    .ldio-wf2k1rxtsnb div:nth-child(3) {
        animation-delay: -0.5s;
        background: #689cc5;
    }

    .ldio-wf2k1rxtsnb div:nth-child(4) {
        animation-delay: -0.75s;
        background: #5e6fa3;
    }

    .ldio-wf2k1rxtsnb div:nth-child(5) {
        animation-delay: -1s;
        background: #3b4368;
    }

    .loadingio-spinner-ellipsis-16zv7w22yjg {
        width: 200px;
        height: 200px;
        display: inline-block;
        overflow: hidden;
        background: none;
    }

    .ldio-wf2k1rxtsnb {
        width: 100%;
        height: 100%;
        position: relative;
        transform: translateZ(0) scale(1);
        backface-visibility: hidden;
        transform-origin: 0 0;
        /* see note above */
    }

    .ldio-wf2k1rxtsnb div {
        box-sizing: content-box;
    }

    .sticky-top-2 {
        position: -webkit-sticky;
        position: sticky;
        top: 100px;
        background-color: white;
        z-index: 1020;
    }

    /* generated by https://loading.io/ */
</style>
<main>
    <!-- Main page content-->
    <header class="page-header page-header-dark bg-gradient-production pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fa fa-industry"></i></div>
                            Draft Material
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
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <!-- side count -->
    <div class="fixed-bottom">
        <div class="card shadow" id="targetPane">
            <div class="card-body p-2">
                <div class="row p-0 justify-content-between">
                    <div class="col-4 text-end p-0 pe-4 align-self-center border-end">
                        <p class="m-0 text-orange" style="font-size: 14px;"><b>PLAN 1 WEEK</b></p>
                    </div>
                    <div class="col-auto p-0 ps-4 pe-4">
                        <div class="row p-0" id="detailTargetPane">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- side count -->
    <!-- <div class="fixed-top" style="top:50px;">
        <div class="card shadow-sm text-white" id="targetPane" style="border-radius: 0px;background-color:#00425A">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-4 text-end">
                        <b>Minggu, 8 Januari 2023</b>
                    </div>
                    <div class="col-8">
                        <div class="p-0 m-0 row" id="detailPlanSticky">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- side count -->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-10 align-self-center" id="mainDraftMaterial">
                            </div>
                            <div class="col-12 col-md-2">
                                <button type="button" class="btn btn-teal w-100 btn-sm h-100" onclick="fieldDetailDateAuto()"><i class="fa fa-magic me-2"></i>Auto Generate Material</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4" id="detailDateForm">

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

    function clearModal2() {
        $('#modalDialog2').removeClass();
        $('#modalDialog2').removeAttr('style');
        $('#modalHeader2').html('');
        $('#modalBody2').html('');
        $('#modalFooter2').html('');
    }

    $('#modal').on('hidden.bs.modal', function(e) {
        clearModal();
    })
    $('#modal2').on('hidden.bs.modal', function(e) {
        clearModal2();
    })

    function unique(array) {
        return array.filter(function(el, index, arr) {
            return index == arr.indexOf(el);
        });
    }

    function loadingData(location) {
        var html = ""
        html += '<div class="card w-100 shadow-none mb-2 p-0">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center">'
        html += '<div class="col text-center p-5">'
        html += '<i class="small mb-5">Memuat Data</i><br>'
        html += '<div class="loadingio-spinner-ellipsis-16zv7w22yjg"><div class="ldio-wf2k1rxtsnb">'
        html += '<div></div><div></div><div></div><div></div><div></div>'
        html += '</div></div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $(location).html(html)

    }

    function notFound(location) {
        var html = ""
        html += '<div class="card w-100 shadow-none mb-2 p-0">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center">'
        html += '<div class="col text-center p-5">'
        html += '<i class="small">Tidak Ada Data yang Tersedia</i>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $(location).html(html)
    }

    function startPane(location) {
        var html = ""
        html += '<div class="card w-100 shadow-none mb-2 p-0">'
        html += '<div class="card-body p-2">'
        html += '<div class="row d-flex align-items-center">'
        html += '<div class="col text-center p-5">'
        html += '<p class="m-0 small">Anda dapat Melakukan Auto Generate Material dari Plan</>'
        html += '<p class="m-0 mb-4 small">Atau dengan <b>Manual</b></>'
        html += '<br>'
        html += '<button class="btn btn-outline-success btn-sm mt-4" onclick="tampilPlanManual()"><i class="fa fa-plus me-2"></i>Tambah Draft Manual</button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $(location).html(html)
    }


    $(document).on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var data_user = ""
    var data_plan = ""
    var data_table = ""

    $(document).ready(function() {
        $.ajax({
            url: "<?= api_url('Api_Warehouse/getUser'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: user_id
            },
            error: function(xhr) {
                notFound('#detailDateForm')
            },
            beforeSend: function() {
                loadingData('#detailDateForm')
            },
            success: function(response) {
                data_user = response['data']
                getData()
            }
        })
    })
    var jenis_produksi = ""

    function getData() {
        $.ajax({
            url: "<?= api_produksi('getMaterialRequestDraft'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                id: '<?= $id ?>'
            },
            error: function(xhr) {
                notFound('#detailDateForm')
            },
            beforeSend: function() {
                loadingData('#detailDateForm')
            },
            success: function(response) {
                data_plan = response['data']['planDetail']
                data_table = response['data']['baseDraft']
                jenis_produksi = data_plan[0]['production_type']['name'].toLowerCase()
                calculateTotal()
                mainDraft('#mainDraftMaterial')
                startPane('#detailDateForm')
            }
        })
    }


    var a = 0

    function fieldDetailDateAuto() {
        $('#detailDateForm').html('')
        $.each(data_plan[0]['detail'], function(key, value) {
            formDetail(data_plan[0]['detail'][key])
        })
        calculationToBrand()
    }

    function groupAndSum(arr, groupKeys, sumKeys) {
        return Object.values(
            arr.reduce((acc, curr) => {
                const group = groupKeys.map(k => curr[k]).join('-');
                acc[group] = acc[group] || Object.fromEntries(groupKeys.map(k => [k, curr[k]]).concat(sumKeys.map(k => [k, 0])));
                sumKeys.forEach(k => acc[group][k] += curr[k]);
                return acc;
            }, {})
        );
    }

    var grupMachineType = ""
    var grupMachineTypeWithDate = ""
    var grupMachineTypeWithDateAndProduct = ""
    var listProduct = ""

    function calculateTotal() {
        var array_product = []
        var product = []
        data_plan[0]['detail'].forEach(a => {
            a['data'].forEach(b => {
                b['data'].forEach(c => {
                    c['data'].forEach(d => {
                        product.push(d['product']['code'])
                        array_product.push({
                            code: d['product']['code'],
                            product: d['product']['id'],
                            product_group: d['product']['product_group']['id'],
                            product_group_code: d['product']['product_group']['code'],
                            unit_name: d['unit']['name'],
                            unit: d['unit']['id'],
                            qty: d['qty'],
                            machine: c['machine']['id'],
                            machine_name: c['machine']['name'],
                            machine_type: b['machine_type']['id'],
                            machine_type_name: b['machine_type']['name'],
                            date: a['date'],
                        })
                    })
                })
            });
        });
        // penjumlahan dan grouping
        grupMachineType = groupAndSum(array_product, ['product_group', 'machine_type', 'product_group_code', 'machine_type_name'], ['qty']);
        grupMachineTypeWithDate = groupAndSum(array_product, ['product_group', 'machine', 'machine_name', 'product_group_code', 'date', 'machine_type', 'unit', 'unit_name'], ['qty']);
        grupMachineTypeWithDateAndProduct = groupAndSum(array_product, ['product', 'machine', 'machine_name', 'code', 'date', 'machine_type', 'unit', 'unit_name', 'product_group'], ['qty']);
        listProduct = unique(product)
        planAWeek()
    }

    function mainDraft(location) {
        var html = ""
        html += '<p class="m-0">#' + data_plan[0]['code'] + '</p>'
        html += '<h5 class="m-0"><b>' + formatDateIndonesia(data_plan[0]['date_start']) + ' - ' + formatDateIndonesia(data_plan[0]['date_end']) + '</b></h5>'
        for (let i = 0; i < listProduct.length; i++) {
            html += '<span class="badge bg-dark me-2">'
            html += '<p class="m-0" style="font-size: 11px;">' + listProduct[i] + '</p>'
            html += '</span>'
        }
        $(location).html(html)
    }

    function planAWeek() {
        var html = ""
        $.each(grupMachineType, function(key, value) {
            html += '<div class="col-auto text-center align-self-center">'
            html += '<p class="m-0" style="font-size: 12px;"><span class="text-orange">' + value['product_group_code'] + '</span> <span style="font-size:9px">[ ' + value['machine_type_name'] + ' ]</span></p>'
            html += '<p class="m-0" style="font-size: 14px;"><b><span class="text-success" id="planAWeek' + value['machine_type'] + value['product_group'] + '">0</span> / ' + number_format(value['qty']) + '</b></p>'
            html += '</div>'
        })
        $('#detailTargetPane').html(html)
    }

    function stickyPlanDetail() {
        var html = ""
        html += '<div class="col-12 col-md-3">'
        html += '<div class="card shadow-none w-100 mb-2" style="background-color: transparent;border-color:white;">'
        html += '<div class="card-body p-2 ps-3 pe-3">'
        html += '<div class="row">'
        html += '<div class="col-4 align-self-center">'
        html += '<h6 class="m-0 text-white" style="font-size:10px;"><b>ARF</b></h6>'
        html += '<p class="m-0 font-small" style="font-size:8px;">MK9-A</p>'
        html += '</div>'
        html += '<div class="col-8 align-self-center">'
        html += '<div class="row">'
        html += '<div class="col-6 border-end">'
        html += '<p class="m-0 text-warning lh-1" style="font-size:10px;"><b>90</b> <br><span style="font-size:9px;">Box</span></p>'
        html += '</div>'
        html += '<div class="col-6">'
        html += '<p class="m-0 lh-1" style="font-size:10px;"><b>90</b> <br><span style="font-size:9px;">Box</span></p>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#detailPlanSticky').html(html)
    }

    function formDetail(data) {
        var html = ""
        html += '<div class="card shadow-sm bd-callout-' + a + ' mb-3">'
        html += '<div class="card-body">'
        html += '<div class="row">'
        html += '<div class="col-12 col-md-6">'
        html += '<p class="m-0" style="font-size:11px;">Date</p>'
        html += '<h4 class="m-0"><b>' + formatDateIndonesia(data['date']) + '</b></h4>'
        html += '<p class="m-0 mt-3 mb-2" style="font-size:11px;">Additional :</p>'
        html += '<div class="form-check small" style="font-size: 11px;">'
        html += '<input class="form-check-input" type="checkbox" value="" id="checkLeftover' + a + '">'
        html += '<label class="form-check-label" for="checkLeftover' + a + '">'
        html += 'Include Leftover Material'
        html += '</label>'
        html += '</div>'
        html += '<div class="form-check small" style="font-size: 11px;">'
        html += '<input class="form-check-input" type="checkbox" value="" id="checkWasteAllMachine' + a + '" checked>'
        html += '<label class="form-check-label" for="checkWasteAllMachine' + a + '">'
        html += 'Include All for Waste (%)'
        html += '<br>'
        html += '<button class="btn btn-outline-dark btn-sm dropdown-toggle w-100 mt-2" id="dropdownMenuButton2' + a + '" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">'
        html += 'Option <span id="jumlahDataWaste' + a + '" class="me-1 ms-1">( 0 Item )</span>'
        html += '</button>'
        html += '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2' + a + '">'
        html += '<li>'
        html += '<h6 class="dropdown-header">Customized Waste</h6>'
        html += '</li>'
        html += '<li>'
        html += '<form class="px-3">'
        html += '<div class="row">'
        var totalMaterial = 0
        $.each(data_table, function(key, value) {
            $.each(value['detail'], function(keya, valuea) {
                $.each(valuea['machine'], function(keys, values) {
                    html += '<div class="col">'
                    html += '<div class="form-check">'
                    html += '<input type="checkbox" class="form-check-input" id="dropdownCheckParent' + key + keya + keys + '" checked>'
                    html += '<label class="form-check-label" style="font-size:9px;" for="dropdownCheckParent' + key + keya + keys + '">'
                    html += values['machine']['code']
                    html += '</label>'
                    $.each(values['material'][0], function(key3, value3) {
                        $.each(value3['item'], function(key4, value4) {
                            if (value3['group']['name'] != 'Brand') {
                                totalMaterial++
                                var text = value4['item']['name'].split(' ')
                                if (text[2] == undefined) {
                                    text[2] = ""
                                }
                                var text2 = text[0] + ' ' + text[1] + ' ' + text[2]
                                html += '<div class="form-check">'
                                html += '<input type="checkbox" class="form-check-input" id="dropdownCheck' + key + keya + keys + key3 + key4 + '" checked>'
                                html += '<label class="form-check-label small" style="font-size:9px;" for="dropdownCheck' + key + keya + keys + key3 + key4 + '">'
                                html += text2
                                html += '</label>'
                                html += '</div>'
                            }
                        })
                    })
                    html += '</div>'
                    html += '</div>'
                })
            })
        })
        html += '</div>'
        html += '</form>'
        html += '</li>'
        html += '</ul>'
        html += '</label>'
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 col-md-6">'
        html += '<p class="m-0 mb-2" style="font-size:11px;"><b><i class="fa fa-file-o me-2"></i>Plan Production Daily</b></p>'
        html += '<div class="row" id="listDetailProduction">'
        // console.log(grupMachineTypeWithDate)
        $.each(grupMachineTypeWithDate, function(key, value) {
            if (value['date'] == data['date']) {
                html += '<div class="col-12 col-md-6">'
                html += '<div class="card shadow-none w-100 mb-2">'
                html += '<div class="card-body p-2 ps-3 pe-3">'
                html += '<div class="row">'
                html += '<div class="col-5 align-self-center">'
                html += '<h6 class="m-0" style="font-size:12px;"><b>' + value['product_group_code'] + '</b></h6>'
                html += '<p class="m-0 font-small" style="font-size:8px;"><i class="fa fa-cogs me-2"></i>' + value['machine_name'] + '</p>'
                html += '</div>'
                html += '<div class="col-7 align-self-center">'
                html += '<div class="row">'
                html += '<div class="col-6 border-end">'
                html += '<p class="m-0 lh-1" style="font-size:12px;"><b class="text-success" id="qtyPlanDaily' + value['date'] + value['machine'] + value['product_group'] + '">0</b> <br><span style="font-size:11px;">' + value['unit_name']
                '</span></p>'
                html += '</div>'
                html += '<div class="col-6">'
                html += '<p class="m-0 lh-1" style="font-size:12px;"><b>' + number_format(value['qty']) + '</b> <br><span style="font-size:11px;">' + value['unit_name']
                '</span></p>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            }
        })
        html += '</div>'
        html += '</div>'
        html += '<div class="col-12 pt-4">'
        html += '<div class="row">'
        $.each(data_table, function(key, value) {
            html += '<div class="col-12">'
            html += '<b style="font-size: 14px;">' + value['machine_type']['name'] + '</b>'
            $.each(value['detail'], function(keya, valuea) {
                html += '<div class="table-responsive">'
                html += '<table class="table table-bordered table-hover table-sm">'
                html += '<thead>'
                html += '<tr class="bg-grey text-dark">'
                html += '<th class="p-2 font-small" rowspan="3">Machine</th>'
                html += '<th class="p-2 font-small" rowspan="3">Total Production</th>'
                html += '</tr>'
                html += '<tr class="bg-grey text-dark">'
                $.each(valuea['machine'][0]['material'][0], function(keys, values) {
                    html += '<th class="p-2 font-small" colspan="' + values['item'].length + '">' + values['group']['name'] + '</th>'
                })
                html += '</tr>'
                html += '<tr class="bg-grey text-dark">'
                $.each(valuea['machine'][0]['material'][0], function(keys, values) {
                    $.each(values['item'], function(keys2, values2) {
                        if (values['group']['name'] == 'Brand') {
                            html += '<th class="p-2 font-small">' + values2['brand']['code'] + '</th>'
                        } else {
                            var text = values2['item']['name'].split(' ')
                            if (text[2] == undefined) {
                                text[2] = ""
                            }
                            var text2 = text[0] + ' ' + text[1] + ' ' + text[2]
                            html += '<th class="p-2 font-small">' + text2 + '</th>'
                        }
                    })
                })
                html += '</tr>'
                html += '</thead>'
                html += '<tbody>'
                $.each(valuea['machine'], function(keys, values) {
                    html += '<tr>'
                    html += '<td class="p-2 font-small">' + values['machine']['code'] + '</td>'
                    html += '<td class="p-0 font-small"><input class="form-control form-control-sm nominal totalPerHariPerMesin" style="border-radius: 0px;border:none;box-shadow: none;font-size:9px;font-weight:bold;text-align:right;background-color:transparent" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="..." id="totalPerHariPerMesin' + data['date'] + values['machine']['id'] + '"></td>'
                    $.each(values['material'][0], function(keysa, valuesa) {
                        $.each(valuesa['item'], function(keys2, values2) {
                            var variable = ""
                            var unit = ""
                            // brand
                            var brand = ""
                            if (values2['brand'] != undefined) {
                                brand = values2['brand']['id']
                                unit = values2['brand']['item'][0]['unit']['id']
                                variable = 'inputDataBrand'
                            }
                            // brand
                            var item = ""
                            if (values2['item'] != undefined) {
                                item = 'item' + values2['item']['id']
                                variable = 'inputDataItem'
                            }
                            html += '<td class="p-0 font-small"><input class="form-control form-control-sm nominal inputData ' + variable + '" style="border-radius: 0px;border:none;box-shadow: none;font-size:9px;font-weight:bold;text-align:right;background-color:transparent" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="..." data-unit="' + unit + '" data-category="' + valuesa['group']['name'] + '" data-machine_type="' + value['machine_type']['id'] + '" data-machine="' + values['machine']['id'] + '" data-brand="' + brand + '" data-date="' + data['date'] + '" id="inputData' + data['date'] + values['machine']['id'] + brand + item + '" data-akses="data_table[' + key + '][' + "'" + 'detail' + "'" + '][' + keya + '][' + "'" + 'machine' + "'" + '][' + keys + '][' + "'" + 'material' + "'" + '][0][' + keysa + '][' + "'" + 'item' + "'" + '][' + keys2 + '][' + "'" + 'brand' + "'" + '][' + "'" + 'item' + "'" + '][0]"></td>'
                        })
                    })
                    html += '</tr>'
                })
                html += '</tbody>'
                html += '</table>'
                html += '</div>'
            })
            html += '</div>'
        })
        html += '<div class="col-12 text-end">'
        html += '<button type="button" class="btn btn-dark btn-sm mt-2"><i class="fa fa-plus me-2"></i>Buat Material Request</button>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        html += '</div>'
        $('#detailDateForm').append(html)
        $('.nominal').number(true);
        $('#jumlahDataWaste' + a).html('( ' + totalMaterial + ' Item )')
        a++
        if (a == 7) {
            a = 0
        }
    }
    var draftPerBrand = []

    function calculationToBrand() {
        var data = grupMachineTypeWithDate
        loopingCalculationBrand(data)
    }

    function loopingCalculationBrand(data, mcn = "", dt = "") {
        $.each(data, function(key, value) {
            checkAvailableBrandVariable(data[key])
        })
        generateToBrandForm(mcn, dt)
    }

    function checkAvailableBrandVariable(value) {
        var check = draftPerBrand.filter((values, keys) => {
            if (parseInt(values.id_brand) === parseInt(value['product_group']) && parseInt(values.id_machine) === parseInt(value['machine']) && values.date === value['date']) return true
        })
        if (check.length == 0) {
            // tidak ada sebelumnya
            // var dataDetail = []
            // dataDetail.push({
            //     'code': value['code'],
            //     'id_product': value['product'],
            //     'qty': value['qty']
            // })
            draftPerBrand.push({
                'id_brand': value['product_group'],
                'machine_type': value['machine_type'],
                'id_machine': value['machine'],
                'id_unit': value['unit'],
                'date': value['date'],
                'qty': value['qty'],
                // 'detail': dataDetail
            })
        } else {
            var objIndex = draftPerBrand.findIndex((obj => obj.id_brand == value['product_group'] && obj.id_machine == value['machine'] && obj.date == value['date']));
            draftPerBrand[objIndex].qty = parseInt(value['qty'])
            // draftPerBrand[objIndex].detail.push({
            //     'code': value['code'],
            //     'id_product': value['product'],
            //     'qty': value['qty']
            // })
        }
        return false
    }

    function generateToBrandForm(mcn = "", dt = "") {
        // buat ngisi kode akses ke variable
        if (mcn == "") {
            $('.inputDataItem').val('')
        } else {
            $('.inputDataItem[data-machine="' + mcn + '"][data-date="' + dt + '"]').val('')
        }
        $.each(draftPerBrand, function(key, value) {
            $('#inputData' + value['date'] + value['id_machine'] + value['id_brand']).val(value['qty'])
            draftPerBrand[key]['akses'] = $('#inputData' + value['date'] + value['id_machine'] + value['id_brand']).data('akses')
        })
        var group = groupAndSum(draftPerBrand, ['date', 'id_machine'], ['qty']);
        $.each(group, function(key, value) {
            $('#totalPerHariPerMesin' + value['date'] + value['id_machine']).val(value['qty'])
        })
        generateConvertToMaterial(mcn, dt)
    }

    function generateConvertToMaterial(mcn = "", dt = "") {
        // buat ngisi per cell material
        $.each(draftPerBrand, function(key, value) {
            if (value['akses'] != undefined) {
                if (mcn == "" && dt == "") {
                    // gnerate all
                    fillCellMaterial(draftPerBrand[key])
                } else {
                    // generate per machine
                    if (value['id_machine'] == mcn && value['date'] == dt) {
                        fillCellMaterial(draftPerBrand[key])
                    }
                }
            }
            generateTotalInPlanDaily(value['qty'], value['date'], value['id_machine'], value['id_brand'])
        })
        generateTotalInPlan()
    }

    function fillCellMaterial(value) {
        $.each(eval(value['akses'])['conversion_material']['material'], function(keys, values) {
            var hitung = roundToTwo(eval(parseInt(value['qty']) + values['operator'] + parseFloat(values['qty'])))
            var input = $('#inputData' + value['date'] + value['id_machine'] + 'item' + values['item']['id']).val()
            if (input == "" || input == undefined) {
                input = 0
            }
            var total = parseFloat(input) + parseFloat(hitung)
            $('#inputData' + value['date'] + value['id_machine'] + 'item' + values['item']['id']).val(total)
        })
    }

    function generateTotalInPlanDaily(total, date, machine, brand) {
        $('#qtyPlanDaily' + date + machine + brand).html(number_format(total))
    }

    function generateTotalInPlan() {
        var data = groupAndSum(draftPerBrand, ['machine_type', 'id_brand'], ['qty']);
        $.each(data, function(key, value) {
            $('#planAWeek' + value['machine_type'] + value['id_brand']).html(number_format(value['qty']))
        })
    }

    $(document).on('keyup', '.inputDataBrand', function(e) {
        var array = []
        var input = $(this).val()
        if (input == "" || input == undefined) {
            input = 0
        }
        array.push({
            'date': $(this).data('date'),
            'product_group': $(this).data('brand'),
            'machine': $(this).data('machine'),
            'machine_type': $(this).data('machine_type'),
            'unit': $(this).data('unit'),
            'qty': input,
        })
        loopingCalculationBrand(array, $(this).data('machine'), $(this).data('date'))
    })

    function tampilPlanManual() {
        $('#modal').modal('show')
        $('#modalDialog').addClass('modal-dialog modal-dialog-centered modal-dialog-scrollable');
        var html_header = '';
        html_header += '<h5 class="modal-title">Pilih Tanggal Plan</h5>';
        html_header += '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        $('#modalHeader').html(html_header);

        var html_body = '';
        html_body += '<div class="container small">'
        html_body += '<div class="row">'

        html_body += '<div class="col-12">'
        html_body += '<div class="card shadow-sm">'
        html_body += '<div class="card-body">'
        html_body += '</div>'
        html_body += '</div>'
        html_body += '</div>'

        html_body += '</div>'
        html_body += '</div>'
        $('#modalBody').html(html_body);

        var html_footer = '';
        html_footer += '<button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>'
        $('#modalFooter').html(html_footer);
    }
</script>