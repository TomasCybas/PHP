<?php

function register_menu(){
    register_nav_menus([
        "top_menu" => "Top Menu",
        "bottom_menu" => "Bottom menu",
        "popup_menu" => "PopUp Menu"
    ]);
}

add_action("init", "register_menu");


class TopMenuWalker extends Walker_Nav_Menu{

}
