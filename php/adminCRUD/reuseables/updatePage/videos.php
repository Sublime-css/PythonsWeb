<form action="databaseUpdate.php" method="POST">
<div class="row">
    <div class="col-20">
        <input type="text" name="videos_title" value="<?php echo $row["title"];?>">
    </div>
    
    <div class="col-20">
        <input type="text" name="videos_link" value="<?php echo $row["link"];?>">
    </div>
    
    <div class="col-20">
        <textarea name="videos_text"><?php echo $row["text"];?></textarea>
    </div>

    <div class="col-125">
        <select name="videos_size">
            <option <?php if($row["size"] == "small"){echo"selected";}?> value="small">Small</option>
            <option <?php if($row["size"] == "medium"){echo"selected";}?> value="medium">Medium</option>
            <option <?php if($row["size"] == "large"){echo"selected";}?> value="large">Half Page (widthwise)</option>
            <option <?php if($row["size"] == "long"){echo"selected";}?> value="long">Half Page (lengthwise)</option>
            <option <?php if($row["size"] == "whole"){echo"selected";}?> value="whole">Whole Page</option>
            <option <?php if($row["size"] == "none"){echo"selected";}?> value="none">None</option>
        </select>
    </div>
    
    <div class = "col-125">
        <select name="videos_pagenum">
            <option <?php if($row["pagenum"] == "1"){echo"selected";}?> value="1">1</option>
            <option <?php if($row["pagenum"] == "2"){echo"selected";}?> value="2">2</option>
            <option <?php if($row["pagenum"] == "3"){echo"selected";}?> value="3">3</option>
            <option <?php if($row["pagenum"] == "4"){echo"selected";}?> value="4">4</option>
            <option <?php if($row["pagenum"] == "5"){echo"selected";}?> value="5">5</option>
            <option <?php if($row["pagenum"] == "6"){echo"selected";}?> value="6">6</option>
            <option <?php if($row["pagenum"] == "7"){echo"selected";}?> value="7">7</option>
            <option <?php if($row["pagenum"] == "8"){echo"selected";}?> value="8">8</option>
            <option <?php if($row["pagenum"] == "9"){echo"selected";}?> value="9">9</option>
            <option <?php if($row["pagenum"] == "10"){echo"selected";}?> value="10">10</option>
        </select>
    </div>
    <select name="id" class = "invis">
            <option selected value="<?php echo $row["id"];?>"></option>
    </select>
    <div class="col-125">
            <input type="submit" value="Update">
    </div>
</div>
</form>