<?php
if(! isset($videos_loop)){
    $videos_loop = 0;
} else {
    $videos_loop++;
}
?>

<div class="row-tall">
    <div class="col-25">
        <input type="text" style="height: 50%" name="videos_title<?php echo $videos_loop;?>">
        <input type="text" style="height: 50%" name="videos_link<?php echo $videos_loop;?>">
    </div>
    
    <div class="col-625">
        <textarea name="videos_text<?php echo $videos_loop;?>"></textarea>
    </div>

    <div class="col-125">
        <select name="videos_size<?php echo $videos_loop;?>" style="height: 33.33%">
            <option> value="small">Small</option>
            <option> value="medium">Medium</option>
            <option> value="large">Half Page (widthwise)</option>
            <option> value="long">Half Page (lengthwise)</option>
            <option> value="whole">Whole Page</option>
            <option> value="none">None</option>
        </select>
        <select name="videos_pagenum<?php echo $videos_loop;?>" style="height: 33.33%">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
            <input type="submit" value="Update" style="height: 33.33%">
    </div>
</div>