<?php

trait A {

    use C;

    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

trait C {
    public function teste()
    {
        echo 'C';
    }
}


class Talker {
    use B, A {
        A::smallTalk insteadOf B;
        A::bigTalk insteadOf B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as protected talk;
    }
}

(new Talker)->sm();
(new Talker)->smallTalk();


exit; 

$talker = new Aliased_Talker;
$talker->smallTalk();
$talker->bigTalk();
$talker->teste();
