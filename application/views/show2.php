<body>


 <h2>Estos son los productos: </h2>
  <?php  $index = 1;?>    

 <?php foreach($vendor as $vend){?>
    <table>
     <tr>
         <td><?php echo  "Precio: $vend->precio Comprador: $vend->nombreComprador " ?></td>
    
      </tr> 

    </table>
     <?php }?>  
 <a href="index/" class="button">Regresar</a>
 



</body>
</html>