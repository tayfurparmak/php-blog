<div class="card mb-1">
  <div class="card-header">Yeni Ekle</div>
  <div class="card-body">
    <form action="." method="post">
      <input type="hidden" name="add" value="1" />
      <div class="mb-3">
        <label class="form-label">Başlık</label>
        <input type="text" name="baslik" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">İçerik</label>
        <textarea class="form-control" name="icerik" rows="3"></textarea>
      </div>
      <div class="text-end">
        <input type="submit" value="Kaydet" class="btn btn-success" />
      </div>
    </form>
  </div>
</div>