<?php
class reeder_shortcuts extends Plugin {

	private $host;

	function about() {
		return array(1.0,
			"Use shortcuts of Reeder.app",
			"chrisb86");
	}

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_HOTKEY_MAP, $this);
	}

	function hook_hotkey_map($hotkeys) {

    $hotkeys["n"]   = "next_feed";
    $hotkeys["p"]   = "prev_feed";
    $hotkeys["j"]   = "next_article_noscroll";
    $hotkeys["k"]   = "prev_article_noscroll";
    $hotkeys["f"]   = "search_dialog";
    $hotkeys["s"]   = "toggle_mark";
    $hotkeys["m"]   = "toggle_unread";
    $hotkeys["t"]   = "edit_tags";
    $hotkeys["v"]   = "open_in_new_window";
    $hotkeys["a"]   = "feed_catchup";

		return $hotkeys;
	}

	function api_version() {
		return 2;
	}

}
