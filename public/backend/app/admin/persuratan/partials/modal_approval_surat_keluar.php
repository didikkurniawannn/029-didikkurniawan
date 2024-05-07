<div id="modal-approval-surat-keluar" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Approval Surat Keluar</h5>
        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="control-label text-start text-md-end col-md-3">Status Approval</label>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="approval_surat_keluar" id="approval_surat_keluar_1" value="approved">
              <label class="form-check-label" for="approval_surat_keluar_1">Disetujui</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="approval_surat_keluar" id="approval_surat_keluar_2" value="disapproved">
              <label class="form-check-label" for="approval_surat_keluar_2">Tidak Disetujui</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label text-start text-md-end col-md-2 col-form-label" for="alasan_disapprove">Catatan</label>
          <div class="col-md-9">
            <textarea rows="3" id="alasan_disapprove" name="alasan_disapprove" class="form-control" placeholder="Ketikkan catatan persetujuan">-</textarea>
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