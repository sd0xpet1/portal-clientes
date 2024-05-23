<form action="procesar_registro.php" method="post"> 
<div class="row">
    <div class="col mb-3">
        <div class="card bg-white text-black shadow">
            <div class="card-body text-black-50">
                <h1 class="py-5 text-center">Registro de Nueva Empresa</h1>
                
                                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="nombre" aria-label="nombre" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="rut_mpresa" aria-label="rut_mpresa" aria-describedby="basic-addon1">
                                    </div>
                                </div>      
                            </div>

                    
                                <div class="row">   
                                <div class="col-md-8    ">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="calle" aria-label="calle" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="numero" aria-label="numero" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                            <select id="region" class="form-control" onchange="actualizarComunas()">
                                <option value='' disabled  selected >-- Selecciona Región --</option>
                                <option value='Arica y Parinacota'>Arica y Parinacota</option>
                                <option value='Tarapacá'>Tarapacá</option>
                                <option value='Antofagasta'>Antofagasta</option>
                                <option value='Atacama'>Atacama</option>
                                <option value='Coquimbo'>Coquimbo</option>
                                <option value='Valparaíso'>Valparaíso</option>
                                <option value='Metropolitana de Santiago'>Metropolitana de Santiago</option>
                                <option value="O'Higgins">O'Higgins</option>
                                <option value='Maule'>Maule</option>
                                <option value='Ñuble'>Ñuble</option>
                                <option value='Biobío'>Biobío</option>
                                <option value='La Araucanía'>La Araucanía</option>
                                <option value='Los Ríos'>Los Ríos</option>
                                <option value='Los Lagos'>Los Lagos</option>
                                <option value='Aysén del General Carlos Ibáñez del Campo'>Aysén del General Carlos Ibáñez del Campo</option>
                                <option value='Magallanes y de la Antártica Chilena'>Magallanes y de la Antártica Chilena</option>
                            </select>
                            </div>

                            <div class="input-group mb-3" id="comunasDiv" style="display:none;">
                                <select id="comunas" class="form-control">
                                    <option value=''  disabled selected >-- Selecciona Comuna --</option>
                                </select>
                            </div>

                            <script>
                                const comunasPorRegion = {
                                    'Arica y Parinacota': ['Arica', 'Camarones', 'Putre', 'General Lagos'],
                                    'Tarapacá': ['Iquique', 'Alto Hospicio', 'Pozo Almonte', 'Camiña', 'Colchane', 'Huara', 'Pica'],
                                    'Antofagasta': ['Antofagasta', 'Mejillones', 'Sierra Gorda', 'Taltal', 'Calama', 'Ollagüe', 'San Pedro de Atacama', 'María Elena', 'Tocopilla', 'Chuquicamata'],
                                    'Atacama': ['Copiapó', 'Caldera', 'Tierra Amarilla', 'Chañaral', 'Diego de Almagro', 'Vallenar', 'Alto del Carmen', 'Freirina', 'Huasco'],
                                    'Coquimbo': ['La Serena', 'Coquimbo', 'Andacollo', 'La Higuera', 'Paiguano', 'Vicuña', 'Illapel', 'Canela', 'Los Vilos', 'Salamanca', 'Ovalle', 'Combarbalá', 'Monte Patria', 'Punitaqui', 'Río Hurtado'],
                                    'Valparaíso': ['Valparaíso', 'Casablanca', 'Concón', 'Juan Fernández', 'Puchuncaví', 'Quintero', 'Viña del Mar', 'Isla de Pascua', 'Los Andes', 'Calle Larga', 'Rinconada', 'San Esteban', 'La Ligua', 'Cabildo', 'Papudo', 'Petorca', 'Zapallar', 'Quillota', 'Calera', 'Hijuelas', 'La Cruz', 'Nogales', 'San Antonio', 'Algarrobo', 'Cartagena', 'El Quisco', 'El Tabo', 'Santo Domingo', 'San Felipe', 'Catemu', 'Llaillay', 'Panquehue', 'Putaendo', 'Santa María', 'Quilpué', 'Limache', 'Olmué', 'Villa Alemana'],
                                    'Metropolitana de Santiago': ['Santiago', 'Cerrillos', 'Cerro Navia', 'Conchalí', 'El Bosque', 'Estación Central', 'Huechuraba', 'Independencia', 'La Cisterna', 'La Florida', 'La Granja', 'La Pintana', 'La Reina', 'Las Condes', 'Lo Barnechea', 'Lo Espejo', 'Lo Prado', 'Macul', 'Maipú', 'Ñuñoa', 'Padre Hurtado', 'Pedro Aguirre Cerda', 'Peñalolén', 'Providencia', 'Pudahuel', 'Quilicura', 'Quinta Normal', 'Recoleta', 'Renca', 'San Bernardo', 'San Joaquín', 'San José de Maipo', 'San Miguel', 'San Pedro', 'San Ramón', 'Vitacura'],
                                    "O'Higgins": ['Rancagua', 'Codegua', 'Coinco', 'Coltauco', 'Doñihue', 'Graneros', 'Las Cabras', 'Machalí', 'Malloa', 'Mostazal', 'Olivar', 'Peumo', 'Pichidegua', 'Quinta de Tilcoco', 'Rengo', 'Requínoa', 'San Vicente'],
                                    'Maule': ['Talca', 'Consitución', 'Curepto', 'Empedrado', 'Maule', 'Pelarco', 'Pencahue', 'Río Claro', 'San Clemente', 'San Rafael'],
                                    'Ñuble': ['Chillán', 'Bulnes', 'Chillán Viejo', 'Cobquecura', 'Coelemu', 'Coihueco', 'El Carmen', 'Ninhue', 'Ñiquén', 'Pemuco', 'Pinto', 'Portezuelo', 'Quillón', 'Quirihue', 'Ránquil', 'San Carlos', 'San Fabián', 'San Ignacio', 'San Nicolás', 'Treguaco', 'Yungay'],
                                    'Biobío': ['Concepción', 'Coronel', 'Chiguayante', 'Florida', 'Hualqui', 'Lota', 'Penco', 'San Pedro de la Paz', 'Santa Juana', 'Talcahuano', 'Tomé', 'Hualpén', 'Lebu', 'Arauco', 'Cañete', 'Contulmo', 'Curanilahue', 'Los Álamos', 'Tirúa', 'Los Ángeles', 'Antuco', 'Cabrero', 'Laja', 'Mulchén', 'Nacimiento', 'Negrete', 'Quilaco', 'Quilleco', 'San Rosendo', 'Santa Bárbara', 'Tucapel', 'Yumbel', 'Alto Biobío', 'Chillán Viejo'],
                                    'La Araucanía': ['Temuco', 'Carahue', 'Cunco', 'Curarrehue', 'Freire', 'Galvarino', 'Gorbea', 'Lautaro', 'Loncoche', 'Melipeuco', 'Nueva Imperial', 'Padre Las Casas', 'Perquenco', 'Pitrufquén', 'Pucón', 'Saavedra', 'Teodoro Schmidt', 'Toltén', 'Vilcún', 'Villarrica', 'Cholchol', 'Angol', 'Collipulli', 'Curacautín', 'Ercilla', 'Lonquimay', 'Los Sauces', 'Lumaco', 'Purén', 'Renaico', 'Traiguén', 'Victoria'],
                                    'Los Ríos': ['Valdivia', 'Corral', 'Lanco', 'Los Lagos', 'Máfil', 'Mariquina', 'Paillaco', 'Panguipulli', 'La Unión', 'Futrono', 'Lago Ranco', 'Río Bueno'],
                                    'Los Lagos': ['Puerto Montt', 'Calbuco', 'Cochamó', 'Fresia', 'Frutillar', 'Los Muermos', 'Llanquihue', 'Maullín', 'Puerto Varas', 'Castro', 'Ancud', 'Chonchi', 'Curaco de Vélez', 'Dalcahue', 'Puqueldón', 'Queilén', 'Quellón', 'Quemchi', 'Quinchao', 'Osorno', 'Puerto Octay', 'Purranque', 'Puyehue', 'Río Negro', 'San Juan de la Costa', 'San Pablo', 'Chaitén', 'Futaleufú', 'Hualaihué', 'Palena'],
                                    'Aysén del General Carlos Ibáñez del Campo': ['Coihaique', 'Lago Verde', 'Aisén', 'Cisnes', 'Guaitecas', 'Cochrane', 'O’Higgins', 'Tortel', 'Chile Chico', 'Río Ibáñez'],
                                    'Magallanes y de la Antártica Chilena': ['Punta Arenas', 'Laguna Blanca', 'Río Verde', 'San Gregorio', 'Cabo de Hornos', 'Antártica', 'Porvenir', 'Primavera', 'Timaukel', 'Natales', 'Torres del Paine']
                                };

                                function actualizarComunas() {
                                    var regionSeleccionada = document.getElementById('region').value;
                                    var comunas = comunasPorRegion[regionSeleccionada];
                                    var comunasSelect = document.getElementById('comunas');
                                    comunasSelect.innerHTML = '';
                                    
                                    comunas.forEach(function(comuna) {
                                        var option = document.createElement('option');
                                        option.value = comuna   ; // Aquí asignamos el nombre de la comuna como valor
                                        option.text = comuna;   
                                        comunasSelect.add(option);
                                    });
                                    document.getElementById('comunasDiv').style.display = 'flex';
                                    
                                }
                                </script>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="input-group mb-3">
                                                <input type="tel" class="form-control" placeholder="Teléfono" aria-label="Teléfono" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" placeholder="Correo" aria-label="Correo" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center" style='margin-top: 2em;'>
                                    <button type="submit" class="btn btn-lg btn-success shadow-sm mb-3 me-3">
                                        <i class=""></i> Registrar
                                    </button>
                                    <div class="mx-3"></div>
                                    <button type="button" class="btn btn-lg btn-dark shadow-sm mb-3" onclick="window.location.href = '#';">
                                        <i class=""></i> Cancelar
                                    </button>
                                </div>

                                    

                </div>
            </div>
        </div>
    </div>

    
    
    </form>

    <?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cwa99758_wardify";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario y escaparlos para prevenir inyección SQL
$nombre = $conn->real_escape_string($_POST['nombre']);
$rut_empresa = $conn->real_escape_string($_POST['rut_empresa']);
$calle = $conn->real_escape_string($_POST['calle']);
$numero = $conn->real_escape_string($_POST['numero']);
$region = $conn->real_escape_string($_POST['region']);
$comuna = $conn->real_escape_string($_POST['comuna']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$correo = $conn->real_escape_string($_POST['correo']);

// Consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO empresa (nombre_empresa, rut_empresa, direccion, comuna, telefono, correo) 
        VALUES ('$nombre', '$rut_empresa', '$calle $numero', '$comuna', '$telefono', '$correo')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado satisfactoriamente.";
} else {
    echo "Error registrando: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>

<?php

$sql_create = "INSERT INTO empresa (usuario_idusuario, nombre_empresa, direccion, comuna, ciudad, Telefono, correo, representante_legal, actividad_economica, rut,
 numero_de_trabajadores, organismo_administrador, cphs_comite_paritario, estadisticas_de_accidentes, programa_de_prevencion_de_riesgos, accidentes_fatales, accidentes_con_invalides, elementos_de_primeros_auxilios, plan_de_emergencia, miperc) 
VALUES ('1', 'Empresa ABC', 'Calle Principal 123', 'Comuna A', 'Ciudad X', '123456789', 'empresa@example.com', 'Juan Perez', 'Industria', '123456789', 50, 'Organismo X', 'SI', 1, 'Programa A', 0, 2, 'SI', 'Plan A', 'SI')";
if ($conn->query($sql_create) === TRUE) {
    echo "Nuevo regitro creado satisfactoriamente.";
} else {
    echo "error registrando: " . $conn->error;
}


?>

