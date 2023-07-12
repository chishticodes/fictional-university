<?php
function myFirstFunction($name, $color)
{
  echo "<p>hello my name is $name my favorite color is $color </p>";
}
myFirstFunction('bilal', 'green');
myFirstFunction('hasan', 'blue');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
<!-- array -->
<?php

$myName = 'Bilal';
$names = ['hasan', 'sarim', 'sajjjad']

?>

<p>my name is <?php echo $myName ?></p>
<?php foreach ($names as $name) : ?>
  <p>my friends are <?php echo $name ?></p>
<?php endforeach; ?>

<!-- doing same using a while loop -->
<?php
$count = 0;
while ($count < count($names)) {
  echo "<p>my friends are  $names[$count] </p>";
  $count++;
}
?>