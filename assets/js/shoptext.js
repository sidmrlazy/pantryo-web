// Shop
var shoptext = [
  "Why should restaurants have all the fun?",
  "Strictly no Monthly Vasooli Policy.",
  "Apki Dukaan, Aapki Kamai",
];
var newcounter = 0;
var newelem = $("#shop");
setInterval(change, 3000);
function change() {
  newelem.fadeOut(function () {
    newelem.html(shoptext[newcounter]);
    newcounter++;
    if (newcounter >= shoptext.length) {
      newcounter = 0;
    }
    newelem.fadeIn();
  });
}
