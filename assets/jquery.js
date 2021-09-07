// Customer Section Changing Text Animation
var text = [
  "Don’t swiggy, Just Ghar ka Khana",
  "zo-MAA-to ki kasam, Stay home",
  "Gro-fers is Next Day, PantrYO is Today",
  "No Bazar is BIGger than your Yo-Yo ki Dukaan",
  "You don’t need a BIGger Basket, you just need Araam",
];
var counter = 0;
var elem = $("#customer-section-changing-text");
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
