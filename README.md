# Loja Virtual
Etapa processo seletivo Loja Virtual - Segunda Etapa

# BDD cadastro de cliente Loja Virtual


## **Funcionalidade:** Cadastro de novo cliente.<br/><br/>

**PARA** que eu tenha um registro na empresa.<br/>
**COMO** um novo cliente.<br/>
**PRECISO** preencher meus dados no formulário.<br/>
<br/><br/>


### **Cenário:** preenchimento do nome<br/><br/>

**Contexto:** campo sem erros<br/>
**DADO** que o nome esteja correto<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo confirmação de registro<br/>
<br/><br/>

**Contexto:** campo ficou em branco<br/>
**DADO** o nome esteja a preencher<br/>
**QUANDO** envio o formulário <br/>
**ENTÃO** recebo uma notificação<br/>
<br/><br/>

**Contexto:** campo nome inválido por excesso de texto<br/>
**DADO** ocorra preenchimento involuntário<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma notificação
<br/><br/>

**Contexto:** campo nome muito curto<br/>
**DADO** que não foi digitado o nome completo<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma notificação
<br/><br/>

**Contexto:** campo nome contendo números<br/>
**DADO** que confundi o campo nome com números<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma notificação
<br/><br/>

**Contexto:** campo nome contendo email<br/>
**DADO** que preencha email no campo nome<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma notificação
<br/><br/>

**Contexto:** campo nome contendo caracteres especiais<br/>
**DADO** que aperte alguma tecla sem querer<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma notificação
<br/><br/><br/>


 
### **Cenário:** preenchimento do e-mail<br/><br/>

**Contexto:** o e-mail está correto<br/>
**DADO** o e-mail esteja correto e existe<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo e-mail para autentificar
<br/><br/>

**Contexto:** o e-mail não é do cliente<br/>
**DADO** e-mail válido e não seja do usuário<br/>
**QUANDO** tento acessar<br/>
**ENTÃO** sou notificado autenticar no e-mail enviado.
<br/><br/>

**Contexto:** o e-mail não existe<br/>
**DADO** dado que o e-mail não existe<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem
<br/><br/><br/>



### **Cenário:** preenchimento da data nascimento<br/><br/>

**Contexto:** data de nascimento correta<br/>
**DADO** a data de nascimento esta correta<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo confirmação de registro
<br/><br/>

**Contexto:** data vazia<br/>
**DADO** que não tem data<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem
<br/><br/>

**Contexto:** data contem texto<br/>
**DADO** que digitei um texto<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem
<br/><br/>

**Contexto:** formato de preenchimento<br/>
**DADO** preenchi a data em formato errado<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem
<br/><br/>

**Contexto:** data maior que 150 anos<br/>
**DADO** que a data não confere com o real <br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem
<br/><br/>

**Contexto:** data menor que 18 anos<br/>
**DADO** que a idade seja menor que 18 anos<br/>
**E** serviços proibido para menos<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem
<br/><br/>

**Contexto:** data menor que 18 serviços permitido<br/>
**DADO** a idade seja menor 18 anos<br/>
**E** não tenha restrição para menores  <br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem
<br/><br/><br/>


 
### **Cenário:** preenchimento de telefone<br/><br/>
 

**Contexto:** telefone correto<br/>
**DADO** o telefone correto<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo mensagem de confirmação
<br/><br/>

**Contexto:** telefone incorreto por caractere<br/>
**DADO** o telefone incorreto<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem
<br/><br/>

**Contexto:** quantidade de números maior que o padrão<br/>
**DADO** os dígitos são maior<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma notificação<br/><br/>

**Contexto:** quantidade de números menor que o padrão<br/>
**DADO** os dígitos são menores<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma notificação
<br/><br/><br/>



### **Cenário:** preenchimento do CPF<br/><br/>

**Contexto:** preenchimento correto do CPF<br/>
**DADO** o CPF correto<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo confirmação
<br/><br/>

**Contexto:** preenchimento com caractere<br/>
**DADO** o dígito tem caractere<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma notificação
<br/><br/>

**Contexto:** quantidade de números maior que o padrão<br/>
**DADO** os dígitos são maior<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma notificação
<br/><br/>

**Contexto:** quantidade de números menor que o padrão<br/>
**DADO** os dígitos são menores<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma notificação
<br/><br/>

**Contexto:** CPF é valido de outro proprietário<br/>
**DADO** o CPF é válido porem de outro pessoa<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem
<br/><br/>

**Contexto:** CPF não existe<br/>
**DADO** o CPF não existe ao ser consultado<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem
<br/><br/><br/>


 
**Cenário:** preenchimento de CEP<br/><br/>

**Contexto:** CEP correto<br/>
**DADO** o CEP esteja correto<br/>
**QUANDO** Saio do campo CPF<br/>
**ENTÃO** Os demais endereços carregam automaticamente
<br/><br/>

**Contexto:** dado que o CEP seja de local longe<br/>
**DADO** o Cep não seja da minha região<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem solicitando confirmação
<br/><br/>

**Contexto:** o CEP contem textos<br/>
**DADO** que digitei texto no campo<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo uma mensagem
<br/><br/>

**Contexto:** o usuário não sabe o CEP e desiste<br/>
**DADO** que não sei o CEP<br/>
**E** Só é possível preencher colocando o CEP<br/>
**ENTÃO** desisto de cadastrar
<br/><br/>

**Contexto:** o usuário não sabe o CEP deseja retornar<br/>
**DADO** que não sei o CEP<br/>
**E** Só é possível preencher colocando o CEP<br/>
**ENTÃO** pesquiso e retorno mais tarde
<br/><br/><br/>


## ***********Não solicitado implementação porem pode ser observado********************<br/><br/>

#### **Obs: Não foi solicitado número da casa e complemento<br/>

Impossibilita envio de correspondência. Caso não seja requisito obrigatório, desconsiderar.
Caso contrário o mesmo fica registrado para possíveis implantações.<br/><br/><br/>


**Cenário:** preenchimento do número da casa ou apt.<br/><br/>

**Contexto:**<br/>
**DADO**<br/>
**QUANDO**<br/>
**ENTÃO**
<br/><br/>

**Cenário:** preenchimento do complemento
<br/><br/>

**Contexto:**<br/>
**DADO**<br/>
**QUANDO**<br/>
**ENTÃO**
<br/><br/>

******************************************************************************************
<br/><br/><br/>


**Cenário:** Atualização de dados feito corretamente<br/><br/>

**Contexto:** atualizar dados<br/>
**DADO** preencha correto ao ter autenticado<br/>
**QUANDO** salvo as alterações<br/>
**ENTÃO** fica registrado a data da mudança
<br/><br/>

**Contexto:** Atualização de dados feito incorreto<br/>
**DADO** preciso atualizar os dados e não preencha corretamente<br/>
**QUANDO** salvo as alterações<br/>
**ENTÃO** recebo uma mensagem<br/><br/><br/>



## **Cenário:** Envio do formulário<br/><br/>


**Contexto:** formulário preenchido corretamente.<br/>
**DADO** que as informações foram preenchidas corretamente.<br/>
**QUANDO** envio o formulário<br/>
**ENTÃO** recebo um e-mail, confirmação de cadastro e mensagem de boas-
Vindas.<br/>
**E** será registrado a data de envio
<br/><br/>

**Contexto:** formulário incorreto<br/>
**DADO** que escrevo errado no formulário<br/>
**QUANDO** aciono o botão de enviar<br/>
**ENTÃO** O formulário mostra os campos incorreto<br/>
**E** não apague os dados correto
.<br/><br/><br/>



## **Cenário: perfil de usuário.** <br/><br/>


**Contexto:** cliente deficiente<br/>
**DADO** que sou deficiente<br/>
**QUANDO** preencher o formulário<br/>
**ENTÃO** deve ter acessibilidade 
<br/><br/>

**Contexto:** cliente impaciente<br/>
**DADO** que sou impaciente<br/>
**QUANDO** errar o formulário<br/>
**ENTÃO** não quero reescrever os dados correto.
<br/><br/>

**Contexto:** cliente leigo em leitura<br/>
**DADO** que tenho pouco entendimento<br/>
**QUANDO** envio o formulário incorreto<br/>
**ENTÃO** os erros devem estar visíveis<br/>
**E** recebo uma mensagem
<br/><br/>

