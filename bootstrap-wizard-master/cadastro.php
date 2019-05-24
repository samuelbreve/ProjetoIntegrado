<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Cadastre seu Posto</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

</head>

<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/backgroundposto.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="(direcionamento index)">
         <div class="logo-container">
            <div class="logo">
                <img src="assets/img/60x60.png">
            </div>
            <div class="brand">
                Gas Stashow
            </div>
        </div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="blue" id="wizard">
                <form action="../backend/cadPosto.php" method="POST">
                <!--        You can switch ' data-color="green" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>Localize seu Posto </b> <br>
                        	   <small>Quanto mais informações, mais bem visto seu posto será.</small>
                        	</h3>
                    	</div>
						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#location" data-toggle="tab">Localização</a></li>
	                            <li><a href="#type" data-toggle="tab">Dados</a></li>
	                            <li><a href="#facilities" data-toggle="tab">Preços</a></li>
	                            <li><a href="#description" data-toggle="tab">Cadastro</a></li>
	                        </ul>
						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="location">
                              <div class="row">
                                  <div class="col-sm-12">
                                    <h4 class="info-text"> Colocando seu Posto no mapa</h4>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Cidade</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira a cidade de seu Posto" name="cidade">
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                       <div class="form-group">
                                            <label>País</label><br>
                                             <select name="pais" class="form-control">
                                                <option disabled="" selected="">- País -</option>
                                                <option value="Brasil"> Brasil </option>
                                            </select>
                                          </div>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Endereço</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o endereço de seu Posto" name="endereco">
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                       <div class="form-group">
                                            <label>Estado</label><br>
                                             <select name="estado" class="form-control">
                                                <option disabled="" selected="">- Estado -</option>
                                                <option value="estado"> AC </option>
                                                <option value="estado"> AL </option>
                                                <option value="estado"> AP </option>
                                                <option value="estado"> AM </option>
                                                <option value="estado"> BA </option>
                                                <option value="estado"> CE </option>
                                                <option value="estado"> DF </option>
                                                <option value="estado"> ES </option>
                                                <option value="estado"> GO </option>
                                                <option value="estado"> MA </option>
                                                <option value="estado"> MT </option>
                                                <option value="estado"> MS </option>
                                                <option value="estado"> MG </option>
                                                <option value="estado"> PA </option>
                                                <option value="estado"> PB </option>
                                                <option value="estado"> PR </option>
                                                <option value="estado"> PE </option>
                                                <option value="estado"> PI </option>
                                                <option value="estado"> RJ </option>
                                                <option value="estado"> RN </option>
                                                <option value="estado"> RS </option>
                                                <option value="estado"> RO </option>
                                                <option value="estado"> RR </option>
                                                <option value="estado"> SC </option>
                                                <option value="estado"> SP </option>
                                                <option value="estado"> SE </option>
                                                <option value="estado"> TO </option>
                                            </select>
                                          </div>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="type">
                                <h4 class="info-text">Informações Empresariais </h4>
                                <div class="row">
                                    <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Razão Social</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira a razão social de seu Posto" name="razao_social">
                                      </div>
                                    </div>  
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                          <label>Nome Fantasia</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o nome Fantasia de seu Posto" name="nome_fantasia">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>CNPJ</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o CNPJ de seu Posto" name="cnpj">
                                      </div>
                                    </div>  
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                          <label>Email</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o Email de seu Posto" name="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="facilities">
                                <h4 class="info-text">Chegamos aos preços do seu combustível </h4>
                                <div class="row">
                                    <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Gasolina</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Preço Gasolina" name="gasolina">
                                      </div>
                                    </div>  
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                          <label>Gasolina Aditivada</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Preço Gasolina Aditivada" name="gasolina_aditivada">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Etanol</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Preço Etanol" name="etanol">
                                      </div>
                                    </div>  
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                          <label>Diesel</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Preço Diesel" name="diesel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="description">
                                <div class="row">
                                    <h4 class="info-text"> Cadastro </h4>
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                          <label>Usuário</label>
                                          <input type="text" class="form-control" name="usuario" id="exampleInputEmail1" placeholder="Usuário">
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                          <label>Senha</label>
                                          <input type="text" class="form-control" name="senha" id="exampleInputEmail1" placeholder="Senha">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' name='next' value='Próximo' />
                                    <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Terminar' />

                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Voltar' />
                                </div>
                                <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div> <!-- row -->
    </div> <!--  big container -->
</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

</html>

