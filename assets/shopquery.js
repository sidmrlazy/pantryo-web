// Customer Section Changing Text Animation
var text = [
  "Apki Dukaan, Aapki Kamai",
  "Why should restaurants have all the fun?",
  "Strictly no Monthly Vasooli Policy.",
];
var counter = 0;
var elem = $("#shop-section-changing-text");
setInterval(change, 3000);
function change() {
  elem.fadeOut(function () {
    elem.html(text[counter]);
    counter++;
    if (counter >= text.length) {
      counter = 0;
    }
    elem.fadeIn();
  });
}
