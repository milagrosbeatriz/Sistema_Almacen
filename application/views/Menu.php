<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Menú</title>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/materialize/css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <!-- 
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  -->
  <script type="text/javascript" src="<?php echo base_url();?>/materialize/js/jquery1.10.2.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/materialize/js/materialize.min.js"></script>
  <script type="text/javascript">
    
    $(document).ready(function(){
      $('ul.tabs').tabs();
    });

    function Route(page){
      $.ajax({
        url: 'index.php/ValidateController/Route/'+page,
        type: 'POST',
        async: true,
        data: null,
        beforeSend: function() {
          console.log("beforeSend");
          $('#div-register').html('Cargando...');
        },
        success: function(data) {
          console.log("success");
          $('#div-register').html(data);
        }
      });
    }
    
  </script>
  <style type="text/css">
    .acordion-item-sub-title{
      height: 35px;
      vertical-align: middle;
      margin-top: 10px;
      padding-left: 20px;
    }
    .acordion-item{
      height: 35px;
      vertical-align: middle;
      margin-top: 10px;
      padding-left: 40px;
    }
    .acordion-item:hover{
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo" style="margin-left: 20px;">FundaciónVista</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#"><i class="mdi-social-person left"></i>Administrador</a></li>
          <li style="margin-right: 20px;">01:07:00 p.m.</li>
        </ul>
      </div>
    </nav>

    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a class="active" href="#test1"><i class="small mdi-action-assignment-turned-in"></i>Mantenimiento</a></li>
          <li class="tab col s3"><a href="#test2"><i class="small mdi-action-settings"></i>Operaciones</a></li>
          <li class="tab col s3"><a href="#test3"><i class="small mdi-editor-insert-chart"></i>Reportes</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12">
        <div class="row">
          <div class="col s4">
          <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header"><i class="mdi-action-assignment"></i>Producto</div>
              <div class="collapsible-body acordion-item-sub-title"><b>Registrar producto</b></div>
              <div class="collapsible-body acordion-item" onclick="Route('RegisterGlasses');"><a>Lentes</a></div>
              <div class="collapsible-body acordion-item" onclick="Route('RegisterProducts');"><a>Sustancias viscoelastica</a></div>
              <div class="collapsible-body acordion-item" onclick="Route('RegisterProducts');"><a>Soluciones</a></div>
              <div class="collapsible-body acordion-item" onclick="Route('RegisterProducts');"><a>Válvulas</a></div>
              <div class="collapsible-body acordion-item" onclick="Route('RegisterProducts');"><a>Ampollas</a></div>
              <div class="collapsible-body acordion-item" onclick="Route('RegisterProducts');"><a>Tabletas</a></div>
              <div class="collapsible-body acordion-item" onclick="Route('RegisterProducts');"><a>Insumosa vitrectomía</a></div>
              <div class="collapsible-body acordion-item" onclick="Route('RegisterProducts');"><a>Descartables</a></div>
            </li>
            <li>
              <div class="collapsible-header" onclick="Route('RegisterUser');"><a>Usuario</a></div>
            </li>
          </ul>
  </div>
          <div class="col s8">
            <div id="div-register">
              
            </div>
          </div> 
        </div>

        
      </div>
      <div id="test2" class="col s12">Operaciones</div>
      <div id="test3" class="col s12">Reportes</div>
     </div>
  </div>


  
        
</body>
</html>