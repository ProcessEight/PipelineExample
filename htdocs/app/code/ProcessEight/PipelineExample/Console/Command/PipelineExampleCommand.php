<?php
/**
 * Copyright © ProcessEight. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace ProcessEight\PipelineExample\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

/**
 * Command for displaying information related to indexers.
 */
class PipelineExampleCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('process-eight:pipeline-example:run')->setDescription('A demonstration of using the pipeline pattern');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
	$output->writeln('You just ran the ' . $this->getName() . ' command.');
    }
}
