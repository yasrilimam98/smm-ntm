<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $datas->materialRequest[0]->code ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Nunito', sans-serif;
            font-size: 12px;
        }

        .table_main,
        .th_main,
        .td_main {
            border: 1px solid black;
            border-color: #444941;
            border-collapse: collapse;
        }

        .td_main {
            font-size: 11px;
            padding: 5px;
            vertical-align: middle;

        }

        .bg_color_blue {
            background-color: #CEE5D0;
        }

        .bg_color_yellow {
            background-color: #FFE162;
        }

        .th_main {
            padding: 10px;
            height: 10px;
            text-align: center;
            word-wrap: break-word;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .page_break {
            page-break-before: always;
        }

        @page {
            margin-top: 90px;
            margin-bottom: 70px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            height: 70px;
        }

        header {
            position: fixed;
            top: -60px;
            height: 100px;
        }

        body {
            margin-top: 70px;
            margin-bottom: 100px;
        }
    </style>
</head>

<body style="padding:10px;text-align: center;">
    <header>
        <table style="width: 100%;margin-bottom:5px;">
            <tr style="border-bottom: 1px black;">
                <td style="width: 10%;">
                    <?php
                    $image = base_url() . 'assets/image/logo/SMM.png';
                    // Read image path, convert to base64 encoding
                    $imageData = base64_encode(file_get_contents($image));

                    // Format the image SRC:  data:{mime};base64,{data};
                    $src = 'data:image/png;base64,' . $imageData;
                    ?>
                    <img src="<?= $src ?>" style="height:70px;">
                </td>
                <td style="width: 80%;text-align: center;">
                    <p style="text-align: center;">
                        <b><span style="font-size:20px;">PT. SINAR MAHKOTA MAS</span></b>
                        <br>
                        <span style="font-size:12px;">Jalan Bandulan Barat No. 37 RT.008 RW.001</span>
                        <br>
                        <span style="font-size:12px;">Bandulan - Sukun - Malang</span>
                        <br>
                        <span style="font-size:12px;">Email : purchasing@pt-smm.com ; purcsmm@gmail.com</span>
                    </p>
                </td>
                <td style="width: 10%;"></td>
            </tr>
        </table>
        <hr style="height:2px;border:none;color:#333;background-color:#333;margin-bottom:20px;" />
    </header>
    <main>
        <h3>PERMINTAAN NTM MAKER DAN PACKER/HLP</h3>
        <table style="width: 100%;padding:0px;margin-bottom:30px;margin-top:30px;">
            <tr>
                <td style="width: auto;text-align:left;padding:0px;">Tanggal</td>
                <td style="width: 2px;">:</td>
                <td style="word-wrap: break-word;width: 90%;"><?= date("d M Y", strtotime($datas->materialRequest[0]->date)); ?></td>
            </tr>
            <tr>
                <td style="width: auto;text-align:left;padding:0px;">Shift</td>
                <td style="width: 2px;">:</td>
                <td style="word-wrap: break-word;width: 90%;">1 (07.00 - 15.00)</td>
            </tr>
        </table>
        <!-- MAKER -->
        <?php
        foreach ($datas->machineMaterialHeader as $k => $v) { ?>
            <table style="width:100%;margin-top:30px;margin-bottom:30px;" class="table_main">
                <tr style="text-align: center">
                    <th class="th_main" style="width: 15%;">ID MATERIAL</th>
                    <th class="th_main" style="width:35%">NAMA BAHAN</th>
                    <th class="th_main" style="width: 15%;">SATUAN</th>
                    <?php
                    $sub_type_id = 0;
                    foreach ($v as $value) {
                        if ($value->detail != null) {
                            $sub_type_id = $value->detail->sub_type_id;
                    ?>
                            <th class="th_main"><?= $value->label ?></th>
                    <?php }
                    } ?>
                </tr>
                <?php foreach ($datas->machineSubtypeMaterial as $materials) {
                    if ($materials->machine_sub_type == $sub_type_id) {
                        foreach ($materials->material as $item) {
                ?>
                            <tr>
                                <td class="td_main" style="text-align: center;"><?= $item->code ?></td>
                                <td class="td_main"><?= $item->name ?></td>
                                <td class="td_main" style="text-align:center;"><?= $item->unit->name ?></td>
                                <?php foreach ($v as $value) {
                                    if ($value->detail != null) { ?>
                                        <td class="td_main" style="text-align:right;">
                                            <?php foreach ($datas->materialRequestItem[0]->material[0] as $value2) {
                                                if ($value2->material->id == $item->id) { ?>
                                                    <?= number_format($value2->qty_request, 2, ',', '.') ?>
                                            <?php }
                                            } ?>
                                        </td>
                                <?php
                                    }
                                } ?>
                            </tr>
                <?php }
                    }
                } ?>
            </table>
        <?php } ?>
        <table style="width: 100%;">
            <tr style="vertical-align: top;">
                <td style="width: 50%;">
                    <div style="text-align: left;">
                        <b style="margin-bottom: 10px;">CATATAN :</b>
                        <div style="word-wrap: break-word;"></div>
                    </div>
                </td>
                <td style="width: 50%;text-align:center;">
                    <b style="font-size:14px;">SCAN QRCODE</b>
                    <p style="margin: 0px;margin-bottom:10px;">Scan untuk Melihat Persetujuan</p>
                    <img src="<?= base64_decode(str_replace(' ', '', $qrcode)) ?>" style="width:100px; height:100px">
                    <!-- <div style="width:100px; height:100px; margin-top:15px;text-align:center;margin:0 auto;display:none;"></div> -->
                </td>
            </tr>
        </table>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/qrcode.js"></script>
    </main>
</body>

</html>