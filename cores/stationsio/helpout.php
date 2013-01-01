<div class="hero-unit">
  <h1>Help out!</h1>
  <p>Helping out is simple! All our data are managed from google drive spreadsheets, and then loaded into our system.</p>
</div>
<div class="row">
   <div class="span10 offset2">
     <table class="table table-hover">
       <tr>
         <th>#</th>
         <th>Country</th>
         <th>Link to google drive</th>
       </tr>
<?php
   $documents = parse_ini_file("custom/documents.ini",true);
   $documents = $documents["sources"];
   $i = 1;
   foreach($documents as $country =>$doc){
       echo "<tr><td>$i</td><td>$country</td><td><a href='$doc' target='_blank'>$doc</a></td></tr>";
       $i++;
   }
?>
     </table>
   </div>
</div>
