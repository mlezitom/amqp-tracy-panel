<?php

Tracy\Debugger::getBar()->addPanel(AMQPTracyPanel::getInstance('amqp'), 'amqp');