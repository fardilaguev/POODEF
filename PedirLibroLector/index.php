<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>E-Bock Pedir Libro</title>
</head>
<body>
    <header class="fNav">
        <div>
            <nav class="navbar">
                <div class="container-fluid">
                  <a href="../PagPrincipal/index.html" class="navbar-brand">E-BOCK</a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <aside class="iz" style="position: fixed;">
            <div>
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Generos
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <a href="">Ciencia Ficcion</a><br>
                            <a href="">Accion</a><br>
                            <a href="">Biografias</a><br>
                            <a href="">Comedia</a><br>
                            <a href="">Crimen</a><br>
                            <a href="">Drama</a><br>
                            <a href="">Terror</a><br>
                            <a href="">Suspenso</a><br>
                            <a href="">Romance</a><br>
                            <a href="">Fantasia</a>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Cuenta
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <a href="../miPerfilLector/index.php">Mi Perfil</a><br>
                            <a href="">Libros Guardados</a><br>
                            <a href="">Estado de la cuenta</a><br>
                            <a href="../PagPrincipalLector/cerrarSesion.php">Cerrar Sesion</a>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Ajustes
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <a href="">Contactanos</a><br>
                            <a href="">Privacidad</a><br>
                            <a href="">Buzon de Ayuda</a><br>
                            <a href="">Tu Actividad</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </aside>
        <article class="de">
            <div>
                <p>
                    <img src="../img/Como analizar a las personas.jpg"> Autor: Andres Abril <br> Numero de paginas: 137 <br> Genero: Psicologia <br>
                    <div>
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Pedir el libro</button>

                        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasTopLabel">Por favor llena los siguientes datos:</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mb-3">
                                    <label for="" class="form-label">Ingresa tu correo:</label>
                                    <input type="email" class="form-control" id="" placeholder="Ingresa tu correo electronico">
                                </div>
                                <div>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>¿Cuantos dias tendras el libro a tu disposicion?</option>
                                        <option value="1">De 5 a 10 dias</option>
                                        <option value="2">De 10 a 20 dias</option>
                                        <option value="3">De 20 a 30 dias</option>
                                    </select>
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-text">Nombre y Apellido</span>
                                    <input type="text" aria-label="Nombre" class="form-control">
                                    <input type="text" aria-label="Apellido" class="form-control">
                                </div>
                                <br>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Direccion</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Calle # 12 34...">
                                </div>
                                <br>
                                <div>
                                    <button type="submit" class="btn btn-primary">Pedir</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </p>
                <div class="desc">
                    <b class="titLib">COMO ANALIZAR A LAS PERSONAS</b>
                    <p>¿Alguna vez has deseado saber lo que una persona piensa de ti? ¿Y si te dijera que puedes hacerlo y que no te costará más que este libro? Probablemente pienses que estoy loco, pero si tengo tu atención, sigue leyendo. 
                    <br>
                    El lenguaje corporal es algo que los humanos, y otros animales, han estado usando desde el principio de los tiempos.
                    <br>
                    Tanto si siempre hemos sido conscientes de que no es necesario como si no, lo esencial es que seamos conscientes de ello ahora.
                    <br>
                    Ahora, podemos usar esta información para nuestro beneficio, y eso significa entender cómo se siente realmente una persona.
                    <br>
                    Puedes mirar el lenguaje corporal de una persona para aprender la verdad en cualquier situación, especialmente analizando sus pies. Este libro está aquí para enseñarte a interpretar estos mensajes.
                    <br>
                    A lo largo de estas páginas, aprenderás:
                    <br>
                    - Qué es el lenguaje corporal
                    <br>
                    - Cómo detectar a un mentiroso
                    <br>
                    - Lo que la respiración puede decirle
                    <br>
                    - Cómo localizar a una persona manipuladora
                    <br>
                    - Qué mirar cuando conoces a alguien por primera vez
                    <br>
                    El lenguaje corporal no es sólo la forma en que una persona cruza sus brazos o piernas. Va más allá de eso. Es como la respiración se ajusta a sus palabras. Las líneas de los surcos que se forman en la frente cuando intentan pensar en qué decir. O la dirección en la que apuntan sus pies cuando están hablando.
                    <br>
                    El lenguaje corporal es algo que todos usamos, así que ¿por qué no deberíamos entender cómo leerlo?</p>
                </div>
            </div>
        </article>
    </main>
</body>
</html>