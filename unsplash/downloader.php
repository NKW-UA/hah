<?php
if(isset($_POST['datas']) and $_POST['datas'] != ''){
	
		$url = $_POST['datas'];
	
		$locale_url = 'images/' . explode('/', explode('?', $url)[0])[3];
		
		if(isset($_GET['onlyUrl']) and $_GET['onlyUrl'] != ''){
			echo $locale_url;
		}else{
			if (!file_exists($locale_url)) {
				file_put_contents($locale_url, file_get_contents($url));
			}
		}
}else
	foreach($urls as $url){
		// https://images.unsplash.com/photo-1587613991519-d15d73f62b44?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=675&q=80
		
		$locale_url = 'unsplash/images/' . explode('/', explode('?', $url)[0])[3];
		
		if (!file_exists($locale_url)) {
			file_put_contents($locale_url, file_get_contents($url));
		}	

		echo $first . $locale_url . $second . $locale_url . $third . "\r\n";
	}
