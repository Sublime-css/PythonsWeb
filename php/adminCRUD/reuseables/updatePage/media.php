<form action="databaseUpdate.php" method="POST" style="clear:both;">
    <div class="row-tall mobile-row">
        <div class="col-25">
            <input type="text" style="height: 50%" name="title" value="<?php echo $row["title"];?>">
            <input type="text" style="height: 50%" name="url" value="<?php echo $row["url"];?>">
        </div>

        <div class="col-625">
            <textarea name="text"><?php echo $row["text"];?></textarea>
        </div>

        <div class="col-125">
            <select name="size" style="height: 33.33%">
                <option <?php if($row["size"] == "small"){echo"selected";}?> value="small">Small</option>
                <option <?php if($row["size"] == "medium"){echo"selected";}?> value="medium">Medium</option>
                <option <?php if($row["size"] == "large"){echo"selected";}?> value="large">Half Page (widthwise)</option>
                <option <?php if($row["size"] == "long"){echo"selected";}?> value="long">Half Page (lengthwise)</option>
                <option <?php if($row["size"] == "whole"){echo"selected";}?> value="whole">Whole Page</option>
                <option <?php if($row["size"] == "none"){echo"selected";}?> value="none">None</option>
            </select>
            <select name="pagenum" style="height: 33.33%">
                <option <?php if($row["pagenum"] == "1"){echo"selected";}?> value="1">Page 1</option>
                <option <?php if($row["pagenum"] == "2"){echo"selected";}?> value="2">Page 2</option>
                <option <?php if($row["pagenum"] == "3"){echo"selected";}?> value="3">Page 3</option>
                <option <?php if($row["pagenum"] == "4"){echo"selected";}?> value="4">Page 4</option>
                <option <?php if($row["pagenum"] == "5"){echo"selected";}?> value="5">Page 5</option>
                <option <?php if($row["pagenum"] == "6"){echo"selected";}?> value="6">Page 6</option>
                <option <?php if($row["pagenum"] == "7"){echo"selected";}?> value="7">Page 7</option>
                <option <?php if($row["pagenum"] == "8"){echo"selected";}?> value="8">Page 8</option>
                <option <?php if($row["pagenum"] == "9"){echo"selected";}?> value="9">Page 9</option>
                <option <?php if($row["pagenum"] == "10"){echo"selected";}?> value="10">Page 10</option>
            </select>
            <input type="submit" value="Update" style="height: 33.33%">
        </div>
        <select name="id" class="invis">
            <option selected value="<?php echo $row["id"];?>"></option>
        </select>
        <select name="display" class="invis">
            <option selected value="<?php echo $row["display"]?>"></option>
    </select>
    </div>
</form>
<hr style="clear: both;">