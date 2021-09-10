  
function abrirCadastro() {
    document.getElementById("cadastrar__area").style.display = "flex";
}

function fecharCadastro() {
    document.getElementById("cadastrar__area").style.display = "none"
}

document.getElementById("button__cadastrar").addEventListener("click", abrirCadastro)

document.getElementById("button__cancelar").addEventListener("click", fecharCadastro)

