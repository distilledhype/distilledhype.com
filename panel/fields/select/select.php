<select name="<?php echo $name ?>">
  <?php foreach($options AS $key => $text): ?>
  <option<?php if ($key == $value) ' selected="selected"' ?> value="<?php echo $key ?>"><?php echo $text ?></option>
  <?php endforeach ?>
</select>
