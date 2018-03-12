<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	function __construct(){
      parent::__construct();
      
  }

	
	public function index()
	{
		$this->load->view('contato');
	}


	public function enviar(){

  include ("application/libraries/class.phpmailer.php");
  
		


    // inicia a classe PHPMailer habilitando o disparo de exceções
$mail = new PHPMailer(true);
try
{
    // habilita o debug
    // 0 = em mensagens de debug
    // 1 = mensagens do cliente SMTP
    // 2 = mensagens do cliente e do servidor SMTP
    // 3 = igual o 2, incluindo detalhes da conexão
    // 4 = igual o 3, inlcuindo mensagens de debug baixo-nível
    $mail->SMTPDebug = 2;
     
    // utilizar SMTP
    $mail->isSMTP();
 
    // habilita autenticação SMTP
    $mail->SMTPAuth = true;
 
    // servidor SMTP
    $mail->Host = 'smtp.gmail.com'; 
 
    // usuário, senha e porta do SMTP
    $mail->Username = 'email';
    $mail->Password = 'password';
    $mail->Port = 587;
     
    // tipo de criptografia: "tls" ou "ssl"
    $mail->SMTPSecure = 'tls';
     
    // email e nome do remetente
    $mail->setFrom('email', 'nome');
     
    // Email e nome do(s) destinatário(s)
    // você pode chamar addAddress quantas vezes quiser, para
    // incluir diversos destinatários
    $mail->addAddress('email-destino', 'nome');
   
 
    // define o formato como HTML
    $mail->isHTML(true);
     
    // codificação UTF-8
    $mail->Charset = 'UTF-8';
     
    // assunto do email
    $mail->Subject = $this->input->post("assunto"); 
     
   
     
    // corpo do email em texto
    $mail->AltBody = "Nome: ".$this->input->post("nome").
                " Fone: ".$this->input->post("fone").
                " Email: ".$this->input->post("email").
                " Celular: ".$this->input->post("celular").
                " Whatsapp: ".$this->input->post("whatsradio").
                " Cidade: ".$this->input->post("cidade").
                " Estado: ".$this->input->post("estado").
                " Mensagem: ".$this->input->post("mensagem");

                echo  $mail->AltBody;
;
     
    // envia o email
    $mail->send();
     
    //echo //'Mensagem enviada com sucesso!' . PHP_EOL;
}
catch (Exception $e)
{
    echo 'Falha ao enviar email.' . PHP_EOL;
    echo 'Erro: ' . $mail->ErrorInfo . PHP_EOL;
}
      
         
                 
        redirect(base_url("index.php/contato"));
   } 
}


