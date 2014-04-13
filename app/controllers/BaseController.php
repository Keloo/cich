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
            $relativeMenu[$value->id] = new stdClass();
            $relativeMenu[$value->id]->name = $value->name;
            $relativeMenu[$value->id]->submenus = DB::select("select * from menu where parent_id = ?", array($value->id));
            foreach ($relativeMenu[$value->id]->submenus as $key => $submenu) {
                $relativeMenu[$value->id]->submenus[$key]->page = DB::select("select * from pages where menu_id = ?", array($submenu->id))[0];
            }

        }
        $pages = DB::select("select * from pages");
        $currentPage = DB::select("select * from pages where id = ?", array($id))[0];


        $data = array();
        $data['relativeMenu'] = $relativeMenu;
        $data['pages'] = $pages;
        $data['currentPage'] = $currentPage;

        return View::make('page', $data);
    }

}