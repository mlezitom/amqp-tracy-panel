<?php
namespace Mlezitom\AMQPTracy;

/**
 * AMQP log panel for Tracy
 *
 * @author Mlezitom
 */
class AMQPTracyPanel extends \Nette\Object implements Tracy\IBarPanel {
	
	/**
	 *
	 * @var AMQPTracyMessage[]
	 */
	public $messages = [];
	
	private $id;
	
	/**
	 *
	 * @var AMQPTracyPanel
	 */
	public static $instance;
	
	/**
	 * 
	 * @param string $id
	 * @return AMQPTracyPanel
	 */
	public static function getInstance($id) {
		if(!self::$instance) {
			self::$instance = new self($id);
		}
		return self::$instance;
	}
	
	public function __construct($id)
	{
		$this->id = $id;
	}
	
	public function getTab()
    {
        $templateFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'amqpTracyBar.latte';
        $engine = new \Latte\Engine();
		return $engine->renderToString($templateFile, [
			'cnt' => count($this->messages)
		]);
    }

    public function getPanel()
    {
        $templateFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'amqpTracyPanel.latte';
		
		$engine = new \Latte\Engine();
		return $engine->renderToString($templateFile, [
			'messages' => $this->messages
		]);
    }
	
	public function addMessage(AMQPTracyMessage $msg) {
		$this->messages[] = $msg;
	}
}
