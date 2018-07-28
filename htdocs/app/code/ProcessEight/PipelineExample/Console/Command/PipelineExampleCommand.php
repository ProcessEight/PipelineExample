<?php
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

use ProcessEight\PipelineExample\Model\MathPipeline;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

/**
 * Command for demonstrating pipeline pattern
 */
class PipelineExampleCommand extends Command
{
    /**
     * @var MathPipeline
     */
    protected $mathPipeline;

    /**
     * PipelineExampleCommand constructor.
     *
     * @param MathPipeline $mathPipeline
     * @param string|null  $name
     */
    public function __construct(MathPipeline $mathPipeline, string $name = null)
    {
        $this->mathPipeline = $mathPipeline;

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
        $processedPayload = $this->mathPipeline->run();

        $output->writeln('The result is (should be 21): ' . $processedPayload);
    }
}
