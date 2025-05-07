let coloresSeleccionados = [];

function allowDrop(ev) {
  ev.preventDefault();
}

document.querySelectorAll('.color').forEach(el => {
  el.addEventListener('dragstart', function (e) {
    e.dataTransfer.setData("color", e.target.dataset.color);
  });
});

function dropColor(ev) {
  ev.preventDefault();
  const color = ev.dataTransfer.getData("color");
  coloresSeleccionados.push(color);

  if (coloresSeleccionados.length === 2) {
    const mezclado = mezclarColores(coloresSeleccionados[0], coloresSeleccionados[1]);
    document.getElementById('color-mezclado').style.backgroundColor = mezclado;
    coloresSeleccionados = [];
  }
}

function mezclarColores(c1, c2) {
  const combinaciones = {
    "rojo+azul": "purple",
    "azul+rojo": "purple",
    "rojo+amarillo": "orange",
    "amarillo+rojo": "orange",
    "azul+amarillo": "green",
    "amarillo+azul": "green"
  };
  return combinaciones[`${c1}+${c2}`] || "gray";
}
