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

/**
 * Class PipelineExampleModel
 *
 * An example of how to inject a re-usable pipeline into a generic class
 */
class PipelineExampleModel
{
    /**
     * @var MathPipeline
     */
    protected $mathPipeline;

    /**
     * MathPipeline constructor.
     *
     * @param MathPipeline $mathPipeline
     */
    public function __construct(MathPipeline $mathPipeline)
    {
        $this->mathPipeline = $mathPipeline;
    }

    /**
     * @return int
     */
    public function run() : int
    {
        $mathPipeline = $this->mathPipeline;

        return $mathPipeline->processPipeline();
    }
}