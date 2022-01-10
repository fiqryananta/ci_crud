<?php
if(!isset($display)) {
   $display = false;
}
?>
                  
<div <?php if ($display == false): ?>style="display:none" <?php endif ?> class="container-groups">
   <div class="form-group ">
      <div class="col-sm-12">
         <select  class="form-control strict-group <?= @$class ?>" name="group[]" id="group" multiple data-placeholder="Select groups">
            <?php foreach (db_get_all_data('aauth_groups') as $row): ?>
            <option <?= array_search($row->id, []) !== false? 'selected="selected"' : ''; ?> value="<?= $row->id; ?>"  ><?= ucwords($row->name); ?></option>
            <?php endforeach; ?>  
         </select>
         <small>Only selected group can see this field</small>
      </div>
   </div>
</div>