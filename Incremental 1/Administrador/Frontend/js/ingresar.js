const form = document.getElementById('g');
const div = document.getElementById('mensaje');

form.addEventListener('submit', async (event) => {
    event.preventDefault();

    const formData = new FormData(form);

    fetch("ingresar.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(datos => {
        console.log(datos);

        if (!datos.success) {
            div.innerHTML = `<h3>${datos.msg}</h3>`;
            return;
        }

        if (datos.rol === "adm" || datos.rol === "admin") {
            location.href = "admin.html";
        } else {
            location.href = "Usuario.html";
        }
    })
    .catch(error => {
        console.error(error);
        div.innerHTML = '<h3>Error en la conexin</h3>';
    });
});
