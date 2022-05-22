<?php
require ('sell_pepper.php');
header("Content-type: text/xml");
echo("<?xml version=\"1.0\"?>\n");

?>

<vxml version="2.0">
  <form>
    <block>
      <var name="weight1" expr="'<?php echo($quantity1)?>'"/>
      <var name="weight2" expr="'<?php echo($quantity2)?>'"/>
      <var name="weight3" expr="'<?php echo($quantity3)?>'"/>
     <var name="call4" expr="'<?php echo($phone1)?>'"/>
      <var name="call5" expr="'<?php echo($phone2)?>'"/>
      <var name="call6" expr="'<?php echo($phone3)?>'"/>
      <return namelist="weight1 weight2 weight3 call4 call5 call6"/>
    </block>
  </form>
</vxml>