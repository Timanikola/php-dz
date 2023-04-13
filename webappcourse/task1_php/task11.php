<?php
$lang='ru';
if ($lang=='ru') {
    $arr=['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'];
    echo "<pre>" ;print_r ($arr);"</pre>";
}
if ($lang=='en') {
    $arr=['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
    echo "<pre>" ;print_r ($arr);"</pre>";
}
// echo $arr;

?>

<?php
	$lang = 'en';
	switch ($lang) {
		case 'ru':
			$arr = ['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'];
            echo "<pre>" ;print_r ($arr);"</pre>";
		break;
		case 'en':
			$arr = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
            echo "<pre>" ;print_r ($arr);"</pre>";
		break;
	}
?>
<?php
    $lang='ru';
    $arr=[
        'ru'=>['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'],
        'en'=>['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
    ];
    echo "<pre>" ;print_r ($arr[$lang]);"</pre>";
    


