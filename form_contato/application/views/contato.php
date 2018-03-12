<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulário de Contato</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <script>var base_url = '<?php echo base_url() ?>';</script>
        
    </head>
    <body>

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1>Formulário de Contato</h1>

                   
                    <form id="contact-form" method="post" action="<?php echo base_url() ?>index.php/contato/enviar" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_nome">Nome *</label>
                                        <input type="hidden"  name="assunto" value="Formulario de Contato Site"> 
                                        <input id="form_nome" type="text" name="nome" class="form-control" placeholder="Digite aqui o seu nome *" required="required" data-error="Nome é obrigatório.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_fone">Telefone</label>
                                        <input id="form_fone" type="tel" name="fone" class="form-control" placeholder="Digite aqui um telefone *" >
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Digite aqui o seu email *" required="required" data-error="Email válido obrigatório.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_cel">Celular *</label>
                                        <input id="form_cel" type="tel" name="celular" class="form-control" placeholder="Digite aqui o seu celular"  required="required" data-error="Celular obrigatório.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_cel">Deseja contato via Whatsapp?</label>
                                        <label class="radio-inline"><input type="radio" name="whatsradio" value="Whats-SIM">Sim</label>
                                        <label class="radio-inline"><input type="radio" name="whatsradio" value="Whats-NAO">Não</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_cidade">Cidade *</label>
                                        <input id="form_email" type="text" name="cidade" class="form-control" placeholder="Digite aqui a sua cidade *" required="required" data-error="Cidade válida obrigatório.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_estado">Estado *</label>
                                        <select name="estado"  class="form-control" required="required" data-error="Estado válido obrigatório.">
                                            <option selected="" value="">Selecione o Estado (UF)</option>
                                            <option value="Acre">Acre</option>
                                            <option value="Alagoas">Alagoas</option>
                                            <option value="Amapá">Amapá</option>
                                            <option value="Amazonas">Amazonas</option>
                                            <option value="Bahia">Bahia</option>
                                            <option value="Ceará">Ceará</option>
                                            <option value="Distrito Federal">Distrito Federal</option>
                                            <option value="Espírito Santo">Espírito Santo</option>
                                            <option value="Goiás">Goiás</option>
                                            <option value="Maranhão">Maranhão</option>
                                            <option value="Mato Grosso">Mato Grosso</option>
                                            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                            <option value="Minas Gerais">Minas Gerais</option>
                                            <option value="Pará">Pará</option>
                                            <option value="Paraíba">Paraíba</option>
                                            <option value="Paraná">Paraná</option>
                                            <option value="Pernambuco">Pernambuco</option>
                                            <option value="Piauí">Piauí</option>
                                            <option value="Rio de Janeiro">Rio de Janeiro</option>
                                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                            <option value="Rondônia">Rondônia</option>
                                            <option value="Roraima">Roraima</option>
                                            <option value="Santa Catarina">Santa Catarina</option>
                                            <option value="São Paulo">São Paulo</option>
                                            <option value="Sergipe">Sergipe</option>
                                            <option value="Tocantins">Tocantins</option>
                                       </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_mensagem">Mensagem *</label>
                                        <textarea id="form_mensagem" name="mensagem" class="form-control" placeholder="Escreve neste espaço a sua mensagem *" rows="4" required="required" data-error=" Por favor, deixe a sua mensagem."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Enviar">
                                </div>
                            </div>

                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/validator.js"></script>
        <script src="<?php echo base_url(); ?>js/contact.js"></script>
    </body>
</html>
