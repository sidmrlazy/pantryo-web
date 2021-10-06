// Customer Section Changing Text Animation
var text = [
  "Gender No Bar",
  "Cycle, Bike, Scooter, e-rickshaw,ola, uber: Just Ride on!",
  "More Income, More Izzat",
  "Women Power!",
];
var counter = 0;
var elem = $("#delivery-partner-section-changing-text");
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
