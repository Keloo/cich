<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    /**
     * @return array
     */
    protected function getMenu() {
        $menus = DB::select("select * from menu where parent_id = 0");

        $relativeMenu = array();
        foreach($menus as $value) {
            $relativeMenu[$value->id] = $value;
            $relativeMenu[$value->id]->submenus = DB::select("select * from menu where parent_id = ?", array($value->id));
            foreach ($relativeMenu[$value->id]->submenus as $key => $submenu) {
                if (!$submenu->url) {
                    $pageForSubmenu = DB::select("select * from pages where menu_id = ?", array($submenu->id));
                    if ($pageForSubmenu) {
                        $relativeMenu[$value->id]->submenus[$key]->page = $pageForSubmenu[0];
                    }
                }
            }
        }

        return $relativeMenu;
    }

    /**
     * @return mixed
     */
    public function page($id)
    {
        $currentPage = DB::select("select * from pages where id = ?", array($id))[0];

        $data = array();
        $data['relativeMenu'] = $this->getMenu();
        $data['currentPage'] = $currentPage;

        return View::make('page', $data);
    }

    public function index() {
        $events = DB::select("SELECT * FROM events ORDER BY id DESC");

        $data = array();
        $data['relativeMenu'] = $this->getMenu();
        $data['events'] = $events;

        return View::make('main', $data);
    }

    /**
     * @return mixed
     */
    public function search() {
        $searchText = Input::get('search_text');

        $result = DB::select("select * from pages where text like ?", array('%'. $searchText .'%'));

        $data = array();
        $data['relativeMenu'] = $this->getMenu();
        $data['pages'] = $result;

        return View::make('search', $data);
    }

}