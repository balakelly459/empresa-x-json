  
function abrirCadastro() {
    document.getElementById("cadastrar__area").style.display = "flex";
}

function fecharCadastro() {
    document.getElementById("cadastrar__area").style.display = "none"
}

function deletar(idFuncionario){
    let confirmacao = confirm("Deseja deletar o funcionário?");
    if(confirmacao){
        window.location = "acaoDeletar.php?id=" + idFuncionario;
    }
}

document.getElementById("button__cadastrar").addEventListener("click", abrirCadastro)

document.getElementById("button__cancelar").addEventListener("click", fecharCadastro)

