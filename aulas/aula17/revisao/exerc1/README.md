# Exercício 1


Fazer um programa em php onde serão necessários quatro arquivos cujas descrições estão abaixo:

1.  index.php – Nesse arquio deverá ser criado um form onde o usuário digitará as seguintes informações: Nome e Idade.
Os dois campos são do tipo text e required.
Essas informações serão enviadas para o arquivo matematica.php quando o usuário clicar no próximo (botão de submit).

2. matematica.php – esse arquivo deverá apresentar o nome do usuário informado na página anterior e depois terá duas perguntas sobre matemática que o usuário poderá se divertir.
Na primeira pergunta o usuário deverá informar 3 números (tipo text e required).
Após digitar esses três números o usuário deverá escolher através de um radio se quer mostrar os números em ordem crescente ou decrescente.
Ele deve obrigatoriamente escolher uma das duas opções.
Após escolher ele vai para a pergunta 2.
Ver figura 1

Na pergunta dois será exibido um checkbox para o usuário escolher números para realizar operações matemáticas.
Ele pode selecionar quantos ele quiser inclusive nenhum.
Após selecionar os números ele deverá selecionar a ou as operações a serem realizadas, inclusive nenhuma.
Assim que terminar deverá clicar no botão próxima (submit).
Todas essas informações serão enviadas para o arquivo calcular.php.
Ver figura 2

3. operacos.inc.php – as funções de ordenação crescente e decrescente devem ser implementadas nesse arquivo e o resultado impresso de acordo com a opção escolhida.
(Não haverá return).

4. calcular.php – nesse arquivo deverá ser implementada as funções de soma,subtracao e multiplicacao.
Apresentado com a seguinte formatação:
- nome do usuário
Ver figura 3
Para o exer 1 deverá ser exibido:
- números digitados para ordenar
- numeros ordenados de acordo com a escolha
Para o exer 2 deverá ser exibido:
- Os números escolhidos
- As operações escolhidas
- O resultado das operações
Caso o usuário não selecione nenhum número ou operação deverá ser exibida uma mensagem para ele como mostra a figura 4.
