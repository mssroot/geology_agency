<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 22.09.2016
 * Time: 21:47
 */
?>
<html>
<head></head>
<body>

    <footer class="container-footer bg-4 text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <?=$lang->get("LABEL_CONTACT_LEFT")?>
                </div>
                <div class="col-lg-4">
                    <?=$lang->get("LABEL_CONTACT_CENTER")?>
                </div>
                <div class="col-lg-4">
                    <?=$lang->get("LABEL_CONTACT_RIGHT")?><br />
                    <a href="#"><i style="font-size:24px" class="fa">&#xf230;</i></a>
                    <a href="#"><i style="font-size:24px" class="fa">&#xf2b3;</i></a>
                    <a href="#"><i style="font-size:24px" class="fa">&#xf08c;</i></a>
                    <a href="#"><i style="font-size:24px" class="fa">&#xf264;</i></a>
                    <a href="#"><i style="font-size:24px" class="fa">&#xf17e;</i></a>
                    <a href="#"><i style="font-size:24px" class="fa">&#xf081;</i></a>
                    <a href="#"><i style="font-size:24px" class="fa">&#xf194;</i></a>
                    <a href="#"><i style="font-size:24px" class="fa">&#xf167;</i></a>
                    <a href="#"><i style="font-size:24px" class="fa">&#xf189;</i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <?=$lang->get("LABEL_TITLE_COMPANY")?>
                </div>
                <div class="col-lg-4">MAIL RU RATING</div>
                <div class="col-lg-4">
                    <p>
                        <?=$lang->get("LABEL_TITLE_DEVELOPER")?>
                        <a target="_blank" href="<?=$lang->get("LABEL_URL_DEVELOPER")?>"><?=$lang->get("LABEL_NAME_DEVELOPER")?></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
