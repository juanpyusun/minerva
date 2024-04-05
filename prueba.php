<?php
include("db.php");


if ($_POST) {
    $apellidos = (isset($_POST["apellidos"])) ? $_POST["apellidos"] : "";
    $direccion = (isset($_POST["direccion"])) ? $_POST["direccion"] : "";
    $telefono = (isset($_POST["telefono"])) ? $_POST["telefono"] : "";
    $correo = (isset($_POST["correo"])) ? $_POST["correo"] : "";
    $nombres = (isset($_POST["nombres"])) ? $_POST["nombres"] : "";
    $ciudad = (isset($_POST["ciudad"])) ? $_POST["ciudad"] : "";
    $celular = (isset($_POST["celular"])) ? $_POST["celular"] : "";
    $nacionalidad = (isset($_POST["nacionalidad"])) ? $_POST["nacionalidad"] : "";
    $profesion = (isset($_POST["profesion"])) ? $_POST["profesion"] : "";
    $estado = (isset($_POST["estado"])) ? $_POST["estado"] : "";
    $experiencia = (isset($_POST["experiencia"])) ? $_POST["experiencia"] : "";

    $sentencia = $conexion->prepare("INSERT INTO `informacion_general` (`ID`,`nombres`, `apellidos`, `direccion`,
    `ciudad`, `correo`, `nacionalidad`, `profesion`, `experiencia`, `estado`, `telefono`, `celular`) 
    VALUES (NULL, :nombres,:apellidos,:direccion,:ciudad,:correo,:nacionalidad,:profesion,:experiencia,:estado,:telefono,:celular);
    ");
    $sentencia->bindParam(":apellidos", $apellidos);
    $sentencia->bindParam(":direccion", $direccion);
    $sentencia->bindParam(":telefono", $telefono);
    $sentencia->bindParam(":correo", $correo);
    $sentencia->bindParam(":nombres", $nombres);
    $sentencia->bindParam(":ciudad", $ciudad);
    $sentencia->bindParam(":celular", $celular);
    $sentencia->bindParam(":nacionalidad", $nacionalidad);
    $sentencia->bindParam(":profesion", $profesion);
    $sentencia->bindParam(":estado", $estado);
    $sentencia->bindParam(":experiencia", $experiencia);
}
if ($_POST) {
    $cedula = (isset($_POST["cedula"])) ? $_POST["cedula"] : "";
    $extranjeria = (isset($_POST["extranjeria"])) ? $_POST["extranjeria"] : "";
    $expedida = (isset($_POST["expedida"])) ? $_POST["expedida"] : "";
    $libreta_militar_primera = (isset($_POST["libreta_militar_primera"])) ? $_POST["libreta_militar_primera"] : "";
    $libreta_militar_segunda = (isset($_POST["libreta_militar_segunda"])) ? $_POST["libreta_militar_segunda"] : "";
    $numero_libreta = (isset($_POST["numero_libreta"])) ? $_POST["numero_libreta"] : "";
    $distrito_militar = (isset($_POST["distrito_militar"])) ? $_POST["distrito_militar"] : "";

    $sentenci = $conexion->prepare("INSERT INTO `documentos` (`cedula`, `extranjeria`, `expedida`,
    `libreta militar primera`, `libreta militar segunda`,`numero libreta`, `distrito militar`)
    VALUES (:cedula,:extranjeria,:expedida,:libreta_militar_primera,:libreta_militar_segunda,:numero_libreta,:distrito_militar);");

    $sentenci->bindParam(":cedula", $cedula);
    $sentenci->bindParam(":extranjeria", $extranjeria);
    $sentenci->bindParam(":expedida", $expedida);
    $sentenci->bindParam(":libreta_militar_primera", $libreta_militar_primera);
    $sentenci->bindParam(":libreta_militar_segunda", $libreta_militar_segunda);
    $sentenci->bindParam(":numero_libreta", $numero_libreta);
    $sentenci->bindParam(":distrito_militar", $distrito_militar);
}

if ($_POST) {
    $Esta_trabajando_actualmente = (isset($_POST["Esta_trabajando_actualmente"])) ? $_POST["Esta_trabajando_actualmente"] : "";
    $En_que_Empresa = (isset($_POST["En_que_Empresa"])) ? $_POST["En_que_Empresa"] : "";
    $Tipo = (isset($_POST["Tipo"])) ? $_POST["Tipo"] : "";
    $tipo_contrato = (isset($_POST["tipo_contrato"])) ? $_POST["tipo_contrato"] : "";
    $Trabajo_antes_en_esta_empresa = (isset($_POST["Trabajo_antes_en_esta_empresa"])) ? $_POST["Trabajo_antes_en_esta_empresa"] : "";
    $Solicito_empleo_antes_en_esta_empresa = (isset($_POST["Solicito_empleo_antes_en_esta_empresa"])) ? $_POST["Solicito_empleo_antes_en_esta_empresa"] : "";
    $fecha = (isset($_POST["fecha"])) ? $_POST["fecha"] : "";
    $Lo_recomienda_alguien_de_esta_empresa = (isset($_POST["Lo_recomienda_alguien_de_esta_empresa"])) ? $_POST["Lo_recomienda_alguien_de_esta_empresa"] : "";
    $nombrer = (isset($_POST["nombrer"])) ? $_POST["nombrer"] : "";
    $Dependenciar = (isset($_POST["Dependenciar"])) ? $_POST["Dependenciar"] : "";
    $Tiene_parientes_que_trabajan_en_esta_empresa = (isset($_POST["Tiene_parientes_que_trabajan_en_esta_empresa"])) ? $_POST["Tiene_parientes_que_trabajan_en_esta_empresa"] : "";
    $Nombrep = (isset($_POST["Nombrep"])) ? $_POST["Nombrep"] : "";
    $Dependenciap = (isset($_POST["Dependenciap"])) ? $_POST["Dependenciap"] : "";
    $Como_tuvo_conocimiento_de_la_existencia_de_la_vacante = (isset($_POST["Como_tuvo_conocimiento_de_la_existencia_de_la_vacante"])) ? $_POST["Como_tuvo_conocimiento_de_la_existencia_de_la_vacante"] : "";
    $Otro = (isset($_POST["Otro"])) ? $_POST["Otro"] : "";
    $En_que_ciudad_a_vivido = (isset($_POST["En_que_ciudad_a_vivido"])) ? $_POST["En_que_ciudad_a_vivido"] : "";
    $En_que_cuiudad_a_tabajado = (isset($_POST["En_que_cuiudad_a_tabajado"])) ? $_POST["En_que_cuiudad_a_tabajado"] : "";
    $Aceptaria_trabajar_en_otra_ciudad = (isset($_POST["Aceptaria_trabajar_en_otra_ciudad"])) ? $_POST["Aceptaria_trabajar_en_otra_ciudad"] : "";
    $Vive_en_casa = (isset($_POST["Vive_en_casa"])) ? $_POST["Vive_en_casa"] : "";
    $Nombre_arrendador = (isset($_POST["Nombre_arrendador"])) ? $_POST["Nombre_arrendador"] : "";
    $Telefono = (isset($_POST["Telefono"])) ? $_POST["Telefono"] : "";
    $Cuanto_vive_hay = (isset($_POST["Cuanto_vive_hay"])) ? $_POST["Cuanto_vive_hay"] : "";
    $Ingreso_adicional = (isset($_POST["Ingreso_adicional"])) ? $_POST["Ingreso_adicional"] : "";
    $Indique_su_valor = (isset($_POST["Indique_su_valor"])) ? $_POST["Indique_su_valor"] : "";
    $Obligaciones_economicas = (isset($_POST["Obligaciones_economicas"])) ? $_POST["Obligaciones_economicas"] : "";
    $Conceptos = (isset($_POST["Conceptos"])) ? $_POST["Conceptos"] : "";
    $Obligaciones_mensuales = (isset($_POST["Obligaciones_mensuales"])) ? $_POST["Obligaciones_mensuales"] : "";
    $Aficiones = (isset($_POST["Aficiones"])) ? $_POST["Aficiones"] : "";
    $Practica_deporte = (isset($_POST["Practica_deporte"])) ? $_POST["Practica_deporte"] : "";
    $Cual = (isset($_POST["Cual"])) ? $_POST["Cual"] : "";
    $Distinciones = (isset($_POST["Distinciones"])) ? $_POST["Distinciones"] : "";
    $Cuald = (isset($_POST["Cuald"])) ? $_POST["Cuald"] : "";
    $Pertenece_aso_com_dep = (isset($_POST["Pertenece_aso_com_dep"])) ? $_POST["Pertenece_aso_com_dep"] : "";
    $Cual_a = (isset($_POST["Cual_a"])) ? $_POST["Cual_a"] : "";

    $sentenc = $conexion->prepare("INSERT INTO `informacion_personal` (`Esta trabajando actualmente`, `En que Empresa`,`Tipo`, `tipo contrato`,`Trabajo antes en esta empresa`,`Solicito empleo antes en esta empresa`, `fecha`, `Lo recomienda alguien de esta empresa`, `nombrer`
    ,`Dependenciar`,`Tiene parientes que trabajan en esta empresa`,`Nombrep`,`Dependenciap`,`Como tuvo conocimiento de la existencia de la vacante`, `Otro`,`En que ciudad a vivido`,`En que cuiudad a tabajado`, `Aceptaria trabajar en otra ciudad`,
    `Vive en casa`,`Nombre arrendador`,`Telefono`,`Cuanto vive hay`,`Ingreso adicional`,`Indique su valor`,`Obligaciones economicas`,`Conceptos`,`Obligaciones mensuales`,`Aficiones`,`Practica deporte`,`Cual`,`Distinciones`,`Cuald`,`Pertenece aso,com,dep`,`Cual,a`)
    VALUES (:Esta_trabajando_actualmente,:En_que_Empresa,:Tipo,:tipo_contrato,:Trabajo_antes_en_esta_empresa,:Solicito_empleo_antes_en_esta_empresa,:fecha,:Lo_recomienda_alguien_de_esta_empresa,:nombrer,
    :Dependenciar,:Tiene_parientes_que_trabajan_en_esta_empresa,:Nombrep,:Dependenciap,:Como_tuvo_conocimiento_de_la_existencia_de_la_vacante,:Otro,:En_que_ciudad_a_vivido,:En_que_cuiudad_a_tabajado,:Aceptaria_trabajar_en_otra_ciudad,
    :Vive_en_casa,:Nombre_arrendador,:Telefono,:Cuanto_vive_hay,:Ingreso_adicional,:Indique_su_valor,:Obligaciones_economicas,:Conceptos,:Obligaciones_mensuales,:Aficiones,:Practica_deporte
    ,:Cual,:Distinciones,:Cuald,:Pertenece_aso_com_dep,:Cual_a);");

    $sentenc->bindParam(":Esta_trabajando_actualmente", $Esta_trabajando_actualmente);
    $sentenc->bindParam(":En_que_Empresa", $En_que_Empresa);
    $sentenc->bindParam(":Tipo", $Tipo);
    $sentenc->bindParam(":tipo_contrato", $tipo_contrato);
    $sentenc->bindParam(":Trabajo_antes_en_esta_empresa", $Trabajo_antes_en_esta_empresa);
    $sentenc->bindParam(":Solicito_empleo_antes_en_esta_empresa", $Solicito_empleo_antes_en_esta_empresa);
    $sentenc->bindParam(":fecha", $fecha);
    $sentenc->bindParam(":Lo_recomienda_alguien_de_esta_empresa", $Lo_recomienda_alguien_de_esta_empresa);
    $sentenc->bindParam(":nombrer", $nombrer);
    $sentenc->bindParam(":Dependenciar", $Dependenciar);
    $sentenc->bindParam(":Tiene_parientes_que_trabajan_en_esta_empresa", $Tiene_parientes_que_trabajan_en_esta_empresa);
    $sentenc->bindParam(":Nombrep", $Nombrep);
    $sentenc->bindParam(":Dependenciap", $Dependenciap);
    $sentenc->bindParam(":Como_tuvo_conocimiento_de_la_existencia_de_la_vacante", $Como_tuvo_conocimiento_de_la_existencia_de_la_vacante);
    $sentenc->bindParam(":Otro", $Otro);
    $sentenc->bindParam(":En_que_ciudad_a_vivido", $En_que_ciudad_a_vivido);
    $sentenc->bindParam(":En_que_cuiudad_a_tabajado", $En_que_cuiudad_a_tabajado);
    $sentenc->bindParam(":Aceptaria_trabajar_en_otra_ciudad", $Aceptaria_trabajar_en_otra_ciudad);
    $sentenc->bindParam(":Vive_en_casa", $Vive_en_casa);
    $sentenc->bindParam(":Nombre_arrendador", $Nombre_arrendador);
    $sentenc->bindParam(":Telefono", $Telefono);
    $sentenc->bindParam(":Cuanto_vive_hay", $Cuanto_vive_hay);
    $sentenc->bindParam(":Ingreso_adicional", $Ingreso_adicional);
    $sentenc->bindParam(":Indique_su_valor", $Indique_su_valor);
    $sentenc->bindParam(":Obligaciones_economicas", $Obligaciones_economicas);
    $sentenc->bindParam(":Conceptos", $Conceptos);
    $sentenc->bindParam(":Obligaciones_mensuales", $Obligaciones_mensuales);
    $sentenc->bindParam(":Aficiones", $Aficiones);
    $sentenc->bindParam(":Practica_deporte", $Practica_deporte);
    $sentenc->bindParam(":Cual", $Cual);
    $sentenc->bindParam(":Distinciones", $Distinciones);
    $sentenc->bindParam(":Cuald", $Cuald);
    $sentenc->bindParam(":Pertenece_aso_com_dep", $Pertenece_aso_com_dep);
    $sentenc->bindParam(":Cual_a", $Cual_a);
}

if ($_POST) {
    $Objetivo1 = (isset($_POST["Objetivo1"])) ? $_POST["Objetivo1"] : "";
    $Objetivo2 = (isset($_POST["Objetivo2"])) ? $_POST["Objetivo2"] : "";
    $Objetivo3 = (isset($_POST["Objetivo3"])) ? $_POST["Objetivo3"] : "";

    $sentenciaob = $conexion->prepare("INSERT INTO `objetivos` (`idob`, `Objetivos1`, `Objetivos2`, `Objetivos3`)
    VALUES (NULL, :Objetivo1,:Objetivo2,:Objetivo3);");
    $sentenciaob->bindParam(":Objetivo1", $Objetivo1);
    $sentenciaob->bindParam(":Objetivo2", $Objetivo2);
    $sentenciaob->bindParam(":Objetivo3", $Objetivo3);
}

if ($_POST) {

    $nonmbre_conyuge = (isset($_POST["nonmbre_conyuge"])) ? $_POST["nonmbre_conyuge"] : "";
    $ocupacion = (isset($_POST["ocupacion"])) ? $_POST["ocupacion"] : "";
    $empresa = (isset($_POST["empresa"])) ? $_POST["empresa"] : "";
    $cargo = (isset($_POST["cargo"])) ? $_POST["cargo"] : "";
    $direccion = (isset($_POST["direccion"])) ? $_POST["direccion"] : "";
    $telefono = (isset($_POST["telefono"])) ? $_POST["telefono"] : "";
    $ciudad = (isset($_POST["ciudad"])) ? $_POST["ciudad"] : "";
    $personas_acargo = (isset($_POST["personas_acargo"])) ? $_POST["personas_acargo"] : "";
    $parentesco = (isset($_POST["parentesco"])) ? $_POST["parentesco"] : "";
    $edades = (isset($_POST["edades"])) ? $_POST["edades"] : "";
    $nombre_padres = (isset($_POST["nombre_padres"])) ? $_POST["nombre_padres"] : "";
    $profecion = (isset($_POST["profecion"])) ? $_POST["profecion"] : "";
    $telefonos = (isset($_POST["telefonos"])) ? $_POST["telefonos"] : "";
    $nombre_madre = (isset($_POST["nombre_madre"])) ? $_POST["nombre_madre"] : "";
    $oficio_madre = (isset($_POST["oficio_madre"])) ? $_POST["oficio_madre"] : "";
    $telefono_madre = (isset($_POST["telefono_madre"])) ? $_POST["telefono_madre"] : "";
    $hermanos = (isset($_POST["hermanos"])) ? $_POST["hermanos"] : "";
    $ocupacionhermanos = (isset($_POST["ocupacionhermanos"])) ? $_POST["ocupacionhermanos"] : "";
    $telefonohermanos = (isset($_POST["telefonohermanos"])) ? $_POST["telefonohermanos"] : "";
    $hermano2 = (isset($_POST["hermano2"])) ? $_POST["hermano2"] : "";
    $ocupacionhermanos2 = (isset($_POST["ocupacionhermanos2"])) ? $_POST["ocupacionhermanos2"] : "";
    $telefonohermanos2 = (isset($_POST["telefonohermanos2"])) ? $_POST["telefonohermanos2"] : "";



    $sentenciaif = $conexion->prepare("INSERT INTO `informacion_familiar` (`idif`, `nonmbre_conyuge`,`ocupacion`,`empresa`,`cargo`,`direccion`,`telefono`, `ciudad`,`personas acargo`,
    `parentesco`, `edades`, `nombre padres`, `profecion`, `telefonos`,`nombre_madre`,`oficio_madre`,`telefono_madre`, `hermanos`,`ocupacionhermanos`,`telefonohermanos`,`hermano2`,
    `ocupacionhermanos2`,`telefonohermanos2`) 
    VALUES (NULL, :nonmbre_conyuge,:ocupacion,:empresa,:cargo,:direccion,:telefono,:ciudad,:personas_acargo,:parentesco,:edades,
    :nombre_padres,:profecion,:telefonos,:nombre_madre,:oficio_madre,:telefono_madre,:hermanos,:ocupacionhermanos,:telefonohermanos,:hermano2,:ocupacionhermanos2,:telefonohermanos2);");

    $sentenciaif->bindParam(":nonmbre_conyuge", $nonmbre_conyuge);
    $sentenciaif->bindParam(":ocupacion", $ocupacion);
    $sentenciaif->bindParam(":empresa", $empresa);
    $sentenciaif->bindParam(":cargo", $cargo);
    $sentenciaif->bindParam(":direccion", $direccion);
    $sentenciaif->bindParam(":telefono", $telefono);
    $sentenciaif->bindParam(":ciudad", $ciudad);
    $sentenciaif->bindParam(":personas_acargo", $personas_acargo);
    $sentenciaif->bindParam(":parentesco", $parentesco);
    $sentenciaif->bindParam(":edades", $edades);
    $sentenciaif->bindParam(":nombre_padres", $nombre_padres);
    $sentenciaif->bindParam(":profecion", $profecion);
    $sentenciaif->bindParam(":telefonos", $telefonos);
    $sentenciaif->bindParam(":nombre_madre", $nombre_madre);
    $sentenciaif->bindParam(":oficio_madre", $oficio_madre);
    $sentenciaif->bindParam(":telefono_madre", $telefono_madre);
    $sentenciaif->bindParam(":hermanos", $hermanos);
    $sentenciaif->bindParam(":ocupacionhermanos", $ocupacionhermanos);
    $sentenciaif->bindParam(":telefonohermanos", $telefonohermanos);
    $sentenciaif->bindParam(":hermano2", $hermano2);
    $sentenciaif->bindParam(":ocupacionhermanos2", $ocupacionhermanos2);
    $sentenciaif->bindParam(":telefonohermanos2", $telefonohermanos2);
}

if ($_POST) {
    $finalizacionpri = (isset($_POST["finalizacionpri"])) ? $_POST["finalizacionpri"] : "";
    $cursadospri = (isset($_POST["cursadospri"])) ? $_POST["cursadospri"] : "";
    $titulopri = (isset($_POST["titulopri"])) ? $_POST["titulopri"] : "";
    $institupri = (isset($_POST["institupri"])) ? $_POST["institupri"] : "";
    $ciudadpri = (isset($_POST["ciudadpri"])) ? $_POST["ciudadpri"] : "";
    $bachillerato = (isset($_POST["bachillerato"])) ? $_POST["bachillerato"] : "";
    $finalizacionbac = (isset($_POST["finalizacionbac"])) ? $_POST["finalizacionbac"] : "";
    $cursadosbac = (isset($_POST["cursadosbac"])) ? $_POST["cursadosbac"] : "";
    $titulobac = (isset($_POST["titulobac"])) ? $_POST["titulobac"] : "";
    $institubac = (isset($_POST["institubac"])) ? $_POST["institubac"] : "";
    $ciudadbac = (isset($_POST["ciudadbac"])) ? $_POST["ciudadbac"] : "";
    $educacion_superiorsuperior = (isset($_POST["educacion_superiorsuperior"])) ? $_POST["educacion_superiorsuperior"] : "";
    $finalizacionsup = (isset($_POST["finalizacionsup"])) ? $_POST["finalizacionsup"] : "";
    $cursadossup = (isset($_POST["cursadossup"])) ? $_POST["cursadossup"] : "";
    $titulosup = (isset($_POST["titulosup"])) ? $_POST["titulosup"] : "";
    $institutosup = (isset($_POST["institutosup"])) ? $_POST["institutosup"] : "";
    $ciudadsup = (isset($_POST["ciudadsup"])) ? $_POST["ciudadsup"] : "";
    $finalizacionpos = (isset($_POST["finalizacionpos"])) ? $_POST["finalizacionpos"] : "";
    $cursadospos = (isset($_POST["cursadospos"])) ? $_POST["cursadospos"] : "";
    $titulopos = (isset($_POST["titulopos"])) ? $_POST["titulopos"] : "";
    $institutopos = (isset($_POST["institutopos"])) ? $_POST["institutopos"] : "";
    $ciudadpos = (isset($_POST["ciudadpos"])) ? $_POST["ciudadpos"] : "";
    $intensidad = (isset($_POST["intensidad"])) ? $_POST["intensidad"] : "";
    $programa = (isset($_POST["programa"])) ? $_POST["programa"] : "";
    $instituto = (isset($_POST["instituto"])) ? $_POST["instituto"] : "";
    $actualmente = (isset($_POST["actualmente"])) ? $_POST["actualmente"] : "";
    $tipo = (isset($_POST["tipo"])) ? $_POST["tipo"] : "";
    $duracion = (isset($_POST["duracion"])) ? $_POST["duracion"] : "";
    $cursa = (isset($_POST["cursa"])) ? $_POST["cursa"] : "";
    $nom_inst = (isset($_POST["nom_inst"])) ? $_POST["nom_inst"] : "";
    $horario = (isset($_POST["horario"])) ? $_POST["horario"] : "";


    $sentenciaea = $conexion->prepare("INSERT INTO `educacion_actitudes` (`idea`, `finalizacionpri`, `cursadospri`, `titulopri`, `institupri`, `ciudadpri`, `bachillerato`, `finalizacionbac`,`cursadosbac`,`titulobac`,`institubac`,`ciudadbac`,`educacion_superiorsuperior`,`finalizacionsup`,`cursadossup`,`titulosup`
    ,`institutosup`,`ciudadsup`,`finalizacionpos`,`cursadospos`,`titulopos`,`institutopos`,`ciudadpos`,`intensidad`,`programa`,`instituto`,`actualmente`,`tipo`,`duracion`,`cursa`,`nom_inst`,`horario`)
    VALUES (NULL, :finalizacionpri,:cursadospri,:titulopri,:institupri,:ciudadpri,:bachillerato,:finalizacionbac,:cursadosbac,:titulobac,:institubac,:ciudadbac,:educacion_superiorsuperior,:finalizacionsup,:cursadossup,:titulosup,
    :institutosup,:ciudadsup,:finalizacionpos,:cursadospos,:titulopos,:institutopos,:ciudadpos,:intensidad,:programa,:instituto,:actualmente,:tipo,:duracion,:cursa,:nom_inst,:horario);");

    $sentenciaea->bindParam(":finalizacionpri", $finalizacionpri);
    $sentenciaea->bindParam(":cursadospri", $cursadospri);
    $sentenciaea->bindParam(":titulopri", $titulopri);
    $sentenciaea->bindParam(":institupri", $institupri);
    $sentenciaea->bindParam(":ciudadpri", $ciudadpri);
    $sentenciaea->bindParam(":bachillerato", $bachillerato);
    $sentenciaea->bindParam(":finalizacionbac", $finalizacionbac);
    $sentenciaea->bindParam(":cursadosbac", $cursadosbac);
    $sentenciaea->bindParam(":titulobac", $titulobac);
    $sentenciaea->bindParam(":institubac", $institubac);
    $sentenciaea->bindParam(":ciudadbac", $ciudadbac);
    $sentenciaea->bindParam(":educacion_superiorsuperior", $educacion_superiorsuperior);
    $sentenciaea->bindParam(":finalizacionsup", $finalizacionsup);
    $sentenciaea->bindParam(":cursadossup", $cursadossup);
    $sentenciaea->bindParam(":titulosup", $titulosup);
    $sentenciaea->bindParam(":institutosup", $institutosup);
    $sentenciaea->bindParam(":ciudadsup", $ciudadsup);
    $sentenciaea->bindParam(":finalizacionpos", $finalizacionpos);
    $sentenciaea->bindParam(":cursadospos", $cursadospos);
    $sentenciaea->bindParam(":titulopos", $titulopos);
    $sentenciaea->bindParam(":institutopos", $institutopos);
    $sentenciaea->bindParam(":ciudadpos", $ciudadpos);
    $sentenciaea->bindParam(":intensidad", $intensidad);
    $sentenciaea->bindParam(":programa", $programa);
    $sentenciaea->bindParam(":instituto", $instituto);
    $sentenciaea->bindParam(":actualmente", $actualmente);
    $sentenciaea->bindParam(":tipo", $tipo);
    $sentenciaea->bindParam(":duracion", $duracion);
    $sentenciaea->bindParam(":cursa", $cursa);
    $sentenciaea->bindParam(":nom_inst", $nom_inst);
    $sentenciaea->bindParam(":horario", $horario);
}
if ($_POST) {
    $sistemas = (isset($_POST["sistemas"])) ? $_POST["sistemas"] : "";
    $sistemas1 = (isset($_POST["sistemas1"])) ? $_POST["sistemas1"] : "";
    $conocimientos1 = (isset($_POST["conocimientos1"])) ? $_POST["conocimientos1"] : "";
    $sistemas2 = (isset($_POST["sistemas2"])) ? $_POST["sistemas2"] : "";
    $conocimientos2 = (isset($_POST["conocimientos2"])) ? $_POST["conocimientos2"] : "";
    $sistemas3 = (isset($_POST["sistemas3"])) ? $_POST["sistemas3"] : "";
    $conocimientos3 = (isset($_POST["conocimientos3"])) ? $_POST["conocimientos3"] : "";
    $sistemas4 = (isset($_POST["sistemas4"])) ? $_POST["sistemas4"] : "";
    $conocimientos4 = (isset($_POST["conocimientos4"])) ? $_POST["conocimientos4"] : "";
    $idioma = (isset($_POST["idioma"])) ? $_POST["idioma"] : "";
    $idiomas1 = (isset($_POST["idiomas1"])) ? $_POST["idiomas1"] : "";
    $conocimiento_idiomas1 = (isset($_POST["conocimiento_idiomas1"])) ? $_POST["conocimiento_idiomas1"] : "";
    $idiomas2 = (isset($_POST["idiomas2"])) ? $_POST["idiomas2"] : "";
    $conocimiento_idiomas2 = (isset($_POST["conocimiento_idiomas2"])) ? $_POST["conocimiento_idiomas2"] : "";
    $idiomas3 = (isset($_POST["idiomas3"])) ? $_POST["idiomas3"] : "";
    $conocimiento_idiomas3 = (isset($_POST["conocimiento_idiomas3"])) ? $_POST["conocimiento_idiomas3"] : "";
    $idiomas4 = (isset($_POST["idiomas4"])) ? $_POST["idiomas4"] : "";
    $conocimiento_idiomas4 = (isset($_POST["conocimiento_idiomas4"])) ? $_POST["conocimiento_idiomas4"] : "";

    $sentenciaoe = $conexion->prepare("INSERT INTO `otros_conocimientos` (`idoc`, `sistemas`, `sistemas1`, `conocimientos1`,`sistemas2`, `conocimientos2`, `sistemas3`,`conocimientos3`, `sistemas4`, `conocimientos4`,`idioma`,
    `idiomas1`,`conocimiento_idiomas1`,`idiomas2`,`conocimiento_idiomas2`,`idiomas3`,`conocimiento_idiomas3`,`idiomas4`,`conocimiento_idiomas4`)
    VALUES (NULL, :sistemas,:sistemas1,:conocimientos1,:sistemas2,:conocimientos2,:sistemas3,:conocimientos3,:sistemas4,:conocimientos4,
    :idioma,:idiomas1,:conocimiento_idiomas1,:idiomas2,:conocimiento_idiomas2,:idiomas3,:conocimiento_idiomas3,:idiomas4,:conocimiento_idiomas4);");

    $sentenciaoe->bindParam(":sistemas", $sistemas);
    $sentenciaoe->bindParam(":sistemas1", $sistemas1);
    $sentenciaoe->bindParam(":conocimientos1", $conocimientos1);
    $sentenciaoe->bindParam(":sistemas2", $sistemas2);
    $sentenciaoe->bindParam(":conocimientos2", $conocimientos2);
    $sentenciaoe->bindParam(":sistemas3", $sistemas3);
    $sentenciaoe->bindParam(":conocimientos3", $conocimientos3);
    $sentenciaoe->bindParam(":sistemas4", $sistemas4);
    $sentenciaoe->bindParam(":conocimientos4", $conocimientos4);
    $sentenciaoe->bindParam(":idioma", $idioma);
    $sentenciaoe->bindParam(":idiomas1", $idiomas1);
    $sentenciaoe->bindParam(":conocimiento_idiomas1", $conocimiento_idiomas1);
    $sentenciaoe->bindParam(":idiomas2", $idiomas2);
    $sentenciaoe->bindParam(":conocimiento_idiomas2", $conocimiento_idiomas2);
    $sentenciaoe->bindParam(":idiomas3", $idiomas3);
    $sentenciaoe->bindParam(":conocimiento_idiomas3", $conocimiento_idiomas3);
    $sentenciaoe->bindParam(":idiomas4", $idiomas4);
    $sentenciaoe->bindParam(":conocimiento_idiomas4", $conocimiento_idiomas4);
}
if ($_POST) {
    $empresa1 = (isset($_POST["empresa1"])) ? $_POST["empresa1"] : "";
    $empresa2 = (isset($_POST["empresa2"])) ? $_POST["empresa2"] : "";
    $empresa3 = (isset($_POST["empresa3"])) ? $_POST["empresa3"] : "";
    $empresa4 = (isset($_POST["empresa4"])) ? $_POST["empresa4"] : "";
    $empresa5 = (isset($_POST["empresa5"])) ? $_POST["empresa5"] : "";
    $empresa6 = (isset($_POST["empresa6"])) ? $_POST["empresa6"] : "";
    $empresa7 = (isset($_POST["empresa7"])) ? $_POST["empresa7"] : "";
    $empresa8 = (isset($_POST["empresa8"])) ? $_POST["empresa8"] : "";
    $empresa9 = (isset($_POST["empresa9"])) ? $_POST["empresa9"] : "";
    $empresa10 = (isset($_POST["empresa10"])) ? $_POST["empresa10"] : "";
    $empresa11 = (isset($_POST["empresa11"])) ? $_POST["empresa11"] : "";
    $empresa12 = (isset($_POST["empresa12"])) ? $_POST["empresa12"] : "";
    $empresa13 = (isset($_POST["empresa13"])) ? $_POST["empresa13"] : "";
    $empresa14 = (isset($_POST["empresa14"])) ? $_POST["empresa14"] : "";
    $empresa15 = (isset($_POST["empresa15"])) ? $_POST["empresa15"] : "";
    $empresa16 = (isset($_POST["empresa16"])) ? $_POST["empresa16"] : "";
    $empresa17 = (isset($_POST["empresa17"])) ? $_POST["empresa17"] : "";
    $empresa18 = (isset($_POST["empresa18"])) ? $_POST["empresa18"] : "";
    $empresa19 = (isset($_POST["empresa19"])) ? $_POST["empresa19"] : "";

    $sentenciatr = $conexion->prepare("INSERT INTO `trayectoria_empresas` (`idtr`, `empresa1`, `empresa2`, `empresa3`,`empresa4`,`empresa5`,`empresa6`,`empresa7`,`empresa8`,`empresa9`,`empresa10`
    ,`empresa11`,`empresa12`,`empresa13`,`empresa14`,`empresa15`,`empresa16`,`empresa17`,`empresa18`,`empresa19`)
    VALUES (NULL, :empresa1,:empresa2,:empresa3,:empresa4,:empresa5,:empresa6,:empresa7,:empresa8,:empresa9,:empresa10,:empresa11,:empresa12,:empresa13,:empresa14
    ,:empresa15,:empresa16,:empresa17,:empresa18,:empresa19);");

    $sentenciatr->bindParam(":empresa1", $empresa1);
    $sentenciatr->bindParam(":empresa2", $empresa2);
    $sentenciatr->bindParam(":empresa3", $empresa3);
    $sentenciatr->bindParam(":empresa4", $empresa4);
    $sentenciatr->bindParam(":empresa5", $empresa5);
    $sentenciatr->bindParam(":empresa6", $empresa6);
    $sentenciatr->bindParam(":empresa7", $empresa7);
    $sentenciatr->bindParam(":empresa8", $empresa8);
    $sentenciatr->bindParam(":empresa9", $empresa9);
    $sentenciatr->bindParam(":empresa10", $empresa10);
    $sentenciatr->bindParam(":empresa11", $empresa11);
    $sentenciatr->bindParam(":empresa12", $empresa12);
    $sentenciatr->bindParam(":empresa13", $empresa13);
    $sentenciatr->bindParam(":empresa14", $empresa14);
    $sentenciatr->bindParam(":empresa15", $empresa15);
    $sentenciatr->bindParam(":empresa16", $empresa16);
    $sentenciatr->bindParam(":empresa17", $empresa17);
    $sentenciatr->bindParam(":empresa18", $empresa18);
    $sentenciatr->bindParam(":empresa19", $empresa19);
}

if ($_POST) {
    $area1 = (isset($_POST["area1"])) ? $_POST["area1"] : "";
    $area2 = (isset($_POST["area2"])) ? $_POST["area2"] : "";
    $area3 = (isset($_POST["area3"])) ? $_POST["area3"] : "";
    $area4 = (isset($_POST["area4"])) ? $_POST["area4"] : "";
    $area5 = (isset($_POST["area5"])) ? $_POST["area5"] : "";
    $area6 = (isset($_POST["area6"])) ? $_POST["area6"] : "";
    $area7 = (isset($_POST["area7"])) ? $_POST["area7"] : "";
    $area8 = (isset($_POST["area8"])) ? $_POST["area8"] : "";
    $area9 = (isset($_POST["area9"])) ? $_POST["area9"] : "";
    $area10 = (isset($_POST["area10"])) ? $_POST["area10"] : "";
    $area11 = (isset($_POST["area11"])) ? $_POST["area11"] : "";
    $area12 = (isset($_POST["area12"])) ? $_POST["area12"] : "";
    $area13 = (isset($_POST["area13"])) ? $_POST["area13"] : "";
    $area14 = (isset($_POST["area14"])) ? $_POST["area14"] : "";
    $area15 = (isset($_POST["area15"])) ? $_POST["area15"] : "";
    $area16 = (isset($_POST["area16"])) ? $_POST["area16"] : "";
    $area17 = (isset($_POST["area17"])) ? $_POST["area17"] : "";
    $area18 = (isset($_POST["area18"])) ? $_POST["area18"] : "";


    $sentenciaarea = $conexion->prepare("INSERT INTO `area_empresa` (`id_area`, `area1`, `area2`, `area3`,`area4`,`area5`,`area6`,`area7`,`area8`,`area9`,`area10`,`area11`
    ,`area12`,`area13`,`area14`,`area15`,`area16`,`area17`,`area18`)
    VALUES (NULL, :area1,:area2,:area3,:area4,:area5,:area6,:area7,:area8,:area9,:area10,:area11,:area12,:area13,:area14,:area15,:area16,:area17,:area18);");
    $sentenciaarea->bindParam(":area1", $area1);
    $sentenciaarea->bindParam(":area2", $area2);
    $sentenciaarea->bindParam(":area3", $area3);
    $sentenciaarea->bindParam(":area4", $area4);
    $sentenciaarea->bindParam(":area5", $area5);
    $sentenciaarea->bindParam(":area6", $area6);
    $sentenciaarea->bindParam(":area7", $area7);
    $sentenciaarea->bindParam(":area8", $area8);
    $sentenciaarea->bindParam(":area9", $area9);
    $sentenciaarea->bindParam(":area10", $area10);
    $sentenciaarea->bindParam(":area11", $area11);
    $sentenciaarea->bindParam(":area12", $area12);
    $sentenciaarea->bindParam(":area13", $area13);
    $sentenciaarea->bindParam(":area14", $area14);
    $sentenciaarea->bindParam(":area15", $area15);
    $sentenciaarea->bindParam(":area16", $area16);
    $sentenciaarea->bindParam(":area17", $area17);
    $sentenciaarea->bindParam(":area18", $area18);
}

if ($_POST) {
    $ultima_empresa = (isset($_POST["ultima_empresa"])) ? $_POST["ultima_empresa"] : "";
    $direccion = (isset($_POST["direccion"])) ? $_POST["direccion"] : "";
    $telefono = (isset($_POST["telefono"])) ? $_POST["telefono"] : "";
    $cargo = (isset($_POST["cargo"])) ? $_POST["cargo"] : "";
    $jefe_inmediato = (isset($_POST["jefe_inmediato"])) ? $_POST["jefe_inmediato"] : "";
    $fecha_in = (isset($_POST["fecha_in"])) ? $_POST["fecha_in"] : "";
    $fecha_re = (isset($_POST["fecha_re"])) ? $_POST["fecha_re"] : "";
    $funsiones = (isset($_POST["funsiones"])) ? $_POST["funsiones"] : "";
    $logros = (isset($_POST["logros"])) ? $_POST["logros"] : "";
    $contrato = (isset($_POST["contrato"])) ? $_POST["contrato"] : "";
    $tiempo = (isset($_POST["tiempo"])) ? $_POST["tiempo"] : "";
    $tipo_contrato = (isset($_POST["tipo_contrato"])) ? $_POST["tipo_contrato"] : "";
    $cual = (isset($_POST["cual"])) ? $_POST["cual"] : "";
    $horario = (isset($_POST["horario"])) ? $_POST["horario"] : "";
    $jornada = (isset($_POST["jornada"])) ? $_POST["jornada"] : "";
    $motivo_retiro = (isset($_POST["motivo_retiro"])) ? $_POST["motivo_retiro"] : "";


    $sentencia_laboral = $conexion->prepare("INSERT INTO `experiencia_laboral` (`id_exp`, `ultima_empresa`, `direccion`, `telefono`,`cargo`,`jefe_inmediato`,`fecha_in`,`fecha_re`
    ,`funsiones`,`logros`,`contrato`,`tiempo`,`tipo_contrato`,`cual`,`horario`,`jornada`,`motivo_retiro`)
    VALUES (NULL, :ultima_empresa,:direccion,:telefono,:cargo,:jefe_inmediato,:fecha_in,:fecha_re,:funsiones
    ,:logros,:contrato,:tiempo,:tipo_contrato,:cual,:horario,:jornada,:motivo_retiro);");

    $sentencia_laboral->bindParam(":ultima_empresa", $ultima_empresa);
    $sentencia_laboral->bindParam(":direccion", $direccion);
    $sentencia_laboral->bindParam(":telefono", $telefono);
    $sentencia_laboral->bindParam(":cargo", $cargo);
    $sentencia_laboral->bindParam(":jefe_inmediato", $jefe_inmediato);
    $sentencia_laboral->bindParam(":fecha_in", $fecha_in);
    $sentencia_laboral->bindParam(":fecha_re", $fecha_re);
    $sentencia_laboral->bindParam(":funsiones", $funsiones);
    $sentencia_laboral->bindParam(":logros", $logros);
    $sentencia_laboral->bindParam(":contrato", $contrato);
    $sentencia_laboral->bindParam(":tiempo", $tiempo);
    $sentencia_laboral->bindParam(":tipo_contrato", $tipo_contrato);
    $sentencia_laboral->bindParam(":cual", $cual);
    $sentencia_laboral->bindParam(":horario", $horario);
    $sentencia_laboral->bindParam(":jornada", $jornada);
    $sentencia_laboral->bindParam(":motivo_retiro", $motivo_retiro);
}

if ($_POST) {
    $entidad_salud = (isset($_POST["entidad_salud"])) ? $_POST["entidad_salud"] : "";
    $cual_salud = (isset($_POST["cual_salud"])) ? $_POST["cual_salud"] : "";
    $fec_ingr = (isset($_POST["fec_ingr"])) ? $_POST["fec_ingr"] : "";
    $afiliado = (isset($_POST["afiliado"])) ? $_POST["afiliado"] : "";
    $pensiones = (isset($_POST["pensiones"])) ? $_POST["pensiones"] : "";
    $cual_pensiones = (isset($_POST["cual_pensiones"])) ? $_POST["cual_pensiones"] : "";
    $fec_afili = (isset($_POST["fec_afili"])) ? $_POST["fec_afili"] : "";
    $cesantias = (isset($_POST["cesantias"])) ? $_POST["cesantias"] : "";
    $cual_cesantias = (isset($_POST["cual_cesantias"])) ? $_POST["cual_cesantias"] : "";
    $fec_aficen = (isset($_POST["fec_aficen"])) ? $_POST["fec_aficen"] : "";


    $sentencia_social = $conexion->prepare("INSERT INTO `seguridad_socila` (`id_seguridad`, `entidad_salud`, `cual_salud`, `fec_ingr`,`afiliado`,
    `pensiones`,`cual_pensiones`,`fec_afili`,`cesantias`,`cual_cesantias`,`fec_aficen`)
    VALUES (NULL, :entidad_salud,:cual_salud,:fec_ingr,:afiliado,:pensiones,:cual_pensiones,:fec_afili,:cesantias,:cual_cesantias,:fec_aficen);");
    $sentencia_social->bindParam(":entidad_salud", $entidad_salud);
    $sentencia_social->bindParam(":cual_salud", $cual_salud);
    $sentencia_social->bindParam(":fec_ingr", $fec_ingr);
    $sentencia_social->bindParam(":afiliado", $afiliado);
    $sentencia_social->bindParam(":pensiones", $pensiones);
    $sentencia_social->bindParam(":cual_pensiones", $cual_pensiones);
    $sentencia_social->bindParam(":fec_afili", $fec_afili);
    $sentencia_social->bindParam(":cesantias", $cesantias);
    $sentencia_social->bindParam(":cual_cesantias", $cual_cesantias);
    $sentencia_social->bindParam(":fec_aficen", $fec_aficen);
}

if ($_POST) {
    $nombre1 = (isset($_POST["nombre1"])) ? $_POST["nombre1"] : "";
    $ocupacion1 = (isset($_POST["ocupacion1"])) ? $_POST["ocupacion1"] : "";
    $direccion1 = (isset($_POST["direccion1"])) ? $_POST["direccion1"] : "";
    $telefono1 = (isset($_POST["telefono1"])) ? $_POST["telefono1"] : "";
    $nombre2 = (isset($_POST["nombre2"])) ? $_POST["nombre2"] : "";
    $ocupacion2 = (isset($_POST["ocupacion2"])) ? $_POST["ocupacion2"] : "";
    $direccion2 = (isset($_POST["direccion2"])) ? $_POST["direccion2"] : "";
    $telefono2 = (isset($_POST["telefono2"])) ? $_POST["telefono2"] : "";
    $nombre3 = (isset($_POST["nombre3"])) ? $_POST["nombre3"] : "";
    $ocupacion3 = (isset($_POST["ocupacion3"])) ? $_POST["ocupacion3"] : "";
    $direccion3 = (isset($_POST["direccion3"])) ? $_POST["direccion3"] : "";
    $telefono3 = (isset($_POST["telefono3"])) ? $_POST["telefono3"] : "";

    $sentencia_reper = $conexion->prepare("INSERT INTO `referencias_personales` (`id_social`, `nombre1`, `ocupacion1`, `direccion1`,`telefono1`,`nombre2`,`ocupacion2`,`direccion2`,`telefono2`,`nombre3`,`ocupacion3`,`direccion3`,`telefono3`)
    VALUES (NULL, :nombre1,:ocupacion1,:direccion1,:telefono1,:nombre2,:ocupacion2,:direccion2,:telefono2,:nombre3,:ocupacion3,:direccion3,:telefono3);");
    $sentencia_reper->bindParam(":nombre1", $nombre1);
    $sentencia_reper->bindParam(":ocupacion1", $ocupacion1);
    $sentencia_reper->bindParam(":direccion1", $direccion1);
    $sentencia_reper->bindParam(":telefono1", $telefono1);
    $sentencia_reper->bindParam(":nombre2", $nombre2);
    $sentencia_reper->bindParam(":ocupacion2", $ocupacion2);
    $sentencia_reper->bindParam(":direccion2", $direccion2);
    $sentencia_reper->bindParam(":telefono2", $telefono2);
    $sentencia_reper->bindParam(":nombre3", $nombre3);
    $sentencia_reper->bindParam(":ocupacion3", $ocupacion3);
    $sentencia_reper->bindParam(":direccion3", $direccion3);
    $sentencia_reper->bindParam(":telefono3", $telefono3);

    $sentencia_reper->execute();
}


print_r($_POST);
?>


<!doctype html>
<html lang=>

<head>
    <title>hoja de vida</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-expand">
        <div class="container">
            <a class="navbar-brand" href="#"><i class=""></i>HOJA DE VIDA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-control="navbarNav" arial-expanded="false" arial-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="admin/seccion/info_general/index.php">Datos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#informacion general">informacion general</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#informacion personal">informacion personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#informacion familiar">informacion familiar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Educacion y actitudes ">Educacion y actitudes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Trayectoria por Empresas">Trayectoria por Empresas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Experiencia laboral">Experiencia laboral</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Seguridad Social">Informacion Social</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="info_general container mt-5">
        <div class="container">
            <div class="card card-success shadow-lg rounded-lg outline outline-2 border-blue-700">
                <div class="row">
                    <div class="col-md-2 d-flex">
                        <form>
                            <div className="input-group mb-3">
                                <input type="date" class="form-control" className="form-control" placeholder="Fecha/D/M/A" />
                                <div className="input-group-append">
                                    <div className="input-group-text">
                                        <span className="fas fa-envelope" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8 d-flex">
                        <form>
                            <div class="col-md-14">
                                <input type="" class="form-control" id="" className="form-control" placeholder="empleo o cargo" />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2 d-flex">
                        <form>
                            <div className="input-group mb-3">
                                <input type="" class="form-control" className="form-control" placeholder="codigo" />
                                <div className="input-group-append">
                                    <div className="input-group-text">
                                        <span className="fas fa-envelope" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--informacion general-->
    <form action="" method="post">
        <section id="informacion general" class="info_general container mt-2 ">
            <div class="card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700 " id="informacion general">
                <div class="container bs-primary-bg-subtle">
                    <h2 class="text-center">INFORMACION GENERAL</h2>
                </div>
            </div>
            <div class="card card-success form-control">
                <div class="row row-cols-8 row-cols-sm-2 g-4">
                    <div class="col">
                        <input type="text" name="apellidos" class="form-control" id="apellidos" className="form-control" placeholder="Apellidos" />
                        <input type="text" name="direccion" class="form-control" id="direccion" className="form-control" placeholder="Dirección domicilio / Barrio" />
                        <input type="text" name="telefono" class="form-control" id="telefono" className="form-control" placeholder="Telefono" />
                        <input type="text" name="correo" class="form-control" id="correo" className="form-control" placeholder="Correo electrónico" />
                    </div>
                    <div class=col>
                        <input type="text" name="nombres" class="form-control" id="nombres" className="form-control" placeholder="Nombres" />
                        <input type="text" name="ciudad" class="form-control" id="ciudad" className="form-control" placeholder="Ciudad" />
                        <input type="text" name="celular" class="form-control" id="celular" className="form-control" placeholder="Celular" />
                        <input type="text" name="nacionalidad" class="form-control" id="nacionalidad" className="form-control" placeholder="Nacionalidad" />
                    </div>
                </div>
                <div class="row row-cols-8 row-cols-sm-3 g-4">
                    <div class=col>
                        <input type="text" name="profesion" class="form-control" id="profesion" className="form-control" placeholder="Profecion o Uficio" />
                    </div>
                    <div class=col>
                        <input type="text" name="estado" class="form-control" id="estado" className="form-control" placeholder="Estado" />
                    </div>
                    <div class=col>
                        <input type="text" name="experiencia" class="form-control" id="experiencia" className="form-control" placeholder="Años de experiencia" />
                    </div>
                </div>
                <button href="#documentos" class="btn btn-outline-primary">guardar</button>
            </div>
        </section>
        <!--documentos-->
        <section id="documentos" class="info_general container mt-2">
            <div class="card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                <div class="container">
                    <h2 class="text-center">DOCUMENTOS</h2>
                    <div class="card card-success">
                        <div class="row row-cols-4 row-cols-sm-2 g-4 ">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="input-group-text" id="basic-addon1">cedula ciudadania</span>
                                    <input type="text" name="cedula" class="form-control" id="cedula" className="form-control" placeholder="Numero" />
                                    <span class="input-group-text" id="basic-addon1">cedula Extranjeria</span>
                                    <input type="text" name="extranjeria" class="form-control" id="extranjeria" className="form-control" placeholder="Numero" />
                                </li>

                                <span class="input-group-text" id="basic-addon1">Expedida en:</span>
                                <input type="text" name="expedida" class="form-control" id="expedida" className="form-control" placeholder="Lugar" />

                            </ul>
                            <ul class="list-group col-md-6">
                                <div class="row row-cols-8 row-cols-sm-2 g-3 ">
                                    <li class="list-group-item">
                                        <h6>Libreta militar</h6>
                                        <input class="form-check-input me-1" type="text" name="libreta_militar_primera" value="" id="libreta_militar_primera" checked>
                                        <label class="form-check-label" for="firstRadio">Primer clase</label>
                                        <input class="form-check-input me-1" type="text" name="libreta_militar_segunda" value="" id="libreta_militar_segunda">
                                        <label class="form-check-label" for="secondRadio">Segunda clase</label>
                                    </li>
                                    <div>

                                        <span class="input-group-text" id="basic-addon1">Numero</span>
                                        <input type="text" name="numero_libreta" class="form-control" id="numero_libreta" className="form-control" placeholder="Numero" />


                                        <span class="input-group-text" id="basic-addon1">Distrito Militar</span>
                                        <input type="text" name="distrito_militar" class="form-control" id="distrito_militar" className="form-control" placeholder="Numero" />

                                    </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary">guardar</button>
            </div>
        </section>
    </form>
    <!--informacion personal-->
    <form action="" method="post">
        <section id="informacion personal" class="container mt-1">
            <div class="card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                <h2 class="text-center">INFORMACION PERSONAL</h2>
            </div>
            <div class="card card-success form-control">
                <div class="row row-cols-8 row-cols-sm-3 g-4 ">
                    <li class="list-group-item">
                        <h6>Esta trabajando actualmente?</h6>
                        <input class="form-check-input me-1" type="radio" name="Esta_trabajando_actualmente" value="si" id="Esta_trabajando_actualmente" checked>
                        <label class="form-check-label" for="Esta_trabajando_actualmente">si</label>
                        <input class="form-check-input me-1" type="radio" name="Esta_trabajando_actualmente" value="no" id="Esta_trabajando_actualmente">
                        <label class="form-check-label" for="Esta_trabajando_actualmente">no</label>


                    </li>
                    <div class="col-5">
                        <h6>En que Empresa?</h6>
                        <input type="text" name="En_que_Empresa" class="form-control" id="En_que_Empresa" className="form-control" placeholder="" />
                    </div>
                    <ul class="list-group col-md-4">
                        <div class="row row-cols-8 row-cols-sm-2 g-3 ">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" name="Tipo" value="Empleado" id="Tipo" checked>
                                <label class="form-check-label" for="firstRadio">Empleado</label></br>
                                <input class="form-check-input me-1" type="radio" name="Tipo" value="Independiente" id="Tipo">
                                <label class="form-check-label" for="secondRadio">Independiente</label>
                            </li>
                            <div>
                                <h6>tipo contrato</h6>
                                <input type="text" name="tipo_contrato" class="form-control" id="tipo_contrato" className="form-control" />
                            </div>
                    </ul>
                </div>
                <div class="row row-cols-4 row-cols-sm-4 g-2">
                    <li class="list-group-item">
                        <h6>¿Trabajó antes en esta empresa?</h6>
                        <input class="form-check-input me-1" type="radio" name="Trabajo_antes_en_esta_empresa" value="si" id="Trabajo_antes_en_esta_empresa" checked>
                        <label class="form-check-label" for="firstRadio">si</label>
                        <input class="form-check-input me-1" type="radio" name="Trabajo_antes_en_esta_empresa" value="no" id="Trabajo_antes_en_esta_empresa">
                        <label class="form-check-label" for="secondRadio">no</label>
                    </li>
                    <li class="list-group-item">
                        <h6>¿Solicitó empleo antes en esta empresa?</h6>
                        <input class="form-check-input me-1" type="radio" name="Solicito_empleo_antes_en_esta_empresa" value="si" id="Solicito_empleo_antes_en_esta_empresa" checked>
                        <label class="form-check-label" for="firstRadio">si</label>
                        <input class="form-check-input me-1" type="radio" name="Solicito_empleo_antes_en_esta_empresa" value="no" id="Solicito_empleo_antes_en_esta_empresa">
                        <label class="form-check-label" for="secondRadio">no</label>
                    </li>
                    <div className="input-group mb-3">
                        <input type="date" name="fecha" id="fecha" class="form-control" className="form-control" />
                    </div>
                    <li class="list-group-item">
                        <h6>¿Lo recomienda alguien de esta empresa?</h6>
                        <input class="form-check-input me-1" type="radio" name="Lo_recomienda_alguien_de_esta_empresa" value="si" id="Lo_recomienda_alguien_de_esta_empresa" checked>
                        <label class="form-check-label" for="firstRadio">si</label>
                        <input class="form-check-input me-1" type="radio" name="Lo_recomienda_alguien_de_esta_empresa" value="no" id="Lo_recomienda_alguien_de_esta_empresa">
                        <label class="form-check-label" for="secondRadio">no</label>
                        <div>
                            <span class="input-group-text" id="basic-addon1">Nombre</span>
                            <input type="text" name="nombrer" class="form-control" id="nombrer" className="form-control" placeholder="Nombre" />
                            <span class="input-group-text" id="basic-addon1">Dependencia</span>
                            <input type="text" name="Dependenciar" class="form-control" id="Dependenciar" className="form-control" placeholder="Dependencia" />
                        </div>
                    </li>
                </div>
                <div class="row row-cols-4 row-cols-sm-2 g-2">
                    <li class="list-group-item">
                        <h6>¿Tiene parientes que trabajan en esta empresa?</h6>
                        <input class="form-check-input me-1" type="radio" name="Tiene_parientes_que_trabajan_en_esta_empresa" value="si" id="Tiene_parientes_que_trabajan_en_esta_empresa" checked>
                        <label class="form-check-label" for="firstRadio">si</label>
                        <input class="form-check-input me-1" type="radio" name="Tiene_parientes_que_trabajan_en_esta_empresa" value="no" id="Tiene_parientes_que_trabajan_en_esta_empresa">
                        <label class="form-check-label" for="secondRadio">no</label>
                        <div>
                            <span class="input-group-text" id="basic-addon1">Nombre</span>
                            <input type="text" name="Nombrep" class="form-control" id="Nombrep" className="form-control" placeholder="Nombre" />
                            <span class="input-group-text" id="basic-addon1">Dependencia</span>
                            <input type="text" name="Dependenciap" class="form-control" id="Dependenciap" className="form-control" placeholder="Dependencia" />
                        </div>
                    </li>
                    <li class="list-group-item">
                        <h6>¿Cómo tuvo conocimiento de la existencia de la vacante?</h6>
                        <input class="form-check-input me-1" type="radio" name="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" value="Anuncio" id="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" checked>
                        <label class="form-check-label" for="firstRadio">Anuncio</label>
                        <input class="form-check-input me-1" type="radio" name="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" value="Amigo" id="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante">
                        <label class="form-check-label" for="secondRadio">Amigo</label>
                        <input class="form-check-input me-1" type="radio" name="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" value="por medio de Agencia" id="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante">
                        <label class="form-check-label" for="secondRadio">Por medio de agencia</label>
                        <div>
                            <span class="input-group-text" id="basic-addon1">otro</span>
                            <input type="text" name="Otro" class="form-control" id="Otro" className="form-control" placeholder="Cual" />
                        </div>
                    </li>
                </div>
                <div class="row row-cols-4 row-cols-sm-3 g-2">
                    <div class="col-2">
                        <h6>¿En qué ciudad o población ha vivido la mayor parte de su vida?</h6>
                        <input type="text" name="En_que_ciudad_a_vivido" class="form-control" id="En_que_ciudad_a_vivido" className="form-control" placeholder="" />
                    </div>
                    <div class="col-2">
                        <h6>¿En qué ciudades o regiones del país ha trabajado?</h6>
                        <input type="text" name="En_que_cuiudad_a_tabajado" class="form-control" id="En_que_cuiudad_a_tabajado" className="form-control" placeholder="" />
                    </div>
                    <li class="list-group-item">
                        <h6>¿Aceptaría trabajar en una ciudad o sitio distinto al inicialmente contratado?</h6>
                        <input class="form-check-input me-1" type="radio" name="Aceptaria_trabajar_en_otra_ciudad" value="si" id="Aceptaria_trabajar_en_otra_ciudad">
                        <label class="form-check-label" for="firstRadio">si</label>
                        <input class="form-check-input me-1" type="radio" name="Aceptaria_trabajar_en_otra_ciudad" value="no" id="Aceptaria_trabajar_en_otra_ciudad">
                        <label class="form-check-label" for="secondRadio">no</label>
                    </li>
                </div>
                <div class="row row-cols-4 row-cols-sm-4 g-4">
                    <li class="list-group-item">
                        <h6>Vive en casa:</h6>
                        <input class="form-check-input me-1" type="radio" name="Vive_en_casa" value="Familiar" id="firstRadio" checked>
                        <label class="form-check-label" for="firstRadio">Familiar?</label>
                        <input class="form-check-input me-1" type="radio" name="Vive_en_casa" value="Propia" id="Vive_en_casa">
                        <label class="form-check-label" for="secondRadio">Propia?</label>
                        <input class="form-check-input me-1" type="radio" name="Vive_en_casa" value="Alquilada" id="Vive_en_casa">
                        <label class="form-check-label" for="secondRadio">Alquilada?</label>
                    </li>
                    <div class="col-2">
                        <h6>¿Nombre del arrendador?</h6>
                        <input type="text" name="Nombre_arrendador" class="form-control" id="Nombre_arrendador" className="form-control" placeholder="" />
                    </div>
                    <div class="col-2">
                        <h6>¿Telefono?</h6>
                        <input type="text" name="Telefono" class="form-control" id="Telefono" className="form-control" placeholder="" />
                    </div>
                    <div class="col-2">
                        <h6>¿Hace cuanto reside en este lugar?</h6>
                        <input type="text" name="Cuanto_vive_hay" class="form-control" id="Cuanto_vive_hay" className="form-control" placeholder="" />
                    </div>
                </div>
                <div class="row row-cols-4 row-cols-sm-3 g-4">
                    <li class="list-group-item">
                        <h6>¿Actualmente tiene algún ingreso adicional?</h6>
                        <input class="form-check-input me-1" type="radio" name="Ingreso_adicional" value="si" id="Ingreso_adicional" checked>
                        <label class="form-check-label" for="firstRadio">SI</label>
                        <input class="form-check-input me-1" type="radio" name="Ingreso_adicional" value="no" id="Ingreso_adicional">
                        <label class="form-check-label" for="secondRadio">NO</label>
                    </li>
                    <div class="col-2">
                        <h6>Descríbalo e indique su valor mensual</h6>
                        <input type="text" name="Indique_su_valor" class="form-control" id="Indique_su_valor" className="form-control" placeholder="" />
                    </div>
                    <div>
                        <h6>¿Cuánto suman sus obligaciones económicas mensuales?</h6>
                        <span class="input-group-text" id="basic-addon1">$</span>
                        <input type="text" name="Obligaciones_economicas" class="form-control" id="Obligaciones_economicas" className="form-control" placeholder="Numero" />
                    </div>
                </div>
                <div class="row row-cols-4 row-cols-sm-2 g-4">
                    <div class="col-md-6">
                        <h6>¿Por qué conceptos?</h6>
                        <input type="text" name="Conceptos" class="form-control" id="Conceptos" className="form-control" placeholder="Conceptos" />
                    </div>
                    <div class="col-md-6">
                        <h6>¿Cuánto suman sus obligaciones económicas mensuales?</h6>
                        <span class="input-group-text" id="basic-addon1">$</span>
                        <input type="text" name="Obligaciones_mensuales" class="form-control" id="Obligaciones_mensuales" className="form-control" placeholder="" />
                    </div>
                </div>
                <div class="row row-cols-3 row-cols-sm-3 g-4">
                    <div class="col-md-4">
                        <h6>¿Cuál(es) es(son) su(s) principal(es) afición(es)?</h6>
                        <input type="text" name="Aficiones" class="form-control" id="Aficiones" className="form-control" placeholder="" />
                    </div>
                    <li class="list-group-item col-md-2">
                        <h6>¿Practica algún deporte?</h6>
                        <input class="form-check-input me-1" type="radio" name="Practica_deporte" value="si" id="Practica_deporte" checked>
                        <label class="form-check-label" for="firstRadio">SI</label>
                        <input class="form-check-input me-1" type="radio" name="Practica_deporte" value="no" id="Practica_deporte">
                        <label class="form-check-label" for="secondRadio">NO</label>
                    </li>
                    <div class="col-md-6">
                        <h6>¿Cuál(es)?</h6>
                        <input type="text" name="Cual" class="form-control" id="Cual" className="form-control" placeholder="" />
                    </div>
                </div>
                <h6>¿Alguna vez ha obtenido distinciones o reconocimientos por su desempeño en actividades deportivas, culturales, sociales, etc.?</h6>
                <div class="row row-cols-2 row-cols-sm-2 g-4">
                    <li class="list-group-item col-md-2">
                        <input class="form-check-input me-1" type="radio" name="Distinciones" value="si" id="Distinciones" checked>
                        <label class="form-check-label" for="firstRadio">SI</label>
                        <input class="form-check-input me-1" type="radio" name="Distinciones" value="no" id="Distinciones">
                        <label class="form-check-label" for="secondRadio">NO</label>
                    </li>
                    <div class="col-md-10">
                        <span class="input-group-text" id="basic-addon1">¿Cuál(es)?</span>
                        <input type="text" name="Cuald" class="form-control" id="Cuald" className="form-control" />
                    </div>
                </div>
                <h6>¿Pertenece a algún tipo de asociación comunitaria, deportiva, cultural, etc.?</h6>
                <div class="row row-cols-2 row-cols-sm-2 g-4">
                    <li class="list-group-item col-md-2">
                        <input class="form-check-input me-1" type="radio" name="Pertenece_aso_com_dep" value="si" id="Pertenece_aso_com_dep" checked>
                        <label class="form-check-label" for="firstRadio">SI</label>
                        <input class="form-check-input me-1" type="radio" name="Pertenece_aso_com_dep" value="no" id="Pertenece_aso_com_dep">
                        <label class="form-check-label" for="secondRadio">NO</label>
                    </li>
                    <div class="col-md-10">
                        <span class="input-group-text" id="basic-addon1">¿Cuál(es)?</span>
                        <input type="text" name="Cual_a" class="form-control" id="Cual_a" className="form-control" />
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary">guardar</button>
        </section>
    </form>
    <!--objetivos-->
    <section id="" class="container mt-1">
        <form action="" method="post">
            <div class="card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                <h4 class="">OBJETIVO</h4>
                <h5> Mencione brevemente que expectativas tiene a nivel laboral, educativo y personal e indique como planea hacerlas realidad.</h5>

                <input type="text" name="ultima_empresa" class="form-control" id="Objetivo1" className="form-control" placeholder="" />
                <input type="text" name="Objetivo2" class="form-control" id="Objetivo2" className="form-control" placeholder="" />
                <input type="text" name="Objetivo3" class="form-control" id="Objetivo3" className="form-control" placeholder="" />

                <button type="submit" class="btn btn-outline-primary">guardar</button>
            </div>
        </form>
    </section>
    <!--INFORMACION FAMILIAR-->
    <section id="informacion familiar" class="container mt-1">
        <div class="card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
            <h2 class="text-center">INFORMACION FAMILIAR</h2>
        </div>
        <form action="" method="post">
            <div class="card card-success form-control">
                <div class="row row-cols-3 row-cols-sm-3 g-4">
                    <div class="col-md-4">
                        <h6>Nombre esposa(o) o compañera(o)</h6>
                        <input type="text" name="nonmbre_conyuge" class="form-control" id="nonmbre_conyuge" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <h6>Profesión, ocupación u oficio</h6>
                        <input type="text" name="ocupacion" class="form-control" id="ocupacion" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <h6>Empresa donde trabaja</h6>
                        <input type="text" name="empresa" class="form-control" id="empresa" className="form-control" placeholder="" />
                    </div>
                </div>
                <div class="row row-cols-4 row-cols-sm-4 g-4">
                    <div class="col-md-3">
                        <h6>Cargo actual</h6>
                        <input type="text" name="cargo" class="form-control" id="cargo" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-3">
                        <h6>Dirección</h6>
                        <input type="text" name="direccion" class="form-control" id="direccion" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-3">
                        <h6>Teléfono</h6>
                        <input type="text" name="telefono" class="form-control" id="telefono" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-3">
                        <h6>Ciudad</h6>
                        <input type="text" name="ciudad" class="form-control" id="ciudad" className="form-control" placeholder="" />
                    </div>
                </div>
                <div class="row row-cols-3 row-cols-sm-3 g-3">
                    <div class="col-auto">
                        <div class="row g-3 align-items-center">
                            <h6>Nº de personas que dependen económicamente del solicitante</lh6>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="personas_acargo" class="form-control" id="personas_acargo" className="form-control" placeholder="" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6>Parentesco</h6>
                        <input type="text" name="parentesco" class="form-control" id="parentesco" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <h6>Edades</h6>
                        <input type="text" name="edades" class="form-control" id="edades" className="form-control" placeholder="" />
                    </div>
                </div>
                <div class="row row-cols-3 row-cols-sm-3 g-3">
                    <div class="col-md-4">
                        <h6>Nombre(s) padre(s)</h6>
                        <input type="text" name="nombre_padres" class="form-control" id="nombre_padres" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <h6>Profesión, ocupación u oficio</h6>
                        <input type="text" name="profecion" class="form-control" id="profecion" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <h6>Teléfono(s)</h6>
                        <input type="text" name="telefonos" class="form-control" id="telefonos" className="form-control" placeholder="" />
                    </div>
                </div>
                <div class="row row-cols-3 row-cols-sm-3 g-3">
                    <div class="col-md-4">
                        <input type="text" name="nombre_madre" class="form-control" id="nombre_madre" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="oficio_madre" class="form-control" id="oficio_madre" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="telefono_madre" class="form-control" id="telefono_madre" className="form-control" placeholder="" />
                    </div>
                </div>
                <div class="row row-cols-3 row-cols-sm-3 g-3">
                    <div class="col-md-4">
                        <h6>Nombre(s) hermano(s)</h6>
                        <input type="text" name="hermanos" class="form-control" id="hermanos" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <h6>Profesión, ocupación u oficio</h6>
                        <input type="text" name="ocupacionhermanos" class="form-control" id="ocupacionhermanos" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <h6>Teléfono(s)</h6>
                        <input type="text" name="telefonohermanos" class="form-control" id="telefonohermanos" className="form-control" placeholder="" />
                    </div>
                </div>
                <div class="row row-cols-3 row-cols-sm-3 g-3">
                    <div class="col-md-4">
                        <input type="text" name="hermano2" class="form-control" id="hermano2" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="ocupacionhermanos2" class="form-control" id="ocupacionhermanos2" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="telefonohermanos2" class="form-control" id="telefonohermanos2" className="form-control" placeholder="" />
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary">guardar</button>
        </form>
    </section>
    <!--EDUCACION Y ACTITUDES-->
    <section id="Educacion y actitudes" class="container mt-1">
        <form action="" method="post">
            <div class="card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                <h2 class="text-center">EDUCACION Y ACTITUDES</h2>
            </div>
            <div class="card card-success form-control">
                <div class="row row-cols-6 row-cols-sm-6 g-4">
                    <div class="col-md-2">
                        <h6>ESTUDIOS</h6>
                    </div>
                    <div class="col-md-1">
                        <h6>Año finalizado</h6>
                    </div>
                    <div class="col-md-1">
                        <h6>AÑOS CURSADOS</h6>
                    </div>
                    <div class="col-md-2">
                        <h6>TITULO OBTENIDO</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>NOMBRE DE LA INSTITUCION</h6>
                    </div>
                    <div class="col-md-2">
                        <h6>CIUDAD</h6>
                    </div>
                </div>
            </div>
            <div class="card card-success form-control">
                <div class="row row-cols-6 row-cols-sm-6 g-4">
                    <div class="col-md-2">
                        <h6>PRIMARIA</h6>
                    </div>
                    <div class="col-md-1"><input type="text" name="finalizacionpri" class="form-control" id="finalizacionpri" className="form-control" placeholder="" /></div>
                    <div class="col-md-1"><input type="text" name="cursadospri" class="form-control" id="cursadospri" className="form-control" placeholder="" /></div>
                    <div class="col-md-2"><input type="text" name="titulopri" class="form-control" id="titulopri" className="form-control" placeholder="" /></div>
                    <div class="col-md-4"><input type="text" name="institupri" class="form-control" id="institupri" className="form-control" placeholder="" /></div>
                    <div class="col-md-2"><input type="text" name="ciudadpri" class="form-control" id="ciudadpri" className="form-control" placeholder="" /></div>
                </div>
            </div>
            <div class="card card-success form-control">
                <div class="row row-cols-6 row-cols-sm-6 g-4">
                    <h6>BACHILLERATO</h6>
                </div>
                <div class="row row-cols-2 row-cols-sm-2 g-2">
                    <li class="list-group-item col-md-1">
                        <label class="form-check-label" for="firstRadio">Clásico</label>
                        <input class="form-check-input me-1" type="radio" name="bachillerato" value="Clasico" id="bachillerato" checked>
                        <label class="form-check-label" for="secondRadio">Comercial</label>
                        <input class="form-check-input me-1" type="radio" name="bachillerato" value="Comercial" id="bachillerato">
                    </li>
                    <li class="list-group-item col-md-1">
                        <label class="form-check-label" for="firstRadio">Técnico</label>
                        <input class="form-check-input me-1" type="radio" name="bachillerato" value="Tecnico" id="bachillerato" checked>
                        <label class="form-check-label" for="secondRadio">Otro</label>
                        <input class="form-check-input me-1" type="radio" name="bachillerato" value="Otro" id="bachillerato">
                    </li>
                    <div class="col-md-1"><input type="text" name="finalizacionbac" class="form-control" id="finalizacionbac" className="form-control" placeholder="" /></div>
                    <div class="col-md-1"><input type="text" name="cursadosbac" class="form-control" id="cursadosbac" className="form-control" placeholder="" /></div>
                    <div class="col-md-2"><input type="text" name="titulobac" class="form-control" id="titulobac" className="form-control" placeholder="" /></div>
                    <div class="col-md-4"><input type="text" name="institubac" class="form-control" id="institubac" className="form-control" placeholder="" /></div>
                    <div class="col-md-2"><input type="text" name="ciudadbac" class="form-control" id="ciudadbac" className="form-control" placeholder="" /></div>
                </div>
            </div>
            </div>
            <div class="card card-success form-control">
                <h6>Educación Superior</h6>
                <div class="row row-cols-6 row-cols-sm-6 g-4">
                    <li class="list-group-item col-md-2">
                        <label class="form-check-label" for="firstRadio">Técnico</label>
                        <input class="form-check-input me-1" type="radio" name="educacion_superiorsuperior" value="Tecnico" id="educacion_superiorsuperior" checked>
                        <label class="form-check-label" for="secondRadio">Tecnologo</label>
                        <input class="form-check-input me-1" type="radio" name="educacion_superiorsuperior" value="Tecnologo" id="educacion_superiorsuperior">
                        <label class="form-check-label" for="secondRadio">Profesional</label>
                        <input class="form-check-input me-1" type="radio" name="educacion_superiorsuperior" value="Profesional" id="educacion_superiorsuperior">
                    </li>
                    <div class="col-md-1"><input type="text" name="finalizacionsup" class="form-control" id="finalizacionsup" className="form-control" placeholder="" /></div>
                    <div class="col-md-1"><input type="text" name="cursadossup" class="form-control" id="cursadossup" className="form-control" placeholder="" /></div>
                    <div class="col-md-2"><input type="text" name="titulosup" class="form-control" id="titulosup" className="form-control" placeholder="" /></div>
                    <div class="col-md-4"><input type="text" name="institutosup" class="form-control" id="institutosup" className="form-control" placeholder="" /></div>
                    <div class="col-md-2"><input type="text" name="ciudadsup" class="form-control" id="ciudadsup" className="form-control" placeholder="" /></div>
                </div>
            </div>
            <div class="card card-success form-control">
                <div class="row row-cols-6 row-cols-sm-6 g-4">
                    <div class="col-md-2">
                        <h6>POSGRADOS</h6>
                    </div>
                    <div class="col-md-1"><input type="text" name="finalizacionpos" class="form-control" id="finalizacionpos" className="form-control" placeholder="" /></div>
                    <div class="col-md-1"><input type="text" name="cursadospos" class="form-control" id="cursadospos" className="form-control" placeholder="" /></div>
                    <div class="col-md-2"><input type="text" name="titulopos" class="form-control" id="titulopos" className="form-control" placeholder="" /></div>
                    <div class="col-md-4"><input type="text" name="institutopos" class="form-control" id="institutopos" className="form-control" placeholder="" /></div>
                    <div class="col-md-2"><input type="text" name="ciudadpos" class="form-control" id="ciudadpos" className="form-control" placeholder="" /></div>
                </div>
            </div>
            <div class="card card-success form-control">
                <div class="row row-cols-6 row-cols-sm-6 g-4">
                    <div class="col-md-2">
                        <h6>Otros: cursos, diplomados,seminarios</h6>
                    </div>
                    <div class="col-md-2">
                        <h6>Intensidad horaria</h6><input type="text" name="intensidad" class="form-control" id="intensidad" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <h6>Nombre del programa</h6><input type="text" name="programa" class="form-control" id="programa" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <h6>Institución</h6><input type="text" name="instituto" class="form-control" id="instituto" className="form-control" placeholder="" />
                    </div>
                </div>
            </div>
            <div class="card card-success form-control">
                <h6>¿Cursa estudios actualmente?</h6>
                <div class="row row-cols-4 row-cols-sm-4 g-4">
                    <li class="list-group-item col-md-2">
                        <label class="form-check-label" for="firstRadio">SI</label>
                        <input class="form-check-input me-1" type="radio" name="actualmente" value="Si" id="actualmente" checked>
                        <label class="form-check-label" for="secondRadio">NO</label>
                        <input class="form-check-input me-1" type="radio" name="actualmente" value="NO" id="actualmente">
                    </li>
                    <div class="col-md-4">
                        <h6>¿Qué tipo de estudios?</h6><input type="text" name="tipo" class="form-control" id="tipo" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-3">
                        <h6>Duración (años, semestres, meses)</h6><input type="text" name="duracion" class="form-control" id="duracion" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-3">
                        <h6>Año / semestre que cursa</h6><input type="text" name="cursa" class="form-control" id="cursa" className="form-control" placeholder="" />
                    </div>
                </div>
            </div>
            <div class="card card-success form-control">
                <div class="row row-cols-2 row-cols-sm-2 g-4">
                    <div class="col-md-8">
                        <h6>Nombre de la institución</h6><input type="text" name="nom_inst" class="form-control" id="nom_inst" className="form-control" placeholder="" />
                    </div>

                    <li class="list-group-item col-md-4">
                        <h6>Horario</h6>
                        <label class="form-check-label" for="firstRadio">Diurno</label>
                        <input class="form-check-input me-1" type="radio" name="horario" value="Diurno" id="horario" checked>
                        <label class="form-check-label" for="secondRadio">Nocturno</label>
                        <input class="form-check-input me-1" type="radio" name="horario" value="Nocturno" id="horario">
                        <label class="form-check-label" for="firstRadio">Fin de semana</label>
                        <input class="form-check-input me-1" type="radio" name="horario" value="Fin de semana" id="horario" checked>
                        <label class="form-check-label" for="secondRadio">A distancia</label>
                        <input class="form-check-input me-1" type="radio" name="horario" value="A distancia" id="horario">
                    </li>
                </div>
                <button type="submit" class="btn btn-outline-primary">guardar</button>
            </div>
        </form>
    </section>
    <!--OTROS CONOCIMIENTOS-->
    <section id="" class="container mt-1">
        <div class="card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
            <h5 class="text-center">OTROS CONOCIMIENTOS: Indique el grado de dominio R - Regular, B - Bien, MB - Muy Bien</h5>
        </div>
        <form action="" method="post">
            <div class="card card-success form-control">
                <div class="row row-cols-2 row-cols-sm-3 g-2">
                    <li class="list-group-item col-md-3">
                        <h6>Sistemas</h6>
                        <label class="form-check-label" for="firstRadio">SI</label>
                        <input class="form-check-input me-1" type="radio" name="sistemas" value="Si" id="sistemas" checked>
                        <label class="form-check-label" for="secondRadio">NO</label>
                        <input class="form-check-input me-1" type="radio" name="sistemas" value="No" id="sistemas" checked>
                        <h6>¿Programa(s) que maneja?</h6>
                    </li>
                    <div class="row row-cols-1 row-cols-2 g-2">
                        <div class="col">
                            <input class="col form-control" type="text" name="sistemas1" class="form-control" id="sistemas1" className="form-control" placeholder="1" />
                        </div>
                        <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimientos1" value="R" id="conocimientos1" className="" placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos1" value="B" id="conocimientos1" className="" placeholder="B" />
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos1" value="MB" id="conocimientos1" className="" placeholder="MB" />
                        </li>
                        <div class="col">
                            <input class="col form-control" type="text" name="sistemas2" class="form-control" id="" className="form-control" placeholder="2" />
                        </div>
                        <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimientos2" value="R" id="conocimientos2" className="" placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos2" value="B" id="conocimientos2" className="" placeholder="B" />
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos2" value="MB" id="conocimientos2" className="" placeholder="MB" />
                        </li>
                    </div>
                    <div class="row row-cols-1 row-cols-2 g-2">
                        <div class="col">
                            <input class="col-sm-10 form-control" type="text" name="sistemas3" class="form-control" id="sistemas3" className="form-control" placeholder="3" />
                        </div>
                        <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimientos3" value="R" id="" className="conocimientos3" placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos3" value="B" id="" className="conocimientos3" placeholder="B" />
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos3" value="MB" id="" className="conocimientos3" placeholder="MB" />
                        </li>
                        <div class="col">
                            <input class=" form-control" type="text" name="sistemas4" class="form-control" id="sistemas4" className="form-control" placeholder="4" />
                        </div>
                        <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimientos4" value="R" id="conocimientos4" className="" placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos4" value="B" id="conocimientos4" className="" placeholder="B" />
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos4" value="MB" id="conocimientos4" className="" placeholder="MB" />
                        </li>
                    </div>
                </div>

                <div class="row row-cols-2 row-cols-sm-3 g-2">
                    <li class="list-group-item col-md-3">
                        <h6>Idiomas</h6>
                        <label class="form-check-label" for="firstRadio">SI</label>
                        <input class="form-check-input me-1" type="radio" name="idioma" value="Si" id="idioma" checked>
                        <label class="form-check-label" for="secondRadio">NO</label>
                        <input class="form-check-input me-1" type="radio" name="idioma" value="No" id="idioma" checked>
                        <h6>Qué idioma(s) conoce?</h6>
                    </li>
                    <div class="row row-cols-1 row-cols-2 g-2">
                        <div class="col">
                            <input class="col form-control" type="text" name="idiomas1" class="form-control" id="idiomas1" className="form-control" placeholder="1" />
                        </div>
                        <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimiento_idiomas1" value="R" id="conocimiento_idiomas1" className="" placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas1" value="B" id="conocimiento_idiomas1" className="" placeholder="B" />
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas1" value="MB" id="conocimiento_idiomas1" className="" placeholder="MB" />
                        </li>
                        <div class="col">
                            <input class=" form-control" type="text" name="idiomas2" class="form-control" id="idiomas2" className="form-control" placeholder="2" />
                        </div>
                        <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimiento_idiomas2" value="R" id="conocimiento_idiomas2" className="" placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas2" value="B" id="conocimiento_idiomas2" className="" placeholder="B" />
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas2" value="MB" id="conocimiento_idiomas2" className="" placeholder="MB" />
                        </li>
                    </div>
                    <div class="row row-cols-1 row-cols-2 g-2">
                        <div class="col">
                            <input class="col-sm-10 form-control" type="text" name="idiomas3" class="form-control" id="idiomas3" className="form-control" placeholder="3" />
                        </div>
                        <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimiento_idiomas3" value="R" id="conocimiento_idiomas3" className="" placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas3" value="B" id="conocimiento_idiomas3" className="" placeholder="B" />
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas3" value="MB" id="conocimiento_idiomas3" className="" placeholder="MB" />
                        </li>
                        <div class="col">
                            <input class=" form-control" type="text" name="idiomas4" class="form-control" id="idiomas4" className="form-control" placeholder="4" />
                        </div>
                        <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="" value="R" id="" className="" placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas4" value="B" id="conocimiento_idiomas4" className="" placeholder="B" />
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas4" value="MB" id="conocimiento_idiomas4" className="" placeholder="MB" />
                        </li>

                    </div>
                    <button type="submit" class="btn btn-outline-primary">guardar</button>
        </form>

    </section>
    <!--TRAYECTORIA POR EMPRESAS-->
    <section id="Trayectoria por Empresas" class="container mt-1">
        <div class="card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
            <h2 class="text-center">TRAYECTORIA POR EMPRESAS</h2>
        </div>
        <div class="card card-success form-control">
            <div class="container mt1">
                <div class="row row-cols-2 sm-2 g-2">
                    <div class="col-md-8">
                        <h6 class=" text-center">EMPRESAS POR ACTIVIDADES ECONOMICAS</h6>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-center">AREA DE LA EMPRESA</h6>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="row row-cols-5 row-cols-sm-5 g-4">
                        <li class="form-check">
                            <div class="form-check">
                                <label class="form-check-label" for="inlineCheckbox1">GRICULTURA</label>
                                <input class="form-check-input" type="checkbox" name="empresa1" id="empresa1" value="GRICULTURA">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox2">GANADERIA / AVICULTURA</label>
                                <input class="form-check-input" type="checkbox" name="empresa2" id="empresa2" value="GANADERIA / AVICULTURA">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">MINERIA</label>
                                <input class="form-check-input" type="checkbox" name="empresa3" id="empresa3" value="MINERIA">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">HIDROCARBUROS</label>
                                <input class="form-check-input" type="checkbox" name="empresa4" id="empresa4" value="HIDROCARBUROS">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">INDUSTRIA</label>
                                <label class="form-check-label" for="inlineCheckbox3">Alimentos y bebidas</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Alimentos y bebidas">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Tabaco</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Tabaco">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Textiles y Confecciones</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Textiles y Confecciones">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Cuero y Calzado</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Cuero y Calzado">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Papel y Cartón</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Papel y Cartón">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Editorial y Artes Gráficas</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Editorial y Artes Gráficas">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Químico y Farmacéutico</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Químico y Farmacéutico">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Caucho y Plástico</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Caucho y Plástico">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Vidrio, Cerámica y Cemento</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Vidrio, Cerámica y Cemento">
                            </div>
                        </li>
                        <li class="form-check">
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Metalurgia</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Metalurgia">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Maquinaria</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Maquinaria">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Automotores</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Automotores">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Muebles</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Muebles">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Reciclaje</label>
                                <input class="form-check-input" type="checkbox" name="empresa5" id="empresa5" value="Reciclaje">
                            </div>
                            <div class="col-md-6">
                                <h6>OTROS (Cuales?)</h6>
                            </div>
                            <div class="col-md-14"><input type="text" name="empresa5" class="form-control" id="empresa5" className="form-control" placeholder="" /></div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">ELECTRICIDAD / GAS / AGUA</label>
                                <input class="form-check-input" type="checkbox" name="empresa6" id="empresa6" value="ELECTRICIDAD/GAS/AGUA">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">CONSTRUCCION</label>
                                <input class="form-check-input" type="checkbox" name="empresa7" id="empresa7" value="CONSTRUCCION">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">COMERCIO</label>
                                <input class="form-check-input" type="checkbox" name="empresa8" id="empresa8" value="COMERCIO">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">HOTELES Y RESTAURANTES</label>
                                <input class="form-check-input" type="checkbox" name="empresa9" id="empresa9" value="HOTELES Y RESTAURANTES">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">TRANSPORTE Y ALMACENAMIENTO</label>
                                <input class="form-check-input" type="checkbox" name="empresa10" id="empresa10" value="TRANSPORTE Y ALMACENAMIENTO">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">COMUNICACIONES</label>
                                <input class="form-check-input" type="checkbox" name="empresa11" id="empresa11" value="COMUNICACIONES">
                            </div>
                        </li>
                        <li class="form-check">
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">FINANCIERO</label>
                                <input class="form-check-input" type="checkbox" name="empresa12" id="empresa12" value="FINANCIERO">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">INMOBILIARIO</label>
                                <input class="form-check-input" type="checkbox" name="empresa13" id="empresa13" value="INMOBILIARIO">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">INFORMATICO</label>
                                <input class="form-check-input" type="checkbox" name="empresa14" id="empresa14" value="INFORMATICO">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">SALUD</label>
                                <input class="form-check-input" type="checkbox" name="empresa15" id="empresa15" value="SALUD">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">EDUCACION</label>
                                <input class="form-check-input" type="checkbox" name="empresa16" id="empresa16" value="EDUCACION">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">SEGUROS</label>
                                <input class="form-check-input" type="checkbox" name="empresa17" id="empresa17" value="SEGUROS">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">TURISMO / RECREACION</label>
                                <input class="form-check-input" type="checkbox" name="empresa18" id="empresa18" value="TURISMO / RECREACION">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">OTROS SERVICIOS</label>
                                <input class="form-check-input" type="checkbox" name="empresa19" id="empresa19" value="OTROS SERVICIOS">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Asesorías Profesionales</label>
                                <input class="form-check-input" type="checkbox" name="empresa19" id="empresa19" value="Asesorías Profesionales">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Servicios Temporales</label>
                                <input class="form-check-input" type="checkbox" name="empresa19" id="empresa19" value="Servicios Temporales">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Seguridad Vigilancia</label>
                                <input class="form-check-input" type="checkbox" name="empresa19" id="empresa19" value="Seguridad Vigilancia">
                            </div>
                            <div class="col-md-6">
                                <h6>OTROS SECTORES</h6>
                            </div>
                            <div class="col-md-12"><input type="text" name="empresa19" class="form-control" id="empresa19" className="form-control" placeholder="" /></div>
                        </li>
                        <li class="form-check">
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Administración</label>
                                <input class="form-check-input" type="checkbox" name="area1" id="area1" value="Administración">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Auditoría</label>
                                <input class="form-check-input" type="checkbox" name="area2" id="area2" value="Auditoría">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Bodega</label>
                                <input class="form-check-input" type="checkbox" name="area3" id="area3" value="Bodega">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Compras</label>
                                <input class="form-check-input" type="checkbox" name="area4" id="area4" value="Compras">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Contabilidad</label>
                                <input class="form-check-input" type="checkbox" name="area5" id="area5" value="Contabilidad">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Costos</label>
                                <input class="form-check-input" type="checkbox" name="area6" id="area6" value="Costos">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Crédito y Cobranzas</label>
                                <input class="form-check-input" type="checkbox" name="area7" id="area7" value="Crédito y Cobranzas">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Diseño</label>
                                <input class="form-check-input" type="checkbox" name="area8" id="area8" value="Diseño">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Finanzas</label>
                                <input class="form-check-input" type="checkbox" name="area9" id="area9" value="Finanzas">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Gerencia General</label>
                                <input class="form-check-input" type="checkbox" name="area10" id="area10" value="Gerencia General">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Impuestos</label>
                                <input class="form-check-input" type="checkbox" name="area11" id="area11" value="Impuestos">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Mercadeo</label>
                                <input class="form-check-input" type="checkbox" name="area12" id="area12" value="Mercadeo">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Producción</label>
                                <input class="form-check-input" type="checkbox" name="area13" id="area13" value="Producción">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Publicidad</label>
                                <input class="form-check-input" type="checkbox" name="area14" id="area14" value="Publicidad">
                            </div>
                        </li>
                        <li class="form-check">
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Personal</label>
                                <input class="form-check-input" type="checkbox" name="area15" id="area15" value="Personal">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Sistemas</label>
                                <input class="form-check-input" type="checkbox" name="area16" id="area16" value="Sistemas">
                            </div>
                            <div class="form-check ">
                                <label class="form-check-label" for="inlineCheckbox3">Tesorería</label>
                                <input class="form-check-input" type="checkbox" name="area17" id="area17" value="Tesorería">
                            </div>
                            <div class="col-md-6">
                                <h6>OTROS (Cuales?)</h6>
                            </div>
                            <div class="col-md-14"><input type="text" name="area18" class="form-control" id="area18" className="form-control" placeholder="" /></div>
                        </LI>

                    </div>
                    <button type="submit" class="btn btn-outline-primary">guardar</button>

                </form>
            </div>

        </div>

        </div>

    </section>
    <!--EXPERIENCIA LABORAL-->
    <section id="Experiencia laboral" class="container mt-1">
        <div class="card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
            <h2 class="text-center">EXPERIENCIA LABORAL</h2>
        </div>
        <form action="" method="post">
            <div class="card card-success form-control">
                <div class="row row-cols-3 row-cols-sm-3 g-4">
                    <div class="col-md-4">
                        <h6>Nombre de la última o actual empresa</h6>
                        <input type="text" name="ultima_empresa" class="form-control" id="ultima_empresa" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <h6>Dirección</h6>
                        <input type="text" name="direccion" class="form-control" id="direccion" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-4">
                        <h6>Teléfono(s)</h6>
                        <input type="text" name="telefono" class="form-control" id="telefono" className="form-control" placeholder="" />
                    </div>
                </div>
                <div class="row row-cols-4 row-cols-sm-4 g-4">
                    <div class="col-md-3">
                        <h6>Cargo</h6>
                        <input type="text" name="cargo" class="form-control" id="cargo" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-3">
                        <h6>Nombre de su jefe inmediato</h6>
                        <input type="text" name="jefe_inmediato" class="form-control" id="jefe_inmediato" className="form-control" placeholder="" />
                    </div>
                    <div className="input-group mb-3">
                        <h6>Fecha de ingreso</h6>
                        <input type="date" name="fecha_in" id="fecha_in" class="form-control" className="form-control" />
                    </div>
                    <div className="input-group mb-3">
                        <h6>Fecha de retiro</h6>
                        <input type="date" name="fecha_re" id="fecha_re" class="form-control" className="form-control" />
                    </div>
                    <div class="col-md-12">
                        <h6>Funciones realizadas</h6>
                        <input type="text" name="funsiones" class="form-control" id="funsiones" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-12">
                        <h6>Logros obtenidos</h6>
                        <input type="text" name="logros" class="form-control" id="logros" className="form-control" placeholder="" />
                    </div>
                </div>
                <div class="row row-cols-4 row-cols-sm-4 g-4">
                    <li class="list-group-item col-md-2">
                        <h6 class="col-sm-4">Tipo de contrato:</h6>
                        <label class="form-check-label" for="firstRadio">Indefinido</label>
                        <input class="form-check-input me-1" type="radio" name="contrato" value="Indefinido" id="contrato" checked>
                        <label class="form-check-label" for="secondRadio">Fijo</label>
                        <input class="form-check-input me-1" type="radio" name="contrato" value="Fijo" id="contrato">
                    </li>
                    <div class="col-md-3">
                        <h6>¿Cuanto tiempo?</h6>
                        <input type="text" name="tiempo" class="form-control" id="tiempo" className="form-control" placeholder="" />
                    </div>
                    <li class="list-group-item col-md-3">
                        <label class="form-check-label" for="firstRadio">Contrato directo con la empresa</label>
                        <input class="form-check-input me-1" type="radio" name="tipo_contrato" value="Contrato directo con la empresa" id="tipo_contrato" checked>
                        <label class="form-check-label" for="secondRadio">Contrato por medio de agencia </label>
                        <input class="form-check-input me-1" type="radio" name="tipo_contrato" value="Contrato por medio de agencia" id="tipo_contrato">
                        <label class="form-check-label" for="secondRadio">Otro</label>
                        <input class="form-check-input me-1" type="radio" name="tipo_contrato" value="Otro" id="tipo_contrato">
                    </li>
                    <div class="col-md-4">
                        <h6>¿Cuál?</h6>
                        <input type="text" name="cual" class="form-control" id="cual" className="form-control" placeholder="" />
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-sm-2 g-2">
                    <h6 class="col-md-2">Horario de trabajo:</h6>
                    <li class="list-group-item col-md-2">
                        <label class="form-check-label" for="firstRadio">Tiempo completo</label>
                        <input class="form-check-input me-1" type="radio" name="horario" value="Tiempo completo" id="horario" checked>
                    </li>
                    <li class="list-group-item col-md-2">
                        <label class="form-check-label" for="firstRadio">½ Tiempo</label>
                        <input class="form-check-input me-1" type="radio" name="horario" value="½ Tiempo" id="horario" checked>
                    </li>
                    <li class="list-group-item col-md-1">
                        <label class="form-check-label" for="firstRadio">Por horas</label>
                        <input class="form-check-input me-1" type="radio" name="horario" value="Por horas" id="horario" checked>
                    </li>
                    <h6 class="col-md-1">Jornada:</h6>
                    <li class="list-group-item col-md-1">
                        <label class="form-check-label" for="firstRadio">Diurna</label>
                        <input class="form-check-input me-1" type="radio" name="jornada" value="Diurno" id="jornada" checked>
                    </li>
                    <li class="list-group-item col-md-1">
                        <label class="form-check-label" for="firstRadio">Nocturna</label>
                        <input class="form-check-input me-1" type="radio" name="jornada" value="Nocturna" id="jornada" checked>
                    </li>
                    <li class="list-group-item col-md-2">
                        <label class="form-check-label" for="firstRadio">Otra jornada</label>
                        <input class="form-check-input " type="radio" name="jornada" value="Otra jornada" id="jornada" checked>
                    </li>
                </div>
                <div class="col-md-12">
                    <h6>Motivo del retiro</h6>
                    <input type="text" name="motivo_retiro" class="form-control" id="motivo_retiro" className="form-control" placeholder="" />
                </div>
        </form>
        <button type="submit" class="btn btn-outline-primary">guardar</button>

        </div>
    </section>
    <!--SEGURIDAD SOCIAL-->
    <section id="Seguridad Social" class="container mt-1">
        <div class="card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
            <h2 class="text-center">INFORMACIÓN DE SEGURIDAD SOCIAL</h2>
            <h5 class="text-center">(Relacione las entidades a las que actualmente esta afiliado)</h5>
        </div>
        <form action="" method="post">
            <div class="card card-success form-control">
                <div class="container mt1">
                    <div class="row row cols-3 sm-3 g-2">
                        <li class="list-group-item col-md-4">
                            <h6 class="col-sm-8">¿Entidad promotora de salud (EPS)?</h6>
                            <label class="form-check-label" for="firstRadio">Si</label>
                            <input class="form-check-input me-2" type="radio" name="entidad_salud" value="Si" id="entidad_salud" checked>
                            <label class="form-check-label" for="secondRadio">No</label>
                            <input class="form-check-input me-2" type="radio" name="entidad_salud" value="No" id="entidad_salud">
                            <h6>Cual</h6>
                            <input type="text" name="cual_salud" class="form-control" id="cual_salud" className="form-control" placeholder="" />
                            <div className="input-group col-1">
                                <h6 class="col-4">Fecha de ingreso</h6>
                                <input class="col-6" type="date" name="fec_ingr" id="fec_ingr" class="form-control" className="form-control" />
                                <label class="form-check-label" for="firstRadio">Cotizante</label>
                                <input class="form-check-input me-1" type="radio" name="afiliado" value="Cotizante" id="afiliado" checked>
                                <label class="form-check-label" for="secondRadio">Beneficiario</label>
                                <input class="form-check-input me-" type="radio" name="afiliado" value="Beneficiario" id="afiliado">

                            </div>

                        </li>
                        <li class="list-group-item col-md-4">
                            <h6 class="col-sm-8">¿Fondo de pensiones?</h6>
                            <label class="form-check-label" for="firstRadio">Si</label>
                            <input class="form-check-input me-2" type="radio" name="pensiones" value="Si" id="pensiones" checked>
                            <label class="form-check-label" for="secondRadio">No</label>
                            <input class="form-check-input me-2" type="radio" name="pensiones" value="No" id="pensiones">
                            <h6>Cual</h6>
                            <input type="text" name="cual_pensiones" class="form-control" id="cual_pensiones" className="form-control" placeholder="" />
                            <div className="input-group col-sm-1">
                                <h6>Fecha de afiliación:</h6>
                                <input type="date" name="fec_afili" id="fec_afili" class="form-control" className="" />
                            </div>
                        </li>
                        <li class="list-group-item col-md-4">
                            <h6 class="col-sm-8">¿Fondo de cesantías?</h6>
                            <label class="form-check-label" for="firstRadio">Si</label>
                            <input class="form-check-input me-2" type="radio" name="cesantias" value="Si" id="cesantias" checked>
                            <label class="form-check-label" for="secondRadio">No</label>
                            <input class="form-check-input me-2" type="radio" name="cesantias" value="No" id="cesantias">
                            <h6>Cual</h6>
                            <input type="text" name="cual_cesantias" class="form-control" id="cual_cesantias" className="form-control" placeholder="" />
                            <div className="input-group col-sm-1">
                                <h6>Fecha de afiliación:</h6>
                                <input type="date" name="fec_aficen" id="fec_aficen" class="form-control" className="" />
                            </div>
                        </li>
                    </div>

                </div>
                <button type="submit" class="btn btn-outline-primary">guardar</button>

            </div>
        </form>

    </section>
    <!--REFERENCIAS PERSONALES-->
    <section id="Experiencia laboral" class="container mt-1">
        <div class="card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
            <h2 class="text-center">REFERENCIAS PERSONALES</h2>
        </div>
        <div class="container">
            <div class="card shadow-lg rounded-lg outline outline-2 border-blue-700">
                <h6 class="text-center">Relacione dos nombres de personas distintas a familiares o empleadores</h6>
            </div>
        </div>
        <form action="" method="post">
            <div class="card card-success form-control">
                <div class="row row cols-5 sm-5 g-2">
                    <div class="col-md-1">
                        </br>
                        <h4 class="text-center">1.-</h4>
                    </div>
                    <div class="col-md-3">
                        <h6>Nombre</h6>
                        <input type="text" name="nombre1" class="form-control" id="nombre1" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-3">
                        <h6>Ocupación</h6>
                        <input type="text" name="ocupacion1" class="form-control" id="ocupacion1" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-3">
                        <h6>Dirección</h6>
                        <input type="text" name="direccion1" class="form-control" id="direccion1" className="form-control" placeholder="" />
                    </div>
                    <div class="col-md-2">
                        <h6>Telefono</h6>
                        <input type="text" name="telefono1" class="form-control" id="telefono1" className="form-control" placeholder="" />
                    </div>
                    <div class="row row cols-5 sm-5 g-2">
                        <div class="col-md-1">
                            </br>
                            <h4 class="text-center">2.-</h4>
                        </div>
                        <div class="col-md-3">
                            <h6>Nombre</h6>
                            <input type="text" name="nombre2" class="form-control" id="nombre2" className="form-control" placeholder="" />
                        </div>
                        <div class="col-md-3">
                            <h6>Ocupación</h6>
                            <input type="text" name="ocupacion2" class="form-control" id="ocupacion2" className="form-control" placeholder="" />
                        </div>
                        <div class="col-md-3">
                            <h6>Dirección</h6>
                            <input type="text" name="direccion2" class="form-control" id="direccion2" className="form-control" placeholder="" />
                        </div>
                        <div class="col-md-2">
                            <h6>Telefono</h6>
                            <input type="text" name="telefono2" class="form-control" id="telefono2" className="form-control" placeholder="" />
                        </div>
                    </div>
                    <div class="container mt1">
                        <div class="card">
                            <h6 class="text-center">Nombre de un familiar que podamos contactar en caso de no localizarlo a usted directamente</h6>
                        </div>
                        <div class="row row cols-5 sm-5 g-2">
                            <div class="col-md-1">
                                </br>
                                <h4 class="text-center">3.-</h4>
                            </div>
                            <div class="col-md-3">
                                <h6>Nombre</h6>
                                <input type="text" name="nombre3" class="form-control" id="nombre3" className="form-control" placeholder="" />
                            </div>
                            <div class="col-md-3">
                                <h6>Ocupación</h6>
                                <input type="text" name="ocupacion3" class="form-control" id="ocupacion3" className="form-control" placeholder="" />
                            </div>
                            <div class="col-md-3">
                                <h6>Dirección</h6>
                                <input type="text" name="direccion3" class="form-control" id="direccion3" className="form-control" placeholder="" />
                            </div>
                            <div class="col-md-2">
                                <h6>Telefono</h6>
                                <input type="text" name="telefono3" class="form-control" id="telefono3" className="form-control" placeholder="" />
                            </div>
                            <button type="submit" class="btn btn-outline-primary">guardar</button>
                        </div>
        </form>
    </section>

    <header>
        <!-- place navbar here -->
    </header>
    <main></main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>