<div>
     <h4>Lista notatek</h4>
     <div class="message">
          <?php if(!empty($params['before'])) : ?>
               <?php 
                    switch($params['before']){
                         case 'created':
                              echo 'Notatka została utworzona';
                              break;
                    }
               ?>
            <?php dump($params) ?>   
          <?php endif; ?>
     </div>
     <?php echo $params['resultList'] ?? ""; ?>
</div>