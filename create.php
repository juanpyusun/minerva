<?php include('db.php'); ?>
<?php include('includes/header.php'); ?>

<form action="index.html" method="post">
    <h1> REGISTRO DE USUARIO</h1>
    <!--informacion general-->
    <fieldset>
        <legend><span class="number">1</span> INFORMACION GENERAL</legend>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" />

        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" id="nombres" placeholder="Nombres" />

        <label for="cedula">Cedula:</label>
        <input type="text" name="cedula" id="cedula" placeholder="cedula" />

        <label for="direccion">Direccion:</label>
        <input type="text" name="direccion" id="direccion" placeholder="Dirección domicilio / Barrio" />

        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad" />

        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" />

        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono" placeholder="Telefono" />

        <label for="correo">Correo:</label>
        <input type="text" name="correo" id="correo" placeholder="Correo electrónico" />
    </fieldset>

    <!--documentos-->
    <fieldset>
        <legend><span class="number">2</span> DOCUMENTOS</legend>

        <label for="cedula">Cedula:</label>
        <input type="text" name="cedula" id="cedula" placeholder="cedula" />

        <label for="expedida">Expedida en:</label>
        <input type="text" name="expedida" id="expedida" placeholder="Lugar" />

        <label>Libreta Militar:</label>
        <input type="radio" name="libreta_militar" value="" id="libreta_militar_primera" checked><label for="libreta_militar_primera" class="light">Primera Clase</label>
        <input type="radio" name="libreta_militar" value="" id="libreta_militar_segunda"><label for="libreta_militar_segunda" class="light">Segunda Clase</label>
        <input type="text" name="numero_libreta" id="numero_libreta" placeholder="Numero" />

        <label for="distrito_militar">Distrito Militar:</label>
        <input type="text" name="distrito_militar" id="distrito_militar" placeholder="Numero" />
    </fieldset>

    <!--informacion personal-->
    <fieldset>
        <legend><span class="number">3</span>INFORMACION PERSONAL</legend>

        <label>Esta trabajando actualmente?</label>
        <input type="radio" name="Esta_trabajando_actualmente" value="si" id="esta_trabajando_actualmente" checked><label for="esta_trabajando_actualmente" class="light">Si</label>
        <input type="radio" name="Esta_trabajando_actualmente" value="no" id="esta_trabajando_actualmente" checked><label for="esta_trabajando_actualmente" class="light">No</label>
        <input type="text" name="En_que_Empresa" id="En_que_Empresa" placeholder="Nombre de la empresa" />

        <label>Escoja una opcion:</label>
        <input type="radio" name="Tipo" value="Empleado" id="Tipo" checked><label for="Tipo" class="light">Empleado</label>
        <input type="radio" name="Tipo" value="Independiente" id="Tipo"><label for="Tipo" class="light">Independiente</label>

        <label>Tipo de contrato:</label>
        <input type="text" name="tipo_contrato" id="tipo_contrato" />

        <label>¿Trabajó antes en esta empresa?</label>
        <input type="radio" name="Trabajo_antes_en_esta_empresa" value="si" id="Trabajo_antes_en_esta_empresa" checked><label for="Trabajo_antes_en_esta_empresa" class="light">Si</label>
        <input type="radio" name="Trabajo_antes_en_esta_empresa" value="no" id="Trabajo_antes_en_esta_empresa"><label for="Trabajo_antes_en_esta_empresa" class="light">No</label>

        <label>¿Solicitó empleo antes en esta empresa?</label>
        <input type="radio" name="Solicito_empleo_antes_en_esta_empresa" value="si" id="Solicito_empleo_antes_en_esta_empresa" checked><label for="Solicito_empleo_antes_en_esta_empresa" class="light">Si</label>
        <input type="radio" name="Solicito_empleo_antes_en_esta_empresa" value="no" id="Solicito_empleo_antes_en_esta_empresa"><label for="Solicito_empleo_antes_en_esta_empresa" class="light">No</label>

        <label>¿Lo recomienda alguien de esta empresa?</label>
        <input type="radio" name="Lo_recomienda_alguien_de_esta_empresa" value="si" id="Lo_recomienda_alguien_de_esta_empresa" checked><label for="Lo_recomienda_alguien_de_esta_empresa" class="light">Si</label>
        <input type="radio" name="Lo_recomienda_alguien_de_esta_empresa" value="no" id="Lo_recomienda_alguien_de_esta_empresa"><label for="Lo_recomienda_alguien_de_esta_empresa" class="light">No</label>
        <input type="text" name="nombrer" id="nombrer" placeholder="Nombre" />
        <input type="text" name="Dependenciar" id="Dependenciar" placeholder="Dependencia" />

        <label>¿Tiene parientes que trabajan en esta empresa?</label>
        <input type="radio" name="Tiene_parientes_que_trabajan_en_esta_empresa" value="si" id="Tiene_parientes_que_trabajan_en_esta_empresa" checked><label for="Tiene_parientes_que_trabajan_en_esta_empresa" class="light">Si</label>
        <input type="radio" name="Tiene_parientes_que_trabajan_en_esta_empresa" value="no" id="Tiene_parientes_que_trabajan_en_esta_empresa"><label for="Tiene_parientes_que_trabajan_en_esta_empresa" class="light">No</label>
        <input type="text" name="nombrer" id="nombrer" placeholder="Nombre" />
        <input type="text" name="Dependenciar" id="Dependenciar" placeholder="Dependencia" />

        <label>¿Cómo tuvo conocimiento de la existencia de la vacante?</label>
        <input type="radio" name="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" value="Anuncio" id="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" checked><label for="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" class="light">Anuncio</label>
        <input type="radio" name="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" value="Amigo" id="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante"><label for="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" class="light">Amigo</label>
        <input type="radio" name="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" value="por medio de Agencia" id="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante"><label for="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" class="light">Agencia</label>
        <input type="radio" name="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" value="otro" id="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante"><label for="Como_tuvo_conocimiento_de_la_existencia_de_la_vacante" class="light">Otro</label>
        <input type="text" name="Otro" id="Otro" placeholder="Cual" />

        <label>¿En qué ciudad o población ha vivido la mayor parte de su vida?</label>
        <input type="text" name="En_que_ciudad_a_vivido" id="En_que_ciudad_a_vivido" placeholder="" />

        <label>¿Aceptaría trabajar en una ciudad o sitio distinto al inicialmente contratado?</label>
        <input type="radio" name="Aceptaria_trabajar_en_otra_ciudad" value="si" id="Aceptaria_trabajar_en_otra_ciudad"><label for="Aceptaria_trabajar_en_otra_ciudad" class="light">si</label>
        <input type="radio" name="Aceptaria_trabajar_en_otra_ciudad" value="no" id="Aceptaria_trabajar_en_otra_ciudad"><label for="Aceptaria_trabajar_en_otra_ciudad" class="light">no</label>

        <label>Vive en casa:</label>
        <input type="radio" name="Vive_en_casa" value="Familiar" id="firstRadio" checked><label class="light">Familiar?</label>
        <input type="radio" name="Vive_en_casa" value="Propia" id="Vive_en_casa"><label class="light">Propia?</label>
        <input type="radio" name="Vive_en_casa" value="Alquilada" id="Vive_en_casa"><label class="light">Alquilada?</label>

        <label>¿Nombre del arrendador?</label>
        <input type="text" name="Nombre_arrendador" id="Nombre_arrendador" placeholder="" />

        <label>¿Telefono?</label>
        <input type="text" name="Telefono" id="Telefono" placeholder="" />

        <label>¿Hace cuanto reside en este lugar?</label>
        <input type="text" name="Cuanto_vive_hay" id="Cuanto_vive_hay" placeholder="" />

        <label>¿Actualmente tiene algún ingreso adicional?</label>
        <input type="radio" name="Ingreso_adicional" value="si" id="Ingreso_adicional" checked><label class="light">Si</label>
        <input type="radio" name="Ingreso_adicional" value="no" id="Ingreso_adicional"><label class="light">No</label>

        <label>Descríbalo e indique su valor mensual</label>
        <input type="text" name="Indique_su_valor" id="Indique_su_valor" placeholder="" />

        <label>¿Cuánto suman sus obligaciones económicas mensuales?</label>
        <input type="text" name="Obligaciones_economicas" id="Obligaciones_economicas" placeholder="Numero" />


        <label>¿Por qué conceptos?</label>
        <input type="text" name="Conceptos" id="Conceptos" placeholder="Conceptos" />


        <label>¿Cuánto suman sus obligaciones económicas mensuales?</label>
        <input type="text" name="Obligaciones_mensuales" id="Obligaciones_mensuales" placeholder="" />

        <label>¿Cuál(es) es(son) su(s) principal(es) afición(es)?</label>
        <input type="text" name="Aficiones" id="Aficiones" placeholder="" />

        <label>¿Practica algún deporte?</label>
        <input type="radio" name="Practica_deporte" value="si" id="Practica_deporte" checked><label class="light">SI</label>
        <input type="radio" name="Practica_deporte" value="no" id="Practica_deporte"><label class="light">NO</label>

        <label>¿Cuál(es)?</label>
        <input type="text" name="Cual" id="Cual" placeholder="" />

        <label>¿Alguna vez ha obtenido distinciones o reconocimientos por su desempeño en actividades deportivas, culturales, sociales, etc.?</label>
        <input type="radio" name="Distinciones" value="si" id="Distinciones" checked><label class="light">SI</label>
        <input type="radio" name="Distinciones" value="no" id="Distinciones"><label class="light">NO</label>

        <label>¿Cuál(es)?</label>
        <input type="text" name="Cuald" id="Cuald" />

        <label>¿Pertenece a algún tipo de asociación comunitaria, deportiva, cultural, etc.?</label>
        <input type="radio" name="Pertenece_aso_com_dep" value="si" id="Pertenece_aso_com_dep" checked><label class="light">SI</label>
        <input type="radio" name="Pertenece_aso_com_dep" value="no" id="Pertenece_aso_com_dep"><label class="light">NO</label>

        <label>¿Cuál(es)?</label>
        <input type="text" name="Cual_a" id="Cual_a" />

    </fieldset>

    <!--objetivos-->
    <fieldset>
        <legend><span class="number">4</span>OBJETIVOS</legend>
        <label> Mencione brevemente que expectativas tiene a nivel laboral, educativo y personal e indique como planea hacerlas realidad.</label>
        <input type="text" name="objetivo1" id="Objetivo1" placeholder="Objetivo #1" />
        <input type="text" name="Objetivo2" id="Objetivo2" placeholder="Objetivo #2" />
        <input type="text" name="Objetivo3" id="Objetivo3" placeholder="Objetivo #3" />

    </fieldset>

    <!--INFORMACION FAMILIAR-->
    <fieldset>
        <legend><span class="number">5</span>INFORMACION FAMILIAR</legend>

        <label>Nombre esposa(o) o compañera(o)</label>
        <input type="text" name="nonmbre_conyuge" id="nonmbre_conyuge" placeholder="" />

        <label>Profesión, ocupación u oficio</label>
        <input type="text" name="ocupacion" id="ocupacion" placeholder="" />

        <label>Empresa donde trabaja</label>
        <input type="text" name="empresa" id="empresa" placeholder="" />

        <label>Cargo actual</label>
        <input type="text" name="cargo" id="cargo" placeholder="" />

        <label>Dirección</label>
        <input type="text" name="direccion" id="direccion" placeholder="" />

        <label>Teléfono</label>
        <input type="text" name="telefono" id="telefono" placeholder="" />

        <label>Ciudad</label>
        <input type="text" name="ciudad" id="ciudad" placeholder="" />

        <label>Nº de personas que dependen económicamente del solicitante</label>
        <input type="text" name="personas_acargo" id="personas_acargo" placeholder="" />

        <label>Parentesco</label>
        <input type="text" name="parentesco" id="parentesco" placeholder="" />

        <label>Edades</label>
        <input type="text" name="edades" id="edades" placeholder="" />

        <label>Nombre Padre</label>
        <input type="text" name="nombre_padres" id="nombre_padres" placeholder="" />

        <label>Profesión, ocupación u oficio</label>
        <input type="text" name="profecion" id="profecion" placeholder="" />

        <label>Teléfono</label>
        <input type="text" name="telefonos" id="telefonos" placeholder="" />

        <label>Nombre Madre</label>
        <input type="text" name="nombre_madre" id="nombre_madre" placeholder="" />

        <label>Profesión, ocupación u oficio</label>
        <input type="text" name="oficio_madre" id="oficio_madre" placeholder="" />

        <label>Teléfono</label>
        <input type="text" name="telefono_madre" id="telefono_madre" placeholder="" />

        <label>Nombre(s) hermano(s)</label>
        <input type="text" name="hermanos" id="hermanos" placeholder="" />

        <label>Profesión, ocupación u oficio</label>
        <input type="text" name="ocupacionhermanos" id="ocupacionhermanos" placeholder="" />

        <label>Teléfono(s)</label>
        <input type="text" name="telefonohermanos" id="telefonohermanos" placeholder="" />

        <label>Nombre(s) hermano(s) otro(s)</label>
        <input type="text" name="hermano2" id="hermano2" placeholder="" />


        <label>Profesión, ocupación u oficio</label>
        <input type="text" name="ocupacionhermanos2" id="ocupacionhermanos2" placeholder="" />

        <label>Teléfono(s)</label>
        <input type="text" name="telefonohermanos2" id="telefonohermanos2" placeholder="" />

    </fieldset>

    <!--EDUCACION Y ACTITUDES-->
    <fieldset>
        <legend><span class="number">6</span>EDUCACION Y ACTITUDES</legend>

        <label>Primaria</label>
        <input type="text" name="finalizacionpri" id="finalizacionpri" placeholder="Fecha Finalizacion..." />
        <input type="text" name="cursadospri" id="cursadospri" placeholder="Años cursados..." />
        <input type="text" name="titulopri" id="titulopri" placeholder="Titulo Obtenido..." />
        <input type="text" name="institupri" id="institupri" placeholder="Nombre de la Institucion..." />
        <input type="text" name="ciudadpri" id="ciudadpri" placeholder="Ciudad..." />

        <label>Bachillerato</label>
        <input type="radio" name="bachillerato" value="Clasico" id="bachillerato" checked><label class="light">Clásico</label>
        <input type="radio" name="bachillerato" value="Comercial" id="bachillerato"><label class="light">Comercial</label>
        <input type="radio" name="bachillerato" value="Tecnico" id="bachillerato" checked><label class="light">Técnico</label>
        <input type="radio" name="bachillerato" value="Otro" id="bachillerato"><label class="light">Otro</label>
        <input type="text" name="finalizacionbac" id="finalizacionbac" placeholder="Fecha Finalizacion..." />
        <input type="text" name="cursadosbac" id="cursadosbac" placeholder="Años cursados..." />
        <input type="text" name="titulobac" id="titulobac" placeholder="Titulo Obtenido..." />
        <input type="text" name="institubac" id="institubac" placeholder="Nombre de la Institucion..." />
        <input type="text" name="ciudadbac" id="ciudadbac" placeholder="Ciudad..." />

        <label>Educacion Superior</label>
        <input type="radio" name="educacion_superiorsuperior" value="Clasico" id="educacion_superiorsuperior" checked><label class="light">Tecnico</label>
        <input type="radio" name="educacion_superiorsuperior" value="Comercial" id="educacion_superiorsuperior"><label class="light">Tecnologo</label>
        <input type="radio" name="educacion_superiorsuperior" value="Tecnico" id="educacion_superiorsuperior" checked><label class="light">Profesional</label>
        <input type="text" name="finalizacionsup" id="finalizacionsup" placeholder="Fecha Finalizacion..." />
        <input type="text" name="cursadossup" id="cursadossup" placeholder="Años cursados..." />
        <input type="text" name="titulosup" id="titulosup" placeholder="Titulo Obtenido..." />
        <input type="text" name="institusup" id="institusup" placeholder="Nombre de la Institucion..." />
        <input type="text" name="ciudadsup" id="ciudadsup" placeholder="Ciudad..." />

        <label>Posgrados</label>
        <input type="text" name="finalizacionpos" id="finalizacionpos" placeholder="Fecha Finalizacion..." />
        <input type="text" name="cursadospos" id="cursadospos" placeholder="Años cursados..." />
        <input type="text" name="titulopos" id="titulopos" placeholder="Titulo Obtenido..." />
        <input type="text" name="institupos" id="institupos" placeholder="Nombre de la Institucion..." />
        <input type="text" name="ciudadpos" id="ciudadpos" placeholder="Ciudad..." />

        <label>Otros: cursos, diplomados,seminarios</label>
        <input type="text" name="intensidad" id="intensidad" placeholder="Intensidad horaria" />
        <input type="text" name="programa" id="programa" placeholder="Nombre del programa" />
        <input type="text" name="instituto" id="instituto" placeholder="Institución" />

        <label>¿Cursa estudios actualmente?</label>
        <input type="radio" name="actualmente" value="Si" id="actualmente" checked><label class="light">SI</label>
        <input type="radio" name="actualmente" value="NO" id="actualmente"><label class="light">NO</label>
        <input type="text" name="tipo" id="tipo" placeholder="¿Qué tipo de estudios?" />
        <input type="text" name="duracion" id="duracion" placeholder="Duración (años, semestres, meses)" />
        <input type="text" name="cursa" id="cursa" placeholder="Año / semestre que cursa" />
        <input type="text" name="nom_inst" id="nom_inst" placeholder="Nombre de la institución" />
        <label>Horario</label>

        <input type="radio" name="horario" value="Diurno" id="horario" checked><label class="light">Diurno</label>
        <input type="radio" name="horario" value="Nocturno" id="horario"><label class="light">Nocturno</label>
        <input type="radio" name="horario" value="Fin de semana" id="horario" checked><label class="light">Fin de semana</label>
        <input type="radio" name="horario" value="A distancia" id="horario"><label class="light">A distancia</label>

    </fieldset>

    <!--OTROS CONOCIMIENTOS-->
    <fieldset>
        <legend><span class="number">7</span>OTROS CONOCIMIENTOS</legend>

    </fieldset>

    <!--TRAYECTORIA POR EMPRESAS-->
    <fieldset>
        <legend><span class="number">8</span>TRAYECTORIA POR EMPRESAS</legend>

    </fieldset>

    <!--EXPERIENCIA LABORAL-->
    <fieldset>
        <legend><span class="number">9</span>EXPERIENCIA LABORAL</legend>

    </fieldset>

    <!--SEGURIDAD SOCIAL-->
    <fieldset>
        <legend><span class="number">10</span>SEGURIDAD SOCIAL</legend>
        <label>(Relacione las entidades a las que actualmente esta afiliado)</label>
        <label>¿Entidad promotora de salud (EPS)?</label>
        <input type="radio" name="entidad_salud" value="Si" id="entidad_salud" checked><label class="light">Si</label>
        <input type="radio" name="entidad_salud" value="No" id="entidad_salud"><label class="light">No</label>
        <label>¿Cual?</label>
        <input type="text" name="cual_salud" id="cual_salud" placeholder="" />
        <label>Fecha de ingreso</label>
        <input type="date" name="fec_ingr" id="fec_ingr" />
        <label>Tipo de afiliado</label>
        <input type="radio" name="afiliado" value="Cotizante" id="afiliado" checked><label class="light">Cotizante</label>
        <input type="radio" name="afiliado" value="Beneficiario" id="afiliado"><label class="light">Beneficiario</label>


        <label>¿Fondo de pensiones?</label>
        <input type="radio" name="pensiones" value="Si" id="pensiones" checked><label class="light">Si</label>
        <input type="radio" name="pensiones" value="No" id="pensiones"><label class="light">No</label>
        <label>Cual</label>
        <input type="text" name="cual_pensiones" id="cual_pensiones" placeholder="" />
        <label>Fecha de afiliación:</label>
        <input type="date" name="fec_afili" id="fec_afili" className="" />

        <label> ¿Fondo de cesantías?</label>
        <input type="radio" name="cesantias" value="Si" id="cesantias" checked><label class="light">Si</label>
        <input type="radio" name="cesantias" value="No" id="cesantias"><label class="light">No</label>
        <label>Cual</label>
        <input type="text" name="cual_cesantias" id="cual_cesantias" placeholder="" />
        <label>Fecha de afiliación:</label>
        <input type="date" name="fec_aficen" id="fec_aficen" className="" />

    </fieldset>

    <!--REFERENCIAS PERSONALES-->
    <fieldset>
        <legend><span class="number">11</span>REFERENCIAS PERSONALES</legend>
        <label>Relacione dos nombres de personas distintas a familiares o empleadores</label>

        <label>1.-</label>
        <label>Nombre</label>
        <input type="text" name="nombre1" id="nombre1" placeholder="" />

        <label>Ocupación</label>
        <input type="text" name="ocupacion1" id="ocupacion1" placeholder="" />

        <label>Dirección</label>
        <input type="text" name="direccion1" id="direccion1" placeholder="" />

        <label>Telefono</label>
        <input type="text" name="telefono1" id="telefono1" placeholder="" />

        <label>2.-</label>
        <label>Nombre</label>
        <input type="text" name="nombre2" id="nombre2" placeholder="" />

        <label>Ocupación</label>
        <input type="text" name="ocupacion2" id="ocupacion2" placeholder="" />

        <label>Dirección</label>
        <input type="text" name="direccion2" id="direccion2" placeholder="" />

        <label>Telefono</label>
        <input type="text" name="telefono2" id="telefono2" placeholder="" />

        <label>Nombre de un familiar que podamos contactar en caso de no localizarlo a usted directamente</label>
        <label>Nombre</label>
        <input type="text" name="nombre3" id="nombre3" placeholder="" />

        <label>Ocupación</label>
        <input type="text" name="ocupacion3" id="ocupacion3" placeholder="" />

        <label>Dirección</label>
        <input type="text" name="direccion3" id="direccion3" placeholder="" />

        <label>Telefono</label>
        <input type="text" name="telefono3" id="telefono3" placeholder="" />
    </fieldset>


    <button type="submit">Guardar</button>

</form>
<?php include('includes/footer.php'); ?>