<?php

var_dump(str_split('What', 3));

var_dump(str_word_count('A galhinha amarelinha bota ovo redondinho', 0));
var_dump(str_word_count('A galhinha amarelinha bota ovo redondinho', 1));
var_dump(str_word_count('A galhinha amarelinha bota ovo redondinho', 2));


// positive counts from the beigining
var_dump(substr('A galhinha amarelinha bota ovo redondinho', 5));

// negative counts from the end
var_dump(substr('A galhinha amarelinha bota ovo redondinho', -5));

// lenght also have other comportament if it is negative
var_dump(substr('A galhinha amarelinha bota ovo redondinho', 5, 3));
var_dump(substr('A galhinha amarelinha bota ovo redondinho', -5, -3));

var_dump(strlen('Teste 123'));

var_dump(mb_strlen('Tesçe 123'));
