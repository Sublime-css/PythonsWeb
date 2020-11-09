<?php
if(! isset($loop)){
    $loop = 0;
} else {
    $loop++;
}
?>

<div class="row-tall mobile-row">
    <div class="col-25">
        <input type="text" style="height: 50%" name="title<?php echo $loop;?>" placeholder="Title">
        <input type="text" style="height: 50%" name="url<?php echo $loop;?>" placeholder="Link">
    </div>

    <div class="col-625">
        <textarea name="text<?php echo $loop;?>" placeholder="Text"></textarea>
    </div>

    <div class="col-125">
        <select name="size<?php echo $loop;?>" style="height: 50%" placeholder="Size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Half Page (widthwise)</option>
            <option value="long">Half Page (lengthwise)</option>
            <option value="whole">Whole Page</option>
            <option value="none">None</option>
        </select>
    </div>
    <select name="display<?php echo $loop;?>" class="invis">
            <option selected value="video"></option>
    </select>
</div>
<hr style="clear: both;">