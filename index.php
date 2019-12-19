<?php 
    require_once'apps/config.php';
    renderIncludes('header.php');
    $data = [
        'productos'=>getProducto()
    ];

    renderViews('tarjeta_views.php',$data);
    renderViews('tabla_views.php',$data);   
    renderIncludes('footer.php');
?>