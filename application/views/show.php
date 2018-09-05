<html>
<body>


 <h2>Estos son los productos: </h2>
  <?php  $index = 1;?>    

 <?php foreach($articulos as $articulo){?>
    <table>
     <tr>
         <td><?php echo "$index :  $articulo->descripcionProducto" ?></td>
           <?php  $index++;?>   
      </tr> 

    </table>
     <?php }?>  
 <a href="index/" class="button">Regresar</a>
 



</body>
</html>