if (document.querySelector(".service-div") != null) {
  const service_div = document.querySelector(".service-div");
  const arrowBtns = document.querySelectorAll(".wrapper img");
  const firstCardWidth = service_div.querySelector(".card").offsetWidth;

  arrowBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      service_div.scrollLeft +=
        btn.id === "left" ? -firstCardWidth : firstCardWidth;
    });
  });
}
