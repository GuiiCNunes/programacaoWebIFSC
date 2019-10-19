# Exercício 3


3) (2,5) Fazer um programa em php onde serão necessários três arquivos cujas descrições
estão abaixo:

1. index.php – Nesse arquivo deverá ser criado um form onde o usuário digitará as seguintes
informações: Nome e Idade. Os dois campos são do tpo text e required. Essas informações
serão enviadas para o arquivo vocacional.php quando o usuário clicar no próximo (botão de
submit).Ver Figura 1.

2. vocacional.php – esse arquivo deverá apresentar o nome do usuário informado na página
anterior e verifcar a idade do usuário. Caso ele tenha menos do que 16 anos deverá ser
apresentada a ele a seguinte mensagem: “Ainda é muito cedo para você escolher uma
profssão. Aproveite o seu tempo para se divertr com a família e amigos. Esperamos você num
futuro próximo”. Essa mensagem deve ser centralizada. (Ver fgura 2).
Deverá ser criado um array com indice númerico com os seguintes conteúdos: matematcaa
quimicaa biologiaa lógica e saúde. Os dados devem ser inseridos no array nessa ordem e antes
de serem apresentados no select devem ser ordenados alfabeticamente. A partir desse array
deverá ser criado um select que permite seleção multpla e armazena mais de uma opção.
(Figura 3) Caso o usuário não selecione nenhuma opção do select deverá ser exibida uma
mensagem “Você não selecionou nenhum conteúdo de preferência”.(Figura 4)

3. processar.php – esse arquivo receberá as informações do formulário anterior e deverá
exibir o nome da pessoa e as possibilidades de faculdades a serem feitas baseadas nas
respostas que ela der. Deverá ser previsto todas as combinações de respostas possíveis.
(Figura 5)

Biologia → Você poderia fazer uma faculdade de Biologia ou Agronomia
Lógica → Você poderia fazer Ciência da Computação ou Sistemas de Informação
Matemátca → Você poderia fazer uma faculdade de Engenharia ou Matemátca
Química → Você poderia fazer uma faculdade de Química ou Farmácia
Saúde → Você poderia fazer uma faculdade de Medicina ou Enfermagem