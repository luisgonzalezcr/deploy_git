<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Incluir los link del head -->
    <?php require_once INC . 'meta.php'; ?>
    <?php require_once INC . 'favicon.php'; ?>
    <?php require_once INC . 'css.php'; ?>
    <title><?php echo $title ?? 'Academia Gonzalez';?></title>
    <!-- Variable para inyectar mas estilos en las vistas -->
    <?php echo $style ?? ''; ?>
</head>
<!-- bg-dark text-white -->
<body class="">
    <!-- topbar -->
    <?php require_once INC . 'topbar.php'; ?>
    <!-- navbar -->
    <?php require_once INC . 'navbar.php'; ?>
    
    
    
    
    <!-- Contenedor principal se inyectan las vistas -->
    <main class="">
        
        <?php echo $contenido; ?>
        
    </main>
    
    
    
    <!-- footer -->
    <?php require_once INC . 'footer.php'; ?>
    
    <!-- Incluir los scripts antes del body -->
    <?php require_once INC . 'js.php'; ?>

    <!-- Variable para inyectar mas script js en las vistas -->
    <?php echo $script ?? ''; ?>
</body>

</html>