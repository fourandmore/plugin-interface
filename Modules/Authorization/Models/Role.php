<?php
namespace Plenty\Modules\Authorization\Models;


/**
 * The Role authentication model
 */
abstract class Role 
{
	public		$id;
	public		$name;
	public		$holdParents;
	public		$hidden;
	public		$users;
	public		$permissions;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}