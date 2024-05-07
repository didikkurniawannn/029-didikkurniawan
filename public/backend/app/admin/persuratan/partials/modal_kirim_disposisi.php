<div id="modal-kirim-disposisi" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Kirim Disposisi</h5>
        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="tujuan_disposisi">Tujuan Disposisi</label>
          <div class="col-md-9">
            <select id="tujuan_disposisi" name="tujuan_disposisi" class="form-select select2 select2-multiple" multiple="multiple" data-placeholder="-- Pilih Tujuan Disposisi --">
              <option value="1">Kepala Divisi Keuangan</option>
              <option value="2">Kepala Divisi Manajemen Risiko</option>
              <option value="3">Kepala Divisi Penjaminan</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="instruksi_disposisi">Instruksi Disposisi</label>
          <div class="col-md-9">
            <select id="instruksi_disposisi" name="instruksi_disposisi" class="form-select select2 select2-multiple" multiple="multiple" data-placeholder="-- Pilih Instruksi Disposisi --">
              <option value="1">Tanggapan dan Saran</option>
              <option value="2">Proses Lebih Lanjut</option>
              <option value="3">Kordinasi / Konfirmasi</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="tenggat_waktu">Tenggat Waktu</label>
          <div class="col-md-9">
            <input type="text" id="tenggat_waktu" name="tenggat_waktu" class="form-control datepicker" placeholder="Pilih tanggal akhir tenggat waktu" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label text-start text-md-end col-md-3 col-form-label" for="catatan_disposisi">Catatan</label>
          <div class="col-md-9">
            <textarea rows="3" id="catatan_disposisi" name="catatan_disposisi" class="form-control" placeholder="Ketikkan uraian catatan disposisi">Tolong untuk segera ditindaklanjuti proses pelaporan data Komposisi Karyawan Tahun 2023</textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="fa fa-check"></i> Submit</button>
      </div>
    </div>
  </div>
</div>