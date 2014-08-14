<?php
/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Rocketeer\Tasks\Subtasks;

use Rocketeer\Abstracts\AbstractTask;

class CreateRelease extends AbstractTask
{
	/**
	 * A description of what the task does
	 *
	 * @var string
	 */
	protected $description = 'Creates a new release on the server';

	/**
	 * Run the task
	 *
	 * @return string
	 */
	public function execute()
	{
		return $this->getStrategy('Deploy')->deploy();
	}
}
