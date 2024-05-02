<div class="container">
  <?php
    if(isset($_GET['status']) && $_GET['status'] == 'success')
    {
      echo "<div class='alert mt-2 alert-success'>Settings Updated Successfully</div>";
    }
  
  
  
  ?>
<h3 class="mt-3">General Settings</h3>
<hr>
  <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
  <input type="hidden" name="action" value="general_page_action">
  <div class="row">
    <div class="col-md-4">
      <div class="option">
      <span class="fs-7">Preloader</span>
      <?php
      //get preloader value from preloader table 
      global $wpdb;
      $table_name = 'eshop_general';
      $result = $wpdb->get_results("SELECT preloader FROM $table_name");
      $preloader = $result[0]->preloader;

      if($preloader != 1){
        echo '<select class="ml-5" name="preloader" id="">
        <option value="0">Disable</option>
        <option value="1">Enable</option>
        
      </select>';
      }else{
        echo '<select class="ml-5" name="preloader" id="">
        <option value="1">Enable</option>
        <option value="0">Disable</option>
      </select>';
      }


      
      
      ?>
      </div>     
    </div>

    <?php submit_button(); ?>
  </div>
</form>
</div>
