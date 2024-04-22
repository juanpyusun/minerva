<?php
    include_once('database.php');

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
?>    