<?php
if(! isset($texts_loop)){
    $texts_loop = 0;
} else {
    $texts_loop++;
}
?>

<div class ="row-tall">
    <div class="col-75">
        <textarea name="texts_text<?php echo $texts_loop;?>" placeholder="Text"></textarea>
    </div>
    <div class="col-25">
    <input type="text" name="texts_title<?php echo $texts_loop;?>" style="height:33.33%" placeholder="Title">
    <input type="text" name="texts_image<?php echo $texts_loop;?>" style="height:33.33%" placeholder="Image">
        <select name="texts_size<?php echo $texts_loop;?>" style="height:33.33%" placeholder="Size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Half Page (widthwise)</option>
            <option value="long">Half Page (lengthwise)</option>
            <option value="whole">Whole Page</option>
            <option value="none">None</option>
        </select>
    </div>
</div>