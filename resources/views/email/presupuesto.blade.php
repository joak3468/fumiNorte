<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <style>
        table, th, td {
          border: 1px solid black;
        }
        </style>
</head>
<body>
    <h1><u>Prespuesto Online:</u></h1>
    <table style="width:100%">
        <tr>
          <th>Nomnbre</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Zona/barrio</th>
          <th>Plaga</th>
          <th>Espacio</th>
        </tr>
        <tr>
         <td>{{$informacion['nombre']}}</td>
         <td>{{$informacion['email']}}</td>
         <td>{{$informacion['phone']}}</td>
         <td>{{$informacion['plaga']}}</td>
         <td>{{$informacion['direccion']}}</td>
         <td>{{$informacion['space']}}</td>
        </tr>
      </table>
      <br>
      <table style="width:100%">
        <tr>
            <th>Comentario/Consulta:</th>
        </tr>
        <tr>
            <td>{{$informacion['mensaje']}}</td>
        </tr>
      </table>
    
</body>
</html>