<?php
foreach ($CategoryList as $key => $category)
{
    $key++;
    echo $category . "<a href=".route('category.show', ['id' => $key]).">Показать </a><br>";
}

