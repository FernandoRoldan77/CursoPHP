<html>

<head>
  <title>Problema</title>
</head>

<body>
  <form action="pagina2.php" method="post">
    Ingrese primer valor:
    <input type="text" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="text" name="valor2">
    <br>
    <select name="operacion">
      <option value="suma">sumar</option>
      <option value="resta">restar</option>
    </select>
    <br>
    <input type="submit" name="operar">
  </form>
</body>

</html>