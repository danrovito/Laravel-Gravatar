<?php
/**
 * Gravatario
 *
 *
 * @author Dan Rovito <danrovito.com>
 * @version 1
 */
class gravatar
{
	trait Gravatario
	{
		public function getGravatarAttribute()
		{
			$hash = md5(strtolower(trim($this->attributes['email'])));    	
			return "https://secure.gravatar.com/avatar/$hash?d=mm";
		}
	}
}
