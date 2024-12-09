<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Listar</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Lista de Contatos</h1>
    <a href="create.php">Adicionar Novo Contato</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php
        $sql = "SELECT * FROM usuarios";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $contatos = $stmt->fetchAll();
        foreach ($contatos as $contato) {
            echo "<tr>
                    <td>{$contato['id']}</td>
                    <td>{$contato['nome']}</td>
                    <td>{$contato['email']}</td>
                    <td>{$contato['tipo']}</td>
                    <td>
                        <a href='update.php?id={$contato['id']}'>Editar</a> | 
                        <a href='#' onclick='confirmarExclusao({$contato['id']}, \"{$contato['nome']}\", \"{$contato['email']}\", \"{$contato['tipo']}\")'>Excluir</a>
                    </td>
                </tr>";
        }
        ?>
    </table><br>
    <a href="../index.html">Voltar</a>

    <!-- Modal de confirmação -->
    <div id="modalExcluir" class="modal">
        <div class="modal-content">
            <span class="close" onclick="fecharModal()">&times;</span>
            <h3>Confirmação de Exclusão</h3>
            <div class="detalhes-contato">
                <p><strong>ID:</strong> <span id="modalId"></span></p>
                <p><strong>Nome:</strong> <span id="modalNome"></span></p>
                <p><strong>Email:</strong> <span id="modalEmail"></span></p>
                <p><strong>Telefone:</strong> <span id="modalTelefone"></span></p>
            </div>
            <p>Tem certeza que deseja excluir este contato?</p>
            <button id="confirmarBtn">Sim</button>
            <button onclick="fecharModal()">Não</button>
        </div>
    </div>

    <script>
        // Variáveis globais
        let modal = document.getElementById('modalExcluir');
        let confirmarBtn = document.getElementById('confirmarBtn');
        let idParaExcluir = null;

        // Elementos de exibição no modal
        // const modal = document.querySelector('dialog')
        let modalId = document.getElementById('modalId');
        let modalNome = document.getElementById('modalNome');
        let modalEmail = document.getElementById('modalEmail');
        let modalTelefone = document.getElementById('modalTelefone');

        // Função para abrir o modal e preencher as informações do contato
        function confirmarExclusao(id, nome, email, telefone) {
            idParaExcluir = id;
            modalId.textContent = id;
            modalNome.textContent = nome;
            modalEmail.textContent = email;
            modalTelefone.textContent = telefone;
            modal.style.display = 'block';
        }

        // Função para fechar o modal
        function fecharModal() {
            modal.style.display = 'none';
            idParaExcluir = null;
        }

        // Função para confirmar a exclusão
        confirmarBtn.addEventListener('click', function() {
            if (idParaExcluir) {
                window.location.href = 'delete.php?id=${idParaExcluir}';
            }
        });

        // Fechar modal ao clicar fora do conteúdo
        window.onclick = function(event) {
            if (event.target === modal) {
                fecharModal();
            }
        };
    </script>
</body>
</html>
