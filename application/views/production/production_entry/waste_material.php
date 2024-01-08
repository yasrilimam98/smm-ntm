<style type="text/css">
    .progress {
        height: 40px;
        border-radius: 0px;
    }

    .progress-bar {
        text-align: left;
        padding-left: 10px;
    }

    input[type="time"] {
        position: relative;
    }

    input[type="time"]::-webkit-calendar-picker-indicator {
        display: block;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background: transparent;
    }

    .form-check {
        display: flex;
        align-items: center;
    }

    .form-check-input {
        transform: scale(0.6);
        margin: 0;
    }

    .form-check-label {
        font-size: 12px;
        margin-left: 5px;
    }

    .line-with-text {
        display: flex;
        align-items: center;
        text-align: center;
    }

    .line-with-text hr {
        flex-grow: 1;
        border: none;
        border-top: 1px solid black;
    }

    .bg-dark-grey {
        color: white;
        background-color: #61677A !important;
    }

    .card-waste:hover {
        background-color: #F7F7F7;
    }

    .bg-light-danger {
        background-color: #f8d6d9 !important;
    }

    .bg-dark-grey {
        color: white;
        background-color: #61677A !important;
    }

    .lingkaran {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        float: right;
    }

    .text-light-grey {
        color: #c3c5c9;
    }
</style>
<style>
    .scale-in-center {
        -webkit-animation: scale-in-center 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        animation: scale-in-center 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    /* ----------------------------------------------
 * Generated by Animista on 2023-8-24 15:59:46
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

    /**
 * ----------------------------------------
 * animation scale-in-center
 * ----------------------------------------
 */
    @-webkit-keyframes scale-in-center {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes scale-in-center {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    .scale-out-center {
        -webkit-animation: scale-out-center 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        animation: scale-out-center 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
    }

    @-webkit-keyframes scale-out-center {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(0);
            transform: scale(0);
            opacity: 1;
        }
    }

    @keyframes scale-out-center {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(0);
            transform: scale(0);
            opacity: 1;
        }
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="row">
    <div class="col-12">

        <div class="card shadow-none">
            <div class="card-body p-0 pb-5">
                <div class="row justify-content-between p-5 pb-3" id="menuWaste">

                </div>
                <div id="lisMaterial">

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function findDataById(inputId, data) {
        const results = {
            wasteMaterialCompute: [],
            wasteMaterial: []
        };

        data.wasteMaterialCompute.forEach(item => {
            if (item.id == inputId || item.waste_material_compute_id == inputId) {
                results.wasteMaterialCompute.push(item);
            }
        });

        data.wasteMaterial.forEach(item => {
            if (item.id == inputId || item.waste_material_compute_id == inputId) {
                results.wasteMaterial.push(item);
            }
        });

        return results;
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function cariDataTidakAda(dataUtama, dataInput) {
        var hasil = [];

        // Membuat objek untuk menyimpan material_group_id dari data input
        var materialGroupIds = {};
        for (var i = 0; i < dataInput.length; i++) {
            materialGroupIds[dataInput[i].material_group.id] = true;
        }
        for (var j = 0; j < dataUtama.length; j++) {
            var materialGroupId = dataUtama[j].material_group_id;

            // Jika material_group_id tidak ada dalam data input, tambahkan ke hasil
            if (!materialGroupIds[materialGroupId]) {
                hasil.push(dataUtama[j]);
            }
        }

        return hasil;
    }
</script>
<script>
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var divisi_id = '<?= $this->session->userdata('division_id') ?>'
    var job_spv_smd = '<?= job_spv_smd() ?>'
    var job_foreman = '<?= job_foreman() ?>'
    var job_logistik_warehouse = '<?= job_logistik_warehouse() ?>'
    var job_supply_sparepart = '<?= job_supply_sparepart() ?>'
    var modeChart = 0
    var dataEntry
    var data_entry_group = []
    var data_entry_group_detail = []
    var variable_insert = {}
    var dataAPI = JSON.parse('<?= $dataAPI ?>')
    var id_waste_group_clicked
    var id_product_clicked
    var data_unknown_material = []

    $(document).ready(function() {
        // emptyText('#fillWaste', 'Pilih Card untuk Melihat Informasi')
        // loadData()
    })

    function loadData() {
        var data = {
            workPlanMachineId: workPlanMachineId,
            workPlanProductId: isRunningID
        }
        var url = "<?= api_produksi('loadPageWasteMaterialEntrySingle'); ?>"
        getData(data, url)
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function getData(data, url) {
        $.ajax({
            url: url,
            method: "GET",
            dataType: 'JSON',
            data: data,
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
                dataEntry = response.data
                var dataMentah = deepCopy(dataEntry.wasteGroup)
                dataEntry.wasteGroup = []
                dataEntry.wasteGroup.push(dataMentah)
                // console.log(dataEntry.wasteGroup)
                arrangeVariable()
            }
        })
    }

    function resetVariable() {
        variable_insert = {
            wasteMaterialCompute: [],
            wasteMaterial: [],
            deletedId: {
                wasteMaterialCompute: [],
                wasteMaterial: []
            }
        }
        data_entry_group = []
        data_entry_group_detail = []
        data_unknown_material = []
    }

    function arrangeVariable() {
        resetVariable()
        var indexMaterialGroup = 0
        var indexWaste = 0
        dataEntry.wasteGroup.forEach(a => {
            // product
            a.waste_groups.forEach(b => {
                // group waste
                var note = ''
                var qty = 0
                if (b.waste_material_compute) {
                    var id = b.waste_material_compute.id
                    note = b.waste_material_compute.note
                    qty = b.waste_material_compute.qty
                    // console.log(b.waste_material_compute.waste_materials)
                    // console.log(b.waste_group_details)
                    var datas = cariDataTidakAda(b.waste_material_compute.waste_materials, b.waste_group_details)
                    // console.log('-------------------------------')
                    // console.log(datas)
                    data_unknown_material.push({
                        id: id,
                        unknown_data: datas
                    })
                } else {
                    var id = new Date().getTime() + '' + b.waste_group.id
                    data_unknown_material.push({
                        id: id,
                        unknown_data: []
                    })
                }
                // data_unknown_material[indexWaste].push()
                variable_insert.wasteMaterialCompute.push({
                    'id': id,
                    'work_plan_id': dataAPI.workPlanMachine.work_plan_id,
                    'shift_id': dataAPI.workPlanMachine.shift_id,
                    'work_plan_product_id': a.work_plan_product_id,
                    'machine_id': dataAPI.workPlanMachine.machine.id,
                    'item_id_product': a.item_product.id,
                    'waste_group_id': b.waste_group.id,
                    'employee_id': user_id,
                    'datetime': getDateTime(a.datetime_end),
                    'unit_id': b.waste_group.unit_compute.id,
                    'qty': qty,
                    'note': note,
                })
                b.waste_group_details.forEach(c => {
                    // waste group
                    var dataWasteGroup = null
                    var idWasteMaterial = id + '' + c.material_group.id
                    var qtyDetail = 0
                    var qtyDetailCompute = 0
                    if (b.waste_material_compute) {
                        // jika ada waste material compute
                        var findWaste = b.waste_material_compute.waste_materials.find((v, k) => {
                            if (v.material_group_id == c.material_group.id) return true
                        })
                        if (findWaste) {
                            dataWasteGroup = deepCopy(findWaste)
                        }
                        if (!dataWasteGroup) {
                            // jika waste group tidak tersedia
                            dataWasteGroup = null
                            var dataItem = c.items.find((v, k) => {
                                if (v.item.id_default) return true
                            })
                        } else {
                            // jika ada
                            idWasteMaterial = dataWasteGroup.id
                            qtyDetail = dataWasteGroup.qty
                            qtyDetailCompute = dataWasteGroup.qty_compute
                            var dataItem = c.items.find((v, k) => {
                                if (v.item.id == dataWasteGroup.item_material.id) return true
                            })
                        }
                    } else {
                        var dataItem = c.items.find((v, k) => {
                            if (v.item.id_default) return true
                        })
                    }
                    if (!dataItem) {
                        dataItem = c.items[0]
                    }

                    variable_insert.wasteMaterial.push({
                        'id': idWasteMaterial,
                        'waste_material_compute_id': id,
                        'work_plan_id': dataAPI.workPlanMachine.work_plan_id,
                        'shift_id': dataAPI.workPlanMachine.shift_id,
                        'work_plan_product_id': a.work_plan_product_id,
                        'machine_id': dataAPI.workPlanMachine.machine.id,
                        'item_id_product': a.item_product.id,
                        'item_id_material': dataItem.item.id,
                        'qty': qtyDetail,
                        'unit_id': dataItem.unit.id,
                        'unit_id_compute': dataItem.unit_compute.id,
                        'qty_compute': qtyDetailCompute,
                        'datetime': getDateTime(a.datetime_end),
                    })
                    // detail waste group (material group)
                    data_entry_group.push({
                        'waste_material_compute_id': id,
                        'waste_material_id': id + '' + c.material_group.id,
                        'id': a.id,
                        'product_id': a.item_product.id,
                        'waste_group_id': b.waste_group.id,
                        'waste_group_name': b.waste_group.name,
                        'waste_group_ratio': b.ratio_total,
                        'waste_unit_id': b.waste_group.unit_compute.id,
                        'material_group_id': c.material_group.id,
                        'material_group_name': c.material_group.name,
                        'material_group_ratio': c.ratio,
                        'data_waste_group_input': dataWasteGroup,
                        'item': []
                    })
                    c.items.forEach(d => {
                        // list item
                        data_entry_group[indexMaterialGroup].item.push({
                            'item_id': d.item.id,
                            'item_name': d.item.name,
                            'item_is_default': d.item.id_default,
                            'item_unit_id': d.unit.id,
                            'item_unit_name': d.unit.name,
                            'item_unit_multiplier': d.unit.multiplier,
                            // 'item_unit_operator': d.unit.operator,
                            'item_unit_compute_id': d.unit_compute.id,
                            'item_unit_compute_name': d.unit_compute.name,
                            'item_unit_compute_multiplier': d.unit_compute.multiplier,
                            'item_unit_compute_operator': d.unit_compute.operator,
                        })
                    });
                    indexMaterialGroup++
                });
                indexWaste++
            });
        });
        // console.log(data_unknown_material)
        menuWaste()
    }

    function menuWaste() {
        var html = ''
        html += '<div class="row">'
        html += '<div class="col-auto statusLine small-text pb-2 align-self-center fw-bold filter-border" style="cursor:pointer" onclick="statusLine(' + "'all'" + ')" id="colStatusLineall">Semua</div>'
        dataEntry.wasteGroup.forEach(e => {
            html += '<div class="col-auto statusLine small-text pb-2 align-self-center text-grey" style="cursor:pointer" onclick="statusLine(' + "'" + e.id + "'" + ')" id="colStatusLine' + e.id + '">' + e.item_product.alias + '</div>'
        })
        html += '</div>'
        $('#menuWaste').html(html)
        statusLine('all')
    }

    function statusLine(status) {
        if (status == 'all') {
            var data = dataEntry.wasteGroup
        } else {
            var data = dataEntry.wasteGroup.filter((v, k) => {
                if (v.id == status) return true
            })
        }
        listMaterial(data)
        coloringStatusLine(status)
    }

    function coloringStatusLine(status) {
        // DEFAULT COLOR
        $('.statusLine').each(function() {
            if ($(this).hasClass('fw-bold') && $(this).hasClass('filter-border')) {
                $(this).removeClass('fw-bold filter-border').addClass('text-grey');
            }
        });
        $('.statusLineIcon').each(function() {
            if ($(this).hasClass('bg-light-maroon') && $(this).hasClass('text-white')) {
                $(this).removeClass('bg-light-maroon text-white').addClass('bg-light text-grey');
            }
        });
        $('#colStatusLine' + status).removeClass('text-grey').addClass('fw-bold filter-border')
        $('#statusLineIcon' + status).removeClass('bg-light text-grey').addClass('bg-light-maroon text-white')
    }

    function listMaterial(data) {
        var html = ''
        data.forEach(e => {
            html += '<div class="card shadow-none rounded-0 border-end-0 border-start-0">'
            html += '<div class="card-body p-0">'
            html += '<div class="row m-0">'
            html += '<div class="col-7 border-end">'
            html += '<div class="row p-4">'
            html += '<div class="col-6">'
            html += '<b class="m-0 h1">' + e.item_product.alias + '</b>'
            html += '<p class="m-0 small-text">' + e.item_product.name + '</p>'
            html += '</div>'
            html += '<div class="col-6 align-self-center text-end">'
            html += '<button class="btn btn-primary" id="btnSaveAll" onclick="arrangeVariableInsertByProduct(' + "'" + e.work_plan_product_id + "'" + ')"><i class="fa fa-save me-1"></i> Save All</button>'
            html += '</div>'
            html += '<div class="col">'
            html += '<div class="row mt-4">'

            if (e.is_production_out) {
                e.waste_groups.forEach(el => {
                    var value = ''
                    var colorCard = ''
                    if (el.waste_material_compute) {
                        value = el.waste_material_compute.qty
                        colorCard = 'bg-light border-primary'
                    }
                    html += '<div class="col-12 mb-2">'
                    html += '<div class="card card-waste shadow-none border-2 pointer ' + colorCard + '" onclick="inputWaste(' + e.id + ',' + el.waste_group.id + ')">'
                    html += '<div class="card-body">'
                    html += '<div class="row">'
                    html += '<div class="col-6 align-self-center">'
                    html += '<p class="m-0 text-dark-grey"><b>' + el.waste_group.name + '</b></p>'
                    html += '</div>'
                    html += '<div class="col-3 text-center">'
                    html += '<input type="text" class="form-control nominal" autocomplete="off" id="text-waste' + e.id + '' + el.waste_group.id + '" style="border:none;background-color:transparent;" onclick="inputWaste(' + e.id + ',' + el.waste_group.id + ')" oninput="inputWaste(' + e.id + ',' + el.waste_group.id + ')" value="' + value + '">'
                    html += '<hr class="m-0" style="border:1px solid black;">'
                    html += '<button class="btn btn-sm btn-primary float-end mt-1 p-1 super-small-text" onclick="simpanData()" hidden><i class="fa fa-save me-1"></i>Save</button>'
                    html += '</div>'
                    html += '<div class="col-3 text-end align-self-center">'
                    html += '<p class="m-0 fw-bolder small">' + el.waste_group.unit_compute.name + '</p>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                    html += '</div>'
                });
                var notes = ''
                if (e.note_waste) {
                    notes = e.note_waste
                }
                html += '<div class="col-12 mb-2">'
                html += '<label class="small-text fw-bolder">Notes <span class="text-danger">(wajib)</span> : </label>'
                html += '<textarea class="form-control" rows="4" id="notes' + e.work_plan_product_id + '">' + notes + '</textarea>'
                html += '</div>'

            } else {
                html += emptyReturn('Waktu Production Out Belum Tersedia')
            }

            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '<div class="col-5" id="fillWaste">'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
        })
        $('#lisMaterial').html(html)
        // $('.nominal').number(true);
        emptyText('#fillWaste', 'Pilih Card untuk Melihat Informasi')
        if (id_waste_group_clicked && id_waste_group_clicked) {
            inputWaste(id_product_clicked, id_waste_group_clicked)
        }
    }

    function ubahTandaKoma(input) {
        // Mengecek apakah input mengandung tanda koma
        if (input.includes(',')) {
            // Mengganti tanda koma dengan titik
            input = input.replace(',', '.');
        }
        return input;
    }

    function reset() {
        dataProductionOut = []
        dataProductionOutGroup = []
    }

    function inputWaste(id, waste_group_id) {
        var statusText = false
        id_product_clicked = id
        id_waste_group_clicked = waste_group_id
        var inputValue = parseFloat(ubahTandaKoma($('#text-waste' + id + '' + waste_group_id).val()))
        if (!inputValue) {
            inputValue = 0
        }
        var data = data_entry_group.filter((v, k) => {
            if (v.id == id && v.waste_group_id == waste_group_id) return true
        })
        var html = ''
        html += '<div class="row p-0">'

        html += '<div class="col-12 p-4">'

        html += '<div class="row">'
        html += '<div class="col-8">'
        html += '<p class="m-0 super-small-text"><b>Detail Information</b></p>'
        html += '<p class="m-0 h3 mb-1"><b>' + data[0].waste_group_name + '</b></p>'
        html += '</div>'
        html += '<div class="col-4 align-self-center text-end">'
        html += '<button class="btn btn-sm btn-primary" id="btnSave' + id + '' + waste_group_id + '" onclick="arrangeVariableInsert(' + "'" + data[0].waste_material_compute_id + "'" + ')" hidden><i class="fa fa-save me-1"></i> Save</button>'
        html += '</div>'
        html += '<div class="col-12">'
        // note
        html += '<span class="note-field" id="note-field' + data[0].waste_material_compute_id + '">'
        html += noteField(id, waste_group_id, data[0].waste_material_compute_id)
        html += '</span>'
        // note
        html += '</div>'

        html += '</div>'

        html += '</div>'

        html += '<div class="col-12 p-0">'
        filteredVariable('wasteMaterialCompute', '', inputValue, data[0].waste_material_compute_id)
        data.forEach(e => {
            if (e.data_waste_group_input) {
                var dataItem = e.item.find((v, k) => {
                    if (v.item_id == e.data_waste_group_input.item_material.id) return true
                })
            } else {
                var dataItem = e.item.find((v, k) => {
                    if (v.item_is_default) return true
                })
            }
            html += '<div class="card rounded-0 shadow-none border-0 border-top border-bottom" style="background-color:transparent">'
            html += '<div class="card-body p-3">'
            html += '<div class="row">'
            html += '<div class="col-9">'
            html += '<p class="m-0 small-text fw-bolder">' + e.material_group_name + '</p>'
            var edit = ''
            if (e.item.length > 1) {
                edit = '<i class="fa fa-pencil text-primary ms-1 pointer" onclick="showEditItem(' + id + ',' + waste_group_id + ',' + e.material_group_id + ')"></i>'
            }
            html += '<p class="m-0 super-small-text" id="textItem' + id + '' + waste_group_id + '' + e.material_group_id + '">' + dataItem.item_name + ' ' + edit + '</p>'
            // select
            html += '<div class="row g-3" id="item' + id + '' + waste_group_id + '' + e.material_group_id + '" hidden>'
            html += '<div class="col-sm-10">'
            html += '<select name="" class="form-control form-control-sm p-1 item small-text">'
            if (e.item.length) {
                e.item.forEach(e => {
                    var select = ""
                    if (e.item_id == dataItem.item_id) {
                        select = 'selected'
                    }
                    html += '<option value="' + e.item_id + '" ' + select + ' data-name="' + e.item_name + '">' + e.item_name + '</option>'
                });
            } else {
                html += '<option value="" selected disabled>Tidak Ada Item</option>'
            }
            html += '</select>'
            html += '</div>'
            html += '<div class="col-sm align-self-center">'
            html += '<span class="fa fa-times text-danger ms-1 pointer" onclick="showEditItem(' + id + ',' + waste_group_id + ',' + e.material_group_id + ')"></span>'
            html += '</div>'
            html += '</div>'
            // seelect
            html += '</div>'
            html += '<div class="col-3 align-self-center text-end">'
            var totalQty = 0
            if (inputValue) {
                totalQty = roundToTwo(parseFloat(e.material_group_ratio) / parseFloat(e.waste_group_ratio) * parseFloat(inputValue))
            } else {
                totalQty = 0
            }
            // hitung compute
            var totalQtyCompute = 0
            eval('totalQtyCompute = ' + totalQty + '' + dataItem.item_unit_compute_operator + '' + dataItem.item_unit_compute_multiplier)

            if (e.data_waste_group_input) {
                // jika sudah ada inputannya sebelumnya
                if (totalQtyCompute != e.data_waste_group_input.qty_compute) {
                    // jika data sebelumnya tidak sama dengan perhitungan
                    statusText = true
                    html += '<p class="m-0 small-text fw-bold text-decoration-line-through">' + number_format(e.data_waste_group_input.qty_compute) + '</p>'
                    html += '<p class="m-0 small-text text-orange fw-bolder">' + number_format(totalQtyCompute) + '</p>'

                } else {
                    html += '<p class="m-0 small-text text-success fw-bolder">' + number_format(totalQtyCompute) + '</p>'
                }
            } else {
                // jika belum ada inputan sebelumnya
                html += '<p class="m-0 small-text text-orange fw-bold">' + number_format(totalQtyCompute) + '</p>'
                if (inputValue) {
                    statusText = true
                }
            }
            html += '</div>'
            html += '</div>'
            html += '</div>'
            html += '</div>'
            filteredVariable('wasteMaterial', '', totalQty, e.waste_material_id)
            filteredVariable('wasteMaterial', '_compute', totalQtyCompute, e.waste_material_id)
        })
        // untuk yang file yang harus dihapus
        var dataUnknown = data_unknown_material.find((v, k) => {
            if (v.id == data[0].waste_material_compute_id) return true
        })
        // console.log(dataUnknown)
        if (dataUnknown.unknown_data.length) {
            html += '<div class="card rounded-0 shadow-none border-0 border-top border-bottom" style="background-color:transparent">'
            html += '<div class="card-body p-3 pt-1 pb-1">'
            html += '<span class="m-0 super-small-text text-danger" id="example" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Data tersebut merupakan data yang sebelumnya tersimpan, akan tetapi material waste nya berubah pada produk tersebut. Sehingga waste material sebelumnya akan terhapus dan akan digantikan oleh waste dengan material yang baru"><i>This Data will Deleted after Save</i> <span class="fa fa-question-circle text-dark fa-1x"></span></span>'
            html += '</div>'
            html += '</div>'
            dataUnknown.unknown_data.forEach(e => {
                variable_insert.deletedId.wasteMaterial.push(e.id)
                html += '<div class="card rounded-0 shadow-none border-0 border-top border-bottom bg-light-danger" style="background-color:transparent">'
                html += '<div class="card-body p-3">'
                html += '<div class="row">'
                html += '<div class="col-1">'
                html += '<span class="fa fa-times text-danger fw-bolder"></span>'
                html += '</div>'
                html += '<div class="col-8">'
                html += '<p class="m-0 super-small-text fw-bolder">' + e.item_material.name + '</p>'
                html += '</div>'
                html += '<div class="col-3 align-self-center text-end">'
                html += '<p class="m-0 small-text fw-bolder">' + number_format(e.qty_compute) + '</p>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                html += '</div>'
            });
        }

        html += '</div>'
        html += '<div class="col-12 p-4">'
        html += '</div>'

        html += '</div>'
        $('#fillWaste').html(html)
        if (dataUnknown.unknown_data.length) {
            var exampleTriggerEl = document.getElementById('example')
            var popover = bootstrap.Popover.getOrCreateInstance(exampleTriggerEl)
        }
        showSaveButton(statusText, id, waste_group_id)
    }

    function convertTextToVariable(text) {
        return text.replace(/([A-Z])/g, '_$1').toLowerCase() + '_id';
    }

    function showSaveButton(status, id, waste_group_id) {
        if (status) {
            $('#btnSave' + id + '' + waste_group_id).removeAttr('hidden', true)
        } else {
            $('#btnSave' + id + '' + waste_group_id).attr('hidden', true)
        }
    }

    function showEditItem(id, waste_group_id, material_group_id) {
        if ($('#item' + id + '' + waste_group_id + '' + material_group_id).is('[hidden]')) {
            $('#item' + id + '' + waste_group_id + '' + material_group_id).removeAttr('hidden', true)
            $('#textItem' + id + '' + waste_group_id + '' + material_group_id).attr('hidden', true)
        } else {
            $('#item' + id + '' + waste_group_id + '' + material_group_id).attr('hidden', true)
            $('#textItem' + id + '' + waste_group_id + '' + material_group_id).removeAttr('hidden', true)
        }

    }

    function filteredVariable(variable, variable_input, value, id) {
        eval('variable_insert.' + variable + '.find((v, k) => {if (v.id == id)return true}).qty' + variable_input + ' = ' + value)
    }

    function deepCopy(obj) {
        return JSON.parse(JSON.stringify(obj));
    }

    function arrangeVariableInsert(id = null) {
        if (id) {
            var data = findDataById(id, variable_insert)
        } else {
            var data = variable_insert
        }
        simpanData(data)
        // console.log(data)
    }

    function arrangeVariableInsertByProduct(id) {
        var data = deepCopy(variable_insert)
        var wasteMaterial = data.wasteMaterial.filter((v, k) => {
            if (v.work_plan_product_id == id) return true
        })
        var wasteMaterialCompute = data.wasteMaterialCompute.filter((v, k) => {
            if (v.work_plan_product_id == id) return true
        })
        var notes = $('#notes' + id).val()
        var workPlanProduct = [{
            id: id,
            note_waste: notes,
        }]
        var dataFiltered = {
            deletedId: data.deletedId,
            wasteMaterial: wasteMaterial,
            wasteMaterialCompute: wasteMaterialCompute,
            workPlanProduct: workPlanProduct,
        }

        // console.log(dataFiltered)
        if (notes) {
            simpanData(dataFiltered)
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Notes masih Kosong',
                text: 'Harap mengisi notes terlebih dahulu'
            });
        }
    }

    function simpanData(data) {
        var type = 'POST'
        var button = '#btnSimpan'
        var url = '<?php echo api_produksi('setWasteMaterial'); ?>'
        kelolaData(data, type, url, button)
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
                $(button).prop("disabled", false);
                $('#modal').modal('hide')
                loadData()
            }
        });
    }

    function changeNoteField(id, waste_group_id, waste_material_compute_id) {
        var data = variable_insert.wasteMaterialCompute.find((v, k) => {
            if (v.id == waste_material_compute_id) return true
        })
        var html = '<textarea class="form-control w-100 textingNote" rows="5" placeholder="Tuliskan note disini" id="notes' + waste_material_compute_id + '" data-id="' + id + '" data-waste_group_id="' + waste_group_id + '" oninput="textingNote(' + id + ',' + waste_group_id + ',' + waste_material_compute_id + ')">' + data.note + '</textarea>'
        // html += '<button class="btn btn-sm btn-success float-end mt-1" onclick="simpanNote(' + id + ')">Simpan</button>'
        $('#note-field' + waste_material_compute_id).html(html).focus()
    }

    function noteField(id, waste_group_id, waste_material_compute_id) {
        var data = variable_insert.wasteMaterialCompute.find((v, k) => {
            if (v.id == waste_material_compute_id) return true
        })
        var note = '<i class="text-light-grey">Tambahkan Note Disini</i>'
        if (data.note) {
            note = data.note
        }
        var html = '<p class="m-0 text-dark-grey small-text pointer" onclick="changeNoteField(' + id + ',' + waste_group_id + ',' + waste_material_compute_id + ')"><i class="fa fa-sticky-note me-2"></i>' + note + ' <i class="fa fa-pencil text-primary ms-2"></i></p>'
        return html
    }

    function textingNote(id, waste_group_id, waste_material_compute_id) {
        var value = $('#notes' + waste_material_compute_id).val()
        variable_insert.wasteMaterialCompute.find((v, k) => {
            if (v.id == waste_material_compute_id) return true
        }).note = value
    }
    $(document).on('focusout', '.textingNote', function(e) {
        var value = e.target.value
        var id = e.target.dataset.id
        var waste_group_id = e.target.dataset.waste_group_id
        var waste_material_compute_id = e.target.id.replace('notes', '');
        if (value) {
            showSaveButton(true, id, waste_group_id)
        } else {
            showSaveButton(false, id, waste_group_id)
        }
        $('#note-field' + waste_material_compute_id).html(noteField(id, waste_group_id, waste_material_compute_id))
    })
</script>