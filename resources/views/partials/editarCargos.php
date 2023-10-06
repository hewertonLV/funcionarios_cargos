<?php
session_start();
require_once '../../../database/conexao.php';
if (isset($_GET['idCargos'])) {
    $id = $_GET['idCargos'];
    $consultaCargos = $conn->query("SELECT * FROM cargos WHERE id = '$id';");
    foreach ($consultaCargos as $dados) {
    }
}
include __DIR__ . '/../includes/header.php';

?>
<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Atualizar Cargos</h2>
        </div>

        <form class="needs-validation" id="aaa" novalidate action="../../../database/edit.php"
              method="POST">
            <div id="tab_cadastro" class="modal-body">
                <input hidden="hidden" type="text" name="id" id="id" value="<?= $dados['id'] ?>"/>
                <input hidden="hidden" type="text" name="editarCargos" id="editarCargos" value="true"/>

                <div class="form-group">
                    <label style="color: #ffffff">Nome</label>
                    <td><input type="text" id="name" class="form-control" name="name" required
                               id="nome" value="<?= $dados['name'] ?>"/></td>
                </div>
                <div class="form-group">
                    <label style="color: #ffffff">Descrição</label>
                    <td><input type="text" id="description" class="form-control" name="description" required
                               id="nome" value="<?= $dados['description'] ?>"/></td>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button submit" value="update" name="go" id="botao_cad" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </form>
    </main>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/form-validation.js"></script>

<?php
include __DIR__ . '/../includes/footer.php';
?>
