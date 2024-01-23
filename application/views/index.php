<style>
    .bg-rainbow {
        background: rgb(241, 94, 75);
        background: linear-gradient(31deg, rgba(241, 94, 75, 1) 3%, rgba(125, 35, 140, 1) 32%, rgba(48, 30, 103, 1) 63%, rgba(3, 0, 28, 1) 100%);
    }

    .position-pojok {
        position: fixed;
        bottom: 0px;
        right: 0px;
    }

    .bg-morning {
        background: url('./assets/image/background/morning.jpg') no-repeat center center fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bg-day {
        background: url('./assets/image/background/day.jpg') no-repeat center center fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bg-night {
        background: url('./assets/image/background/night.jpg') no-repeat center center fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

    textarea::-webkit-resizer {
        display: none;
        /* Hilangkan handle pengubah ukuran di pojok kanan bawah untuk browser berbasis WebKit */
    }

    .btn-check:checked+.btn-warning,
    .btn-check:active+.btn-warning,
    .btn-warning:active,
    .btn-warning.active,
    .show>.btn-warning.dropdown-toggle {
        color: #fff;
        background-color: #c38100;
        border-color: #b77900;
        border-radius: 20px;
    }

    .btn-check.btn-warning,
    .btn-check.btn-warning,
    .btn-warning,
    .btn-warning.active,
    .show>.btn-warning.dropdown-toggle {
        color: #c38100;
        background-color: white;
        border-color: #b77900;
        border-radius: 20px;
    }

    .small-text {
        font-size: 11px;
    }

    .super-small-text {
        font-size: 10px;
    }

    .has-search .form-control {
        padding-left: 2.375rem;
        border-radius: 20px;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.4rem;
        height: 2rem;
        line-height: 2rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    .circular-landscape {
        display: inline-block;
        position: relative;
        width: 120px;
        height: 120px;
        overflow: hidden;
        border-radius: 50%;
    }

    .circular-landscape img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .btn-check:checked+.btn-outline-switch-chart,
    .btn-check:active+.btn-outline-switch-chart,
    .btn-outline-switch-chart:active,
    .btn-outline-switch-chart.active,
    .btn-outline-switch-chart.dropdown-toggle.show {
        color: #fff;
        background-color: #969696;
        border-color: #969696;
    }

    .btn-outline-switch-chart {
        color: #969696;
        border-color: #969696;
    }

    .bg-storage-1 {
        background-color: #025464 !important;
        border-color: #025464 !important;
        color: white !important;
    }

    th,
    td {
        background-color: white !important;
    }

    .birthday-frame {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
        background: url('./assets/image/logo/birthday-frame.png') center/cover no-repeat;
    }

    #confetti {
        overflow-y: hidden;
        overflow-x: hidden;
        width: 100%;
        margin: 0;
        height: 100%;
        position: absolute;
        top: 0;
    }
</style>
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
<main>
    <!-- <header class="page-header page-header-dark pb-5">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
            </div>
        </div>
    </header> -->
    <canvas id="confetti"></canvas>
    <header class="page-header page-header-dark bg-scene pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4 pb-3">
                <div class="row align-items-center mt-4">
                    <div class="col-2 pe-0 ps-0 text-center align-self-center">
                        <div class="circular-landscape">
                            <?php if ($this->session->userdata('image_profile')) { ?>
                                <img src="https://assets-hr.s3.ap-southeast-3.amazonaws.com/employee/photo/<?= $this->session->userdata('image_profile') ?>" />
                            <?php } else { ?>
                                <img src="<?= base_url('assets/img/illustrations/profiles/profile-2.png') ?>" />
                            <?php } ?>
                            <div class="birthday-frame" id="birthdayFrame" hidden></div>
                        </div>
                    </div>
                    <div class="col-6 ps-0">
                        <h1 class="text-white m-0" style="font-size: 30px;">Good <span id="salam"></span> !</h1>
                        <p class="m-0 lh-1" style="font-size: 50px;"><b><span id="full_name" class="text-white"><?= $full_name ?></span></b></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row mt-4">
            <!-- <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading fw-bolder">Fitur Baru ✨</h4>
                    <p>Menampilkan foto profil yang sudah anda upload di Athena, silahkan logout login terlebih dahulu :)</p>
                </div>
            </div> -->
            <?php if (if_dashboard_report()) { ?>
                <div class="col-12 col-md-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-4 align-self-center">
                                    <b class="small"><i class="fa fa-industry me-2 text-warning"></i>Pencapaian Target</b>
                                </div>
                                <div class="col-4 text-center align-self-center">
                                    <input type="radio" class="btn-sm btn-check" name="options" id="option1" autocomplete="off" onclick="changePeriodOption('DAILY')">
                                    <label class="btn btn-sm btn-warning shadow-none super-small-text" for="option1">Daily</label>

                                    <input type="radio" class="btn-sm btn-check" name="options" id="option2" autocomplete="off" onclick="changePeriodOption('WEEKLY')" checked>
                                    <label class="btn btn-sm btn-warning shadow-none super-small-text" for="option2">Weekly</label>

                                    <input type="radio" class="btn-sm btn-check" name="options" id="option4" autocomplete="off" onclick="changePeriodOption('MONTHLY')">
                                    <label class="btn btn-sm btn-warning shadow-none super-small-text" for="option4">Monthly</label>
                                </div>
                                <div class="col-4 align-self-center">
                                    <div class="btn-toolbar justify-content-end" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="form-group has-search me-2">
                                            <span class="fa fa-search form-control-feedback"></span>
                                            <input type="text" class="form-control-sm form-control" placeholder="Search Product" id="search_nama" autocomplete="off">
                                        </div>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked onclick="changePencapaianTarget('table')">
                                            <label class="btn btn-outline-switch-chart shadow-none" for="btnradio1"><i class="fa fa-table"></i></label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" onclick="changePencapaianTarget('chart')">
                                            <label class="btn btn-outline-switch-chart shadow-none" for="btnradio3"><i class="fa fa-bar-chart"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4" id="pencapaianTarget">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto align-self-center">
                                    <b class="small"><i class="fa fa-tasks me-2 text-warning"></i>Penyimpanan</b>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="radio" class="btn-sm btn-check" name="optionGudang" id="optionGudang1" autocomplete="off" checked>
                                            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="optionGudang1">Penampung HLP</label>

                                            <input type="radio" class="btn-sm btn-check" name="optionGudang" id="optionGudang2" autocomplete="off">
                                            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="optionGudang2">Gudang WIP</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row mt-3">
                                        <p class="m-0 fw-bolder">Total All</p>
                                        <h1 class="m-0 fw-bolder" style="font-size: 50px;">340,000</h1>
                                        <p class="m-0">Trays</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row mt-3">
                                        <?php for ($i = 0; $i < 15; $i++) { ?>
                                            <div class="col-2">
                                                <div class="card shadow-none mb-2">
                                                    <div class="card-body">
                                                        <p class="m-0 super-small-text">FMK.ABOF-ST</p>
                                                        <p class="m-0 small-text fw-bolder">Armour Bold Filter - Stick</p>
                                                    </div>
                                                    <div class="card-footer pt-2 pb-2">
                                                        <div class="row justify-content-between">
                                                            <div class="col-auto">
                                                                <p class="m-0 small-text fw-bolder text-warning">2,800</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <p class="m-0 small-text fw-bolder">Tray</p>
                                                            </div>
                                                        </div>
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
                <div class="col-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto align-self-center">
                                    <b class="small"><i class="fa fa-bar-chart me-2 text-warning"></i>Sisa Hasil Produksi</b>
                                </div>
                                <div class="col-auto align-self-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="radio" class="btn-sm btn-check" name="optionSisaProduksi" id="optionSisaProduksi1" autocomplete="off" checked>
                                            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="optionSisaProduksi1">MAKER 9 A</label>

                                            <input type="radio" class="btn-sm btn-check" name="optionSisaProduksi" id="optionSisaProduksi2" autocomplete="off">
                                            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="optionSisaProduksi2">MAKER 9 B</label>

                                            <input type="radio" class="btn-sm btn-check" name="optionSisaProduksi" id="optionSisaProduksi2" autocomplete="off">
                                            <label class="btn btn-sm btn-warning shadow-none super-small-text" for="optionSisaProduksi2">MAKER 9 C</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row mt-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-12 col-md-8">
                    <div class="card shadow-sm mb-4 h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <b class="small">Quick Menu <i class="ms-2 fa fa-flash text-warning"></i></b>
                                </div>
                                <div class="col">
                                </div>
                                <div class="col-12 pt-3">
                                    <div class="row">
                                        <div class="col">
                                            <b>
                                                <h3>Hai Para Pekerja Hebat!</h3>
                                            </b>
                                            <p class="small mt-3">Anda telah bekerja keras sepanjang hari, dan sekarang saatnya untuk memanjakan diri Anda dengan beristirahat sejenak dan makan cemilan kesukaanmu. Lihatlah kami membuat insight selama anda membuka aplikasi ini.</p>
                                        </div>
                                        <div class="col align-self-center">
                                            <div class="row">
                                                <div class="col-6 text-center border-end">
                                                    <b id="totalPageVisited">0</b>
                                                    <p class="m-0 small">Page Visited</p>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <b id="totalMostVisited">-</b>
                                                    <p class="m-0 small">Most Visited</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm mb-4 h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <b class="small float-start">Quick Notes <i class="ms-2 fa fa-thumb-tack text-danger"></i></b>
                                </div>
                                <div class="col">
                                    <i class="fa fa-trash text-light float-end" style="cursor:pointer;" id="btnHapusTextarea"></i>
                                </div>
                                <div class="col-12 pt-3">
                                    <textarea class="form-control shadow-none" id="myTextarea" rows="10" style="border: none;outline: none;padding:0px;border-radius:0px;" placeholder="Tuliskan Catatan Penting Anda Disini"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="position-absolute bottom-0 end-0">
        <!-- <img src="<?= base_url() ?>assets/image/gif/astronaut-1.svg" style="width: 300px;"> -->
    </div>
</main>
<script src="<?= base_url(); ?>assets/smm/format.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var akun = '<?= $this->session->userdata('username') ?>'
    var user_id = '<?= $this->session->userdata('employee_id') ?>'
    var machineId = []
    var modetarget = 'table'
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
<script>
    function findDataByDate(dataArray, targetDate) {
        // Mengubah tanggal target ke dalam format yang sama dengan data
        const formattedTargetDate = new Date(targetDate).toISOString();

        // Mencari objek yang memiliki rentang tanggal yang mencakup tanggal target
        const result = dataArray.find(item => {
            const startDate = new Date(item.date.start).toISOString();
            const endDate = new Date(item.date.end).toISOString();

            return formatDate(formattedTargetDate) >= formatDate(startDate) && formatDate(formattedTargetDate) <= formatDate(endDate);
        });

        return result;
    }

    function updateTime() {
        const currentTime = new Date();
        const currentHour = currentTime.getHours();
        $('.bg-scene').removeClass('bg-morning bg-day bg-night')
        if (currentHour >= 5 && currentHour < 12) {
            $('.bg-scene').addClass('bg-morning')
            $('#salam').html('Morning')
        } else if (currentHour >= 12 && currentHour < 18) {
            $('.bg-scene').addClass('bg-day')
            $('#salam').html('Afternoon')
        } else {
            $('.bg-scene').addClass('bg-night')
            $('#salam').html('Evening')
        }
    }

    function getFirstDate() {
        // Mendapatkan tanggal hari ini
        const today = new Date();
        var year = today.getFullYear();

        // Format tanggal menjadi string 'YYYY-MM-DD'
        const formattedDate = year + "-01-01";

        return formattedDate;
    }
    var access = '<?= if_dashboard_report() ?>'
    $(document).ready(function() {
        // $('#layoutSidenav_content').addClass('bg-rainbow')
        setInterval(updateTime, 1000);
        initialPageVisited()
        if (!access) {
            var textarea = document.getElementById("myTextarea");
            textarea.focus();
            $('#myTextarea').val(getCookie('myTextarea'))
        } else {
            // pencapaianTarget()
            loadData()
        }
    });
    var data_machine
    var data_user
    var data_pencapaian
    var periodOption = 'WEEKLY'


    function isUlangTahun(date) {
        var tanggalLahir = new Date(date);
        // Mendapatkan tanggal hari ini
        var hariIni = new Date();

        // Mendapatkan tanggal ulang tahun pada tahun ini
        var ulangTahunTahunIni = new Date(hariIni.getFullYear(), tanggalLahir.getMonth(), tanggalLahir.getDate());

        // Memeriksa apakah hari ini adalah ulang tahun
        var hasil = (hariIni.toDateString() === ulangTahunTahunIni.toDateString());

        return hasil;
    }

    function loadData() {
        $.ajax({
            url: "https://rest.pt-bks.com/hr_lr/smm/get-data-employee",
            method: "GET",
            dataType: 'JSON',
            data: {
                employee_id: user_id,
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_user = response['data']
                if (data_user.person.birth_date) {
                    var isBirthday = isUlangTahun(data_user.person.birth_date)
                    if (isBirthday) {
                        Draw()
                        $('#birthdayFrame').prop('hidden', false)
                    } else {
                        $('#birthdayFrame').prop('hidden', true)
                    }
                }
                loadMachine()
            }
        })
    }

    function loadMachine() {
        $.ajax({
            url: "<?= api_produksi('loadPageMachineReport'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                employeeId: user_id,
            },
            error: function(xhr) {

            },
            beforeSend: function() {

            },
            success: function(response) {
                data_machine = response['data']
                data_machine.machine.forEach(e => {
                    machineId.push(e.id)
                });
                machineId = arrayToString(machineId)
                loadPencapaianTarget()
            }
        })
    }

    function changePeriodOption(stats) {
        periodOption = stats
        loadPencapaianTarget()
    }


    function loadPencapaianTarget() {
        $.ajax({
            url: "<?= api_produksi('getDashboardPlanActual'); ?>",
            method: "GET",
            dataType: 'JSON',
            data: {
                dateStart: getFirstDate(),
                dateEnd: currentDate(),
                machineId: machineId,
                periodOption: periodOption
            },
            error: function(xhr) {},
            beforeSend: function() {},
            success: function(response) {
                data_pencapaian = response['data'].planActual
                pencapaianTarget()
            }
        })
    }

    function arrayToString(arr) {
        var resultString = arr.join(',');
        return resultString;
    }

    function initialPageVisited() {
        var data = JSON.parse(getCookie('arrayVisited'))
        var dataFiltered = data.filter((v, k) => {
            if (v.akun == akun) return true
        })
        // console.log(data)
        if (dataFiltered.length) {
            // Mencari nilai terbesar
            var maxValue = dataFiltered.reduce(function(prev, current) {
                return (prev.count > current.count) ? prev : current;
            })
            var sum = dataFiltered.reduce(function(acc, current) {
                return acc + current.count;
            }, 0);
        } else {
            var maxValue = '-'
            var sum = 0
        }

        $('#totalMostVisited').html(maxValue.name)
        $('#totalPageVisited').html(sum)
    }


    $(document).on('keyup', '#myTextarea', function(e) {
        var text = $('#myTextarea').val()
        simpanTextarea(text)
    })
    $(document).on('click', '#btnHapusTextarea', function(e) {
        Swal.fire({
            text: 'Data akan terhapus semua, Apakah anda yakin ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
        }).then((result) => {
            if (result.isConfirmed) {
                deleteTextarea()
            }
        })
    })

    function deleteTextarea() {
        $('#myTextarea').val('')
        simpanTextarea('')
    }

    function simpanTextarea(text) {
        setCookie("myTextarea", text);
    }

    // Menyimpan data ke dalam cookie dengan masa berlaku yang panjang
    function setCookie(name, value) {
        var expirationDate = new Date();
        expirationDate.setFullYear(expirationDate.getFullYear() + 10); // Masa berlaku 10 tahun

        var cookie = name + "=" + encodeURIComponent(value) + "; expires=" + expirationDate.toUTCString() + "; path=/";
        document.cookie = cookie;
    }

    // Mengambil nilai dari cookie
    function getCookie(name) {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();
            if (cookie.indexOf(name + "=") === 0) {
                return decodeURIComponent(cookie.substring(name.length + 1));
            }
        }
        return null;
    }
</script>
<script>
    function changePencapaianTarget(x) {
        modetarget = x
        pencapaianTarget()
    }

    function pencapaianTarget() {
        if (modetarget == 'table') {
            targetTable()
        } else {
            targetChart()
        }
    }

    function targetTable() {
        var html = ''
        var heading = data_pencapaian[0].data
        html += '<table class="table table-sm table-bordered table-hover w-100" id="tableDetail">'
        html += '<thead>'
        html += '<tr>'
        html += '<th class="align-middle" rowspan="2">Produk</th>'
        html += '<th class="align-middle" rowspan="2">Unit</th>'
        heading.forEach(e => {
            html += '<th class="align-middle" colspan="3">' + e.index + '</th>'
        });
        html += '</tr>'
        html += '<tr>'
        heading.forEach(e => {
            html += '<th style="width:90px;">Plan</th>'
            html += '<th style="width:90px;">Aktual</th>'
            html += '<th style="width:90px;">Persentase</th>'
        })
        html += '</tr>'
        html += '</thead>'
        html += '<tbody class="small-text">'
        data_pencapaian.forEach(e => {
            html += '<tr>'
            html += '<td class="text-nowrap">' + e.item.name + '</td>'
            html += '<td class="text-center text-nowrap">' + e.unit.name + '</td>'
            e.data.forEach(el => {
                html += '<td class="text-center">' + number_format(roundToTwo(el.data.qty_plan)) + '</td>'
                html += '<td class="text-center">' + number_format(roundToTwo(el.data.qty_actual)) + '</td>'
                var percen = 0
                if (!el.data.qty_plan || !el.data.qty_actual) {
                    percen = 0
                } else {
                    percen = roundToTwo(parseFloat(el.data.qty_actual) / parseFloat(el.data.qty_plan) * 100)
                }
                html += '<td class="text-center">' + percen + '%</td>'
            });
            html += '</tr>'
        });
        html += '</tbody>'
        html += '</table>'
        $('#pencapaianTarget').html(html)
        $('#tableDetail').DataTable({
            ordering: false, // Menonaktifkan pengurutan
            pageLength: 200,
            scrollY: "400px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedHeader: true,
            fixedColumns: {
                left: 2
            },
            paging: false,
            searching: false,
        })
    }

    function targetChart() {
        var html = ''
        html += '<div class="row justify-content-center">'
        html += '<div class="col-auto text-center">'

        html += '<div class="row">'
        html += '<div class="col-auto align-self-center pointer">'
        html += '<span id="mengurangiHari"><i class="fa fa-chevron-left"></i></span>'
        html += '</div>'
        html += '<div class="col-auto">'
        html += '<p class="m-0 fw-bolder">Week 1</p>'
        html += '<p class="m-0 small-text">1 Januari 2024 - 7 Januari 2024</p>'
        html += '</div>'
        html += '<div class="col-auto align-self-center pointer">'
        html += '<span id="mengurangiHari"><i class="fa fa-chevron-right"></i></span>'
        html += '</div>'
        html += '</div>'


        html += '</div>'
        html += '<div class="col-12 text-center">'
        // form

        // form
        html += '</div>'
        html += '<div class="col-12">'
        html += '<div id="myChart"></div>'
        html += '</div>'
        html += '</div>'
        $('#pencapaianTarget').html(html)
        arrangeVariableChart()
    }

    function arrangeVariableChart() {
        var dataToday = findDataByDate(data_pencapaian[0].data, currentDate());
        var actualData = []
        var targetData = []
        var brandList = []
        data_pencapaian.forEach(e => {
            brandList.push(e.item.code)
            e.data.forEach(el => {
                if (el.index == dataToday.index) {
                    actualData.push(roundToTwo(el.data.qty_actual))
                    targetData.push(roundToTwo(el.data.qty_plan))
                }
            });
        });
        settingChart(actualData, targetData, brandList)
    }

    function settingChart(actualData, targetData, brandList) {
        var options = {
            series: [{
                name: 'Aktual',
                data: actualData
            }, {
                name: 'Target',
                data: targetData
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: brandList,
            },
            yaxis: {
                title: {
                    // text: '$ (thousands)'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "" + val + " Batang"
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#myChart"), options);
        chart.render();
        // const ctx = document.getElementById('myChart');
        // const dateList = ['ABOF', 'ABLF', 'ACF']
        // const data = {
        //     labels: dateList,
        //     datasets: [{
        //             label: 'Target Plan',
        //             data: [2000, 3000, 5000],
        //             backgroundColor: '#025464',
        //         },
        //         {
        //             label: 'Aktual',
        //             data: [1500, 1000, 3000],
        //             backgroundColor: '#E8AA42',
        //         },
        //     ]
        // };
        // new Chart(ctx, {
        //     type: 'bar',
        //     data: data,
        //     options: {
        //         plugins: {},
        //         responsive: true,
        //         scales: {
        //             x: {
        //                 stacked: true,
        //             },
        //             y: {
        //                 stacked: true
        //             }
        //         }
        //     }
        // });
    }
</script>
<script>
    let W = window.innerWidth;
    let H = document.getElementById('confetti').clientHeight;
    const canvas = document.getElementById('confetti');
    const context = canvas.getContext("2d");
    const maxConfettis = 25;
    const particles = [];

    const possibleColors = [
        "#ff7336",
        "#f9e038",
        "#02cca4",
        "#383082",
        "#fed3f5",
        "#b1245a",
        "#f2733f"
    ];

    function randomFromTo(from, to) {
        return Math.floor(Math.random() * (to - from + 1) + from);
    }

    function confettiParticle() {
        this.x = Math.random() * W; // x
        this.y = Math.random() * H - H; // y
        this.r = randomFromTo(11, 33); // radius
        this.d = Math.random() * maxConfettis + 11;
        this.color =
            possibleColors[Math.floor(Math.random() * possibleColors.length)];
        this.tilt = Math.floor(Math.random() * 33) - 11;
        this.tiltAngleIncremental = Math.random() * 0.07 + 0.05;
        this.tiltAngle = 0;

        this.draw = function() {
            context.beginPath();
            context.lineWidth = this.r / 2;
            context.strokeStyle = this.color;
            context.moveTo(this.x + this.tilt + this.r / 3, this.y);
            context.lineTo(this.x + this.tilt, this.y + this.tilt + this.r / 5);
            return context.stroke();
        };
    }

    function Draw() {
        const results = [];

        // Magical recursive functional love
        requestAnimationFrame(Draw);

        context.clearRect(0, 0, W, window.innerHeight);

        for (var i = 0; i < maxConfettis; i++) {
            results.push(particles[i].draw());
        }

        let particle = {};
        let remainingFlakes = 0;
        for (var i = 0; i < maxConfettis; i++) {
            particle = particles[i];

            particle.tiltAngle += particle.tiltAngleIncremental;
            particle.y += (Math.cos(particle.d) + 3 + particle.r / 2) / 2;
            particle.tilt = Math.sin(particle.tiltAngle - i / 3) * 15;

            if (particle.y <= H) remainingFlakes++;

            // If a confetti has fluttered out of view,
            // bring it back to above the viewport and let if re-fall.
            if (particle.x > W + 30 || particle.x < -30 || particle.y > H) {
                particle.x = Math.random() * W;
                particle.y = -30;
                particle.tilt = Math.floor(Math.random() * 10) - 20;
            }
        }

        return results;
    }

    window.addEventListener(
        "resize",
        function() {
            W = window.innerWidth;
            H = window.innerHeight;
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        },
        false
    );

    // Push new confetti objects to `particles[]`
    for (var i = 0; i < maxConfettis; i++) {
        particles.push(new confettiParticle());
    }

    // Initialize
    canvas.width = W;
    canvas.height = H;
</script>