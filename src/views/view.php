<?php
namespace stormwind\hw3\views;
echo "<link rel='stylesheet'href='https://bootswatch.com/readable/bootstrap.min.css'>";


abstract class View{
	abstract public function render($data);
}
?>
