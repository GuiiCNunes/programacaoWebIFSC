 # Avaliação 3

1. Criar a base de dados ifsc e a tabela aluno com as informações e configurações
abaixo:




2. Deverá ser criado um Sistema para realizar as operações de insert, delete, update e
select na tabela aluno. Para tanto, criar os arquivos de acordo com as especificações
abaixo.

Index.php → terá uma tela de login onde o usuário será identificado. Deverá ser criado um
campo select com duas opções (administrador e usuário) como mostra a figura 1. Quando
o usuário digitar seu login e senha e escolher seu perfil deverá ser redirecionado para a
página validarlogin.php
Figura 1 – Index.php- validarlogin.php → Nessa página deverá ser criado o controle de sessões. Utilizar as
seguintes informações para o login:
Perfil Login Senha
Administrador admin admin
Usuário usuario usuario
O administrador deverá ser direcionado para a página administrador.php e la deverá ser
apresentado a ele um menu com as funcionalidades como mostra a figura 2. O usuário
deverá ser direcionado para a página de usuario.php como mostra a figura 3.
Figura 2 – administrador.php
Figura 3 – usuario.phpInstruções Importantes:
Para o administrador:
• Quando o administrador clicar no link cadastrar aluno deverá ser exibido um
formulário com os campos definidos no banco de dados para que as informações
do aluno sejam inseridas. Quando a operação for executada, o administrador deve
ser redirecionado para a página administrador.php.
• Quando o administrador clicar no link visualizar aluno deverá ser exibida uma
tabela com todas as informações de todos os alunos. Não deverá ser exibido os
campos de Editar e Excluir.
• Quando o administrador clicar no link editar aluno deverá ser exibida uma tabela
com todas as informações de todos os alunos e a coluna Editar. Assim que o
administrador escolher o aluno deverá ser redirecionado para uma página com o
formulário contendo todas as informações do aluno selecionado para que as
alterações sejam feitas. Quando o administrador terminar a operação devera ser
redirecionado para a página administrador.php.
• Quando o administrador clicar no link excluir aluno deverá ser exibida uma tabela
com todas as informações de todos os alunos e a coluna Excluir. Assim que o
administrador escolher o aluno e clicar na opção excluir, o aluno deve ser excluído
e o administrador redirecionado para a página administrador.php.
• Quando o administrador clicar no link sair, deverá ser redirecionado para a página
index.php e deverá ser apresentada uma mensagem informando “deslogado com
sucesso”.
Para o usuário:
• Quando o usuário clicar no link visualizar aluno deverá ser exibida uma tabela com
todas as informações de todos os alunos. Não deverá ser exibido os campos de
Editar e Excluir.
• Quando o usuário clicar no link visualizar nascidos após 01/01/2002 deverá ser
exibida uma tabela com todas as informações dos alunos que nasceram após essa
data. Não deverá ser exibido os campos de Editar e Excluir.
• Quando o usuário clicar no link sair, deverá ser redirecionado para a página
index.php e deverá ser apresentada uma mensagem informando “deslogado com
sucesso”.
Controle de Sessões
• Deverá ser feito todo o controle de sessões para que nenhum usuário que não
esteja devidamente logado no sistema acesse as páginas do mesmo;• Caso tente acessar deverá ser exibida a mensagem “Usuário e/ou senha inválidos”
e redirecionado para a página index.php.
• O administrador terá acesso a todas as páginas desde que devidamente
autenticado;
Conexão
• Criar o arquivo conexao.inc.php com as funções conectar e desconectar que
devem ser chamadas nos arquivos que necessitam de conexão ao banco de
dados.