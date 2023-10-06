<?php
//session_start();
require_once '../../../database/conexao.php';
if (isset($_GET['idStaff'])) {
    // UPDATE atualizar, editar, alterar dados
    $id = $_GET['idStaff'];
    $consultaStaffs = $conn->query("SELECT * FROM staffs WHERE id = '$id';");
    foreach ($consultaStaffs as $dados) {
    }
}
include __DIR__ . '/../includes/header.php';
?>
<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Atualizar Funcionario</h2>
        </div>

        <form class="needs-validation" id="aaa" novalidate action="../../../database/edit.php"
              method="POST">

            <div id="tab_cadastro" class="modal-body">
                <input hidden="hidden" type="text" name="id" id="id" value="<?= $dados['id'] ?>"/>
                <input hidden="hidden" type="text" name="editarStaff" id="editarStaff" value="true"/>

                <div class="form-group">
                    <label style="color: #ffffff">Nome</label>
                    <td><input type="text" id="name" class="form-control" name="name" required
                               placeholder="Insira o nome" id="nome" value="<?= $dados['name'] ?>"/></td>
                </div>
                <div class="form-group">
                    <label style="color: #ffffff">Sobrenome</label>
                    <td><input type="text" id="lastname" class="form-control" name="lastname" required
                               placeholder="Insira o sobrenome" id="nome" value="<?= $dados['lastname'] ?>"/></td>
                </div>
                <div class="form-group">
                    <label style="color:  #ffffff">Data de nascimento</label>
                    <td><input type="date" id="birthday" class="form-control" name="birthday" required
                               placeholder="Data de aniversario" id="nome" value="<?= $dados['birthday'] ?>"/></td>
                </div>
                <div class="form-group">
                    <label style="color: #ffffff">Salario</label>
                    <td><input type="number" id="wage" class="form-control" name="wage" required
                               placeholder="Salario" id="nome" value="<?= $dados['wage'] ?>"/></td>
                </div>
                <div class="form-group">
                    <label style="color: #ffffff">Selecione o Cargo</label>
                    <td>
                        <select id="id_position" name="id_position" class="form-control">
                            <option>Selecione...</option>
                            <?php
                            $query = $conn->query("SELECT * FROM cargos ORDER BY id;");
                            foreach ($query as $temp) { ?>
                                ?>
                                <option
                                    <?php if ($temp['id'] == $dados['id_position']) { ?>selected="selected"<?php } ?>
                                    value="<?php echo $temp['id'] ?>"><?php echo $temp['name'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
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
