<?php

?>
    <!-- Criando o Formulario de eleitor -->
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft"> <span class="fa fa-users"></span>Voto</h3>
            </div>
        </div>
    </div>
    <div class="col-md-offset-1 col-md-10 panel">
        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
        <!--Primeira coluna do Formulário  -->
        <div class="col-md-12 col-lg-12">
                <form action="processamento.php?acao=salvar" method="post" class="form-horizontal">
					
                    <div class="form-group form-animate-text col-md-10" style="margin-top:40px !important;">
                       <label> <i class="icon-user"></i> Marca </label>
                        <br>
                        <br>
                        <select id="marca" name="marca">
                            
                                <?php
								include_once '../Marca/Marca.php';

								$mMarca = new Marca();
								$sql = "select nome, id_marca from marca";
								$marca = $mMarca->recuperarDados($sql);
								foreach ($marca as $result) {
									echo "\<option value='" . $result['id_marca'] . "'>" . $result['nome'] . "</option>";
								}//ComboBox da Marca
								?>
                        </select>
                    </div>
					
					<div class="form-group form-animate-text col-md-10" style="margin-top:40px !important;">
                       <label> <i class="icon-badge"></i> Modelo </label>
                        <br>
                        <br>
                        <select id="cargo" name="id_cargo">
                            <option value="">Modelo</option>
                                <?php
								include_once '../Modelo/Modelo.php';

									$mModelo = new Modelo();
									$sql = "select * from modelo where modelo.modelo_id = marca.modelo_id";
									$modelo = $mModelo->recuperarDados($sql);
									foreach ($modelo as $result) {
										echo "\<option value='" . $result['id_modelo'] . "'>" . $result['nome'] . "</option>";
									}//ComboBox do Modelo
								?>
                        </select>
                    </div>
					
					<div class="form-group form-animate-text col-md-10" style="margin-top:40px !important;">
                       <label> <i class="icon-ghost"></i> Candidato </label>
                        <br>
                        <br>
                        <select id="candidato" value='Olá' name="id_candidato">
                            <option value="">Selecione</option>
                                <?php
                                ?>
                        </select>
                    </div>
                     <div class="form-group col-md-12">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success"><span class="fa fa-thumbs-o-up"> </span> Salvar</button>
                            <a class="btn btn-danger" href="index.php"><span class="fa fa-reply"> </span> Voltar</a>
                        </div>
                    </div>
					
					
                </form>
        </div>
    </div>
<?php
// Incluindo o termino da aplicação
include_once '../rodape.php';