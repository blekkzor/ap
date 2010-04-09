<?php

/**
 * BaseaMediaPageCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $page_id
 * @property integer $media_category_id
 * @property aMediaCategory $aMediaCategory
 * @property aPage $aPage
 * 
 * @method integer            getPageId()            Returns the current record's "page_id" value
 * @method integer            getMediaCategoryId()   Returns the current record's "media_category_id" value
 * @method aMediaCategory     getAMediaCategory()    Returns the current record's "aMediaCategory" value
 * @method aPage              getAPage()             Returns the current record's "aPage" value
 * @method aMediaPageCategory setPageId()            Sets the current record's "page_id" value
 * @method aMediaPageCategory setMediaCategoryId()   Sets the current record's "media_category_id" value
 * @method aMediaPageCategory setAMediaCategory()    Sets the current record's "aMediaCategory" value
 * @method aMediaPageCategory setAPage()             Sets the current record's "aPage" value
 * 
 * @package    content
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaMediaPageCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_media_page_category');
        $this->hasColumn('page_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('media_category_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('aMediaCategory', array(
             'local' => 'media_category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('aPage', array(
             'local' => 'page_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}