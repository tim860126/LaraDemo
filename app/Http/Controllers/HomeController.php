<?PHP
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ShareData;

class HomeController extends Controller
{
	 public function indexPage()
	 {
	     $name = 'home';
	     $binding = [
	                'title' => ShareData::TITLE,
	                'name' => $name,
	     ];
	     return view('home', $binding);
         }
}
?>
