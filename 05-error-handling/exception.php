<?php

try {
    //throw new UnexpectedValueException();
    //throw new OverflowException();
    //throw new DomainException();

    $teste = 123 % 0;

} catch (UnexpectedValueException | OverflowException $e) {
    echo get_class($e) . ' tratamento de UnexpectedValueException ou OverflowException';
} catch (RuntimeException $e) {
    echo get_class($e) . ' tratamento de RuntimeException';
} catch (Exception $e) {
    echo get_class($e) . ' tratamento de Exception';
} catch (DivisionByZeroError $e) {
    echo get_class($e) . ' tratamento de Divisao por zero';
} finally {
    
}
