<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="siganture generator wow" />
        <meta name="author" content="Peter Kajan alias Revenge" />
        <meta name="description" content="Signature generator" />
        <meta charset="utf-8" />
        <title>TwinStar - Signature generator</title>
        <link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
        <script src="scripts/select.js"></script>
        <script src="scripts/color.js"></script>
    </head>

    <?php
    $ciselko = 0;
    $chBT = 'type="checkbox" onclick="countCheckedBoxes(this);"';
    ?>
    <body onload="Color();">
        <div id="hlavicka">
            <span id="temp">If you find any bugs please send me a <a href="http://forum.twinstar.cz/private.php?do=newpm&amp;u=10520" onclick="return !window.open(this.href);">PM</a>.</span><br />
            <a href="http://twinstar.cz/" onclick="return !window.open(this.href);">TwinStar.cz</a> |
            <a href="http://forum.twinstar.cz/showthread.php/50775-Armory-Signature-generator?p=450160#post450160" onclick="return !window.open(this.href);">If you like it +1 here!</a>
        </div>
        <div id="zadavanie">
            <form action="index.php" method="post" enctype="multipart/form-data" name="form">
                <div id="zada">
                    <input id="textove_pole" type="text" name="postava" value="<?php getCharName(); ?>" onfocus="if (this.value === this.defaultValue)
                                this.value = '';" required />
                    <select id="realm" name="realm">
                        <option value="Hyperion" <?php SelectRealm("Hyperion"); ?>>Hyperion</option>
                        <option value="Vesper" <?php SelectRealm("Vesper"); ?>>Vesper</option>
                        <option value="Ares" <?php SelectRealm("Ares"); ?>>Ares</option>
                    </select>
                    <input type="submit" name="submit" class="button" /><br /><br />
                    <div id="skrtatka">
                        <input id="<?php echo $i=1; ?>" onchange="Color()" type="checkbox" name="armory_show" value="1" checked="checked"/><span id="span<?php echo $i++; ?>"> Use Armory picture</span> |
                        <input id="<?php echo $i; ?>" onchange="Color()" type="checkbox" name="server_show" value="1" checked="checked"/><span id="span<?php echo $i++; ?>"> Show Server name</span> |
                        <input id="<?php echo $i; ?>" onchange="Color()" type="checkbox" name="guilda_show" value="1" checked="checked"/><span id="span<?php echo $i++; ?>"> Show Guild name</span> |
                        <input id="<?php echo $i; ?>" onchange="Color()" type="checkbox" name="achievy_show" value="1" checked="checked"/><span id="span<?php echo $i++; ?>"> Show Achievements</span> |
                        <input id="<?php echo $i; ?>" onchange="Color()" type="checkbox" name="hk_show" value="1" checked="checked"/><span id="span<?php echo $i++; ?>"> Show HK</span> |
                        <input id="<?php echo $i; ?>" onchange="Color()" type="checkbox" name="level_show" value="1" checked="checked"/><span id="span<?php echo $i++; ?>"> Show Level</span> |
                        <input id="<?php echo $i; ?>" onchange="Color()" type="checkbox" name="spec_show" value="1" checked="checked"/><span id="span<?php echo $i++; ?>"> Show Talent specs</span><br />
                        <!-- Staty -->
                        <span>Only 4 options will be shown</span><br />
                        <input id="<?php echo $i; ?>" onchange="Color();countCheckedBoxes(this);" <?php echo $chBT; ?> name="hp_show" value="1"<?php chcecked("hp_show"); ?>/><span id="span<?php echo $i++; ?>"> Health</span> |
                        <input id="<?php echo $i; ?>" onchange="Color();countCheckedBoxes(this);" <?php echo $chBT; ?> name="mana_show" value="1"<?php chcecked("mana_show"); ?>/><span id="span<?php echo $i++; ?>"> Mana</span> |
                        <input id="<?php echo $i; ?>" onchange="Color();countCheckedBoxes(this);" <?php echo $chBT; ?> name="sph_show" value="1"<?php chcecked("sph_show"); ?>/><span id="span<?php echo $i++; ?>"> Spell Power/Healing</span> |
                        <input id="<?php echo $i; ?>" onchange="Color();countCheckedBoxes(this);" <?php echo $chBT; ?> name="ap_show" value="1"<?php chcecked("ap_show"); ?>/><span id="span<?php echo $i++; ?>"> Attack Power</span> |
                        <input id="<?php echo $i; ?>" onchange="Color();countCheckedBoxes(this);" <?php echo $chBT; ?> name="mrsc_show" value="1"<?php chcecked("mrsc_show"); ?>/><span id="span<?php echo $i++; ?>"> Critical</span> |
                        <input id="<?php echo $i; ?>" onchange="Color();countCheckedBoxes(this);" <?php echo $chBT; ?> name="dodge_show" value="1"<?php chcecked("dodge_show"); ?>/><span id="span<?php echo $i++; ?>"> Dodge</span> |
                        <input id="<?php echo $i; ?>" onchange="Color();countCheckedBoxes(this);" <?php echo $chBT; ?> name="parry_show" value="1"<?php chcecked("parry_show"); ?>/><span id="span<?php echo $i++; ?>"> Parry</span> |
                        <input id="<?php echo $i; ?>" onchange="Color();countCheckedBoxes(this);" <?php echo $chBT; ?> name="block_show" value="1"<?php chcecked("block_show"); ?>/><span id="span<?php echo $i++; ?>"> Block</span> |
                        <input id="<?php echo $i; ?>" onchange="Color();countCheckedBoxes(this);" <?php echo $chBT; ?> name="haste_show" value="1"<?php chcecked("haste_show"); ?>/><span id="span<?php echo $i++; ?>"> Haste</span>
                    </div>
                </div>
            </form>
        </div>

<?php include("gathering.php"); ?>

        <div class="reklama">
            <!-- REKLAMA, nemusi byt validne -->
            <endora>
                <!-- REKLAMA, koniec -->
        </div>
        <div id="changelog">
            <table id="spoiler_text" style="display: none;">
<?php include "changelog.html"; ?>
            </table>
        </div>
        <div id="changelog_button">
            <h3 id="show_id" onclick="showButton();">Changelog <small>(show)</small></h3>
            <h3 id="spoiler_id" onclick="hideButton();" style="display: none;">Changelog <small>(hide)</small></h3>
        </div>
    </body>
</html>
