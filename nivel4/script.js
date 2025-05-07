let draggedItem = null;

document.querySelectorAll('.elemento').forEach(elem => {
  elem.addEventListener('dragstart', e => {
    draggedItem = e.target;
  });
});

document.querySelectorAll('.zona-drop').forEach(zone => {
  zone.addEventListener('dragover', e => e.preventDefault());

  zone.addEventListener('drop', e => {
    e.preventDefault();
    const tipo = draggedItem.dataset.tipo;
    const receptor = zone.dataset.receptor;

    if (tipo === receptor) {
      zone.textContent = draggedItem.textContent;
      zone.style.backgroundColor = "#a8e6cf";
      draggedItem.remove();
      checkGanaste();
    } else {
      zone.style.backgroundColor = "#ff8a80";
      setTimeout(() => {
        zone.style.backgroundColor = "#fff";
        zone.textContent = receptor.charAt(0).toUpperCase() + receptor.slice(1);
      }, 1000);
    }
  });
});

function checkGanaste() {
  const quedan = document.querySelectorAll('.elemento').length;
  if (quedan === 0) {
    document.getElementById("resultado").textContent = "¡Excelente! Armaste el wireframe correctamente.";
    document.getElementById("resultado").style.color = "green";
  }
}
