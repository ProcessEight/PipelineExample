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

namespace ProcessEight\PipelineExample\Model;

use League\Pipeline\Pipeline;

/**
 * Class MathPipeline
 *
 * An example of a re-usable pipeline which takes the number ten,
 * multiplies it by two, adds one and returns the result
 */
class MathPipeline
{
    /**
     * @var Pipeline
     */
    protected $pipeline;

    /**
     * @var TimesTwoStage
     */
    private $timesTwoStage;

    /**
     * @var AddOneStage
     */
    private $addOneStage;

    /**
     * MathPipeline constructor.
     *
     * @param Pipeline      $pipeline
     * @param TimesTwoStage $timesTwoStage
     * @param AddOneStage   $addOneStage
     */
    public function __construct(
        Pipeline $pipeline,
        TimesTwoStage $timesTwoStage,
        AddOneStage $addOneStage
    ) {
        $this->pipeline = $pipeline;
        $this->timesTwoStage = $timesTwoStage;
        $this->addOneStage = $addOneStage;
    }

    /**
     * Execute the pipeline
     *
     * @return int
     */
    public function processPipeline() : int
    {
        $pipeline = $this->pipeline
            ->pipe($this->timesTwoStage)
            ->pipe($this->addOneStage)
        ;

        return $pipeline->process(10);
    }
}