<div>
 <section>
     <div class="message">
          <?php 
          if (!empty($params['before'])) {
             switch($params['before']) {
               case 'created':
                      echo 'Notatka została utworzona';
               break;
            }  
          } 
          ?>  
     </div>

     <div class="tb1-header">
          <table cellpading="0" cellspaicing="0" border="0">
               <thead>
                    <tr>
                         <th>ID</th>
                         <th>Tytuł</th>
                         <th>Opcje</th>
                    </tr>
               </thead>
          </table>
     </div>
     <div class="tb1-content">
          <table cellpading="0" cellspaicing="0" border="0">
               <tbody>
                    
               </tbody>
          </table>
     </div>
  </section>
</div>