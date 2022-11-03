<div class="row">
    <div class="col-sm-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">No Rekening Toko</h3>
            </div>
            <div class="card-body">

                <p>Anda Dapat Transfer pembayaran melalui rekening di bawah ini / Melalui DANA,OVO,Gopay sebesar :
                <h1 class="text-primary">Rp. <?= number_format($pesanan->total_bayar, 0) ?>.-</h1>
                </p><br>
                <table class="table">
                    <tr>
                        <th>Bank</th>
                        <th>No Rekening</th>
                        <th>Atas Nama</th>
                    </tr>
                    <?php foreach ($rekening as $key => $value) { ?>
                        <tr>
                            <td><?= $value->nama_bank ?></td>
                            <td><?= $value->no_rek ?></td>
                            <td><?= $value->atas_nama ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>


    <div class="col-sm-6">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Upload Bukti Pembayaran</h3>
            </div>
            <hr>


            <?php
            echo form_open_multipart('pesanan_saya/bayar/' . $pesanan->id_transaksi);
            ?>
            <div class="row">
                <!-- PEMBAYARAN TRANSFER -->
                <div class="col">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Via Transfer</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Atas Nama</label>
                                <input name="atas_nama" class="form-control" placeholder="Atas Nama" required>
                            </div>

                            <div class="form-group">
                                <label>Nama Bank</label>
                                <input name="nama_bank" class="form-control" placeholder="Nama Bank" required>
                            </div>

                            <div class="form-group">
                                <label>No. Rekening</label>
                                <input name="no_rek" class="form-control" placeholder="No. Rekening" required>
                            </div>

                            <div class="form-group">
                                <label>Bukti Transfer</label>
                                <input type="file" name="bukti_bayar" class="form-control" required>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?= base_url('pesanan_saya') ?>" class="btn btn-success">Back</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>

            <?php
            echo form_open_multipart('pesanan_saya/bayar/' . $pesanan->id_transaksi);
            ?>
            <div class="row">
                <!-- PEMBAYARAN DANA OVO GOPAY -->
                <div class="col">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Via Dana,OVO,Gopay</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label>Barcode</label><br>
                                <img src="<?= base_url() ?>assets/atika/qris.jpeg" width="300px" height="300px" style="display:block; margin:auto;" class="img-thumbnail">
                                <h3 class="text-center">Scan Barcode Diatas</h3>
                            </div>

                            <div class=" form-group">
                                <label>Atas Nama</label>
                                <input name="atas_nama" class="form-control" placeholder="Atas Nama" required>
                            </div>


                            <div class=" form-group">
                                <label>Jenis Pembayaran</label><br>
                                <select name="nama_bank">
                                    <option value="Dana">Dana</option>
                                    <option value="Gopay">Gopay</option>
                                    <option value="Ovo">Ovo</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class=" form-group">
                                <label>Id Transaksi</label>
                                <input name="no_rek" class="form-control" placeholder="Id Transaksi" required>
                            </div>


                            <div class="form-group">
                                <label>Bukti Transfer</label>
                                <input type="file" name="bukti_bayar" class="form-control" required>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?= base_url('pesanan_saya') ?>" class="btn btn-success">Back</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>