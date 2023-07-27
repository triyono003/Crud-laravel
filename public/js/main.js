const isComplete = document.getElementById("is-complete");

const b = document.querySelector("button[type=submit] b");


isComplete.addEventListener("change", ({ target }) => {
  b.innerText = target.checked
    ? "Selesai dibaca"
    : "Belum selesai dibaca";
});

