<?php 
include("./m/funciones.php");
$titulo = $_POST["titulo"];
$contenido = $_POST["contenido"];
$user = $_POST["user"];
$userId = $_POST["userId"];
$platform_id = $_POST["platform_id"];
agregarComentario($userId, $titulo, $platform_id, $contenido);
?>
<div class="card-body p-4">
    <div class="d-flex flex-start">
        <i class="fa-solid fa-user fa-fade fa-2xl"></i>&nbsp;
        <div>
            <h6 class="fw-bold mb-1"><?= $user; ?></h6>
            <h6 class="mb-1"><?= $titulo; ?></h6>
            <div class="rating" style="width: 20rem">
                <input id="-1" type="radio" name="-1" value="1"/><label for="rating-1"><i class="fas fa fa-star"></i></label>
                <input id="-2" type="radio" name="-2" value="2"/><label for="rating-2"><i class="fas fa fa-star"></i></label>
                <input id="-3" type="radio" name="-3" value="3"/><label for="rating-3"><i class="fas fa fa-star"></i></label>
                <input id="-4" type="radio" name="-4" value="4"/><label for="rating-4"><i class="fas fa fa-star"></i></label>
                <input id="-5" type="radio" name="-5" value="5"/><label for="rating-5"><i class="fas fa fa-star"></i></label>
            </div>
            <div class="d-flex align-items-center mb-3">
                <p class="mb-0"><?= 'NOW' ?></p>
            </div>
            <p class="mb-0"><?= $contenido; ?></p>
        </div>
    </div>
</div>
<hr class="my-0" style="height: 1px;" />
