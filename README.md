# Loja Virtual
Etapa processo seletivo Loja Virtual - Segunda Etapa

# BDD Loja Virtual

**Funcionalidade:** Cadastro de novo cliente

**COMO** novo cliente

**DESEJO** preencher meus dados no formulário do seu site. 

**PARA** que eu tenha um registro no sistema

**E** possa usufruir dos recursos e regras de negócio ao qual estou submetendo. 

**DADO ** que sou deficiente, impaciente, e posso errar o que escrevo.

**ENTÃO** alguns campos devem ter auto preenchimento.

**E**informar quais erros estão sendo cometidos.

**ENTÃO** não quero ter que reescrever toda vez que envio o formulário 

**PARA** ter uma boa experiência de usuário e permanecer como cliente



**Contexto:** submeter o cadastro que foi preenchido corretamente.

**DADO** que todos os campos estejam preenchidos corretamente. 

**QUANDO**  submeto o formulário

**ENTÃO** ganho um registro no sistema que escolhi. 

**E** recebo uma mensagem: "Cadastro realizado com sucesso, obrigado!"



**Contexto:** submeter o cadastro que não foi reenchido corretamente.

**DADO** que algum campo esteja preenchidos incorretamente. 

**ENTÃO** ao submeter o formulário. Recebo uma mensagem: "Algum registro pode ter sido preenchido incorretamente, favor verificar"

**E** Não quero ter que preencher tudo novamente. Desejo que tudo que eu já escrevi permaneça nos campos mesmo após submeter o formulário.

**E**que tenha a funcionalidade de mostrar os erros que cometi para que possam ser corrigidos.  



**Contexto:** 

**Senário:** Preenchimento do nome

**Contexto:** o campo não foi preenchido

**DADO** campo nome esteja vazio 

**ENTÃO** Então ao submeter o formulário, recebo uma mensagem dizendo que o campo nome é obrigatório e esta vazio.



**Contexto:** o nome foi preenchido corretamente

**DADO** que o nome esteja preenchido corretamente 

**ENTÃO** Então passo para o campo E-mail.

**OU** submeto o formulário se todos os outros campos obrigatórios tiverem sido preenchido corretamente.



**Contexto:** O nome não contém letras o suficiente para formar um nome

**DADO** que  o nome esteja preenchido incompleto

**ENTÃO** recebo uma mensagem no campo que  o texto não parece com um nome válido por ter poucas palavras.


