# 1: cadastrar do produto / cadastrar disponibilidade por dia e turno 
# 2: (consumidor) listagem dos produto por dia e expiração do reversa + adição da reserva
# 2.1: (vendedor) listagem das reservas já realizadas
# 2.2: perfil misto (vendedor+consumidor) *há avaliar
# 3: ranking dos produtos e avaliação
# 4: ranking por vendedores e sugestões
# 5: login + cadastro do usuário e perfil
# rotas, controllers, models e os migrates
# https://pt.wix.com/website-template/view/html/2949?originUrl=https%3A%2F%2Fpt.wix.com%2Fwebsite%2Ftemplates%2Fhtml%2Fonline-store&tpClick=view_button&esi=023407fd-aca6-47a7-ae09-d24f0d473000

Entidades mapadas na base de dados:

Users + perfil

Reserva
- Usuário(comprador)
- DisponibilidadeProdutoDiaTurno
- Quantidade
- data/hora
Produto
- id 
- Imagem
- Nome
- Descrição
- Usuário(vendedor)
- Preco
DisponibilidadeProdutoDiaTurno
- Quantidade
- Produto
- Dia
- Turno
- Localidade
Avaliação
- Produto
- Pontuacao
- Comentario
Sugestões
- Produto
- Texto
- Data
- Usuário
Localidade
- id - pk
- Local 


