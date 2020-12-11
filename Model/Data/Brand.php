<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\RewardPointsGraphQl\Model\Data;

use Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface;

class RewardPoints extends \Magento\Framework\Api\AbstractExtensibleObject implements RewardPointsInterface
{

    /**
     * Get rewardPoints_id
     * @return string|null
     */
    public function getRewardPointsId()
    {
        return $this->_get(self::BRAND_ID);
    }

    /**
     * Set rewardPoints_id
     * @param string $rewardPointsId
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setRewardPointsId($rewardPointsId)
    {
        return $this->setData(self::BRAND_ID, $rewardPointsId);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \Lof\RewardPointsGraphQl\Api\Data\RewardPointsExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Lof\RewardPointsGraphQl\Api\Data\RewardPointsExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get name
     * @return string|null
     */
    public function getName()
    {
        return $this->_get(self::NAME);
    }

    /**
     * Set name
     * @param string $name
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get url_key
     * @return string|null
     */
    public function getUrlKey()
    {
        return $this->_get(self::URL_KEY);
    }

    /**
     * Set url_key
     * @param string $urlKey
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setUrlKey($urlKey)
    {
        return $this->setData(self::URL_KEY, $urlKey);
    }

    /**
     * Get description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->_get(self::DESCRIPTION);
    }

    /**
     * Set description
     * @param string $description
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * Get group_id
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->_get(self::GROUP_ID);
    }

    /**
     * Set group_id
     * @param string $groupId
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setGroupId($groupId)
    {
        return $this->setData(self::GROUP_ID, $groupId);
    }

    /**
     * Get image
     * @return string|null
     */
    public function getImage()
    {
        return $this->_get(self::IMAGE);
    }

    /**
     * Set image
     * @param string $image
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setImage($image)
    {
        return $this->setData(self::IMAGE, $image);
    }

    /**
     * Get thumbnail
     * @return string|null
     */
    public function getThumbnail()
    {
        return $this->_get(self::THUMBNAIL);
    }

    /**
     * Set thumbnail
     * @param string $thumbnail
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setThumbnail($thumbnail)
    {
        return $this->setData(self::THUMBNAIL, $thumbnail);
    }

    /**
     * Get page_title
     * @return string|null
     */
    public function getPageTitle()
    {
        return $this->_get(self::PAGE_TITLE);
    }

    /**
     * Set page_title
     * @param string $pageTitle
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setPageTitle($pageTitle)
    {
        return $this->setData(self::PAGE_TITLE, $pageTitle);
    }

    /**
     * Get meta_keywords
     * @return string|null
     */
    public function getMetaKeywords()
    {
        return $this->_get(self::META_KEYWORDS);
    }

    /**
     * Set meta_keywords
     * @param string $metaKeywords
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setMetaKeywords($metaKeywords)
    {
        return $this->setData(self::META_KEYWORDS, $metaKeywords);
    }

    /**
     * Get meta_description
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->_get(self::META_DESCRIPTION);
    }

    /**
     * Set meta_description
     * @param string $metaDescription
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setMetaDescription($metaDescription)
    {
        return $this->setData(self::META_DESCRIPTION, $metaDescription);
    }

    /**
     * Get creation_time
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->_get(self::CREATION_TIME);
    }

    /**
     * Set creation_time
     * @param string $creationTime
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setCreationTime($creationTime)
    {
        return $this->setData(self::CREATION_TIME, $creationTime);
    }

    /**
     * Get update_time
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->_get(self::UPDATE_TIME);
    }

    /**
     * Set update_time
     * @param string $updateTime
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

    /**
     * Get page_layout
     * @return string|null
     */
    public function getPageLayout()
    {
        return $this->_get(self::PAGE_LAYOUT);
    }

    /**
     * Set page_layout
     * @param string $pageLayout
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setPageLayout($pageLayout)
    {
        return $this->setData(self::PAGE_LAYOUT, $pageLayout);
    }

    /**
     * Get layout_update_xml
     * @return string|null
     */
    public function getLayoutUpdateXml()
    {
        return $this->_get(self::LAYOUT_UPDATE_XML);
    }

    /**
     * Set layout_update_xml
     * @param string $layoutUpdateXml
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setLayoutUpdateXml($layoutUpdateXml)
    {
        return $this->setData(self::LAYOUT_UPDATE_XML, $layoutUpdateXml);
    }

    /**
     * Get status
     * @return string|null
     */
    public function getStatus()
    {
        return $this->_get(self::STATUS);
    }

    /**
     * Set status
     * @param string $status
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get featured
     * @return string|null
     */
    public function getFeatured()
    {
        return $this->_get(self::FEATURED);
    }

    /**
     * Set featured
     * @param string $featured
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setFeatured($featured)
    {
        return $this->setData(self::FEATURED, $featured);
    }

    /**
     * Get position
     * @return string|null
     */
    public function getPosition()
    {
        return $this->_get(self::POSITION);
    }

    /**
     * Set position
     * @param string $position
     * @return \Lof\RewardPointsGraphQl\Api\Data\RewardPointsInterface
     */
    public function setPosition($position)
    {
        return $this->setData(self::POSITION, $position);
    }
}
