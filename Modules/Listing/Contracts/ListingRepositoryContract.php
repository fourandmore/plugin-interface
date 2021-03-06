<?php
namespace Plenty\Modules\Listing\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ModelWithUniqueFieldException;
use Plenty\Modules\Listing\Models\Listing;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * The contract for the listing repository.
 */
interface ListingRepositoryContract 
{

	/**
	 * Get a listing by a given id.
	 */
	public function get(
		int $id, 
		array $with = []
	):Listing;

	/**
	 * Search listing
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $with = [], 
		array $filters = []
	):array;

	/**
	 * Create new listing
	 */
	public function create(
		array $data
	):Listing;

	/**
	 * Update listing
	 */
	public function update(
		int $id, 
		array $data
	):Listing;

	/**
	 * Delete listing
	 */
	public function delete(
		int $id
	):bool;

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}