# Loja Virtual
Etapa processo seletivo Loja Virtual - Segunda Etapa

# BDD cadastro de cliente Loja Virtual


## **Funcionalidade:** Cadastro de novo cliente.

**PARA** que eu tenha um registro na empresa.
**COMO** um novo cliente.
**PRECISO** preencher meus dados no formulário.


### **Cenário:** preenchimento do nome

**Contexto:** campo sem erros
**DADO** que o nome esteja correto
**QUANDO** envio o formulário
**ENTÃO** recebo confirmação de registro


**Contexto:** campo ficou em branco
**DADO** o nome esteja a preencher
**QUANDO** envio o formulário 
**ENTÃO** recebo uma notificação


**Contexto:** campo nome inválido por excesso de texto
**DADO** ocorra preenchimento involuntário
**QUANDO** envio o formulário
**ENTÃO** recebo uma notificação

**Contexto:** campo nome muito curto
**DADO** que não foi digitado o nome completo
**QUANDO** envio o formulário
**ENTÃO** recebo uma notificação

**Contexto:** campo nome contendo números
**DADO** que confundi o campo nome com números
**QUANDO** envio o formulário
**ENTÃO** recebo uma notificação

**Contexto:** campo nome contendo email
**DADO** que preencha email no campo nome
**QUANDO** envio o formulário
**ENTÃO** recebo uma notificação

**Contexto:** campo nome contendo caracteres especiais
**DADO** que aperte alguma tecla sem querer
**QUANDO** envio o formulário
**ENTÃO** recebo uma notificação


 
### **Cenário:** preenchimento do e-mail

**Contexto:** o e-mail está correto
**DADO** o e-mail esteja correto e existe
**QUANDO** envio o formulário
**ENTÃO** recebo e-mail para autentificar

**Contexto:** o e-mail não é do cliente
**DADO** e-mail válido e não seja do usuário
**QUANDO** tento acessar
**ENTÃO** sou notificado autenticar no e-mail enviado.

**Contexto:** o e-mail não existe
**DADO** dado que o e-mail não existe
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem



### **Cenário:** preenchimento da data nascimento

**Contexto:** data de nascimento correta
**DADO** a data de nascimento esta correta
**QUANDO** envio o formulário
**ENTÃO** recebo confirmação de registro

**Contexto:** data vazia
**DADO** que não tem data
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem

**Contexto:** data contem texto
**DADO** que digitei um texto
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem

**Contexto:** formato de preenchimento
**DADO** preenchi a data em formato errado
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem

**Contexto:** data maior que 150 anos
**DADO** que a data não confere com o real 
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem

**Contexto:** data menor que 18 anos
**DADO** que a idade seja menor que 18 anos
**E** serviços proibido para menos
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem

**Contexto:** data menor que 18 serviços permitido
**DADO** a idade seja menor 18 anos
**E** não tenha restrição para menores  
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem


 
### **Cenário:** preenchimento de telefone
 

**Contexto:** telefone correto
**DADO** o telefone correto
**QUANDO** envio o formulário
**ENTÃO** recebo mensagem de confirmação

**Contexto:** telefone incorreto por caractere
**DADO** o telefone incorreto
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem

**Contexto:** quantidade de números maior que o padrão
**DADO** os dígitos são maior
**QUANDO** envio o formulário
**ENTÃO** recebo uma notificação

**Contexto:** quantidade de números menor que o padrão
**DADO** os dígitos são menores
**QUANDO** envio o formulário
**ENTÃO** recebo uma notificação


### **Cenário:** preenchimento do CPF

**Contexto:** preenchimento correto do CPF
**DADO** o CPF correto
**QUANDO** envio o formulário
**ENTÃO** recebo confirmação

**Contexto:** preenchimento com caractere
**DADO** o dígito tem caractere
**QUANDO** envio o formulário
**ENTÃO** recebo uma notificação

**Contexto:** quantidade de números maior que o padrão
**DADO** os dígitos são maior
**QUANDO** envio o formulário
**ENTÃO** recebo uma notificação

**Contexto:** quantidade de números menor que o padrão
**DADO** os dígitos são menores
**QUANDO** envio o formulário
**ENTÃO** recebo uma notificação

**Contexto:** CPF é valido de outro proprietário
**DADO** o CPF é válido porem de outro pessoa
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem

**Contexto:** CPF não existe
**DADO** o CPF não existe ao ser consultado
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem


 
**Cenário:** preenchimento de CEP

**Contexto:** CEP correto
**DADO** o CEP esteja correto
**QUANDO** Saio do campo CPF
**ENTÃO** Os demais endereços carregam automaticamente

**Contexto:** dado que o CEP seja de local longe
**DADO** o Cep não seja da minha região
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem solicitando confirmação

**Contexto:** o CEP contem textos
**DADO** que digitei texto no campo
**QUANDO** envio o formulário
**ENTÃO** recebo uma mensagem

**Contexto:** o usuário não sabe o CEP e desiste
**DADO** que não sei o CEP
**E** Só é possível preencher colocando o CEP
**ENTÃO** desisto de cadastrar

**Contexto:** o usuário não sabe o CEP deseja retornar
**DADO** que não sei o CEP
**E** Só é possível preencher colocando o CEP
**ENTÃO** pesquiso e retorno mais tarde


## ***********Não solicitado implementação porem pode ser observado********************

#### **Obs: Não foi solicitado número da casa e complemento
Impossibilita envio de correspondência. Caso não seja requisito obrigatório, desconsiderar.
Caso contrário o mesmo fica registrado para possíveis implantações.


**Cenário:** preenchimento do número da casa ou apt.

**Contexto:**
**DADO**
**QUANDO**
**ENTÃO**

**Cenário:** preenchimento do complemento

**Contexto:**
**DADO**
**QUANDO**
**ENTÃO**

******************************************************************************************


**Cenário:** Atualização de dados feito corretamente

**Contexto:** atualizar dados
**DADO** preencha correto ao ter autenticado
**QUANDO** salvo as alterações
**ENTÃO** fica registrado a data da mudança
**Contexto:** Atualização de dados feito incorreto
**DADO** preciso atualizar os dados e não preencha corretamente
**QUANDO** salvo as alterações
**ENTÃO** recebo uma mensagem



## **Cenário:** Envio do formulário


**Contexto:** formulário preenchido corretamente.
**DADO** que as informações foram preenchidas corretamente.
**QUANDO** envio o formulário
**ENTÃO** recebo um e-mail, confirmação de cadastro e mensagem de boas-
Vindas.
**E** será registrado a data de envio

**Contexto:** formulário incorreto
**DADO** que escrevo errado no formulário
**QUANDO** aciono o botão de enviar
**ENTÃO** O formulário mostra os campos incorreto
**E** não apague os dados correto.



## **Cenário: perfil de usuário.** 


**Contexto:** cliente deficiente
**DADO** que sou deficiente
**QUANDO** preencher o formulário
**ENTÃO** deve ter acessibilidade 

**Contexto:** cliente impaciente
**DADO** que sou impaciente
**QUANDO** errar o formulário
**ENTÃO** não quero reescrever os dados correto.

**Contexto:** cliente leigo em leitura
**DADO** que tenho pouco entendimento
**QUANDO** envio o formulário incorreto
**ENTÃO** os erros devem estar visíveis
**E** recebo uma mensagem

