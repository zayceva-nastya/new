function html2txt($document){
$search = ['/\<(.*?)\>\<\/(.*?)\>/si',  // Strip out javascript
               '@<style[^>]*?>(.*?)</style>@siU',    // Strip style tags properly
               '@<style>(.*?)</style>@siU',    // Strip style tags properly
                '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
               '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments including CDATA
];
$text = preg_replace($search, '', $document);
return $text;
}

function html2txt($document){ 
$search = array(  
               '@<style[^>]*?>(.*?)</style>@siU',    // Strip style tags properly 
               '@<style>(.*?)</style>@siU',    // Strip style tags properly 
                '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags 
               '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments including CDATA 
); 
$text = preg_replace($search, '', $document); 
return $text;