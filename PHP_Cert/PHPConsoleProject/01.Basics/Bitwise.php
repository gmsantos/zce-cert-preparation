<?php

/*
 * &  - And        (Both bits 1)
 * |  - Or         (Any bit 1)
 * ^  - Either-Or  (Xor - Either bit 1)
 * >> - Swift Bits (n >> m == n / 2 ^ m)
 * << - Swift Bits (n << m == n * 2 ^ m)
 * ~  - Negates    (O turn to 1, and vice-versa AND add +1)
 * 
 *      8 4 2 1
 * 13   1 1 0 1        -> (8 * 1) + (4 * 1) + (2 * 0) + (1 * 1)
 * 11   1 0 1 1        -> (8 * 1) + (4 * 0) + (2 * 1) + (1 * 1)
 * 10   1 0 1 0        -> (8 * 1) + (4 * 0) + (2 * 1) + (1 * 0)
 *  5   0 1 0 1        -> (8 * 0) + (4 * 1) + (2 * 0) + (1 * 1)
 * 
 */ 

/*
 * & - And
 * 
 *      8 4 2 1
 * 10   1 0 1 0
 * 13   1 1 0 1
 *  ?   1 0 0 0        -> (8 * 1) + (4 * 0) + (2 * 0) + (1 * 0) = 8
 */
echo "& (And)" . PHP_EOL;
echo 10 & 13;
echo PHP_EOL . PHP_EOL;

/*
 * | - Or
 * 
 *      8 4 2 1
 * 10   1 0 1 0
 * 13   1 1 0 1
 *  ?   1 1 1 1         -> (8 * 1) + (4 * 1) + (2 * 1) + (1 * 1) = 15
 */
echo "| (Or)" . PHP_EOL;
echo 10 | 13;
echo PHP_EOL . PHP_EOL;

/*
 * ^ - Either-Or
 * 
 *      8 4 2 1
 * 10   1 0 1 0
 * 13   1 1 0 1
 *  ?   0 1 1 1          -> (8 * 0) + (4 * 1) + (2 * 1) + (1 * 1) = 7
 */
echo "^ (Either-Or)" . PHP_EOL;
echo 10 ^ 13;
echo PHP_EOL . PHP_EOL;

/*
 * >> - Swift Bits Right
 * 
 *      8 4 2 1
 * 10   1 0 1 0  
 *  ?   0 1 0 1  >> 1    -> 10 / 2 ^ 1 = 5
 *  ?   0 0 1 0  >> 2    -> 10 / 2 ^ 2 = 2
 */
echo ">> (Swift Bits Right)" . PHP_EOL;
echo 10 >> 1;
echo PHP_EOL;

echo 10 >> 2;
echo PHP_EOL . PHP_EOL;

/*
 * << - Swift Bits Left
 * 
 *      8 4 2 1
 *  3   0 0 1 1  
 *  ?   0 1 1 0  << 1    -> 3 * 2 ^ 1 = 6
 *  ?   1 1 0 0  << 2    -> 3 * 2 ^ 2 = 12
 */
echo "<< (Swift Bits Left)" . PHP_EOL;
echo 3 << 1;
echo PHP_EOL;

echo 3 << 2;
echo PHP_EOL . PHP_EOL;

/*
 * ~ - Negate
 * 
 *       8 4 2 1
 * 10    1 0 1 0
 * ~ 10  0 1 0 1
 * & 13  1 1 0 1
 *   ?   0 1 0 1         -> (8 * 0) + (4 * 1) + (2 * 0) + (1 * 1) = 5
 *
 */
echo "~ (Negate)" . PHP_EOL;
echo 13 & ~10;
echo PHP_EOL;
