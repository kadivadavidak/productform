function addProduct() {
  var form = $('#productForm')[0];
  if( !form.checkValidity() )
  {
    return false;
  }

  var table = $("#productTable")[0];
  var length = table.rows[0].cells.length
  
  $(table).remove();

  var tr = $("<tr></tr>");
  for (var i = 0; i < length; i++) {
    $("<td></td>").html(form.elements[i].value).appendTo(tr);
  }
  $(tr).appendTo(table);
  $(table).appendTo($('#tblHolder'));
  
  form.reset();

  $("#productTable").tablesorter();
  format();
}

function format() {
  var table = $("#productTable")[0];
  for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].cells[2].innerHTML = accounting.formatMoney(table.rows[i].cells[2].innerHTML);
  }
}