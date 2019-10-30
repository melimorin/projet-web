export default class App {
	static main() {
        var largeurDeplacement = 350;
        var flecheGauche = document.querySelector(".fleche-gauche");
        var flecheDroite = document.querySelector(".fleche-droite");
        var contenantCarroussel = document.querySelector(".img-compo");

        if (contenantCarroussel != null) {
            contenantCarroussel.style.left = "0px";

            flecheGauche.addEventListener("click", e => {
                var newLeft = parseInt(contenantCarroussel.style.left) - largeurDeplacement + "px";
                contenantCarroussel.style.left = newLeft
            })
            flecheDroite.addEventListener("click", e => {
                var newLeft = parseInt(contenantCarroussel.style.left) + largeurDeplacement + "px";
                contenantCarroussel.style.left = newLeft
            })
        }
	}
	
	static load() {
		return new Promise(resolve => {
			window.addEventListener("load", () => {
				resolve();
			});
		});
	}
}
