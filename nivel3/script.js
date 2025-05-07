function verificar(respuesta) {
    const correcta = "proximidad";
    const resultado = document.getElementById("resultado");
  
    if (respuesta === correcta) {
      resultado.textContent = "¡Correcto! Los círculos cercanos parecen un grupo.";
      resultado.style.color = "green";
    } else {
      resultado.textContent = "Incorrecto. Intenta con otro principio.";
      resultado.style.color = "red";
    }
  }
  