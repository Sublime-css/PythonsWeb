<?php if ($row["video1"] == ""){
            ?><div class="<?php echo"dynamic " . $row["size1"]?>">
                <h1><?php echo $row["heading1"];?></h1>
                <p><?php echo $row["text1"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size2"];?>">
                <h1><?php echo $row["heading2"];?></h1>
                <p><?php echo $row["text2"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size3"];?>">
                <h1><?php echo $row["heading3"];?></h1>
                <p><?php echo $row["text3"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size4"];?>">
                <h1><?php echo $row["heading4"];?></h1>
                <p><?php echo $row["text4"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size5"];?>">
                <h1><?php echo $row["heading5"];?></h1>
                <p><?php echo $row["text5"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size6"];?>">
                <h1><?php echo $row["heading6"];?></h1>
                <p><?php echo $row["text6"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size7"];?>">
                <h1><?php echo $row["heading7"];?></h1>
                <p><?php echo $row["text7"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size8"];?>">
                <h1><?php echo $row["heading8"];?></h1>
                <p><?php echo $row["text8"]?></p>
            </div>
        <?php
             } else {
            ?><div class="<?php echo"dynamic " . $row["size1"]?>">
                <h1><?php echo $row["heading1"];?></h1>
                <p><?php echo $row["video1"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size2"];?>">
                <h1><?php echo $row["heading2"];?></h1>
                <p><?php echo $row["video2"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size3"];?>">
                <h1><?php echo $row["heading3"];?></h1>
                <p><?php echo $row["video3"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size4"];?>">
                <h1><?php echo $row["heading4"];?></h1>
                <p><?php echo $row["text4"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size5"];?>">
                <h1><?php echo $row["heading5"];?></h1>
                <p><?php echo $row["video5"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size6"];?>">
                <h1><?php echo $row["heading6"];?></h1>
                <p><?php echo $row["video6"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size7"];?>">
                <h1><?php echo $row["heading7"];?></h1>
                <p><?php echo $row["video7"];?></p>
            </div>
            <div class="<?php echo"dynamic " . $row["size8"];?>">
                <h1><?php echo $row["heading8"];?></h1>
                <p><?php echo $row["video8"]?></p>
            </div><?php
             }?>