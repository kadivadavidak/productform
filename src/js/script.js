function addProduct() {
  var form = document.getElementById("productForm");
  if ([form[0].value, form[1].value, form[2].value, form[3].value, form[4].value].indexOf("") > -1) {
    alert("Please fill in all values to create product.");
    return false;
  }
  if (isNaN(form[2].value) || isNaN(form[3].value)) {
    alert("Both Price and Quantity must be numbers.");
    return false;
  }

  var table = document.getElementById("productTable");
  var row = table.insertRow(-1);
  for (var i = 0; i < table.rows[0].cells.length; i++) {
      var cell = row.insertCell(i);
      cell.innerHTML = form.elements[i].value;
  }
}

function format() {
  var table = document.getElementById("productTable");
  for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].cells[2].innerHTML = accounting.formatMoney(table.rows[i].cells[2].innerHTML);
  }
}

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("productTable");
  switching = true;
  dir = "asc"; 
  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (Number(x.innerHTML) > Number(y.innerHTML)) {
        shouldSwitch = true;
        break;
      } else if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++;      
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}