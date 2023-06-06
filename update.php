<div class="card mb-1">
  <div class="card-header">Düzenle</div>
  <div class="card-body">
    <form action="." method="post">
      <input type="hidden" name="duzenleKaydetId" value="<?= $duzenleData["id"] ?>">
      <div class="mb-3">
        <label class="form-label">Başlık</label>
        <input type="text" name="baslik" class="form-control" value="<?= $duzenleData["baslik"] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">İçerik</label>
        <textarea class="form-control" name="icerik" rows="3"><?= $duzenleData["icerik"] ?></textarea>
      </div>
      <div class="text-end">
        <input type="submit" value="Kaydet" class="btn btn-success" />
      </div>
    </form>
  </div>
</div>