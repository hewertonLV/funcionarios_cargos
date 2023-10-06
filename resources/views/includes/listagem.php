<div class="row">
    <div class="col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addWage">
            Cadastrar Cargo
        </button>
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStaff">
            Cadastrar Funcionario
        </button>
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#listStaff">
            Listar Funcionario
        </button>
    </div>
    <div class="col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#listWage">
            Listar Cargos
        </button>
    </div>
</div>
<div class="modal fade" id="addWage" tabindex="-1" role="dialog" aria-labelledby="addWage" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #4b5563" id="exampleModalLabel">Cadastrar Cargo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" id="aaa" novalidate action="../../../database/create.php"
                  method="POST">

                <div id="tab_cadastro" class="modal-body">
                    <input hidden="hidden" type="text" name="cadastrarCargo" id="cadastrarCargo" value="true"/>

                    <div class="form-group">
                        <label style="color: #4b5563">Nome do Cargo</label>
                        <td><input type="text" id="name" class="form-control" name="name" required
                                   placeholder="Insira o nome do cargo" id="nome"/></td>
                    </div>
                    <div class="form-group">
                        <label style="color: #4b5563">Descrição</label>
                        <td><input type="text" id="description" name="description" required
                                   placeholder="Insira uma descrição" id="email" class="form-control"/></td>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button submit" value="Cadastrar" name="go" id="botao_cad" class="btn btn-primary">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addStaff" tabindex="-1" role="dialog" aria-labelledby="addStaff" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #4b5563" id="exampleModalLabel">Adicionar Funcionarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" id="aaa" novalidate action="../../../database/create.php"
                  method="POST">

                <div id="tab_cadastro" class="modal-body">
                    <input hidden="hidden" type="text" name="cadastrarStaff" id="cadastrarCargo" value="true"/>

                    <div class="form-group">
                        <label style="color: #4b5563">Nome</label>
                        <td><input type="text" id="name" class="form-control" name="name" required
                                   placeholder="Insira o nome" id="nome"/></td>
                    </div>
                    <div class="form-group">
                        <label style="color: #4b5563">Sobrenome</label>
                        <td><input type="text" id="name" class="form-control" name="lastname" required
                                   placeholder="Insira o sobrenome" id="nome"/></td>
                    </div>
                    <div class="form-group">
                        <label style="color: #4b5563">Data de nascimento</label>
                        <td><input type="date" id="birthday" class="form-control" name="birthday" required
                                   placeholder="Data de aniversario" id="nome"/></td>
                    </div>
                    <div class="form-group">
                        <label style="color: #4b5563">Salario</label>
                        <td><input type="number" id="wage" class="form-control" name="wage" required
                                   placeholder="Salario" id="nome"/></td>
                    </div>
                    <div class="form-group">
                        <label style="color: #4b5563">Selecione o Cargo</label>
                        <td>
                            <select  class="form-control" id="id_position" name="id_position">
                                <option>Selecione...</option>
                                <?php
                                $query = $conn->query("SELECT * FROM cargos ORDER BY id;");
                                foreach ($query as $temp) { ?>
                                    ?>
                                    <option value="<?php echo $temp['id'] ?>"><?php echo $temp['name'] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button submit" value="Cadastrar" name="go" id="botao_cad" class="btn btn-primary">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="listWage" tabindex="-1" role="dialog" aria-labelledby="listWage" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #4b5563" id="exampleModalLabel">Listagem de Cargos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered table-sm" style="color: black">
                    <thead class=" thead-dark text-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Detalhes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $consulta = $conn->query("SELECT * FROM cargos ORDER BY id;");
                    foreach ($consulta as $row) {
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td> <a href="partials/editarCargos.php?idCargos=<?=$row['id'] ?>"> <span class="glyphicon glyphicon-edit"></span></a>
                                <a href="../../../database/delete.php?idCargos=<?= $row['id'] ?>" data-bs-toggle="modal"
                                   data-bs-target="#exampleModal<?= $row['id'] ?>"> <span class="glyphicon glyphicon-remove"></a> </td>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="listStaff" tabindex="-1" role="dialog" aria-labelledby="listStaff" aria-hidden="true">
    <div class="modal-dialog" role="document" style="min-width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: #4b5563" id="exampleModalLabel">Listagem de Funcionarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered table-sm" style="color: black">
                    <thead class=" thead-dark text-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Salario</th>
                        <th scope="col">Opções</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $consultaStaffs = $conn->query("SELECT * FROM staffs ORDER BY name;");
                    foreach ($consultaStaffs as $rowStaff) {
                        $stmt = $conn->prepare("SELECT * FROM cargos WHERE id=?");
                        $stmt->execute([$rowStaff['id_position']]);
                        $nameCargo = $stmt->fetch();
                        ?>
                        <tr>
                            <td><?php echo $rowStaff['id'] ?></td>
                            <td><?php echo $rowStaff['name'] ?></td>
                            <td><?php echo $rowStaff['lastname'] ?></td>
                            <td><?php echo $nameCargo ? $nameCargo['name'] : '---' ?></td>
                            <td><?php echo date("d/m/Y", strtotime($rowStaff['birthday'])) ?></td>
                            <td><?php echo $rowStaff['wage'] ?></td>
                            <td> <a href="partials/editarStaff.php?idStaff=<?=$rowStaff['id'] ?>"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="../../../database/delete.php?idStaff=<?= $rowStaff['id'] ?>" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal<?= $rowStaff['id'] ?>"> <span class="glyphicon glyphicon-remove"></a> </td>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>



