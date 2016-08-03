 AMQP panel for Tracy (Nette debugger)
	

USAGE:
========
Initialize:
	Tracy\Debugger::getBar()->addPanel(AMQPTracyPanel::getInstance('amqp'), 'amqp');

Log call:

	$logger instanceof AMQPTracyPanel();

	$logItem = new \AMQPTracyMessage();
	
	$logItem->setDate(new DateTime);
	$logItem->setQueueName($routingKey);

	$logItem->setMsg($jsonPayload);

	$logger->addMessage($logItem);

========