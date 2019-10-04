<?php
/************************************************************
 * *
 *  * Copyright © 2019 Boolfly. All rights reserved.
 *  * See COPYING.txt for license details.
 *  *
 *  * @author    info@boolfly.com
 * *  @project   Banner Slider
 */
namespace Boolfly\BannerSlider\Model;

use Boolfly\BannerSlider\Api\Data\SliderInterface;
use Boolfly\BannerSlider\Model\ResourceModel\Slider as SliderResourceModel;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Slider
 *
 * @package Boolfly\BannerSlider\Model
 */
class Slider extends AbstractModel implements SliderInterface
{

    /**
     * Initialize resource model
     * @return void
     */
    public function _construct()
    {
        $this->_init(SliderResourceModel::class);
    }

    /**
     * Get Title
     *
     * @return string|null
     * @since 1.0.0
     */
    public function getTitle()
    {
        return $this->_getData(self::TITLE);
    }

    /**
     * Set Title
     *
     * @param string $title
     *
     * @return $this
     * @since 1.0.0
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * Get Status
     *
     * @return boolean
     * @since 1.0.0
     */
    public function getStatus()
    {
        return $this->_getData(self::STATUS);
    }

    /**
     * Set Status
     *
     * @param int|boolean $status
     *
     * @return $this
     * @since 1.0.0
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, (bool)$status);
    }

    /**
     * Get Display Title
     *
     * @return boolean
     * @since 1.0.0
     */
    public function getDisplayTitle()
    {
        return (boolean)$this->_getData(self::DISPLAY_TITLE);
    }

    /**
     * Set Display Title
     *
     * @param bool|int $displayTitle
     *
     * @return $this
     * @since 1.0.0
     */
    public function setDisplayTitle($displayTitle)
    {
        return $this->setData(self::DISPLAY_TITLE, (boolean) $displayTitle);
    }

    /**
     * Get Mode
     *
     * @return int
     * @since 1.0.0
     */
    public function getMode()
    {
        return (int)$this->_getData(self::MODE);
    }

    /**
     * Set Mode
     *
     * @param string|int $mode
     *
     * @return $this
     * @since 1.0.0
     */
    public function setMode($mode)
    {
        return $this->setData(self::MODE, (int)$mode);
    }

    /**
     * Get Animation Effect
     *
     * @return string|null
     * @since 1.0.0
     */
    public function getAnimationEffect()
    {
        return $this->_getData(self::ANIMATION_EFFECT);
    }

    /**
     * Set Animation Effect
     *
     * @param string $effect
     *
     * @return $this
     * @since 1.0.0
     */
    public function setAnimationEffect($effect)
    {
        return $this->setData(self::ANIMATION_EFFECT, $effect);
    }

    /**
     * Check Auto Play
     *
     * @return boolean
     * @since 1.0.0
     */
    public function isAutoPlay()
    {
        return (boolean)$this->_getData(self::AUTO_PLAY);
    }

    /**
     * Set Auto Play
     *
     * @param int|boolean $autoPlay
     *
     * @return $this
     * @since 1.0.0
     */
    public function setAutoPlay($autoPlay)
    {
        return $this->setData(self::AUTO_PLAY, (int)$autoPlay);
    }

    /**
     * Get Speed
     *
     * @return int|null
     * @since 1.0.0
     */
    public function getSpeed()
    {
        return $this->_getData(self::SPEED);
    }

    /**
     * Set Speed
     *
     * @param string $speed
     *
     * @return $this
     * @since 1.0.0
     */
    public function setSpeed($speed)
    {
        return $this->setData(self::SPEED, (int)$speed);
    }

    /**
     * Get Position
     *
     * @return string|null
     * @since 1.0.0
     */
    public function getPosition()
    {
        return $this->_getData(self::POSITION);
    }

    /**
     * Set Position
     *
     * @param string $position
     *
     * @return $this
     * @since 1.0.0
     */
    public function setPosition($position)
    {
        return $this->setData(self::POSITION, $position);
    }
}