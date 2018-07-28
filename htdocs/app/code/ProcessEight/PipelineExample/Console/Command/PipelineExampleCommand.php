<?php
/**
 * ProcessEight
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact ProcessEight for more information.
 *
 * @category    pipeline-example
 * @copyright   Copyright (c) 2018 ProcessEight
 * @author      ProcessEight
 *
 */

namespace ProcessEight\PipelineExample\Console\Command;

use ProcessEight\PipelineExample\Model\PipelineExampleModel;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

/**
 * Command for demonstrating pipeline pattern
 */
class PipelineExampleCommand extends Command
{
    /**
     * @var PipelineExampleModel
     */
    protected $pipelineExample;

    /**
     * PipelineExampleCommand constructor.
     *
     * @param PipelineExampleModel $pipelineExample
     * @param string|null          $name
     */
    public function __construct(PipelineExampleModel $pipelineExample, string $name = null)
    {
        $this->pipelineExample = $pipelineExample;

        parent::__construct($name);
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('process-eight:pipeline-example:run')
             ->setDescription('A demonstration of using the pipeline pattern')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $processedPayload = $this->pipelineExample->run();

        $output->writeln('The result is (should be 21): ' . $processedPayload);
    }
}
