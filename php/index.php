<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Formulario de contacto</title>
        <link href="estilo.css" rel="stylesheet" />
           <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Macondo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Amatic+SC:wght@700&family=Macondo&display=swap" rel="stylesheet">
</head>
    <body>
 <header id="navegacion">
     
        <ul>
            <li><a href="https://213195.000webhostapp.com/Proyectos/TOUHOUPROJECTFINAL/INDEX.HTML"><img src="https://213195.000webhostapp.com/Proyectos/TOUHOUPROJECTFINAL/IMAGENES/logo.jpg"></a></li>
            <li><a href="https://213195.000webhostapp.com/Proyectos/TOUHOUPROJECTFINAL/OFICIAL.HTML">CONTENIDO OFICIAL</a></li>
            <li><a href="https://213195.000webhostapp.com/Proyectos/TOUHOUPROJECTFINAL/FANMADES.HTML">FANMADES</a></li>
            <li><a href="https://213195.000webhostapp.com/Proyectos/TOUHOUPROJECTFINAL/ORIGENES.HTML">ORIGENES</a></li>
          
            <audio id="principal" controls autoplay>
                <source src="https://213195.000webhostapp.com/Proyectos/TOUHOUPROJECTFINAL/adiamantium.mp3" type="audio/mpeg">
            
                <P>EL AUDIO NO ESTA SIENDO COMPATIBLE CON LA PAGINA</P>
            </audio>
        </ul>    
    </header>
    
    <main>
        <h2>Encuesta Korindou</h2>
        <h3>La siguiente Encuesta tiene como finalidad saber si la pagina le a sido <br>
            de utilidad y descubrir el interes por parte de la comunidad conocedora <br>
            por siertos aspectos de la saga.
        </h3>
        <h4>En esta encuesta no se pedira su nombre para mantener el anonimato de los participantes.</h4>
        <br>
        <br>

        <form class="encuesta" action="guardar.php" method="POST" id="contact_form" runat="server" enctype="multipart/form-data">
                
            <label for="sexo">Favor de identificar su sexo:</label><br>
            <div><input type="radio" name="sexo" value="Femenino"/>Femenino
                <input type="radio" name="sexo" value="Masculino"/>Masculino</div>
                <br>

          
            <label for="edad">Edad:</label> <input type="number" id="edad" name="edad"  min="5" max="150"required ><br><br> 



            <label for="pais">Pais:</label><br>
            <input type="text" id="pais" name="pais"  maxlength="40"required ><br><br>
            
    


          <label for="idioma">Hasta cuantos idiomas maneja:</label><br>
          <select name="idioma"required>
            <option value="" >--------</option>
              <option value="Espa&ntilde;ol">Solo espa&ntilde;ol</option>
              <option value="English">English</option>
              <option value="Espa&ntilde;ol e ingles">espa&ntilde;ol e ingles</option>
              <option value="2 idiomas">Espa&ntilde;ol y otro</option>
              <option value="Triada de lenguas">3 idiomas (Espa&ntilde;ol, ingles y japones)</option>
              <option value="3 idiomas">3 idiomas</option>
              <option value="4 idiomas o mas">4 idiomas o mas (wow!)</option>   
                 </select><br><br>
        
            
                   <label for="apartado">Cual de los apártados a sido de su mayor agrado?</label><br>
                   <div><input type="radio" name="apartado" value="Oficial"required/>contenido oficial
                   <input type="radio" name="apartado" value="Fanmades"/>fanmades
                   <input type="radio" name="apartado" value="Origenes"/>origenes</div>
                   <br>

                   <label for="experiencia">Que tan buena considera que fue experiencia al navegar por la pagina?</label><br>
                   <select name="experiencia">
                  <option value="" >--------</option>
              <option value="No le intereso">No me fije/No le tome importancia</option>
              <option value="Mala">Mala</option>
              <option value="Regular">Regular</option>
              <option value="Buena">Buena</option>
              <option value="Muy buena">Muy buena</option>
              <option value="Excelente">Excelente</option>
                 </select><br><br>
                   

            
              <label for="saga">Es usted conocedor de la saga Touhou Project?</label><br>
          <div><input type="radio" name="saga" value="si conoce la saga"/>Si
          <input type="radio" name="saga" value="no conoce la saga"/>No</div><br>

          <h3>Si su respuesta fue afirmativa favor de responder las siguientes preguntas, en caso contrario mande el registro.</h3><br>
           
          
          <button class="submit" types="submit">Enviar Registro</button>
          <br>
          <br>
          <br>
         
           
          <label for="contenido">Que tipo de contenido procedente de la saga es el que mas suele consumir?</label><br>
          <select name="contenido">
            <option value="" >--------</option>
              <option value="Danmaku">Juegos canonicos danmaku</option>
              <option value="Tasofro">Juegos de peleas (tasofro)</option>
              <option value="Juegos externos">Juegos por parte de la comunidad</option>
              <option value="Musica oficial">Musica oficial</option>
              <option value="Musica no oficial">Musica en general (preferencia en la musica no oficial como: remasterizaciones, covers, vocalizaciones, remix)</option>
              <option value="Ilustraciones">Ilustraciones</option>
              <option value="Manga">Lectura del contenido oficial</option>
              <option value="Anime">Animaciones</option>
              <option value="Otro">otro</option>
              <option value="Todos los contenidos">disfruto de todo el contenido que ofrece de forma oficial y no oficial</option>
                 </select><br>
                 <label for="otro">Si lo desea es libre de especificar el contenido de su preferencia:</label><br>
                 <input type="text" id="otro" name="otro"  maxlength="150" placeholder="No mas de 150 caracteres!"><br>
                 <br>


          <label for="juego">Cual es su juego de touhou oficial preferido?</label><br>
          <input type="text" id="juego" name="juego"  maxlength="100" ><br><br>

          
          <label for="jugador">Que tipo de jugador se considera</label><br>
          <select name="jugador">
            <option value="" >--------</option>
              <option value="Easy">Easy</option>
              <option value="Normal">Normal</option>
              <option value="Hard">Hard</option>
              <option value="Lunatic">Lunatic</option>
              <option value="No juega">no soy jugador</option>
                 </select><br><br>

                

                 <label for="personaje">Si juega conteste: cual de los personajes jugables concurrentes en la saga es su preferido?</label><br>
                 <select name="personaje">
                   <option value="" >--------</option>
                     <option value="Reimu">Reimu</option>
                     <option value="Marisa">Marisa</option>
                     <option value="Sakuya">Sakuya</option>
                     <option value="Youmu">Youmu</option>
                     <option value="Aya">Aya</option>
                     <option value="Sanae">Sanae</option>
                     <option value="Cirno">Cirno</option>
                     <option value="Reisen">Reisen</option>
                        </select><br><br>

                 

                 <label for="aporte">Si tiene conocimiento de algun link que pueda aportar contenido a nuestra pagina para la comunidad te invitamos a que lo compartas:</label><br>
                 <input type="text" id="aporte" name="aporte"><br><br>


            
                <button class="submit" types="submit">Enviar Registro</button>
            
             </form>
             </main>
             
            
            
    </body>
</html>
