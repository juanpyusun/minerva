<!doctype html>
<html lang=>
    <head>
        <title>hoja de vida</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
            <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>

    <body>
        <nav class="navbar navbar-expand">
            <div class ="container">
                <a class="navbar-brand" href="#"><i class=""></i>HOJA DE VIDA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-control="navbarNav" arial-expanded="false" arial-label="Toggle navigation">
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
                <div class= "card card-success shadow-lg rounded-lg outline outline-2 border-blue-700">
                <div class="row">
                    <div class="col-md-2 d-flex">
                        <form>
                        <div className="input-group mb-3">
                            <input type="date" class="form-control"
                            className="form-control" 
                            placeholder="Fecha/D/M/A"/>
                                <div className="input-group-append">
                                    <div className="input-group-text">
                                <span className="fas fa-envelope"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8 d-flex">
                        <form>
                        <div class="col-md-14">                      
    <input type="" class="form-control" id=""
    className="form-control"
    placeholder="empleo o cargo"/>
    </div>
                        </form>
                    </div>
                    <div class="col-md-2 d-flex">
                        <form>
                        <div className="input-group mb-3">
                            <input type="" class="form-control"
                            className="form-control" 
                            placeholder="codigo"/>
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
        <form action=""method="post">
        <section id="informacion general" class="info_general container mt-2 ">
            <div class= "card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700 " id="informacion general">
                <div class="container bs-primary-bg-subtle">
                <h2 class="text-center">INFORMACION GENERAL</h2>
                </div>
            </div>
                    <div class="card card-success form-control">
                        <div class="row row-cols-8 row-cols-sm-2 g-4">
                            <div class="col">
                                <input type="text" name="apellidos" class="form-control" id="apellidos"className="form-control"placeholder="Apellidos"/>
                                <input type="text" name="direccion" class="form-control" id="direccion"className="form-control"placeholder="Dirección domicilio / Barrio"/>
                                <input type="text"name="telefono" class="form-control" id="telefono"className="form-control"placeholder="Telefono"/>
                                <input type="text"name="correo" class="form-control" id="correo"className="form-control"placeholder="Correo electrónico"/>
                            </div>
                                <div class=col>
                                    <input type="text" name="nombres" class="form-control" id="nombres"className="form-control"placeholder="Nombres"/>
                                    <input type="text"name="ciudad" class="form-control" id="ciudad"className="form-control"placeholder="Ciudad"/>
                                    <input type="text"name="celular" class="form-control" id="celular"className="form-control"placeholder="Celular"/>
                                    <input type="text"name="nacionalidad" class="form-control" id="nacionalidad"className="form-control"placeholder="Nacionalidad"/>
                                    </div>
                                </div>
                                <div class="row row-cols-8 row-cols-sm-3 g-4">
                                    <div class=col>
                                    <input type="text"name="profesion" class="form-control" id="profesion"className="form-control"placeholder="Profecion o Uficio"/>
                                    </div>
                                    <div class=col>
                                    <input type="text"name="estado" class="form-control" id="estado"className="form-control"placeholder="Estado"/>
                                    </div>
                                    <div class=col>
                                    <input type="text"name="experiencia" class="form-control" id="experiencia"className="form-control"placeholder="Años de experiencia"/>
                                    </div>
                                    </div> 
                                <button href="#documentos"class="btn btn-outline-primary">guardar</button>
                    </div>
        </section>
        <!--documentos-->
        <section id="documentos"  class="info_general container mt-2">
        <div class= "card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                <div class="container">
                <h2 class="text-center">DOCUMENTOS</h2>
                    <div class="card card-success">
                        <div class="row row-cols-4 row-cols-sm-2 g-4 ">
                    <ul class="list-group">
                            <li class="list-group-item">
                            <span class="input-group-text" id="basic-addon1">cedula ciudadania</span>
                            <input type="text"name="cedula" class="form-control" id="cedula"className="form-control"placeholder="Numero"/>
                            <span class="input-group-text" id="basic-addon1">cedula Extranjeria</span>
                            <input type="text"name="extranjeria" class="form-control" id="extranjeria"className="form-control"placeholder="Numero"/>
                            </li>
                            
                        <span class="input-group-text" id="basic-addon1">Expedida en:</span>
                        <input type="text" name="expedida"class="form-control" id="expedida"className="form-control"placeholder="Lugar"/>
                        
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
                            <input type="text" name="numero_libreta" class="form-control" id="numero_libreta"className="form-control"placeholder="Numero"/>
                            
                            
                            <span class="input-group-text" id="basic-addon1">Distrito Militar</span>
                            <input type="text" name="distrito_militar" class="form-control" id="distrito_militar"className="form-control"placeholder="Numero"/>
                            
                        </div>
                    </ul>
                    </div>
            </div>
            </div>
            <button type="submit"class="btn btn-outline-primary">guardar</button>
            </div>
        </section>
        </form>
        <!--informacion personal-->
        <form action=""method="post">
        <section id="informacion personal" class="container mt-1">
            <div class= "card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
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
                            <input type="text"name="En_que_Empresa" class="form-control" id="En_que_Empresa"className="form-control"placeholder=""/>
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
                            <input type="text"name="tipo_contrato" class="form-control" id="tipo_contrato"className="form-control"/>
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
                            <input type="date" name="fecha"id="fecha"class="form-control"
                            className="form-control"/>
                    </div>
                    <li class="list-group-item">
                        <h6>¿Lo recomienda alguien de esta empresa?</h6>
                        <input class="form-check-input me-1" type="radio" name="Lo_recomienda_alguien_de_esta_empresa" value="si" id="Lo_recomienda_alguien_de_esta_empresa" checked>
                        <label class="form-check-label" for="firstRadio">si</label>
                        <input class="form-check-input me-1" type="radio" name="Lo_recomienda_alguien_de_esta_empresa" value="no" id="Lo_recomienda_alguien_de_esta_empresa">
                        <label class="form-check-label" for="secondRadio">no</label>
                        <div>
                            <span class="input-group-text" id="basic-addon1">Nombre</span>
                            <input type="text"name="nombrer" class="form-control" id="nombrer"className="form-control"placeholder="Nombre"/>
                            <span class="input-group-text" id="basic-addon1">Dependencia</span>
                            <input type="text" name="Dependenciar" class="form-control" id="Dependenciar"className="form-control"placeholder="Dependencia"/>
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
                            <input type="text" name="Nombrep" class="form-control" id="Nombrep"className="form-control"placeholder="Nombre"/>
                            <span class="input-group-text" id="basic-addon1">Dependencia</span>
                            <input type="text" name="Dependenciap" class="form-control" id="Dependenciap"className="form-control"placeholder="Dependencia"/>
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
                            <input type="text" name="Otro" class="form-control" id="Otro"className="form-control"placeholder="Cual"/>
                            </div>
                    </li>
            </div>
            <div class="row row-cols-4 row-cols-sm-3 g-2">
                        <div class="col-2">
                            <h6>¿En qué ciudad o población ha vivido la mayor parte de su vida?</h6>
                            <input type="text" name="En_que_ciudad_a_vivido" class="form-control" id="En_que_ciudad_a_vivido"className="form-control"placeholder=""/>
                            </div>
                        <div class="col-2">
                            <h6>¿En qué ciudades o regiones del país ha trabajado?</h6>
                            <input type="text" name="En_que_cuiudad_a_tabajado" class="form-control" id="En_que_cuiudad_a_tabajado"className="form-control"placeholder=""/>
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
                            <input type="text" name="Nombre_arrendador" class="form-control" id="Nombre_arrendador"className="form-control"placeholder=""/>
                        </div>
                        <div class="col-2">
                            <h6>¿Telefono?</h6>
                            <input type="text" name="Telefono" class="form-control" id="Telefono"className="form-control"placeholder=""/>
                        </div>
                        <div class="col-2">
                            <h6>¿Hace cuanto reside en este lugar?</h6>
                            <input type="text" name="Cuanto_vive_hay" class="form-control" id="Cuanto_vive_hay"className="form-control"placeholder=""/>
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
                            <input type="text" name="Indique_su_valor" class="form-control" id="Indique_su_valor"className="form-control"placeholder=""/>
                        </div>
                        <div>
                            <h6>¿Cuánto suman sus obligaciones económicas mensuales?</h6>
                            <span class="input-group-text" id="basic-addon1">$</span>
                            <input type="text"name="Obligaciones_economicas" class="form-control" id="Obligaciones_economicas"className="form-control"placeholder="Numero"/>
                        </div>
            </div>
            <div class="row row-cols-4 row-cols-sm-2 g-4">
            <div class="col-md-6">
                            <h6>¿Por qué conceptos?</h6>
                            <input type="text"name="Conceptos" class="form-control" id="Conceptos"className="form-control"placeholder="Conceptos"/>
                        </div>
                        <div class="col-md-6">
                            <h6>¿Cuánto suman sus obligaciones económicas mensuales?</h6>
                            <span class="input-group-text" id="basic-addon1">$</span>
                            <input type="text" name="Obligaciones_mensuales" class="form-control" id="Obligaciones_mensuales"className="form-control"placeholder=""/>
                        </div>
            </div>
            <div class="row row-cols-3 row-cols-sm-3 g-4">
            <div class="col-md-4">
                            <h6>¿Cuál(es) es(son) su(s) principal(es) afición(es)?</h6>
                            <input type="text" name="Aficiones" class="form-control" id="Aficiones"className="form-control"placeholder=""/>
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
                            <input type="text" name="Cual" class="form-control" id="Cual"className="form-control"placeholder=""/>
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
                            <input type="text" name="Cuald" class="form-control" id="Cuald"className="form-control"/>
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
                            <input type="text" name="Cual_a" class="form-control" id="Cual_a"className="form-control"/>
                        </div>
            </div>
            <button type="submit"class="btn btn-outline-primary">guardar</button> 
        </section>
        </form>
        <!--objetivos-->
        <section id="" class="container mt-1">
        <form action=""method="post">
            <div class= "card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                <h4 class="">OBJETIVO</h4><h5> Mencione brevemente que expectativas tiene a nivel laboral, educativo y personal e indique como planea hacerlas realidad.</h5>
                        
                            <input type="text" name="ultima_empresa"class="form-control" id="Objetivo1"className="form-control"placeholder=""/>
                            <input type="text" name="Objetivo2"class="form-control" id="Objetivo2"className="form-control"placeholder=""/>
                            <input type="text" name="Objetivo3"class="form-control" id="Objetivo3"className="form-control"placeholder=""/>
                        
                        <button type="submit"class="btn btn-outline-primary">guardar</button> 
            </div>
        </form>
            </section>
        <!--INFORMACION FAMILIAR-->
            <section id="informacion familiar" class="container mt-1">
            <div class= "card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                <h2 class="text-center">INFORMACION FAMILIAR</h2>
            </div>
            <form action=""method="post">
            <div class="card card-success form-control">
                <div class="row row-cols-3 row-cols-sm-3 g-4">
                    <div class="col-md-4">
                        <h6>Nombre esposa(o) o compañera(o)</h6>
                        <input type="text" name="nonmbre_conyuge" class="form-control" id="nonmbre_conyuge"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-4">
                        <h6>Profesión, ocupación u oficio</h6>
                        <input type="text" name="ocupacion" class="form-control" id="ocupacion"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-4">
                        <h6>Empresa donde trabaja</h6>
                        <input type="text" name="empresa" class="form-control" id="empresa"className="form-control"placeholder=""/>
                    </div>
                </div> 
                <div class="row row-cols-4 row-cols-sm-4 g-4">
                    <div class="col-md-3">
                        <h6>Cargo actual</h6>
                        <input type="text" name="cargo" class="form-control" id="cargo"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-3">
                        <h6>Dirección</h6>
                        <input type="text" name="direccion" class="form-control" id="direccion"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-3">
                        <h6>Teléfono</h6>
                        <input type="text" name="telefono" class="form-control" id="telefono"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-3">
                        <h6>Ciudad</h6>
                        <input type="text" name="ciudad" class="form-control" id="ciudad"className="form-control"placeholder=""/>
                    </div>
                </div> 
                <div class="row row-cols-3 row-cols-sm-3 g-3">
                        <div class="col-auto">
                            <div class="row g-3 align-items-center">
                                    <h6>Nº de personas que dependen económicamente del solicitante</lh6>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="personas_acargo" class="form-control" id="personas_acargo"className="form-control"placeholder=""/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h6>Parentesco</h6>
                            <input type="text" name="parentesco" class="form-control" id="parentesco"className="form-control"placeholder=""/>
                        </div>
                        <div class="col-md-4">
                            <h6>Edades</h6>
                            <input type="text" name="edades" class="form-control" id="edades"className="form-control"placeholder=""/>
                        </div>
                    </div>
                <div class="row row-cols-3 row-cols-sm-3 g-3">
                <div class="col-md-4">
                            <h6>Nombre(s) padre(s)</h6>
                            <input type="text" name="nombre_padres" class="form-control" id="nombre_padres"className="form-control"placeholder=""/>
                        </div>
                        <div class="col-md-4">
                            <h6>Profesión, ocupación u oficio</h6>
                            <input type="text" name="profecion" class="form-control" id="profecion"className="form-control"placeholder=""/>
                        </div>
                        <div class="col-md-4">
                            <h6>Teléfono(s)</h6>
                            <input type="text" name="telefonos" class="form-control" id="telefonos"className="form-control"placeholder=""/>
                        </div>
                </div>
                <div class="row row-cols-3 row-cols-sm-3 g-3">
                <div class="col-md-4">
                            <input type="text" name="nombre_madre" class="form-control" id="nombre_madre"className="form-control"placeholder=""/>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="oficio_madre" class="form-control" id="oficio_madre"className="form-control"placeholder=""/>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="telefono_madre" class="form-control" id="telefono_madre"className="form-control"placeholder=""/>
                        </div>
                </div>
                <div class="row row-cols-3 row-cols-sm-3 g-3">
                <div class="col-md-4">
                            <h6>Nombre(s) hermano(s)</h6>
                            <input type="text" name="hermanos" class="form-control" id="hermanos"className="form-control"placeholder=""/>
                        </div>
                        <div class="col-md-4">
                            <h6>Profesión, ocupación u oficio</h6>
                            <input type="text" name="ocupacionhermanos" class="form-control" id="ocupacionhermanos"className="form-control"placeholder=""/>
                        </div>
                        <div class="col-md-4">
                            <h6>Teléfono(s)</h6>
                            <input type="text"name="telefonohermanos" class="form-control" id="telefonohermanos"className="form-control"placeholder=""/>
                        </div>
                </div>
                <div class="row row-cols-3 row-cols-sm-3 g-3">
                <div class="col-md-4">
                        <input type="text" name="hermano2" class="form-control" id="hermano2"className="form-control"placeholder=""/></div>
                        <div class="col-md-4">
                        <input type="text" name="ocupacionhermanos2" class="form-control" id="ocupacionhermanos2"className="form-control"placeholder=""/></div>
                        <div class="col-md-4">
                            <input type="text"name="telefonohermanos2" class="form-control" id="telefonohermanos2"className="form-control"placeholder=""/>
                        </div>
                </div>
                <button type="submit"class="btn btn-outline-primary">guardar</button>
                </form>
            </section>
            <!--EDUCACION Y ACTITUDES-->
            <section id="Educacion y actitudes" class="container mt-1">
                <form action=""method="post">
                    <div class= "card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                        <h2 class="text-center">EDUCACION Y ACTITUDES</h2>
                    </div>
                    <div class="card card-success form-control">
                        <div class="row row-cols-6 row-cols-sm-6 g-4">
                            <div class="col-md-2"><h6>ESTUDIOS</h6></div>
                            <div class="col-md-1"><h6>Año finalizado</h6></div>
                            <div class="col-md-1"><h6>AÑOS CURSADOS</h6></div>
                            <div class="col-md-2"><h6>TITULO OBTENIDO</h6></div>
                            <div class="col-md-4"><h6>NOMBRE DE LA INSTITUCION</h6></div>
                            <div class="col-md-2"><h6>CIUDAD</h6></div>
                        </div>
                    </div>    
                    <div class="card card-success form-control">
                        <div class="row row-cols-6 row-cols-sm-6 g-4">
                        <div class="col-md-2"><h6>PRIMARIA</h6></div>
                        <div class="col-md-1"><input type="text" name="finalizacionpri" class="form-control" id="finalizacionpri"className="form-control"placeholder=""/></div>
                        <div class="col-md-1"><input type="text" name="cursadospri" class="form-control" id="cursadospri"className="form-control"placeholder=""/></div>
                        <div class="col-md-2"><input type="text" name="titulopri" class="form-control" id="titulopri"className="form-control"placeholder=""/></div>
                        <div class="col-md-4"><input type="text" name="institupri" class="form-control" id="institupri"className="form-control"placeholder=""/></div>
                        <div class="col-md-2"><input type="text" name="ciudadpri" class="form-control" id="ciudadpri"className="form-control"placeholder=""/></div>
                        </div>
                    </div>
                    <div class="card card-success form-control">
                        <div class="row row-cols-6 row-cols-sm-6 g-4">
                            <h6>BACHILLERATO</h6></div>
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
                                <div class="col-md-1"><input type="text" name="finalizacionbac" class="form-control" id="finalizacionbac"className="form-control"placeholder=""/></div>
                                <div class="col-md-1"><input type="text" name="cursadosbac" class="form-control" id="cursadosbac"className="form-control"placeholder=""/></div>
                                <div class="col-md-2"><input type="text" name="titulobac" class="form-control" id="titulobac"className="form-control"placeholder=""/></div>
                                <div class="col-md-4"><input type="text" name="institubac" class="form-control" id="institubac"className="form-control"placeholder=""/></div>
                                <div class="col-md-2"><input type="text" name="ciudadbac" class="form-control" id="ciudadbac"className="form-control"placeholder=""/></div>
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
                                <div class="col-md-1"><input type="text" name="finalizacionsup" class="form-control" id="finalizacionsup"className="form-control"placeholder=""/></div>
                                <div class="col-md-1"><input type="text" name="cursadossup" class="form-control" id="cursadossup"className="form-control"placeholder=""/></div>
                                <div class="col-md-2"><input type="text" name="titulosup" class="form-control" id="titulosup"className="form-control"placeholder=""/></div>
                                <div class="col-md-4"><input type="text" name="institutosup" class="form-control" id="institutosup"className="form-control"placeholder=""/></div>
                                <div class="col-md-2"><input type="text" name="ciudadsup" class="form-control" id="ciudadsup"className="form-control"placeholder=""/></div>
                        </div>
                    </div> 
                    <div class="card card-success form-control">
                        <div class="row row-cols-6 row-cols-sm-6 g-4">
                        <div class="col-md-2"><h6>POSGRADOS</h6></div>
                        <div class="col-md-1"><input type="text" name="finalizacionpos" class="form-control" id="finalizacionpos"className="form-control"placeholder=""/></div>
                        <div class="col-md-1"><input type="text" name="cursadospos" class="form-control" id="cursadospos"className="form-control"placeholder=""/></div>
                        <div class="col-md-2"><input type="text" name="titulopos" class="form-control" id="titulopos"className="form-control"placeholder=""/></div>
                        <div class="col-md-4"><input type="text" name="institutopos" class="form-control" id="institutopos"className="form-control"placeholder=""/></div>
                        <div class="col-md-2"><input type="text" name="ciudadpos" class="form-control" id="ciudadpos"className="form-control"placeholder=""/></div>
                        </div>
                    </div>
                    <div class="card card-success form-control">
                        <div class="row row-cols-6 row-cols-sm-6 g-4">
                        <div class="col-md-2"><h6>Otros: cursos, diplomados,seminarios</h6></div>
                        <div class="col-md-2"><h6>Intensidad horaria</h6><input type="text" name="intensidad" class="form-control" id="intensidad"className="form-control"placeholder=""/></div>
                        <div class="col-md-4"><h6>Nombre del programa</h6><input type="text" name="programa" class="form-control" id="programa"className="form-control"placeholder=""/></div>
                        <div class="col-md-4"><h6>Institución</h6><input type="text" name="instituto" class="form-control" id="instituto"className="form-control"placeholder=""/></div>
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
                            <div class="col-md-4"><h6>¿Qué tipo de estudios?</h6><input type="text" name="tipo" class="form-control" id="tipo"className="form-control"placeholder=""/></div>
                            <div class="col-md-3"><h6>Duración (años, semestres, meses)</h6><input type="text" name="duracion" class="form-control" id="duracion"className="form-control"placeholder=""/></div>
                            <div class="col-md-3"><h6>Año / semestre que cursa</h6><input type="text" name="cursa" class="form-control" id="cursa"className="form-control"placeholder=""/></div>
                        </div>
                    </div>
                    <div class="card card-success form-control">
                        <div class="row row-cols-2 row-cols-sm-2 g-4">
                        <div class="col-md-8"><h6>Nombre de la institución</h6><input type="text" name="nom_inst" class="form-control" id="nom_inst"className="form-control"placeholder=""/></div>
                        
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
                        <button type="submit"class="btn btn-outline-primary">guardar</button> 
                    </div>
                </form>
            </section>
            <!--OTROS CONOCIMIENTOS-->
                <section id="" class="container mt-1">
                    <div class= "card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                        <h5 class="text-center">OTROS CONOCIMIENTOS: Indique el grado de dominio R - Regular, B - Bien, MB - Muy Bien</h5>
                    </div>
                    <form action=""method="post">
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
                        <div class="row row-cols-1 row-cols-2 g-2" >
                            <div class="col">
                                <input class="col form-control" type="text" name="sistemas1" class="form-control" id="sistemas1"className="form-control"placeholder="1"/>
                            </div>
                            <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimientos1"value="R" id="conocimientos1"className=""placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos1"value="B" id="conocimientos1"className=""placeholder="B"/>
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos1"value="MB" id="conocimientos1"className=""placeholder="MB"/>
                            </li>
                            <div class="col">
                            <input class="col form-control" type="text" name="sistemas2" class="form-control" id=""className="form-control"placeholder="2"/>
                            </div>
                            <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimientos2"value="R" id="conocimientos2"className=""placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos2"value="B" id="conocimientos2"className=""placeholder="B"/>
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos2"value="MB" id="conocimientos2"className=""placeholder="MB"/>
                            </li>
                        </div>
                        <div class="row row-cols-1 row-cols-2 g-2" >
                        <div class="col">
                                <input class="col-sm-10 form-control" type="text" name="sistemas3" class="form-control" id="sistemas3"className="form-control"placeholder="3"/>
                            </div>
                            <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimientos3"value="R" id=""className="conocimientos3"placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos3"value="B" id=""className="conocimientos3"placeholder="B"/>
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos3"value="MB" id=""className="conocimientos3"placeholder="MB"/>
                            </li>
                            <div class="col">
                                <input class=" form-control" type="text" name="sistemas4" class="form-control" id="sistemas4"className="form-control"placeholder="4"/>
                            </div>
                            <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimientos4"value="R" id="conocimientos4"className=""placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos4"value="B" id="conocimientos4"className=""placeholder="B"/>
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimientos4"value="MB" id="conocimientos4"className=""placeholder="MB"/>
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
                        <div class="row row-cols-1 row-cols-2 g-2" >
                            <div class="col">
                                <input class="col form-control" type="text" name="idiomas1" class="form-control" id="idiomas1"className="form-control"placeholder="1"/>
                            </div>
                            <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimiento_idiomas1"value="R" id="conocimiento_idiomas1"className=""placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas1"value="B" id="conocimiento_idiomas1"className=""placeholder="B"/>
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas1"value="MB" id="conocimiento_idiomas1"className=""placeholder="MB"/>
                            </li>
                            <div class="col">
                                <input class=" form-control" type="text" name="idiomas2" class="form-control" id="idiomas2"className="form-control"placeholder="2"/>
                            </div>
                            <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimiento_idiomas2"value="R" id="conocimiento_idiomas2"className=""placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas2"value="B" id="conocimiento_idiomas2"className=""placeholder="B"/>
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas2"value="MB" id="conocimiento_idiomas2"className=""placeholder="MB"/>
                            </li>
                        </div>
                        <div class="row row-cols-1 row-cols-2 g-2" >
                        <div class="col">
                                <input class="col-sm-10 form-control" type="text" name="idiomas3" class="form-control" id="idiomas3"className="form-control"placeholder="3"/>
                            </div>
                            <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name="conocimiento_idiomas3"value="R" id="conocimiento_idiomas3"className=""placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas3"value="B" id="conocimiento_idiomas3"className=""placeholder="B"/>
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas3"value="MB" id="conocimiento_idiomas3"className=""placeholder="MB"/>
                            </li>
                            <div class="col">
                                <input class=" form-control" type="text" name="idiomas4" class="form-control" id="idiomas4"className="form-control"placeholder="4"/>
                            </div>
                            <li class="list-group-item">
                            <label class="form-check-label" for="secondRadio">R</label>
                            <input class="col-3" class="form-control" type="checkbox" name=""value="R" id=""className=""placeholder="R" />
                            <label class="form-check-label" for="secondRadio">B</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas4"value="B" id="conocimiento_idiomas4"className=""placeholder="B"/>
                            <label class="form-check-label" for="secondRadio">MB</label>
                            <input class="col-2" class="form-check-input" type="checkbox" name="conocimiento_idiomas4"value="MB" id="conocimiento_idiomas4"className=""placeholder="MB"/>
                            </li>
                            
                        </div>
                        <button type="submit"class="btn btn-outline-primary">guardar</button> 
                    </form>
                    
                </section>
                <!--TRAYECTORIA POR EMPRESAS-->
                <section id="Trayectoria por Empresas" class="container mt-1">
                        <div class= "card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                            <h2 class="text-center">TRAYECTORIA POR EMPRESAS</h2>
                        </div>
                            <div class="card card-success form-control">
                                <div class="container mt1">
                                    <div class="row row-cols-2 sm-2 g-2">
                                        <div class="col-md-8"><h6 class=" text-center">EMPRESAS POR ACTIVIDADES ECONOMICAS</h6></div>
                                        <div class="col-md-4"><h6 class="text-center">AREA DE LA EMPRESA</h6></div>
                                    </div>
                                        <form action=""method="post">
                                        <div class="row row-cols-5 row-cols-sm-5 g-4">
                                            <li class="form-check">
                                                <div class="form-check">
                                                <label class="form-check-label" for="inlineCheckbox1">GRICULTURA</label>
                                                <input class="form-check-input" type="checkbox" name="empresa1"id="empresa1" value="GRICULTURA"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox2">GANADERIA / AVICULTURA</label>
                                                <input class="form-check-input" type="checkbox" name="empresa2"id="empresa2" value="GANADERIA / AVICULTURA"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">MINERIA</label>
                                                <input class="form-check-input" type="checkbox" name="empresa3"id="empresa3" value="MINERIA"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">HIDROCARBUROS</label>
                                                <input class="form-check-input" type="checkbox" name="empresa4"id="empresa4" value="HIDROCARBUROS"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">INDUSTRIA</label>
                                                <label class="form-check-label" for="inlineCheckbox3">Alimentos y bebidas</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Alimentos y bebidas"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Tabaco</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Tabaco"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Textiles y Confecciones</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Textiles y Confecciones"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Cuero y Calzado</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Cuero y Calzado"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Papel y Cartón</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Papel y Cartón"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Editorial y Artes Gráficas</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Editorial y Artes Gráficas"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Químico y Farmacéutico</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Químico y Farmacéutico"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Caucho y Plástico</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Caucho y Plástico"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Vidrio, Cerámica y Cemento</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Vidrio, Cerámica y Cemento"></div>
                                            </li>
                                            <li class="form-check">
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Metalurgia</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Metalurgia"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Maquinaria</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Maquinaria"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Automotores</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Automotores"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Muebles</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Muebles"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Reciclaje</label>
                                                <input class="form-check-input" type="checkbox" name="empresa5"id="empresa5" value="Reciclaje"></div>
                                                <div class="col-md-6"><h6>OTROS (Cuales?)</h6></div>
                                                <div class="col-md-14"><input type="text" name="empresa5" class="form-control" id="empresa5"className="form-control"placeholder=""/></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">ELECTRICIDAD / GAS / AGUA</label>
                                                <input class="form-check-input" type="checkbox" name="empresa6"id="empresa6" value="ELECTRICIDAD/GAS/AGUA"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">CONSTRUCCION</label>
                                                <input class="form-check-input" type="checkbox" name="empresa7"id="empresa7" value="CONSTRUCCION"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">COMERCIO</label>
                                                <input class="form-check-input" type="checkbox" name="empresa8"id="empresa8" value="COMERCIO"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">HOTELES Y RESTAURANTES</label>
                                                <input class="form-check-input" type="checkbox" name="empresa9"id="empresa9" value="HOTELES Y RESTAURANTES"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">TRANSPORTE Y ALMACENAMIENTO</label>
                                                <input class="form-check-input" type="checkbox" name="empresa10"id="empresa10" value="TRANSPORTE Y ALMACENAMIENTO"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">COMUNICACIONES</label>
                                                <input class="form-check-input" type="checkbox" name="empresa11"id="empresa11" value="COMUNICACIONES"></div>
                                            </li>
                                        <li class="form-check">
                                            <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">FINANCIERO</label>
                                                <input class="form-check-input" type="checkbox" name="empresa12"id="empresa12" value="FINANCIERO"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">INMOBILIARIO</label>
                                                <input class="form-check-input" type="checkbox" name="empresa13"id="empresa13" value="INMOBILIARIO"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">INFORMATICO</label>
                                                <input class="form-check-input" type="checkbox" name="empresa14"id="empresa14" value="INFORMATICO"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">SALUD</label>
                                                <input class="form-check-input" type="checkbox" name="empresa15"id="empresa15" value="SALUD"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">EDUCACION</label>
                                                <input class="form-check-input" type="checkbox" name="empresa16"id="empresa16" value="EDUCACION"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">SEGUROS</label>
                                                <input class="form-check-input" type="checkbox" name="empresa17"id="empresa17" value="SEGUROS"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">TURISMO / RECREACION</label>
                                                <input class="form-check-input" type="checkbox" name="empresa18"id="empresa18" value="TURISMO / RECREACION"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">OTROS SERVICIOS</label>
                                                <input class="form-check-input" type="checkbox" name="empresa19"id="empresa19" value="OTROS SERVICIOS"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Asesorías Profesionales</label>
                                                <input class="form-check-input" type="checkbox" name="empresa19"id="empresa19" value="Asesorías Profesionales"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Servicios Temporales</label>
                                                <input class="form-check-input" type="checkbox" name="empresa19"id="empresa19" value="Servicios Temporales"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Seguridad Vigilancia</label>
                                                <input class="form-check-input" type="checkbox" name="empresa19"id="empresa19" value="Seguridad Vigilancia"></div>
                                                <div class="col-md-6"><h6>OTROS SECTORES</h6></div>
                                                <div class="col-md-12"><input type="text" name="empresa19" class="form-control" id="empresa19"className="form-control"placeholder=""/></div>
                                            </li>
                                        <li class="form-check">
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Administración</label>
                                                <input class="form-check-input" type="checkbox" name="area1"id="area1" value="Administración"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Auditoría</label>
                                                <input class="form-check-input" type="checkbox" name="area2"id="area2" value="Auditoría"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Bodega</label>
                                                <input class="form-check-input" type="checkbox" name="area3"id="area3" value="Bodega"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Compras</label>
                                                <input class="form-check-input" type="checkbox" name="area4"id="area4" value="Compras"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Contabilidad</label>
                                                <input class="form-check-input" type="checkbox" name="area5"id="area5" value="Contabilidad"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Costos</label>
                                                <input class="form-check-input" type="checkbox" name="area6"id="area6" value="Costos"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Crédito y Cobranzas</label>
                                                <input class="form-check-input" type="checkbox" name="area7"id="area7" value="Crédito y Cobranzas"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Diseño</label>
                                                <input class="form-check-input" type="checkbox" name="area8"id="area8" value="Diseño"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Finanzas</label>
                                                <input class="form-check-input" type="checkbox" name="area9"id="area9" value="Finanzas"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Gerencia General</label>
                                                <input class="form-check-input" type="checkbox" name="area10"id="area10" value="Gerencia General"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Impuestos</label>
                                                <input class="form-check-input" type="checkbox" name="area11"id="area11" value="Impuestos"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Mercadeo</label>
                                                <input class="form-check-input" type="checkbox" name="area12"id="area12" value="Mercadeo"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Producción</label>
                                                <input class="form-check-input" type="checkbox" name="area13"id="area13" value="Producción"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Publicidad</label>
                                                <input class="form-check-input" type="checkbox" name="area14"id="area14" value="Publicidad"></div>
                                        </li>
                                        <li class="form-check">
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Personal</label>
                                                <input class="form-check-input" type="checkbox" name="area15"id="area15" value="Personal"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Sistemas</label>
                                                <input class="form-check-input" type="checkbox" name="area16"id="area16" value="Sistemas"></div>
                                                <div class="form-check ">
                                                <label class="form-check-label" for="inlineCheckbox3">Tesorería</label>
                                                <input class="form-check-input" type="checkbox" name="area17"id="area17" value="Tesorería"></div>
                                                <div class="col-md-6"><h6>OTROS (Cuales?)</h6></div>
                                                <div class="col-md-14"><input type="text" name="area18" class="form-control" id="area18"className="form-control"placeholder=""/></div>
                                            </LI>

                                        </div>
                                        <button type="submit"class="btn btn-outline-primary">guardar</button> 

                                        </form>
                                    </div>

                                </div>

                            </div>

                </section>
            <!--EXPERIENCIA LABORAL-->
            <section id="Experiencia laboral" class="container mt-1">
                    <div class= "card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                        <h2 class="text-center">EXPERIENCIA LABORAL</h2>
                    </div>
            <form action=""method="post">
            <div class="card card-success form-control">
                <div class="row row-cols-3 row-cols-sm-3 g-4">
                    <div class="col-md-4">
                        <h6>Nombre de la última o actual empresa</h6>
                        <input type="text" name="ultima_empresa" class="form-control" id="ultima_empresa"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-4">
                        <h6>Dirección</h6>
                        <input type="text" name="direccion" class="form-control" id="direccion"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-4">
                        <h6>Teléfono(s)</h6>
                        <input type="text" name="telefono" class="form-control" id="telefono"className="form-control"placeholder=""/>
                    </div>
                </div>
                <div class="row row-cols-4 row-cols-sm-4 g-4">
                    <div class="col-md-3">
                        <h6>Cargo</h6>
                        <input type="text" name="cargo" class="form-control" id="cargo"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-3">
                        <h6>Nombre de su jefe inmediato</h6>
                        <input type="text" name="jefe_inmediato" class="form-control" id="jefe_inmediato"className="form-control"placeholder=""/>
                    </div>
                    <div className="input-group mb-3">
                <h6>Fecha de ingreso</h6>  
                            <input type="date" name="fecha_in"id="fecha_in"class="form-control"
                            className="form-control"/>
                    </div>
                <div className="input-group mb-3">
                <h6>Fecha de retiro</h6>  
                            <input type="date" name="fecha_re"id="fecha_re"class="form-control"
                            className="form-control"/>
                    </div>
                    <div class="col-md-12">
                        <h6>Funciones realizadas</h6>
                        <input type="text" name="funsiones" class="form-control" id="funsiones"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-12">
                        <h6>Logros obtenidos</h6>
                        <input type="text" name="logros" class="form-control" id="logros"className="form-control"placeholder=""/>
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
                        <input type="text" name="tiempo" class="form-control" id="tiempo"className="form-control"placeholder=""/>
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
                        <input type="text" name="cual" class="form-control" id="cual"className="form-control"placeholder=""/>
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
                        <input type="text" name="motivo_retiro" class="form-control" id="motivo_retiro"className="form-control"placeholder=""/>
                    </div>
                    </form>
                    <button type="submit"class="btn btn-outline-primary">guardar</button> 

                    </div>
            </section>
            <!--SEGURIDAD SOCIAL-->
            <section id="Seguridad Social" class="container mt-1">
                    <div class= "card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                        <h2 class="text-center">INFORMACIÓN DE SEGURIDAD SOCIAL</h2><h5 class="text-center">(Relacione las entidades a las que actualmente esta afiliado)</h5>
                    </div>
                    <form action=""method="post">
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
                                        <input type="text" name="cual_salud" class="form-control" id="cual_salud"className="form-control"placeholder=""/>
                                        <div className="input-group col-1">
                                        <h6 class="col-4">Fecha de ingreso</h6>  
                                        <input class="col-6" type="date" name="fec_ingr"id="fec_ingr"class="form-control"className="form-control"/>
                                        <label  class="form-check-label" for="firstRadio">Cotizante</label>
                                        <input  class="form-check-input me-1" type="radio" name="afiliado" value="Cotizante" id="afiliado" checked>
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
                                    <input type="text" name="cual_pensiones" class="form-control" id="cual_pensiones"className="form-control"placeholder=""/>
                                    <div className="input-group col-sm-1">
                                    <h6>Fecha de afiliación:</h6>  
                                    <input type="date" name="fec_afili"id="fec_afili"class="form-control"className=""/>
                                    </div>
                                    </li>
                                    <li class="list-group-item col-md-4">
                                    <h6 class="col-sm-8">¿Fondo de cesantías?</h6>
                                    <label class="form-check-label" for="firstRadio">Si</label>
                                    <input class="form-check-input me-2" type="radio" name="cesantias" value="Si" id="cesantias" checked>
                                    <label class="form-check-label" for="secondRadio">No</label>
                                    <input class="form-check-input me-2" type="radio" name="cesantias" value="No" id="cesantias">
                                    <h6>Cual</h6>
                                    <input type="text" name="cual_cesantias" class="form-control" id="cual_cesantias"className="form-control"placeholder=""/>
                                    <div className="input-group col-sm-1">
                                    <h6>Fecha de afiliación:</h6>  
                                    <input type="date" name="fec_aficen"id="fec_aficen"class="form-control"className=""/>
                                    </div>
                                    </li>
                                    </div>

                                </div>
                                <button type="submit"class="btn btn-outline-primary">guardar</button> 

                        </div>
                    </form>

            </section>
            <!--REFERENCIAS PERSONALES-->
            <section id="Experiencia laboral" class="container mt-1">
                    <div class= "card card-success form-control shadow-lg rounded-lg outline outline-2 border-blue-700">
                        <h2 class="text-center">REFERENCIAS PERSONALES</h2>
                    </div>
                        <div class="container">
                        <div class= "card shadow-lg rounded-lg outline outline-2 border-blue-700">
                        <h6 class="text-center">Relacione dos nombres de personas distintas a familiares o empleadores</h6>
                        </div> 
                    </div>
                    <form action=""method="post">
                    <div class="card card-success form-control">
                    <div class="row row cols-5 sm-5 g-2">
                    <div class="col-md-1">
                    </br><h4 class="text-center">1.-</h4></div>
                    <div class="col-md-3">
                        <h6>Nombre</h6>
                        <input type="text" name="nombre1" class="form-control" id="nombre1"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-3">
                        <h6>Ocupación</h6>
                        <input type="text" name="ocupacion1" class="form-control" id="ocupacion1"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-3">
                        <h6>Dirección</h6>
                        <input type="text" name="direccion1" class="form-control" id="direccion1"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-2">
                        <h6>Telefono</h6>
                        <input type="text" name="telefono1" class="form-control" id="telefono1"className="form-control"placeholder=""/>
                    </div>
                    <div class="row row cols-5 sm-5 g-2">
                    <div class="col-md-1">
                    </br><h4 class="text-center">2.-</h4></div>
                    <div class="col-md-3">
                        <h6>Nombre</h6>
                        <input type="text" name="nombre2" class="form-control" id="nombre2"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-3">
                        <h6>Ocupación</h6>
                        <input type="text" name="ocupacion2" class="form-control" id="ocupacion2"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-3">
                        <h6>Dirección</h6>
                        <input type="text" name="direccion2" class="form-control" id="direccion2"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-2">
                        <h6>Telefono</h6>
                        <input type="text" name="telefono2" class="form-control" id="telefono2"className="form-control"placeholder=""/>
                    </div>
                    </div>
                    <div class="container mt1">
                        <div class= "card">
                        <h6 class="text-center">Nombre de un familiar que podamos contactar en caso de no localizarlo a usted directamente</h6>
                        </div> 
                        <div class="row row cols-5 sm-5 g-2">
                    <div class="col-md-1">
                    </br><h4 class="text-center">3.-</h4></div>
                    <div class="col-md-3">
                        <h6>Nombre</h6>
                        <input type="text" name="nombre3" class="form-control" id="nombre3"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-3">
                        <h6>Ocupación</h6>
                        <input type="text" name="ocupacion3" class="form-control" id="ocupacion3"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-3">
                        <h6>Dirección</h6>
                        <input type="text" name="direccion3" class="form-control" id="direccion3"className="form-control"placeholder=""/>
                    </div>
                    <div class="col-md-2">
                        <h6>Telefono</h6>
                        <input type="text" name="telefono3" class="form-control" id="telefono3"className="form-control"placeholder=""/>
                    </div>
                    <button type="submit"class="btn btn-outline-primary">guardar</button> 
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
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
