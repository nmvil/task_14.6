<?php 
	const MODULES = 48; 
	$complete = 14;

?>

<?php
	// функция floor округляет число в меньшую сторону
	echo 'Я изучил ' . $complete . ' модулей на курсе "Профессия Веб-разработчик". Это составляет ' .
		floor($complete / MODULES * 100) . '% от всего курса' ;
?>