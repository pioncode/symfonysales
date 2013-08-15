<!DOCTYPE html>
<html>
<?php
/*
Javascript and CSS files load in ::base.html.twig located in app Resources views
1) Javascript and CSS defined from here
2) php app/console assets:install web to link to bundle
3) Files locted in PionSales/Resources/public
*/
?>



<script >
    
$(function(){
    $.ajax({
    type:"GET",
    url: "http://localhost:8888/~website/Symfony/web/app_dev.php/sales/transaction/ajax/index/",
    dataType:"json",
    success: function(data)
     {

      var datamatrix = [];
      var coltype =    [];
      for(var c in data[0][0]) coltype.push({title:c,width:100,dataType:typeof(data[0][0][c])});

      var i=0;
      for(var loop in data){
       var datanew = [];
       for(var d in data[i][0]) {datanew.push(data[i][0][d]);}
      datamatrix.push(datanew);
      i++;
      }
      
      var obj = {};
      obj.dataType = "JSON",
      obj.width = 1200;
      obj.height = 500;
      obj.dataModel = {data:datamatrix};
      obj.colModel = coltype;
      $("#grid_array").pqGrid( obj ); 
     }
    });

});    

</script>


<head>

    <h1><?php echo $title ?></h1>
    <h2>Total Records: <?php echo $total ?> Showing <?php echo $start ?> to <?php echo start + range ?></h2>
     <div id="grid_array"></div>


     {#
                       
                        <a href="{{ path(tp_paths.show, { 'id': entity[0].id }) }}">show</a>
                    </li>
                    <li>
                        <a href="{{ path(tp_paths.edit, { 'id': entity[0].id }) }}">edit</a>

            <a href="{{ path(tp_paths.create) }}">

     #}

{% endblock %}
