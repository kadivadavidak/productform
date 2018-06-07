<?php

function siteName()
{
    echo config('name');
}

function siteVersion()
{
    echo config('version');
}

function pageTitle()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';

    echo ucwords(str_replace('-', ' ', $page));
}

function pageContent()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    $path = getcwd().'/'.config('content_path').'/'.$page.'.php';

    if (file_exists(filter_var($path, FILTER_SANITIZE_URL))) {
        include $path;
    } else {
        include config('content_path').'/404.php';
    }
}

function run()
{
    include config('template_path').'/template.php';
}

function initProducts() {
    return $products = [
        ['title' => '3/4" MDF Panel', 'description' => 'Only the best!', 'price' => 32.95, 'quantity' => 7, 'image' => '34mdfPanel.jpg'],
        ['title' => 'Quarter Sawn Oak Door', 'description' => 'This is a true beauty.', 'price' => 87.36, 'quantity' => 18, 'image' => 'qsDoor.jpg'],
        ['title' => 'Ebony Edge Banding', 'description' => 'Give it that missing pop.', 'price' => 17.89, 'quantity' => 8, 'image' => 'ebonyBanding.jpg'],
        ['title' => 'Soft Close Hinges - 25 pc.', 'description' => 'Never slam them again!', 'price' => 75.48, 'quantity' => 13, 'image' => 'scHinge.jpg'],
        ['title' => 'Bronze Handle', 'description' => 'Strong and gorgeous!', 'price' => 3.00, 'quantity' => 58, 'image' => 'bHanld.jpg'],
    ];
}
function getProducts($products) {
    $t = "";

    foreach ($products as $product) {				
		$t .= "
<tr>
    <td>{$product['title']}</td>
	<td>{$product['description']}</td>
	<td>{$product['price']}</td>
	<td>{$product['quantity']}</td>
	<td>{$product['image']}</td>
</tr>";
	};
	
	echo $t;
}