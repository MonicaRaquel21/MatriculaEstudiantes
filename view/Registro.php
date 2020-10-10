<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de registro </title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="root">
        <form action="" class="form-register">
            <div class="form-register__header">
                <ul class="progressbar">
                    <li class="progressbar__option active">paso 1</li>
                    <li class="progressbar__option">paso 2</li>
                    <li class="progressbar__option">paso 3</li>
                </ul>
                <h1 class="form-register__title">FICHA DE REGISTRO DEL ESTUDIANTE</h1>
            </div>
            <div class="form-register__body">
                <div class="step active" id="step-1">
                    <div class="step__header">
                        <h2 class="step__title">Información del Estudiante<small></small></h2>
                    </div>
                    <div class="step__body">

                     <p>Lea detenidamente cada uno de los campos llenado toda la información sobre el Alumno que solicita Matricular</p>
                        <br>
                        <input type="text" placeholder=" Ingrese Nombres" class="step__input">
                        <input type="text" placeholder="Ingrese Apellidos" class="step__input">
                      
                        <input type="number" placeholder="Edad" class="step__number">
                        <input type="text" placeholder="Teléfono Movil de Estudiante" class="step__input">
                        <input type="email" placeholder="Correo Electronico" class="step__input">
                          
                        <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder="Ingrese la dirección de residencia actual"></textarea>
                        <p>¿nivel Academico ?</p>
                         <select name="select"  class="step__option">
                        <option value="value1"selected>Kinder</option> 
                        <option value="value2" >primergrado</option>
                        <option value="value3">noveno</option>
                       
                         </select>
                       
                        <p>¿De que institución proviene?</p>
                        <input type="text" placeholder=" " class="step__input">

                         <div class="radio-group">
                         <p>¿Posee cuenta de Facebook?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                          </div>
                          <p>Usuario de Facebook</p>
                        <input type="text" placeholder=" " class="step__input">
                        <p>Nombre de recomienda</p>
                        <input type="text" placeholder=" " class="step__input">
                        <input type="text" placeholder=" Religión" class="step__input">

                      

                          
                     
                         
                            
                    

                        
                         
                     
                          
                        
                        
                        

                         
                        


                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-2">
                    <div class="step__header">
                        <h2 class="step__title">Información del Padre de Familia y Encargado<small></small></h2>
                    </div>
                    <div class="step__body">
                        <h3>Información del Padre de Familia</h3>
                        <p>Ingrese los datos requeridos del padre</p>
                        <input type="text" placeholder="Nombre del Padre" class="step__input">
                        <input type="text" placeholder="DUI" class="step__input">
                        <input type="text" placeholder="NIT" class="step__input">
                        <input type="text" placeholder="Profesion/oficio" class="step__input">
                        <p>Ingrese su lugar de trabajo/profesión</p>
                        <input type="text" placeholder="Lugar de Trabajo" class="step__input">
                        <input type="text" placeholder="Celular" class="step__input">
                        <input type="text" placeholder="Teléfono del trabajo" class="step__input">
                        <input type="email" placeholder="Correo Electronico" class="step__input">
                         <hr>
                        <p>Ingrese los datos requeridos de la Madre de Familia</p>
                        <input type="text" placeholder="Nombre de la Madre" class="step__input">
                        <input type="text" placeholder="DUI" class="step__input">
                        <input type="text" placeholder="NIT" class="step__input">
                        <input type="text" placeholder="Profesion/oficio" class="step__input">
                        <p>Ingrese su lugar de trabajo/profesión</p>
                        <input type="text" placeholder="Lugar de Trabajo" class="step__input">
                        <input type="text" placeholder="Celular" class="step__input">
                        <input type="text" placeholder="Teléfono del trabajo" class="step__input">
                        <input type="email" placeholder="Correo Electronico" class="step__input">

                        <h3>Información del Encargado Legal</h3> 
                        <p>Ingrese los datos requeridos acontinuación:</p>
                        <input type="text" placeholder="Nombre de la Madre o Padre y otra persona" class="step__input">
                        <input type="text" placeholder="DUI" class="step__input">
                        <input type="text" placeholder="NIT" class="step__input">
                        <input type="text" placeholder="Profesion/oficio" class="step__input">
                        <p>Ingrese su lugar de trabajo/profesión</p>
                        <input type="text" placeholder="Lugar de Trabajo" class="step__input">
                        <input type="text" placeholder="Celular" class="step__input">
                        <input type="text" placeholder="Teléfono del trabajo" class="step__input">
                        <input type="email" placeholder="Correo Electronico" class="step__input">
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
                    </div>

                    <p>¿Con quien vive el estudiante?</p>
                          <select name="select"  class="step__option">
                        <option value="value1"selected>Madre</option> 
                        <option value="value2" >padre</option>
                        <option value="value3">Madre y Padre</option>
                        <option value="value4">familiar</option>
                        <option value="value4">Otro</option>
                         </select>

                </div>
                <div class="step" id="step-3">
                    <div class="step__header">
                        <h2 class="step__title">Información Medica del Estudiante<small></small></h2>
                    </div>
                    <div class="step__body">
                    <h3>Información Médica</h3> 
                    <select name="select"  class="step__option">
                        <option value="value1"selected>Tipo de Sangre</option> 
                        <option value="value2" >Tipo A</option>
                        <option value="value3">Tipo B</option>
                        <option value="value3">Tipo AB</option>
                        <option value="value3">Tipo O</option>
                         </select>

                        <p>Ingrese los datos requeridos acontinuación:</p>
                        <p>¿Presenta una necesidad especial?</p>
                    <div class="radio-group">
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                         <P>En caso de seleccionar la opción SI.Especifique</P>
                         <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder=""></textarea>
                         
                          </div>
                          
                          

                          <div class="radio-group">
                         <p>¿Padece alguna enfermedad?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                         <P> En caso de seleccionar la opción SI.Especifique</P>
                         <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder=""></textarea>
                          </div>

                          <div class="radio-group">
                         <p>¿Padece alguna alergia?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                         <P> En caso de seleccionar la opción SI.Especifique</P>
                         <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder=""></textarea>
                          </div>
                           
                          <p>¿Toma medicamentos?</p>
                          <div class="radio-group">
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                         <P> En caso de seleccionar la opción SI.Especifique</P>
                         <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder=""></textarea>
                          </div>


                          <p>¿Es alergico algun tipo de medicamento?</p>
                          <div class="radio-group">
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                         <P> En caso de seleccionar la opción SI.Especifique</P>
                         <textarea id="w3review" name="w3review" rows="4" cols="50"class="step__textarea" placeholder=""></textarea>
                          </div>

                          <div class="radio-group">
                          <p>¿Posee diagnostico certificado por un médico?</p>
                         <label class="radio">
                             <input type="radio" value="si" name="gender">SI
                             <span></span>
                         </label>
                         <label class="radio">
                             <input type="radio" value="no" name="gender">NO
                             <span></span>
                         </label>
                          </div>

                          <hr>



                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                        <button type="submit" class="step__button">Finalizar Proceso</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/app.js"></script>
</body>
</html>
