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

    $hotkeys = array(
			"n" => "next_feed",
			"p" => "prev_feed",
			"j" => "next_article",
			"k" => "prev_article",
			"f" => "search_dialog",
			"s" => "toggle_mark",
			"m" => "toggle_unread",
			"t" => "edit_tags",
			"v" => "open_in_new_window",
      "a" => "feed_catchup",
		);


		return $hotkeys;
	}

	function api_version() {
		return 2;
	}

}
