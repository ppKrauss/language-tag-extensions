<?php
/**
 * Extract all lang codes and basic metadata of 
 * @author https://github.com/ppKrauss
 */

$dir= 'main';

$dom = new DOMDocument;
$n=0;
print "lang,langType,territory,revGenDate,defs,file";
foreach(scandir($dir) as $file) if (strpos($file,'.xml')) {
    $lang = preg_replace('/\.xml$/','',$file);
    $lang = strtr($lang,'_','-');
    $dom->load("$dir/$file");
    $xp = new DOMXpath($dom);
    $revGenDate = $xp->evaluate("string(/ldml/identity/generation/@date)");
    $langType   = $xp->evaluate("string(/ldml/identity/language/@type)");
    $territory  = $xp->evaluate("string(/ldml/identity/territory/@type)");
    $defs       = $xp->evaluate("count(/ldml/*[not(self::identity)])");
    $revGenDate = preg_replace('/^[^\d]+(\d+\-\d+\-\d+).+$/','$1',$revGenDate);
    print "\n$lang,$langType,$territory,$revGenDate,$defs,$file";
    $n++;
}
//print "\n--- end $n lang codes \n";
?>