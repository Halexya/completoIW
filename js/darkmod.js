const html = document.documentElement;
const btn = document.getElementById("toggleTheme");
const temaSalvo = localStorage.getItem("theme");

if (temaSalvo) {
    html.setAttribute("data-bs-theme", temaSalvo);
}
atualizarIcone();
// Alterna o tema
btn.addEventListener("click", () => {
    const temaAtual = html.getAttribute("data-bs-theme");
    const novoTema =
        temaAtual === "light"
            ? "dark"
            : "light";
    html.setAttribute("data-bs-theme", novoTema);
    localStorage.setItem("theme", novoTema);
    atualizarIcone();
    // Atualiza os gráficos
    if (typeof atualizarGraficos === "function") {
        atualizarGraficos();
    }
});

function atualizarIcone() {
    const tema = html.getAttribute("data-bs-theme");
    btn.innerHTML =
        tema === "dark"
            ? '<i class="bi bi-sun"></i>'
            : '<i class="bi bi-moon-stars"></i>';
}