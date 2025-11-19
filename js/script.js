const botonAumentar = document.getElementById("aumentar")
const mostrarValorContador = document.getElementById("contador")

let contador = 0;

botonAumentar.addEventListener("click", function aumentarValor(){
    contador = contador + 1;
    actualizarContador();
})

function actualizarContador (){
    mostrarValorContador.textContent = contador;
}