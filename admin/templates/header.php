<?php include('./config/database.php')  ?>
<?php
// Inicia la sesión
session_start();
if (!isset($_SESSION['username'])) { // verifica si la variable de sesión 'username' no está definidaz, si no lo está, redirige al usuario a la página 'index.php' que es el login.
    header('location:index.php'); // Redirige al usuario a la página 'index.php'
    exit(); // Detiene la ejecución para evitar que siga procesando el código después de la redirección, esto es importante para evitar que se ejecute código no deseado.
}

$nameAdmin = $_SESSION['username'];
// Consulta SQL
$objectConnection= new conecction();
$querieName = "SELECT name FROM users WHERE username = '$nameAdmin'";

// Ejecutar la consulta (suponiendo que el método consultar lo maneja)
$nameAdminQuerie = $objectConnection->consultar($querieName);
$nameResult = $nameAdminQuerie[0]['name']; 

$querieJob = "SELECT job_position,email FROM users WHERE username = '$nameAdmin'";

$querieJopPositicion = $objectConnection->consultar($querieJob);
$userJob = $querieJopPositicion[0]['job_position'];
$Email = $querieJopPositicion[0]['email'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Dona-Dashboard</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Dela+Gothic+One&family=Titan+One&display=swap" rel="stylesheet">

</head>
<body>

<section class="sectionAddProyects-container">
        <section class="sectionAddProyects">
            <div class="addProyects-Close">
                
                <div class="fileIcon">
                    <span></span>
                </div>
                <span class="close-popUp">
                </span>


            </div>
            
            <article class="paragraf-sectionAdd">
                <h3>sube un proyecto</h3>
                <p>Adjunte el archivo a continuación</p>
            </article>

            <form action="../../../web/admin/inicio.php" method="post"  enctype="multipart/form-data" >
                <div class="sectionAdd-form-file">
                    <span class="iconFileAdd"></span>
                    <input type="file" name='archivo'>
                    <p>arrastra un el archivo(logo) aquí <br>
                    <span>o hazclick aqui para subirlo</span>
                    </p>
                </div>
                <div class="inputsComplemets">
                    <input type="text" placeholder="Nombre del Cliente" name="name_company">
                    <input type="text" placeholder="Nombre del Proyecto" name="name_proyect">
                    <input type="text" placeholder="Observaciones" name="observation">
                    <input type="text" placeholder="Estatus" list="status" class="status" name="status">
                    <datalist id="status">
                        <option value="pendiente"></option>
                        <option value="en proceso"></option>
                        <option value="activo"></option>
                        <option value="completado"></option>
                    </datalist>
                    <input type="number" placeholder="$ Precio del proyecto" name="price_proyect">
                    <input type="number" placeholder="Abono" name="price_pass">
                </div>
                <button type="submit" class="rainbow-hover">
                    <span class="sp">Registrar proyecto</span>
                </button>

            </form>

        </section>
    </section>


<section>
    <div>
    <nav class="nav">
        <div class="sectionHeader">
            <h3>
            Hola
            <?php echo $_SESSION['username'] ?></h3>
            <figure class="profile-header">
                <img src="../assets/img/profile.png" alt="foto de perfil">
                <span class="iconMenu"></span>
            </figure>
            <div class="menuHeader">
                <section class="dateProfile">
                    <figure>
                        <img src="../assets/img/profile.png" alt="foto de perfil">
                    </figure>
                    <div>
                        <h5><?php echo $nameResult ?></h5>
                        <span>
                            <?php echo $userJob  ?>
                        </span>
                        <span class="email">
                            <?php echo $Email ?>
                            <hr>
                        </span>
                    </div>
                </section>
                <hr>
                <menu>
                    <a href=""><span class="home"></span>inicio</a>
                    <a href=""><span class="profile"></span>perfil</a>
                    <a href=""><span class="settings"></span>configuración</a>
                    <a href="<?php echo './templates/cerrar.php' ?> "><span class="close"></span>cerrar seción</a>
                </menu>
            </div>
        </div>
       
        <section class="section-menu">
            <section class="menu">
            <label title="home" for="home" class="label">
                <input id="home" name="page" type="radio" checked="" />
                <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 21 20"
                height="20"
                width="21"
                class="icon home"
                >
                <path
                    fill="inherit"
                    d="M18.9999 6.01002L12.4499 0.770018C11.1699 -0.249982 9.16988 -0.259982 7.89988 0.760018L1.34988 6.01002C0.409885 6.76002 -0.160115 8.26002 0.0398848 9.44002L1.29988 16.98C1.58988 18.67 3.15988 20 4.86988 20H15.4699C17.1599 20 18.7599 18.64 19.0499 16.97L20.3099 9.43002C20.4899 8.26002 19.9199 6.76002 18.9999 6.01002ZM10.9199 16C10.9199 16.41 10.5799 16.75 10.1699 16.75C9.75988 16.75 9.41988 16.41 9.41988 16V13C9.41988 12.59 9.75988 12.25 10.1699 12.25C10.5799 12.25 10.9199 12.59 10.9199 13V16Z"
                ></path>
                </svg>
            </label>
            <label title="cart" for="cart" class="label">
                <input id="cart" name="page" type="radio" />
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="inherit"
                viewBox="0 0 18 20"
                height="20"
                width="18"
                class="icon cart"
                >
                <path
                    fill="inherit"
                    d="M16.8035 6.96427C16.1335 6.22427 15.1235 5.79427 13.7235 5.64427V4.88427C13.7235 3.51427 13.1435 2.19427 12.1235 1.27427C11.6202 0.812823 11.025 0.462927 10.3771 0.247511C9.72909 0.032095 9.04292 -0.0439787 8.3635 0.0242742C5.9735 0.254274 3.9635 2.56427 3.9635 5.06427V5.64427C2.5635 5.79427 1.5535 6.22427 0.883496 6.96427C-0.0865043 8.04427 -0.0565042 9.48427 0.0534958 10.4843L0.753496 16.0543C0.963496 18.0043 1.7535 20.0043 6.0535 20.0043H11.6335C15.9335 20.0043 16.7235 18.0043 16.9335 16.0643L17.6335 10.4743C17.7435 9.48427 17.7635 8.04427 16.8035 6.96427ZM8.5035 1.41427C8.98813 1.36559 9.47758 1.41913 9.94023 1.57143C10.4029 1.72372 10.8284 1.97138 11.1894 2.29841C11.5503 2.62544 11.8387 3.02456 12.0357 3.46998C12.2328 3.91539 12.3343 4.39721 12.3335 4.88427V5.58427H5.3535V5.06427C5.3535 3.28427 6.8235 1.57427 8.5035 1.41427ZM5.2635 11.1543H5.2535C4.7035 11.1543 4.2535 10.7043 4.2535 10.1543C4.2535 9.60427 4.7035 9.15427 5.2535 9.15427C5.8135 9.15427 6.2635 9.60427 6.2635 10.1543C6.2635 10.7043 5.8135 11.1543 5.2635 11.1543ZM12.2635 11.1543H12.2535C11.7035 11.1543 11.2535 10.7043 11.2535 10.1543C11.2535 9.60427 11.7035 9.15427 12.2535 9.15427C12.8135 9.15427 13.2635 9.60427 13.2635 10.1543C13.2635 10.7043 12.8135 11.1543 12.2635 11.1543Z"
                ></path>
                </svg>
            </label>
            <label title="favorite" for="favorite" class="label">
                <input id="favorite" name="page" type="radio" />
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="inherit"
                viewBox="0 0 20 18"
                height="18"
                width="20"
                class="icon favorite"
                >
                <path
                    fill="inherit"
                    d="M14.44 0C12.63 0 11.01 0.88 10 2.23C9.48413 1.53881 8.81426 0.977391 8.04353 0.590295C7.27281 0.203198 6.42247 0.00108555 5.56 0C2.49 0 0 2.5 0 5.59C0 6.78 0.19 7.88 0.52 8.9C2.1 13.9 6.97 16.89 9.38 17.71C9.72 17.83 10.28 17.83 10.62 17.71C13.03 16.89 17.9 13.9 19.48 8.9C19.81 7.88 20 6.78 20 5.59C20 2.5 17.51 0 14.44 0Z"
                ></path>
                </svg>
            </label>
            <label title="notifications" for="notifications" class="label">
                <input id="notifications" name="page" type="radio" />
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="inherit"
                viewBox="0 0 16 20"
                height="20"
                width="16"
                class="icon history"
                >
                <path
                    fill="inherit"
                    d="M15.0294 12.4902L14.0294 10.8302C13.8194 10.4602 13.6294 9.76016 13.6294 9.35016V6.82016C13.6282 5.70419 13.3111 4.61137 12.7147 3.66813C12.1183 2.72489 11.267 1.96978 10.2594 1.49016C10.0022 1.0335 9.62709 0.654303 9.17324 0.392195C8.71939 0.130087 8.20347 -0.00530784 7.6794 0.000159243C6.5894 0.000159243 5.6094 0.590159 5.0894 1.52016C3.1394 2.49016 1.7894 4.50016 1.7894 6.82016V9.35016C1.7894 9.76016 1.5994 10.4602 1.3894 10.8202L0.379396 12.4902C-0.0206039 13.1602 -0.110604 13.9002 0.139396 14.5802C0.379396 15.2502 0.949396 15.7702 1.6894 16.0202C3.6294 16.6802 5.6694 17.0002 7.7094 17.0002C9.7494 17.0002 11.7894 16.6802 13.7294 16.0302C14.4294 15.8002 14.9694 15.2702 15.2294 14.5802C15.4894 13.8902 15.4194 13.1302 15.0294 12.4902ZM10.5194 18.0102C10.3091 18.5923 9.92467 19.0956 9.41835 19.4516C8.91203 19.8077 8.30837 19.9992 7.6894 20.0002C6.8994 20.0002 6.1194 19.6802 5.5694 19.1102C5.2494 18.8102 5.0094 18.4102 4.8694 18.0002C4.9994 18.0202 5.1294 18.0302 5.2694 18.0502C5.4994 18.0802 5.7394 18.1102 5.9794 18.1302C6.5494 18.1802 7.1294 18.2102 7.7094 18.2102C8.2794 18.2102 8.8494 18.1802 9.4094 18.1302C9.6194 18.1102 9.8294 18.1002 10.0294 18.0702L10.5194 18.0102Z"
                ></path>
                </svg>
            </label>
            </section>
        </section>

        
    </nav>
    <main>

