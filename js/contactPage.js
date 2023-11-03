// Contact Page Map Script
document.querySelectorAll("#map path").forEach((country) => {
  country.addEventListener("mousemove", function (event) {
    // Deselectăm toate țările
    Array.from(document.querySelectorAll(".country-selected")).forEach(
      function (selectedCountry) {
        selectedCountry.classList.remove("country-selected");
      }
    );

    // Selectăm țara pe care s-a făcut click
    event.target.classList.add("country-selected");

    // Afișăm informații despre țara selectată, dacă există
    var info = getCountryInfo(event.target.id);
    var infoDiv = document.getElementById("country-info");
    if (info) {
      infoDiv.innerHTML = info;
      infoDiv.style.display = "block";
    } else {
      infoDiv.innerHTML =
        "Nu face parte din rețeaua noastră de colaborare globală";
    }
  });

  country.addEventListener("mousemove", function (event) {
    var infoDiv = document.getElementById("country-info");
    infoDiv.style.left = event.pageX + "px";
    infoDiv.style.top = event.pageY + "px";
  });
});

function getCountryInfo(countryId) {
  var countryInfo = {
    italia:
      "Italia<br>Salvatore Venezia<br>salvatore.venezia@aplast.com<br>+40 752 082 119",
    grecia:
      "Grecia<br>Aura Cruceru<br>aura.cruceru@aplast.com<br>+40 742 221 498",
    romania: "Romania<br>Monica<br>office@aplast.com<br>+40 751 103 377",
    belgia:
      "Belgia<br>Marius Bondor<br>marius.bondor@aplast.com<br>+40 752 072 252",
    cehia:
      "Cehia<br>Aura Cruceru<br>aura.cruceru@aplast.com<br>+40 742 221 498",
    austria:
      "Austria<br>Cristian Ionascu<br>cristian.ionascu@aplast.com<br>+40 742 221 423",
    germania:
      "Germania<br>Cristian Ionascu<br>cristian.ionascu@aplast.com<br>+40 742 221 423",
    franta:
      "Franta<br>Marius Bondor<br>marius.bondor@aplast.com<br>+40 752 072 252",
    slovacia:
      "Slovacia<br>Aplast Office<br>office@aplast.com<br>+40 752 072 256",
  };

  return countryInfo[countryId];
}
