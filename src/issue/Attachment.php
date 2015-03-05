<?php

namespace JiraRestApi\Issue;

class Attachment implements \JsonSerializable{	
  	/* @var string */
    public $self;

    /* @var string */
    public $id;

   /* @var string */
   public $filename;

   /* @var Reporter */
   public $author;

   /* @var DateTime */
   public $created;

   /* @var int */
   public $size;

   /* @var string */
   public $mimeType;

   /* @var string */
   public $content;

    /* @var string */
   public $thumbnail;
   
   public function jsonSerialize()
   {
      return array_filter(get_object_vars($this));
   }
}

?>