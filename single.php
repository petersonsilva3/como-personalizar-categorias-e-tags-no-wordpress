<?php
  if (get_the_tags()) { ?>
<div><?php
$limitadorTags = get_the_tags();
$contador=0; $lista='';
if ($limitadorTags) {
	echo 'Tags: ';
	foreach($limitadorTags as $tag) {
		$contador++;
		echo $lista . '<a rel="tag" href="'.get_tag_link($tag->term_id).'" title="'.$tag->name.'">'.$tag->name.'</a>';
$lista = ', ';
		if( $contador > 4 ) break; //exibe apenas em 5 tags
	}
}
?></div>
<?php
  } ?>
