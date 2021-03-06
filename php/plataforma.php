<?php
include('seguridad_navegador.php');



?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bodega</title>
	<meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"/>-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="icon" type="image/png" href="../img/logo.ico" />
<link href = "https://unpkg.com/ionicons@4.2.4/dist/css/ionicons.min.css"  rel = "stylesheet" >


    <!--boostrap Agregando -->
        <!--<link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<!--jquery local-->
				<script src="../js/jquery-3.2.1.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>-->
        <!--<script src="../bootstrap/js/bootstrap.js"></script>-->

    <!--termino  boosatrap-->
<!--estilos agregados por mi bopstrap de imputs-->
        <link rel="stylesheet" type="text/css" href="../css/estilosBotones.css">
	<!-- inicio materialize-->
    <!--hace que quede con color blanco will-change: opacity, transform; -->
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../materialize/css/materialize.css">
	<link rel="stylesheet" href="../css/material-design-iconic-font.min.css"> <!--hay que decirnos cual icono usar-->

    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--hay que decirnos cual icono usar-->
    <style type="text/css">
		.NavLateral
		{
			position: fixed;
		}

            .NavLateral-content{
               overflow-y: auto;

            }


#style-2::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
    background-color: #F5F5F5;
}

#style-2::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

#style-2::-webkit-scrollbar-thumb
{
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}


    </style>
    <!-- fin materialize-->
</head>
<body>
<!-- NAV LATERAL -->
    <section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width" id="style-2">
            <header class="NavLateral-title full-width center-align">
                BODEGA<i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>
            <figure class="full-width NavLateral-logo">
                <img src="../img/logo.jpeg" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">BODEGA	<i class ="icon ion-md-heart"></i></figcaption>
            </figure>

                <div class="NavLateral-Nav">
                <ul class="full-width">
                    <li>
                        <a href="plataforma.php" type="submit"><i class="material-icons">home</i></i> Inicio</a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Ingreso de Ventas</a>
                        <ul class="full-width">
                            <li class="NavLateralDivider"></li>
                            <!--<li><a href="ingreso_ventas/sele_mes.php" target="tiframe" class="waves-effect waves-light">Historial de ventas</a></li>-->
                            <li><a  class="waves-effect waves-light" onclick="enrutar_menu('VentasC.php','HistorialVentas')" >Historial de ventas</a></li>

                            <li class="NavLateralDivider"></li>
<!--                             <li><a href="ingreso_ventas/salidav2.php" target="tiframe" class="waves-effect waves-light">Nuevo Ingreso</a></li> -->
                            <li><a class="waves-effect waves-light" onclick="enrutar_menu('VentasC.php','IngresoVenta')"">Nuevo Ingreso</a></li>
                            <li class="NavLateralDivider"></li>
                            <!--<li><a href="buscador/buscador.php" target="tiframe" class="waves-effect waves-light">Cancelar boleta</a></li>-->
                            <li><a  class="waves-effect waves-light" onclick="enrutar_menu('VentasC.php','AnularVenta')" >Cancelar boleta</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Ingreso de Compras</a>
                        <ul class="full-width">
                            <li class="NavLateralDivider"></li>
                            <!--<li><a href="ingreso_compras/sele_mes.php" target="tiframe" class="waves-effect waves-light">Historial de compras</a></li>-->
                             
                             <li><a  class="waves-effect waves-light" onclick="enrutar_menu('ComprasC.php','HistorialCompras')" >Historial de compras</a></li>

                            <li class="NavLateralDivider"></li>
                            <li><a href="ingreso_compras/ingresov1.php" target="tiframe" class="waves-effect waves-light">Nuevo Ingreso</a></li>

                            <li class="NavLateralDivider"></li>
                            <!--<li><a href="ingreso_compras/mantenimiento/index.php" target="tiframe" class="waves-effect waves-light">Mantenimiento</a></li>-->
                            <li><a  class="waves-effect waves-light" onclick="enrutar_menu('ComprasC.php','Mantenimiento')" >Mantenimiento</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Caja</a>
                        <ul class="full-width">
                            <li class="NavLateralDivider"></li>
                            <!--<li><a href="caja/cierre_caja.php" target="tiframe" class="waves-effect waves-light">Ventas diarias</a></li>-->

                            <li><a  class="waves-effect waves-light" onclick="enrutar_menu('CajasC.php','VentasDiarias')" >Ventas diarias</a></li>

                            <li class="NavLateralDivider"></li>
                            <!--<li><a href="reportes/caja.php" target="tiframe"  class="waves-effect waves-light">Cierre de caja</a></li>-->
                            <li><a class="waves-effect waves-light"  onclick="enrutar_menu('CajasC.php','CierreDeCaja')">Cierre de caja</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Pagos</a>
                        <ul class="full-width">
                            <li class="NavLateralDivider"></li>
                            <li><a href="pago_venta/cuentas_cobrar.php" target="tiframe" class="waves-effect waves-light">Saldos por cobrar</a></li>
                            <!--li class="NavLateralDivider"></li>
                            <li><a href="#" target="tiframe"  class="waves-effect waves-light">Saldos a pagar</a></li-->
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Reporte </a>
                        <ul class="full-width">
                            <li class="NavLateralDivider"></li>

														<li><a   class="waves-effect waves-light" onclick="enrutar_menu('VentasC.php','ReporteVenta')" >Ventas</a></li>

                            <li class="NavLateralDivider"></li>
														<li><a   class="waves-effect waves-light" onclick="enrutar_menu('ComprasC.php','ReporteCompra')" >Compra</a></li>
                            <!--<li><a href="reportes/rango_fechas/rang_fec_compras.php" target="tiframe"  class="waves-effect waves-light">Compras</a></li>-->
                            <li class="NavLateralDivider"></li>
                            <!--<li><a href="reportes/stock/stock.php" target="tiframe"  class="waves-effect waves-light">Stock</a></li>-->
							<li><a   class="waves-effect waves-light" onclick="enrutar_menu('StockC.php','ReporteStock')" >Stock</a></li>
                            <!--li class="NavLateralDivider"></li>
                            <li><a href="reportes/proveedor/proveedores.php" target="tiframe"  class="waves-effect waves-light">Proveedores</a></li-->
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-view-web zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Mantenimiento</a>
                        <ul class="full-width">
                            <li class="NavLateralDivider"></li>
                            <!--<li><a href="mantenimiento/producto/index.html" target="tiframe" class="waves-effect waves-light">Productos</a></li>-->

                            <li><a  class="waves-effect waves-light" onclick="enrutar_menu('ProductoC.php')" >Productos</a></li>

                            <li class="NavLateralDivider"></li>
                            <!--li><a href="mantenimiento/proveedor/proveedor.php" target="tiframe" class="waves-effect waves-light">Proveedor</a></li-->
                            <li><a  class="waves-effect waves-light" onclick="enrutar_menu('ProveedorC.php')" >Proveedor</a></li>
                            <li class="NavLateralDivider"></li>
                            <!--<li><a href="mantenimiento/cliente/cliente.php" target="tiframe" class="waves-effect waves-light">Cliente</a></li>
                            <li class="NavLateralDivider"></li>-->
														<li><a  class="waves-effect waves-light" onclick="enrutar_menu('ClienteC.php')">Cliente</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="mantenimiento/usuario/usuario.php" target="tiframe" class="waves-effect waves-light">Usuario</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-view-web zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Almacen</a>
                        <ul class="full-width">
                        <!--<li class="NavLateralDivider"></li>
                            <li><a href="almacenes/almacen.php" target="tiframe"  class="waves-effect waves-light">STOCK</a></li>-->

                        <li class="NavLateralDivider"></li>
                            <li><a class="waves-effect waves-light" onclick="enrutar_menu('AlmacenC.php','STOCK')">STOCK</a></li>


                        <li class="NavLateralDivider"></li>
                            <li><a href="almacenes/lista_productos.php" target="tiframe"  class="waves-effect waves-light">Productos</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Ajuste de Stock</a>
                        <ul class="full-width">
                            <li class="NavLateralDivider"></li>
                            <li><a href="ajuste_stock/ajuste.php" target="tiframe" class="waves-effect waves-light">Ajuste</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="ajuste_stock/reporte_ajuste.php" target="tiframe" class="waves-effect waves-light">ReporteAjuste</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- NAV SUPERIOR XD -->
    <section class="ContentPage full-width">
        <!-- ICONOS Y LOGOUT -->
        <div class="ContentPage-Nav full-width">
            <ul class="full-width">

                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu" data-tooltip="Cerrar sessión"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><figure><img src="../img/user.png" alt="UserImage"></figure></li>
                <li style="padding:0 5px;"><?php echo $_SESSION['user']."  ";?></li>
                <li><a class="tooltipped waves-effect waves-light" href="../cierre.php" data-position="bottom" data-delay="50" data-tooltip="Cerra sessión"><i class="zmdi zmdi-power"></i></a></li>
                <li>
                    <a href="#" class="tooltipped waves-effect waves-light btn-Notification" data-position="bottom" data-delay="50" data-tooltip="Notifications">
                        <i class="zmdi zmdi-notifications"></i>
                        <?php
                        include('../conexion.php');
                        $sql_cont=mysqli_query($conexion,"SELECT count(COD_PRODUCTO) AS CONTEO FROM ALMACEN where CANTIDAD<10 AND CANTIDAD>0");

                        while ($r=mysqli_fetch_array($sql_cont)) {
                        echo '<span class="ContentPage-Nav-indicator bg-danger">'.$r["CONTEO"].'</span>';
                        }
                        ?>
                    </a>
                </li>
            </ul>

        </div>
        <!-- Notifications area -->
        <section class="z-depth-3 NotificationArea">
            <div class="full-width center-align NotificationArea-title">Notifications <i class="zmdi zmdi-close btn-Notification"></i></div>
                <?php
                    include('../conexion.php');
                    $sql_stock=mysqli_query($conexion,"SELECT a.*, b.NOMBRE_PRODUCTO AS nombre FROM ALMACEN as a, producto as b WHERE a.COD_PRODUCTO=b.COD_PRODUCTO and CANTIDAD<10 AND CANTIDAD>0");
                    while ($f=mysqli_fetch_array($sql_stock)) {
             echo '<a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
               <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>El producto '.$f["nombre"].' tiene poco STOCK</strong>
                        <br>
                    </p>
                </div>';
                    }
                ?>
            </a>
        </section>
<div>
<!--<iframe  src="iframe/index.php"  style="background:#ffffff;" AllowTransparency name="tiframe" id="frame"  frameborder="0" margin="3" scrolling="auto" width="100%" height="1100px"></iframe> -->
<div id="contenidobody">

</div>

</div>
    </section>



    <!-- Sweet Alert JS -->
    <!--<script src="../js/sweetalert.min.js"></script>-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- jQuery -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    -->

    <!-- Materialize JS -->
    <script src="../js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


    <!-- MaterialDark JS -->
    <script src="../js/main.js"></script>
</body>
</body>
</html>
<script type="text/javascript">
enrutar_menu('HomeC.php');
    function enrutar_menu($nombre_archivo,$peticion='')
    {
			if ($peticion=='')
			{
				$peticion='lista';
			}
            $.ajax({
                url:"controlador/"+$nombre_archivo,
                method:"POST",
                data:{peticion:$peticion},
                success: function(resultado){
                    $("#contenidobody").html(resultado);

                }
            });
    }



</script>


