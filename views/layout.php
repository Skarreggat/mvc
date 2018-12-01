</div>
<!-- /container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- bootbox library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

<script> // script para la ordenacion de la tabla de productos
function sortTable(n) {
	var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
	table = document.getElementById("tabla");
	switching = true;
  // Marcamos que queremos que la direccion a ordenar sea ascendiente
  dir = "asc"; 
  //Hacer un bucle que continue hasta que no se ahya hecho ningun switching, es decir que sea false
  while (switching) {
    // Empezar el bucle dandole el valor false al switching
    switching = false;
    rows = table.rows;
    // Bucle para todas las filas menos la primera
    for (i = 1; i < (rows.length - 1); i++) {
      // Empezar el bucle dandole el valor false al shouldSwitch
      shouldSwitch = false;
      // Coger 2 elementos que queremos comparar, uno de la actual fila y el otro de la siguiente
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      // Comprobar si las 2 filas deberian cambiar de posicion, basado en la direccion asc
      if (dir == "asc") {
      	if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            //En caso afirmativo marcamos true y salimos del loop
            shouldSwitch = true;
            break;
        }
        //Comprobar si las 2 filas deberian cambiar de posicion, basado en la direccion desc  
    } else if (dir == "desc") {
    	if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            //En caso afirmativo marcamos true y salimos del loop
            shouldSwitch = true;
            break;
        }
    }
}
if (shouldSwitch) {
      // Si el switch ha sido marcado, hacemos el switch y marcamos que el switch se ha hecho
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Cada vez que un switchs se haga, incrementamos el contador en 1
      switchcount ++; 
  } else {
      // Si el swtiching no se ha hecho y la direccion es asc, ponemos desc en la direccion y hacemos el bucle de nuevo
      if (switchcount == 0 && dir == "asc") {
      	dir = "desc";
      	switching = true;
      }
  }
}
}
</script>

</body>
</html>
