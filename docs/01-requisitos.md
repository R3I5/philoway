# Documentação de Requisitos - PhiloWay

**Versão:** 1.0 (Draft)
**Data:** 25/01/2026
**Status:** Em Aprovação

---

## 1. Visão do Produto
O **PhiloWay** é uma plataforma pessoal de imersão filosófica. O objetivo é criar um ambiente onde o usuário possa não apenas consultar dados sobre filósofos (importados de fontes externas), mas também interagir ativamente através de anotações pessoais e discussões comunitárias (fórum). O sistema deve oferecer uma experiência visual temática e fluida.

---

## 2. Stack Tecnológica
* **Back-end:** Laravel 11 (PHP 8.2+)
* **Front-end:** React 18 + Vite
* **Estilização:** TailwindCSS 3.4
* **Banco de Dados:** SQLite (Desenvolvimento/Produção Simples)
* **Autenticação:** Laravel Breeze (Planejado)
* **Versionamento:** Git & GitHub

---

## 3. Requisitos Funcionais (RF)
*O que o sistema deve fazer.*

###  Autenticação & Usuários
* **[RF01] Cadastro:** O usuário deve poder se cadastrar usando Nome, E-mail e Senha.
* **[RF02] Login:** O sistema deve permitir login via credenciais padrão.
* **[RF03] Perfil:** O usuário poderá visualizar e editar seu perfil básico.
* **[RF04] Senha:** O usuário deve poder mudar de senha caso esqueça, autenticando suas credenciais.

### 🏛 Gestão de Filósofos (Core)
* **[RF04] Importação de Dados:** O sistema deve consumir uma API pública externa para popular o banco de dados local com:
    * Nome do Filósofo
    * Escola Filosófica
    * Principais idéias
    * Obras/Livros principais
    * Data de Nascimento/Morte
* **[RF05] Listagem:** O usuário deve poder buscar e filtrar filósofos por nome, escola ou idéias.
* **[RF06] Detalhes:** Ao clicar em um filósofo, exibir uma página com sua biografia e obras.

###  Funcionalidades de Estudo
* **[RF07] Anotações Pessoais:** O usuário logado pode criar anotações de texto vinculadas a um filósofo específico, seus livros ou suas idéias.
* **[RF08] Privacidade:** As anotações são privadas por padrão (visíveis apenas ao criador).

###  Fórum de Discussão
* **[RF09] Criação de Tópicos:** O usuário pode criar novas discussões.
* **[RF10] Categorização Obrigatória:** Ao criar um tópico, o usuário DEVE selecionar o "Objeto da Discussão" entre:
    1.  Um Filósofo específico.
    2.  Uma Escola Filosófica.
    3.  Um Livro/Obra.
* **[RF11] Comentários:** Usuários podem responder aos tópicos criados.

---

## 4. Requisitos Não-Funcionais (RNF)
*Critérios de qualidade e restrições técnicas.*

* **[RNF01] Desempenho:** As páginas devem carregar em menos de 2 segundos (uso do Vite/React).
* **[RNF02] Design System:** A interface deve seguir o tema "Via Láctea" (Paleta: Azul Meia-Noite, Preto Espacial, Dourado Estrela, Branco Gelo).
* **[RNF03] Responsividade:** O layout deve funcionar perfeitamente em Desktop e Mobile.
* **[RNF04] Segurança:** Senhas devem ser criptografadas (Bcrypt). Rotas de API devem ser protegidas por tokens (Sanctum/Session).

---

## 5. Regras de Negócio (RN)
*As leis do sistema.*

* **[RN01] Unicidade:** Não podem existir dois usuários com o mesmo e-mail.
* **[RN02] Dependência de Dados:** Um usuário não pode criar uma anotação para um filósofo que não existe no banco de dados local (deve ser importado antes).
* **[RN03] Moderação:** O sistema não deve permitir a exclusão de filósofos que possuam discussões ativas vinculadas a eles.

---

## 6. Futuro / Roadmap (Ideias)
* [ ] Timeline interativa da história da filosofia.
* [ ] Exportação das anotações em PDF.