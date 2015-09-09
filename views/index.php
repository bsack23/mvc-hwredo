<h1><?php echo $welcome; ?></h1>
<ul>
<?php
foreach ($events as $myevent) {
    echo "<li>" . $myevent->program . " " . $myevent->end_date . "</li>\n";
}
?>
</ul>