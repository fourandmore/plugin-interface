<?hh
namespace Plenty\Plugin;


/**
 * The main application
 */
abstract class Application 
{

	/**
	 * Register a service provider with the application.
	 */
	abstract public function register(
		string $providerClassName
	):\Plenty\Plugin\ServiceProvider;

	/**
	 * Register a binding with the container.
	 */
	abstract public function bind(
		string $abstract, 
		?string $concrete = null
	):void;

	/**
	 * Register a shared binding in the container.
	 */
	abstract public function singleton(
		string $abstract, 
		?string $concrete = null
	):void;

	abstract public function make(
		string $abstract, 
		?array<string, mixed> $parameters = []
	):mixed;

	/**
	 * Throw an HttpException with the given data.
	 */
	abstract public function abort(
		int $code, 
		string $message = "", 
		array<string> $headers = []
	):void;

	/**
	 * Returns current webstoreId
	 */
	abstract public function getWebstoreId(
	):int;

	abstract public function getPlentyId(
	):?int;

}