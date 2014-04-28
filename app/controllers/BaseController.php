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
     * @return mixed
     */
    public function page($id)
    {
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

//        echo '<pre>';
//        var_dump($relativeMenu);
//        die();
        $currentPage = DB::select("select * from pages where id = ?", array($id))[0];


        $data = array();
        $data['relativeMenu'] = $relativeMenu;
        $data['currentPage'] = $currentPage;

        return View::make('page', $data);
    }

    public function index() {
        $menus = DB::select("select * from menu where parent_id = 0");
        $events = DB::select("SELECT * FROM events ORDER BY id DESC");

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

        $data = array();
        $data['relativeMenu'] = $relativeMenu;
        $data['events'] = $events;

        return View::make('main', $data);
    }

}