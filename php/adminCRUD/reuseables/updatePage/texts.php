<?php
if(! isset($texts_loop)){
    $texts_loop = 0;
} else {
    $texts_loop++;
}
?>
<div class="row">
    <p>Text box:</p>
</div>

<div class ="row">
    <div class="col-25">
        <label for="texts_title<?php echo $texts_loop;?>">Title</label>
    </div>
    <div class="col-75">
        <input type="text" name="texts_title<?php echo $texts_loop;?>" value="<?php echo $row["title"];?>">
    </div>
</div>
<div class ="row">
    <div class="col-25">
        <label for="texts_text<?php echo $texts_loop;?>">Description</label>
    </div>
    <div class="col-75">
        <textarea name="texts_text<?php echo $texts_loop;?>" style="height:200px"><?php echo $row["text"];?></textarea>
    </div>
</div>
<div class ="row">
    <div class="col-25">
        <label for="texts_size<?php echo $texts_loop;?>">Size</label>
    </div>
    <div class="col-75">
        <select name="texts_size<?php echo $texts_loop;?>">
            <option <?php if($row["size"] == "small"){echo"selected";}?> value="small">Small</option>
            <option <?php if($row["size"] == "medium"){echo"selected";}?> value="medium">Medium</option>
            <option <?php if($row["size"] == "large"){echo"selected";}?> value="large">Half Page (widthwise)</option>
            <option <?php if($row["size"] == "long"){echo"selected";}?> value="long">Half Page (lengthwise)</option>
            <option <?php if($row["size"] == "whole"){echo"selected";}?> value="whole">Whole Page</option>
            <option <?php if($row["size"] == "none"){echo"selected";}?> value="none">None</option>
        </select>
    </div>
</div>
