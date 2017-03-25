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

---

<?php $category = get_the_category();  ?>
<div><?php
$limitadorCats = get_the_category();
$contador=0; $lista='';
if ($limitadorCats) {
	foreach($limitadorCats as $category) {
		$contador++;
		echo  $lista . '<a title="' . $category->name . '" href="'.  get_category_link(get_cat_id($category->cat_name)) .'"> ' . $category->name . '</a>' ;
$lista = ', ';
		if( $contador > 4 ) break; //exibe apenas em 5 categorias
	}
}
?> ><div>
