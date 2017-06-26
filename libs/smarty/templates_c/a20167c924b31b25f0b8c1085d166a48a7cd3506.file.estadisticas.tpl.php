<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-26 00:17:34
         compiled from "vistas\estadisticas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20892594ed6a1bbf8d9-56030943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a20167c924b31b25f0b8c1085d166a48a7cd3506' => 
    array (
      0 => 'vistas\\estadisticas.tpl',
      1 => 1498436250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20892594ed6a1bbf8d9-56030943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594ed6a1d5b6f1_59726748',
  'variables' => 
  array (
    'location' => 0,
    'classMain' => 0,
    'classLogueado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594ed6a1d5b6f1_59726748')) {function content_594ed6a1d5b6f1_59726748($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<base href="/Volquetas/">
	<?php echo $_smarty_tpl->getSubTemplate ("bs_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
		
	<?php echo '<script'; ?>
 src="js/estadisticas.js"><?php echo '</script'; ?>
>
	<link rel = "stylesheet" href = "css/estadisticas.css"/>	
	<title><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
 - Paysandú Limpia</title>

</head>

<body>
	<div class="wrapper">
		<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

	
		<div id = "main" class = "<?php echo $_smarty_tpl->tpl_vars['classMain']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['classLogueado']->value;?>
"  style = "height: 85.3%;">
			<div class = "contenedor" style = "max-width: 1100px; height: 100%; margin: auto">
				<!--
				<select id="selectEstadistica" style="margin: auto;">
					<option id="estadoVolquetas">Ver el estado de las volquetas</option>
					<option id="tiempo">Búsqueda en un período de tiempo</option>
					<option id="tPromedio">Tiempo promedio en resolver incidencias</option>
					<option id="timr">Tipo de incidencia más reportado</option>
					<option id="rvmi">Ránking de volquetas con más incidencias</option>
				</select>
				-->

				<div id="estadoVolquetaDiv"  class = "contenedorEstadistica estadisticaCorrida">
					<p style = "font-size: 18px; color: #0F3EA1; font-weight: bold; text-align: center;">Cantidad de volquetas por estado</p>
					<br>
					<canvas id="myChart">
					
					</canvas>
				</div>

				<div id="timeDiv" class = "contenedorEstadistica derecho">
					<p style = "font-size: 18px; color: #0F3EA1; font-weight: bold; text-align: center;">Cantidad de incidencias en un período de tiempo</p>
					<br>
					<div style = "margin: 0 auto; width: 70%">
						<b>Desde</b>&nbsp;&nbsp;<input type="text" id="dpickerFrom" class = "form-control txtFecha" readonly/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<b>Hasta</b>&nbsp;&nbsp;<input type="text" id="dpickerTill" class = "form-control txtFecha" readonly/>
						
					</div>
					<br>
					<canvas id="Timeframe">
						
					</canvas>
				</div>

				<div id="inMasRepDiv" class = "contenedorEstadistica">
					<p style = "font-size: 18px; color: #0F3EA1; font-weight: bold; text-align: center;">Cantidad de reportes por tipo de incidencia</p>
					<br>
					<canvas id="catMasReportadas">
						
					</canvas>
				</div>


				<div id="tiempoPromedioPorCategoria" class = "contenedorEstadistica derecho">
					<p style = "font-size: 18px; color: #0F3EA1; font-weight: bold; text-align: center;">Horas promedio en resolver cada tipo de incidencia</p>
					<br>
					<canvas id="TimeframePorCategoria">
						
					</canvas>
				</div>

				<div class = "contenedorReferencias">
					<b>Tipos de incidencias:</b><br><br><b>1 - </b>La volqueta está llena. <b>2 -</b> La volqueta huele mal. <b>3 -</b> La volqueta se está incendiando. <b>4 - </b>La volqueta se ha dañado. <b>5 - </b>Se han llevado la volqueta. <b>6 -</b> Otra.
				</div>

				<div id="tpromDiv" class = "contenedorEstadistica">
					<p style = "font-size: 18px; color: #0F3EA1; font-weight: bold; text-align: center;">Tiempo promedio para solucionar una incidencia</p>
					<br><br>
					<p style = "font-size: 17px; text-align: center">El tiempo promedio para solucionar incidencias es:</p> 
					<br><br>
					<p style = "font-size: 28px; font-weight: bold; text-align: center;"><span id="tiempoPromedio"></span></p>
					<p style = "font-size: 17px; text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;Horas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minutos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Segundos&nbsp;</p>
				</div>

				<div id="vMasRepDiv" class = "contenedorEstadistica derecho">
					<p style = "font-size: 18px; color: #0F3EA1; font-weight: bold; text-align: center;">Ranking de volquetas con más incidencias</p>
					<br>
					<canvas id="masReportadas">
						
					</canvas>
				</div>
				<button type = "button" class = "btn btn-danger" id = "btnExportar"><span class = "fa fa-file-pdf-o"></span>&nbsp;&nbsp;&nbsp;Exportar a PDF</button>
			</div>
			
		</div>

		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</body>
</html><?php }} ?>
