<?php

namespace mageekguy\atoum\phpunit\constraints;

use
	mageekguy\atoum\phpunit\constraint,
	mageekguy\atoum\exceptions,
	mageekguy\atoum\asserters,
	mageekguy\atoum\tools\variable\analyzer
;

class containsOnlyInstancesOf extends constraint
{
	private $analyzer;
	private $expected;

	public function __construct($expected, $description = null, analyzer $analyzer = null)
	{
		$this->analyzer = $analyzer ?: new analyzer();
		$this->expected = $expected;
		$this->description = $description;
	}

	protected function matches($actual)
	{
		if ($this->analyzer->isArray($actual) === false && $actual instanceof \traversable === false)
		{
			throw new \PHPUnit_Framework_Exception('Actual value of ' . __CLASS__ . ' must be an array or a traversable object');
		}

		try
		{
			$asserter = new asserters\object(null, $this->analyzer);

			foreach ($actual as $value)
			{
				$asserter->setWith($value)->isInstanceOf($this->expected);
			}
		}
		catch (exceptions\logic $exception)
		{
			throw new \PHPUnit_Framework_Exception('Expected value of ' . __CLASS__ . ' must be a class instance or class name');
		}
	}
}
