<?php

$mystr = "HelllAe";

//var_dump(count_chars($mystr, 0)); // array occorrencia de todos caracteres ASCII
//var_dump(count_chars($mystr, 1)); // só o que for encontrado, no formato chave e vezes de ocorrencia
//var_dump(count_chars($mystr, 2)); // Diff do mode 1 (todos caracteres não definidos na string)

//var_dump(count_chars($mystr, 3)); // representacao em letras que ocorrem na string - chr(number) - parecido modo 1
//var_dump(count_chars($mystr, 4)); // Diff das letras que ocorrem - chr() parecido modo 2

echo strlen($mystr);
