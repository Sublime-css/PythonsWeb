<!--DELPAGE.PHP-->
<div class="container invis" id="delpage" style="display:none">
    <form action="../databaseDel.php" method="POST">
        <div class="row">
            <div class="col-25">
                <label for="delpagenum">Page to Delete:</label>
            </div>
            <div class="col-75">
                <select id="delpagenum" name="delpagenum">
                    <?php
                    //We only want to be able to add pages that aren't made already, but we already cauculated the list:
                    foreach ($admin_pages as $i) {
                        echo "<option value=\"" . $i . "\">" . $i . "</option>\r\n";
                    }?>
                </select>
            </div>
        </div>

        <div class="row">
            <input type="submit" value="Delete">
        </div>
    </form>
</div>