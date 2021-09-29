# API Produtos
API simples para cadastro e movimentação de produtos em Laravel.

## Versões 
- PHP ^7.3
- Laravel ^8.54


## Observações
Tentei manter um padrão semelhante a uma API REST, além é claro do "MVC" disponibilazdo pelo próprio Laravel (apesar de não estar trabalhando com views propriamente ditas).

As rotas foram testadas com o POSTMAN (json disponível também nesse repositório 'app-60c45f10.postman_collection.json').

Não há um tratamento de erros elaborado devido tanto ao tamanho da aplicação quanto ao fato de que acreditei que o objetivo maior não ser a análise desse tipo de implementação (até mesmo pelo tempo).

Uma observação quanto às movimentações é parti do princípio que uma movimentação não precisa ser modificada pois pode haver uma outra movimentação para ajuste.
