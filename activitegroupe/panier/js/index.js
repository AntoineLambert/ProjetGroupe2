var total = 0;
var panier = [];
var croissant = {
  label: "Service Or",
  type: "Antivirus, nettoyage, dépannage",
  prix: 30,
  img: "or.png"
};
var menu = {
  label: "Service Argent",
  type: "Antivirus, nettoyage",
  prix: 20,
  img: "argent.png"
};
var repasNoel = {
  label: "Service Bronze",
  type: "Antivirus",
  prix: 10,
  img: "bronze.png"
};

function clickAcheter() {
  if(this.id == 'btn-buy-1') {
    ajouterArticle(croissant);
  }
  if(this.id == 'btn-buy-2') {
    ajouterArticle(menu);
  }
  if(this.id == 'btn-buy-3') {
    ajouterArticle(repasNoel);
  }
}

function ajouterArticle(article) {
  panier.push(article);
  total += article.prix;

  document.getElementById('texte-panier').innerHTML = 'J\'ai pris ' + panier.length + ' article(s) pour un total de ' +  total.toString() + '€';
  ajouterLigneDetail(article);
  document.getElementById('details-panier').style.visibility = "visible"
}

function supprimerArticle(article) {
  var i = 0;
  var firstId = -1;
  while((i < panier.length) && (firstId == -1)) {
    if(panier[i] == article) {
      firstId = i;
    }
    i++;
  }
  if(firstId >= 0) {
    delete panier[firstId];
  }
  rafraichirPanier();
}

function ajouterLigneDetail(article) {
  var tr = document.createElement("tr");

  var tdImage = document.createElement("td");
  var img = document.createElement("img");
  img.src = article.img;
  tdImage.appendChild(img);
  tr.appendChild(tdImage);

  var tdLabel = document.createElement("td");
  var label = document.createElement("span");
  label.textContent = article.label;
  tdLabel.appendChild(label);
  tr.appendChild(tdLabel);

  var tdType = document.createElement("td");
  var type = document.createElement("span");
  type.textContent = article.type;
  tdType.appendChild(type);
  tr.appendChild(tdType);

  var tdPrix = document.createElement("td");
  var prix = document.createElement("span");
  prix.textContent = article.prix.toString();
  tdPrix.appendChild(prix);
  tr.appendChild(tdPrix);

  document.getElementById('details-panier').appendChild(tr);
}

document.getElementById('btn-buy-1').addEventListener("click", clickAcheter);
document.getElementById('btn-buy-2').addEventListener("click", clickAcheter);
document.getElementById('btn-buy-3').addEventListener("click", clickAcheter);
