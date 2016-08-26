<?hh
namespace Plenty\Modules\Order\Events\Created;


/**
 * An event class fired after a new sales order is created.
 */
abstract class SalesOrderCreated 
{

	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array<string, mixed>
	{
		return [];
	}

}