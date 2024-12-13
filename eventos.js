const senha = document.getElementById("senha");
const mostrarSenha = document.getElementById("mostrar_senha");

function alternarVisibilidade() {
    if (senha.type === "password") {
        senha.type = "text"; // Mostra a senha
        mostrarSenha.textContent = "visibility_off"; // Altera o ícone para ocultar
    } else {
        senha.type = "password"; // Esconde a senha
        mostrarSenha.textContent = "visibility"; // Altera o ícone para mostrar
    }
}

// Adiciona o evento ao clique no ícone
mostrarSenha.onclick = alternarVisibilidade;
