<?php
// show the article rating selection in the form
echo "<tr><td><p>". $rating_select. ":</p></td>";
echo "<td style='text-align:right;'>\n";
echo "<select name='art_rating'>";
for ($i=0;$i<count($ratings); $i++){
	echo "<option value='". $i. "'>";
	if ($i!=0) { echo $i. " - ";}
	echo $ratings[$i]. "</option>\n";
}
echo "</select></td></tr>";
?>