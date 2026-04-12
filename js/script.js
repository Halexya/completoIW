// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()


const inputUpload = document.getElementById('foto')
const imagemPrincipal = document.querySelector('.main-imagem')

function lerConteudoDoArquivo(arquivo) {
    return new Promise((resolve, reject) => {
        const leitor = new FileReader()
        leitor.onload = () => {
            resolve(leitor.result) // só o base64
        }
        leitor.onerror = () => {
            reject(`Erro na leitura do arquivo ${arquivo.name}`)
        }
        leitor.readAsDataURL(arquivo)
    })
}

inputUpload.addEventListener('change', async (evento) => {
    const arquivo = evento.target.files[0]

    if (!arquivo) return

    try {
        const base64 = await lerConteudoDoArquivo(arquivo)

        // atualiza preview
        imagemPrincipal.src = base64

        // salva no localStorage para outra página poder usar
        localStorage.setItem("imagemUsuario", base64)

    } catch (erro) {
        console.error('Erro na leitura do arquivo')
    }
})

