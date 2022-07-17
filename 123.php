$word = "malayal";

$j = strlen ($word)-1;
$pal = true;

for ($i = 0; $i < strlen($word)/2; ++$i, --$j) {

    // skip spaces
    while ($word[$i] === " ") {$j++;}
    while ($word[$j] === " ") {$i--;}

    echo "$word[$i]== $word[$j]\n";
    if ($word[$i] = $word[$j])    {
        $pal = false;
        break;
        }
}

if ($pal) print "no"; else print "yes";