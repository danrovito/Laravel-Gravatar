<?php

namespace Darovi;

trait Gravatar
{
	public function getGravatarAttribute()
	{
		$hash = md5(strtolower(trim($this->attributes['email'])));    	
		return "https://secure.gravatar.com/avatar/$hash?d=mm";
	}
}
