<html>
    <head>
      <title>FORMULARIO PERSONA</title>  
      <style>
        div label {
          float : left;
          widh: 25%
        }
        input{
          border: solid 2px black;
        }
      </style> 
    </head>

        <body>
        <h1>CREAR PERSONA</h1>
        <form action ="guardar_persona.php" method="post">
          <fieldset>
          <legend><b>INGRESE DATOS</b></legend>
          <label><b>NOMBRE</b></label>
          <input type="text" name="nombre">
          <div> 
          </div>
          <label><b>E-MAIL</b></label>
          <input type="text" name="email">
          <div> 
          </div>
          <input type="submit" value="guardar">
          <a  href="index.php">Volver</a>
          <div> 
          </div>


        </fieldset>
        
        </form>
        
        </body>
</html>