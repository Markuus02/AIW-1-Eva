document.getElementById("mostrarBtn").addEventListener("click", () => {
  document.getElementById("mostrarBtn").style.display = "none";
  document.getElementById("contenido").style.display = "block";
});

const imagenes = [
  "https://via.placeholder.com/400x250?text=Imagen+1",
  "https://via.placeholder.com/400x250?text=Imagen+2",
  "https://via.placeholder.com/400x250?text=Imagen+3",
  "https://via.placeholder.com/400x250?text=Imagen+4"
];

document.getElementById("imagenBtn").addEventListener("click", () => {
  const aleatoria = imagenes[Math.floor(Math.random() * imagenes.length)];
  document.getElementById("imagenGaleria").src = aleatoria;
});

const frases = [
  "A la fresca!",
  "Xe, que bo!",
  "Anem a fer un mosset.",
  "Estic fart de caldo!",
  "Això està de categoria!"
];

document.getElementById("fraseBtn").addEventListener("click", () => {
  const aleatoria = frases[Math.floor(Math.random() * frases.length)];
  document.getElementById("fraseBox").innerText = `"${aleatoria}"`;
});