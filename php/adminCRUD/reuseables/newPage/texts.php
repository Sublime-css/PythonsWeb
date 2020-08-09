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
        <input type="text" name="texts_title<?php echo $texts_loop;?>">
    </div>
</div>
<div class ="row">
    <div class="col-25">
        <label for="texts_link<?php echo $texts_loop;?>">Description</label>
    </div>
    <div class="col-75">
        <textarea name="texts_text<?php echo $texts_loop;?>" placeholder="Text..." style="height:200px"></textarea>
    </div>
</div>
<div class ="row">
    <div class="col-25">
        <label for="texts_size<?php echo $texts_loop;?>">Size</label>
    </div>
    <div class="col-75">
        <select name="texts_size<?php echo $texts_loop;?>">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Half Page (widthwise)</option>
            <option value="long">Half Page (lengthwise)</option>
            <option value="whole">Whole Page</option>
            <option value="none">None</option>
        </select>
    </div>
</div