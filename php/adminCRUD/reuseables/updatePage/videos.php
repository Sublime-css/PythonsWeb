<?php
if(! isset($videos_loop)){
    $videos_loop = 0;
} else {
    $videos_loop++;
}
?>
<div class="row">
    <p>Video:</p>
</div>
<div class ="row">
    <div class="col-25">
        <label for="videos_title<?php echo $videos_loop;?>">Title</label>
    </div>
    <div class="col-75">
        <input type="text" name="videos_title<?php echo $videos_loop;?>" value="<?php echo $row["title"];?>">
    </div>
</div>
<div class ="row">
    <div class="col-25">
        <label for="videos_link<?php echo $videos_loop;?>">Link</label>
    </div>
    <div class="col-75">
        <input type="text" name="videos_link<?php echo $videos_loop;?>" value="<?php echo $row["link"];?>">
    </div>
</div>
<div class ="row">
    <div class="col-25">
        <label for="videos_text<?php echo $videos_loop;?>">Description</label>
    </div>
    <div class="col-75">
        <textarea name="videos_text<?php echo $videos_loop;?>" style="height:200px"><?php echo $row["text"];?></textarea>
    </div>
</div>
<div class ="row">
    <div class="col-25">
        <label for="videos_size<?php echo $videos_loop;?>">Size</label>
    </div>
    <div class="col-75">
        <select name="videos_size<?php echo $videos_loop;?>">
            <option <?php if($row["size"] == "small"){echo"selected";}?> value="small">Small</option>
            <option <?php if($row["size"] == "medium"){echo"selected";}?> value="medium">Medium</option>
            <option <?php if($row["size"] == "large"){echo"selected";}?> value="large">Half Page (widthwise)</option>
            <option <?php if($row["size"] == "long"){echo"selected";}?> value="long">Half Page (lengthwise)</option>
            <option <?php if($row["size"] == "whole"){echo"selected";}?> value="whole">Whole Page</option>
            <option <?php if($row["size"] == "none"){echo"selected";}?> value="none">None</option>
        </select>
    </div>
</div>