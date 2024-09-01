<?php include "partials/head.php"; ?>
<?php include "partials/navbar.php"; ?>

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-2"></div>

        <div class="col-8">
            <div class="card">
                <div class="card-header text-center">
                    <h1 class="card-title display-4"><b>Kartlar</b></h1>
                    <a href="functions/addCard.php" class="btn btn-primary">Kart Ekle</a>
                </div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-4 col-xs-12 border rounded-3 text-center p-2 ms-lg-1 ms-md-2 ms-xs-1 mb-1">
                            <h4>Garanti</h4>

                            <h5>**** **** **** 3458</h5>

                            <div class="row justify-content-center">
                                <div class="col">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">İşlemler</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">İşlemler</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                                                </div>

                                                <div class="modal-body">
                                                    ...
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success">Gelir</button>
                                                    <button type="button" class="btn btn-danger">Gider</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-12 border rounded-3 text-center p-2 ms-lg-1 ms-md-2 ms-xs-1 mb-1">
                            <h4>Garanti</h4>

                            <h5>**** **** **** 3458</h5>

                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <a href="/editCard" class="btn btn-warning btn-sm">Güncelle</a>
                                </div>

                                <div class="col-6">
                                    <a href="/deleteCard" class="btn btn-danger btn-sm">Sil</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-4 col-xs-12 border rounded-3 text-center p-2 ms-lg-1 ms-md-2 ms-xs-1 mb-1">
                            <h4>Garanti</h4>

                            <h5>**** **** **** 3458</h5>

                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <a href="/editCard" class="btn btn-warning btn-sm">Güncelle</a>
                                </div>

                                <div class="col-6">
                                    <a href="/deleteCard" class="btn btn-danger btn-sm">Sil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <span>Kart Sayisi: </span>
                </div>
            </div>
        </div>

        <div class="col-2"></div>
    </div>
</div>

<?php include "partials/foot.php"; ?>