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

class MathPipeline
{
    /**
     * @var Pipeline
     */
    protected $pipeline;

    /**
     * MathPipeline constructor.
     *
     * @param Pipeline $pipeline
     */
    public function __construct(Pipeline $pipeline)
    {
        $this->pipeline = $pipeline;
    }

    /**
     * @return int
     */
    public function run() : int
    {
        $pipeline = $this->pipeline;

        $pipeline
            ->pipe(new TimesTwoStage)
            ->pipe(new AddOneStage)
        ;

        return $pipeline->process(10);
    }
}