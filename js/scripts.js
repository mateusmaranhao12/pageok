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

document.addEventListener('DOMContentLoaded', function () {

    // Verifica se há um erro no WhatsApp
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('mensagem') && urlParams.get('mensagem') === 'erro_whatsapp') {
        const formulario = document.getElementById('formulario')
        if (formulario) {
            formulario.scrollIntoView({ behavior: 'smooth', block: 'start' })
        }
    }
});

