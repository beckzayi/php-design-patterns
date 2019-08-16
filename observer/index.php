<?php
// Publisher
interface Subject {
    public function attach(Observer $observer);
    public function detach($index);
    public function notify();
}

// Subscriber
interface Observer {
    public function handle();
}

class Login implements Subject {
    protected $observers = [];

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
        return $this;
    }

    public function detach($index) {
        unset($this->observers[$index]);
        return $this;
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }
}

class LogHandler implements Observer {
    public function handle() {
        var_dump('Log handler handling');
    }
}

class EmailHandler implements Observer {
    public function handle() {
        var_dump('Email handler emailing');
    }
}

$login = new Login;
$login->attach(new LogHandler);
$login->attach(new LogHandler);
$login->attach(new EmailHandler);

$login->notify();
