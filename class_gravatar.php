<?php
/**
 * PHP Gravatar
 *
 *
 * @author Dan Rovito <danrovito.com>
 * @version 1
 */
class gravatar
{
  public function getGravatarAttribute()
	{
    	$hash = md5(strtolower(trim($this->attributes['email'])));    	
    	return "https://secure.gravatar.com/avatar/$hash?d=mm";
	}
}
