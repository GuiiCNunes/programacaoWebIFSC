# Atividade 1

Criar um programa web com os seguintes arquivos:
- index.php – Deverá ser criado um formulário onde o usuário entrará com seu login e
senha e também através de um radio button irá escolher o seu perfil. Esse pode ser de
administrador, desenvolvedor ou usuário. Ver figura 1. Deverão ser criados três perfis
como mostra a tabela abaixo

| Usuário | Senha | Perfil |
| ------- | ----- | ------ |
| pedrosilva | 123456 | Administrador |
| mariasilva | 1234567 | Desenvolvedor |
| josesilva | 1234567 | Usuário |

- valida.php esse arquivo será responsável por criar a sessão e verificar as
informações. Deverá ser criado uma variável de Sessão para guardar o identificador
referente ao perfil. Esse identificador pode ser numérico como, por exemplo,
administrador = 1, desenvolvedor = 2 e usuario = 3. Após as verificações o usuário
deverá ser direcionado somente para a página que deverá ter acesso. A página é
direcionada de acordo com o seu perfil.
- administrador.php – se o usuário tiver esse perfil deverá ser apresentado as
informações contidas na figura 2.
- desenvolvedor.php se o usuário tiver esse perfil deverá ser apresentado as
informações contidas na figura 3.
- usuario.php e o usuário tiver esse perfil deverá ser apresentado as informações
contidas na figura 4.
- sair.php – Deverá ser excluída as variáveis de sessão e voltar para a página principal
com a mensagem de deslogado com sucesso. Ver figura 5.
