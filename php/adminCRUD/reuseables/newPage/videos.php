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
        <input type="text" name="videos_title<?php echo $videos_loop;?>">
    </div>
</div>
<div class ="row">
    <div class="col-25">
        <label for="videos_link<?php echo $videos_loop;?>">Link</label>
    </div>
    <div class="col-75">
        <input type="text" name="videos_link<?php echo $videos_loop;?>">
    </div>
</div>
<div class ="row">
    <div class="col-25">
        <label for="videos_text<?php echo $videos_loop;?>">Description</label>
    </div>
    <div class="col-75">
        <textarea name="videos_text<?php echo $videos_loop;?>" placeholder="Text..." style="height:200px"></textarea>
    </div>
</div>
<div class ="row">
    <div class="col-25">
        <label for="videos_size<?php echo $videos_loop;?>">Size</label>
    </div>
    <div class="col-75">
        <select name="videos_size<?php echo $videos_loop;?>">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Half Page (widthwise)</option>
            <option value="long">Half Page (lengthwise)</option>
            <option value="whole">Whole Page</option>
            <option value="none">None</option>
        </select>
    </div>
</div>