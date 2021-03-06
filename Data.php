<?php

class MenuData {
    
    private $menuList;

    function __construct(array $menuList) {
        if (sizeof($menuList)>0) {
            $this->menuList = $menuList;
        } else {
            throw new Exception("No Student record available");
        }
    }

    public function getMenuName() {
        $menuNameList = [];

        foreach($this->menuList as $menu_items) {
            $menuNameList[] = array(
                "prn"=>$menu_items['id'],
                "name"=>$menu_items['name']
            );
        }

        return json_encode($menuNameList);
    }

    public function getMenuById($id) {
        $response = ["In-Valid PRN"];
        if($id) {
            foreach($this->menuList as $menu_items) {
                if ($id == $menu_items['id']) {
                    $response = $menu_items;
                    break;
                }
            }
        }
        return json_encode($response);
    }

    public function getTopperStudent() {
        $menu = null;
        
        $student['grade'] = getGrade($per);
    }

    private function getGrade($per) {
        return "A";
    }

}
?>