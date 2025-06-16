# Prova PHP 16/06

Alunos: 
- Johnny Luis Kava
- Fellipe Gonsalves de Pina Miranda

O tema escolhido para o desenvolvimento do projeto foi a respeito de cadastro de
livros, por usuário. O projeto funciona da seguinte forma: o usuário irá realizar o seu
login, informando usuário e senha. Caso não tenha o cadastro, terá a possibilidade de
criar sua conta. Nestas duas etapas, temos as validações, onde, se a pessoa tiver um
cadastro, será validado se ele existe no banco, se o envio não foi com campos vazios. Já
no cadastro, é verificado se o usuário ou e-mail já não foram cadastrados no banco.
Após o usuário entrar, seja por qualquer uma das validações, os dados (usuário e
senha) são armazenados, após iniciar a sessão. Dessa forma, qualquer arquivo adiante,
que seja restrito, exigindo um usuário específico, terá a validação , exigindo um usuário
e senha. Dessa forma, é mantido um sistema robusto e seguro, evitando falhas. O
usuário teste da aplicação foi definido como admin , com a senha 1234. O passo a
passo para instalar o banco será da seguinte forma.
- indetificar o arquivo .sql, que conterá os scripts para criação do banco.
- após isso, é necessário o acesso ao phpmyadmin, indo para a aba “importar” , e
selecionar o arquivo.
- Realizar a execução da criação do banco.
- Após isso, é necessário efetuar um login com o usuário ADMIN. Caso funcione,
significa que a conexão com o banco foi efetuada com sucesso e está funcionando.
Caso de algum erro, tente novamente os passos anteriores.