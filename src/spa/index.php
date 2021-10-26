<?php

namespace lojavirtual\spa;

require __DIR__.'/../../vendor/autoload.php';

use lojavirtual\classGetCep\Module_viaCepApiRequest;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/spa/dom/style/home.css">
    <title>bithelp</title>
</head>
<body>
<header>     
    <nav>
        <ul>
            <li>
                            Slogan
            </li>
            <li>
                            Aba 1
            </li>
            <li>
                            Aba 2
            </li>
            <li>            Aba 3         
                <ul>
                    <li>
                            subMenu
                    </li>
                    <li>
                            subMenu
                    </li>
                    <li>
                            subMenu
                    </li>
                    <li>
                            subMenu
                    </li>                      
                </ul>                
            </li>
        </ul>
    </nav>
</header>
<main>
    <header>           
        <h1>        Loja Virtual</h1>
    </header>
    <p>
                    Cobrir seu negócio do início ao fim!
    </p> 
    <section>               
        <header>
            <h2>
                    Seja nosso cliente! Cadastre agora! 
            </h2> 
        </header>
        <p>
                    Loja Virtual o seu time perfeito! temos trabalhado muito para chegar até aqui, e isso não seria possível sem você. Preencha o seu registro. Não vai se arrepender!
        </p>
        <article>
            <header>
                <h3>
                    Área de cadastro de Cliente
                <h3>
            </header>
            <form   id="contact_form" action="#"            method="POST"   enctype="multipart/form-data">

            <label  for="name">         Nome:                                           </label>      <br/>
            <input  id="name"           name="name"         type="text"     value=""
                    placeholder=       "Digite o seu nome"                  size="30"   required/>   <br/>   
            <label  for="email">        Email:                                          </label>      <br/>
            <input  id="email"          name="email"        type="text"     value=""
                    placeholder=       "Digite o seu email"                 size="30"    required/>   <br/>
            <label  for="date">         Data de Nascimento:                              </label>     <br/>
            <input  id="date"           name="date"         type="date"     value=""
                                        placeholder=       "Digite o dia que nasceu"     required/>   <br/>         
            <label  for="tel">          Telefone:                                        </lavel>     <br/>
            <input  id="tel"            name="tel"          type="tel"      value=""
                    placeholder=       "Digite o seu telefone"                           required/>   <br/>
            <label  for="cpf">          CPF:                                              </label>     <br/>
            <input  id="cpf"            name="cpf"          type="number"   value=""     
                    placeholder=       "Digite o seu CPF"                                required/>   <br/>
            <label  for="cep">          CEP:                                              </label>     <br/>
            <input  id="cep"            name="cep           type="number'   value=""                    
                    placeholder=        "Endereço, Somente o CEP"            min="8" max=8 required    /><br/>   
            
            <input  id="submit"         value="Enviar formulário"  type="submit"                  />  <br/>
            </form>
            <footer>
                <ul>
                    <li>
                            Parabéns você está registrado, seja bem vindo ao time!
                    </li>
                    <li>
                            Contatos da Empresa
                    </li>
                </ul>
            </footer>
        </article>        
        <footer>
            <ul>
                <li>
                            Obrigado por preencher o formulário!
                </li>
            </ul>           
        </footer>
</section>
    
</main>
<footer>
    <ul>
        <li>
                            Contatos da empresa
        </li>
    </ul>     
</footer>
</body>
</html>
<?php


$a=new Module_viaCepApiRequest('36060440');
$endereço =$a->getAddress('cep');

echo $endereço;

echo"<pre>";
print_r($endereço);
echo"</pre>";