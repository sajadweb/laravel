<?php


namespace App\Concern;


trait Me
{
    public function scopeMe()
    {
        return $this->where($this->meKey, auth()->id());
    }
}
