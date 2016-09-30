<?php

namespace Darovi;

trait Gravatar
{
	protected function emailAttributeName()
	{
		return 'email';
	}

	public function getGravatarAttribute()
	{
		$email = $this->attributes[$this->emailAttributeName()];
		$hash = md5(strtolower(trim($email)));
		return "https://secure.gravatar.com/avatar/$hash?d=mm";
	}
}
