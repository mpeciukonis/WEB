//Data parametrai:
// name: "Jonas",
// surname: "Jonaitis",
// age: 28,
// photo: "images/jonas.jpg"
// description: "Jonas yra kietas, jis yra studentas."

function getContainer(data){
  var containerDiv = $("<div>");
  // containerDiv.prop("class", "container");  pirmas budas
  // containerDiv.attr("class", "container");  antras budas
  containerDiv.addClass("container"); //trecias budas

  var imageRowDiv = $("<div>");
  imageRowDiv.addClass("row");

  var img = $("<img>");
  var imgRow = $("<div>");

  imgRow.addClass("img_row");
  img.prop("src", data.photo);

  imgRow.append(img);
  imageRowDiv.append(imgRow);
  containerDiv.append(imageRowDiv);

  var vardas = getRow("Vardas", data.name);
  var pavarde = getRow("Pavarde", data.surname);
  var amzius = getRow("Amzius", data.age);
  var aprasymas = getRow("Aprasymas", data.description);
  containerDiv.append(vardas);
  containerDiv.append(pavarde);
  containerDiv.append(amzius);
  containerDiv.append(aprasymas);

  return containerDiv;
}

function getRow(key, value){
  var rowDiv = $("<div>");
  rowDiv.addClass("row");

  var rowDivLeft = $("<div>");
  var rowDivRight = $("<div>");
  rowDivLeft.addClass("left");
  rowDivRight.addClass("right");

  var boxDiv = $("<div>");
  boxDiv.addClass("box");
  boxDiv.text(key);
  rowDivLeft.append(boxDiv);
  rowDiv.append(rowDivLeft);

  boxDiv = $("<div>");
  boxDiv.addClass("box");
  boxDiv.text(value);
  rowDivRight.append(boxDiv);
  rowDiv.append(rowDivRight);

  return rowDiv;
}
