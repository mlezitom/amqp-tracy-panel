<?php
namespace Mlezitom\AMQPTracy;

/**
 * AMQP log panel for Tracy
 *
 * @author Mlezitom
 */
class AMQPTracyMessage  {
	/**
	 *
	 * @var DateTime
	 */
	public $date;
	
	/**
	 *
	 * @var string
	 */
	public $remote;
	
	/**
	 *
	 * @var string
	 */
	public $queueName;
	
	/**
	 *
	 * @var string
	 */
	public $msg;

	function getDate() {
		return $this->date;
	}

	function getRemote() {
		return $this->remote;
	}

	function getQueueName() {
		return $this->queueName;
	}

	function getMsg() {
		return $this->msg;
	}

	function setDate(DateTime $date) {
		$this->date = $date;
		return $this;
	}

	function setRemote($remote) {
		$this->remote = $remote;
		return $this;
	}

	function setQueueName($queueName) {
		$this->queueName = $queueName;
		return $this;
	}

	function setMsg($msg) {
		$this->msg = $msg;
		return $this;
	}


}
