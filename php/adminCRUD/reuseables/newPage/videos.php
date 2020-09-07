<?php
if(! isset($videos_loop)){
    $videos_loop = 0;
} else {
    $videos_loop++;
}
?>

<div class="row-tall">
    <div class="col-25">
        <input type="text" style="height: 50%" name="videos_title<?php echo $videos_loop;?>" placeholder="Title">
        <input type="text" style="height: 50%" name="videos_link<?php echo $videos_loop;?>" placeholder="Link">
    </div>
    
    <div class="col-625">
        <textarea name="videos_text<?php echo $videos_loop;?>" placeholder="Text"></textarea>
    </div>

    <div class="col-125">
        <select name="videos_size<?php echo $videos_loop;?>" style="height: 50%" placeholder="Size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Half Page (widthwise)</option>
            <option value="long">Half Page (lengthwise)</option>
            <option value="whole">Whole Page</option>
            <option value="none">None</option>
        </select>
    </div>
</div>
<hr style="clear: both;">