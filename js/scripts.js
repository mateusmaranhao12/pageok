document.addEventListener('DOMContentLoaded', function () {
    const mensagemSucesso = document.querySelector('.mensagem-sucesso')
    const mensagemErro = document.querySelector('.mensagem-erro')

    // Se a mensagem existir, faz ela sumir depois de 5 segundos (5000ms)
    if (mensagemSucesso || mensagemErro) {
        setTimeout(() => {
            if (mensagemSucesso) {
                mensagemSucesso.style.display = 'none'
            }
            if (mensagemErro) {
                mensagemErro.style.display = 'none'
            }
        }, 5000)
    }
})
